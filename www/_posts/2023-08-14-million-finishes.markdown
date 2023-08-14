---
layout: post
title: "1 Million Finishes on Multeasymap"
permalink: /news/million-finishes/
tag: current
---

Multeasymap by [Cøke](/mappers/C-248-ke/), [Tridemy](/mappers/Tridemy/), [Welf](/mappers/Welf/) & [TPaul](/mappers/TPaul/) will soon be the first map with 1 million finishes!

```
MariaDB [teeworlds]> select record_maps.Server, record_race.Map, count(*), record_maps.timestamp
from record_race join record_maps on record_race.Map = record_maps.Map
group by record_race.Map order by count(*) desc limit 20;
+-----------+-----------------+----------+---------------------+
| Server    | Map             | count(*) | timestamp           |
+-----------+-----------------+----------+---------------------+
| Novice    | Multeasymap     |   997272 | 2020-09-20 00:09:00 |
| Novice    | Tutorial        |   905901 | 2022-02-27 14:54:00 |
| Novice    | Sunny Side Up   |   775311 | 2020-08-06 20:00:00 |
| Novice    | Kobra           |   600805 | 2014-01-19 19:43:00 |
| Novice    | LearnToPlay     |   437767 | 2020-01-03 15:00:00 |
| Novice    | 4Beginners      |   306107 | 2020-08-22 15:01:00 |
| Novice    | Just2Easy       |   299821 | 2015-02-23 17:43:00 |
| Novice    | Epix            |   287380 | 2014-12-22 17:36:00 |
| Novice    | Kobra 2         |   268702 | 2014-04-05 18:56:00 |
| Race      | run_g6          |   224059 | 2015-07-23 12:22:00 |
| Novice    | Kobra 4         |   193360 | 2015-08-02 19:59:00 |
| Novice    | StepByStep      |   187375 | 2015-12-08 18:20:00 |
| Novice    | Tsunami         |   174655 | 2020-08-18 19:01:00 |
| DDmaX.Nut | NUT_short_race6 |   162317 | 2016-03-11 18:24:00 |
| Novice    | Linear          |   159836 | 2020-10-10 15:00:00 |
| Race      | run_ankii       |   157997 | 2015-09-14 12:00:00 |
| Race      | run_blue        |   153518 | 2015-09-24 12:00:00 |
| Novice    | 4Nubs           |   144308 | 2015-06-16 13:54:00 |
| Novice    | Gold Mine       |   137480 | 2015-03-07 16:49:00 |
| Novice    | Tangerine       |   135862 | 2020-08-29 15:00:00 |
+-----------+-----------------+----------+---------------------+
20 rows in set (17.067 sec)
```

This is especially impressive since the map was released less than 3 years ago!

Who will get the 1 millionth finish? I'll update this post once the finishes are in.
