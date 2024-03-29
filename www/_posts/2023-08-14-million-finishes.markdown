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
Check it out yourself on [ddstats](https://db.ddstats.org/ddnet-a1a1247?sql=select+maps.Server%2C+race.Map%2C+count%28*%29%2C+maps.timestamp%0D%0Afrom+race+join+maps+on+race.Map+%3D+maps.Map%0D%0Agroup+by+race.Map+order+by+count%28*%29+desc+limit+20%3B).

This is especially impressive since the map was released less than 3 years ago!

Who will get the 1 millionth finish? I'll update this post once the finishes are in.

Edit: Congrats to [Quit](/players/Quit), [nouis](/players/nouis)) & [deenouis](/players/deenouis) for getting the 1 millionth finish on Multeasymap!
```
MariaDB [teeworlds]> select Name, Time, Server, Timestamp, rank() over (order by Timestamp asc) as "x-th Finish" from record_race where Map = "Multeasymap" limit 11 offset 999996;
+----------+---------+--------+---------------------+-------------+
| Name     | Time    | Server | Timestamp           | x-th Finish |
+----------+---------+--------+---------------------+-------------+
| deenouis |   971.9 | GER    | 2023-08-17 18:46:18 |      999997 |
| nouis    |   971.9 | GER    | 2023-08-17 18:46:18 |      999997 |
| Quit     | 1206.62 | RUS    | 2023-08-17 18:46:20 |      999999 |
| deenouis |   809.5 | GER    | 2023-08-17 18:46:20 |      999999 |
| nouis    |   809.5 | GER    | 2023-08-17 18:46:20 |      999999 |
| deenouis |  784.44 | GER    | 2023-08-17 18:46:22 |     1000002 |
| nouis    |  784.44 | GER    | 2023-08-17 18:46:22 |     1000002 |
| deenouis |  751.72 | GER    | 2023-08-17 18:46:23 |     1000004 |
| nouis    |  751.72 | GER    | 2023-08-17 18:46:23 |     1000004 |
| Yumiko   |  639.44 | GER    | 2023-08-17 18:46:29 |     1000006 |
| bencie   |  639.44 | GER    | 2023-08-17 18:46:29 |     1000006 |
+----------+---------+--------+---------------------+-------------+
11 rows in set (2.140 sec)
```
