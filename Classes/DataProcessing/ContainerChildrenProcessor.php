<?php

declare(strict_types=1);

namespace Qbus\Qbbootstrap\DataProcessing;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Query\Restriction\FrontendRestrictionContainer;
use TYPO3\CMS\Core\Domain\Repository\PageRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

class ContainerChildrenProcessor implements DataProcessorInterface
{
    /**
     * @param ContentObjectRenderer $cObj The data of the content element or page
     * @param array $contentObjectConfiguration The configuration of Content Object
     * @param array $processorConfiguration The configuration of this processor
     * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
     * @return array the processed data as key/value store
     */
    public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    ): array {
        if (!isset($processedData['data']['tx_container_parent'])) {
            return $processedData;
        }

        $parent = (int)$processedData['data']['tx_container_parent'];

        $ctypes = $cObj->stdWrapValue('hideHeadersFor', $processorConfiguration, '');
        $ctypes = GeneralUtility::trimExplode(',', $ctypes, true);

        $table = 'tt_content';
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable($table);
        $queryBuilder->setRestrictions(GeneralUtility::makeInstance(FrontendRestrictionContainer::class));

        $whereConditions = [];

        $whereConditions[] = $queryBuilder->expr()->eq('uid', $queryBuilder->createNamedParameter($parent, \PDO::PARAM_INT));

        // Disabled: Doesn't work for copy-mode relations where parent-element is sys_language_uid > 0
        //$languageField = $GLOBALS['TCA'][$table]['ctrl']['languageField'] ?? null;
        //if ($languageField !== null) {
        //    $whereConditions[] = $queryBuilder->expr()->in('sys_language_uid', $queryBuilder->createNamedParameter([0, -1], Connection::PARAM_INT_ARRAY));
        //}

        // test if this would be safe in case of language or workspace overlays, probably not if CType is changed
        //$whereConditions[] = $queryBuilder->expr()->in('CType', $queryBuilder->createNamedParameter($ctypes, \PDO::PARAM_STR_ARRAY));

        $queryBuilder
            ->select('uid', 'CType')
            ->from($table)
            ->where(
                $queryBuilder->expr()->and(...$whereConditions)
            )
            ->setMaxResults(1);

        $row = $queryBuilder->executeQuery()->fetchAssociative();
        if ($row) {
            $pageRepository = GeneralUtility::makeInstance(PageRepository::class);
            $row = $pageRepository->getLanguageOverlay($table, $row);

            if (in_array($row['CType'], $ctypes, true)) {
                $processedData['data']['header_layout'] = '100';
            }
        }

        return $processedData;
    }
}
