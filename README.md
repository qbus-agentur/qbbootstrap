qbbootstrap
===========

How to switch from gridlements to b13/container
-----------------------------------------------


1. Execute following SQL

```
alter table tt_content add column if not exists tx_container_parent int(11) DEFAULT '0' NOT NULL;
update tt_content set CType = REPLACE(tx_gridelements_backend_layout, '_', '-') where CType = 'gridelements_pi1' and tx_gridelements_backend_layout like 'qbbootstrap_%';

update tt_content A set colPos = 200 + tx_gridelements_columns, tx_container_parent = (select l18n_parent from tt_content where uid = A.tx_gridelements_container limit 1) where colPos = -1 and l18n_parent != 0 and tx_gridelements_container in (select uid from tt_content where CType like 'qbbootstrap-%');
update tt_content set colPos = 200 + tx_gridelements_columns, tx_container_parent = tx_gridelements_container where colPos = -1 and l18n_parent = 0 and tx_gridelements_container in (select uid from tt_content where CType like 'qbbootstrap-%');

-- Opinionated migration for qbbootstrap v1 compat
update tt_content set header_layout = 100, frame_class = 'none', sectionIndex = 0 where CType like 'qbbootstrap-%';
```

2. Uninstall EXT:gridelements
3. Install EXT:container
