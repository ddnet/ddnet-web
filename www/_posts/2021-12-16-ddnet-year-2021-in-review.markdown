---
layout: post
title: "DDNet Year 2021 in Review"
head: <script src="/youtube.js?version=2" type="text/javascript"></script>
permalink: /news/ddnet-year-2021-in-review/
tag: current
---

We released DDNet [on Steam](https://store.steampowered.com/app/412220/DDraceNetwork/) in August 2020 and things have changed quite a bit since then. Here's some highlights of the year 2021:

<!--more-->

## Steam Ratings

Using the ratings data from Steam we appear to be on [#621 of all games](https://club.steam250.com/app/412220), [#60 of Free to Play games](https://steam250.com/tag/free_to_play), [#19 of 2D Platformers](https://steam250.com/tag/2d_platformer). It turns out that by combining a few categories on Steam you can quickly get down to only one game existing. DDNet is apparently the only Free to Play Online Co-Op 2D Precision-Platformer:

<img class="demo" src="/steamcategory.png" />

Our bad ratings seem to fall into two categories largely, which are both reasonable criticisms from my perspective:

- We don't have a tutorial, so starting is not easy for new players who don't have a tutor. Usually this rating comes from players with only a few hours played.
- The game is too addictive or a waste of time. This largely comes from players with hundreds or thousands of hours played.

## DoS Blog Post

Recently I posted an [article on my blog](https://hookrace.net/blog/dos-attacks-against-online-game/) about our problem with Denial of Service attacks. As a consequence some people reached out offering to help. Someone who claims to be a former FBI agent proposed how we could entrap the attackers. A small company gave us two large servers with DoS protection for free, but in the end we decided not to use them since we had some problems with the servers.

A large cloud company CEO even reached out personally offering to help, since we had the experience that their sales representatives were asking for thousands of dollars for adequate DoS protection. Since we are donation-funded this would be far outside of our reach.

## Skill Level

The skill levels of players has increased a lot, for example we have the new 2021 rank 1 for the map [Just Triple Fly](https://ddnet.org/maps/Just%20Triple%20Fly) on the frontpage currently:
<div class="video-container"><div class="ytplayer" data-id="ELE9iad_Pqo"></div></div>

The top times for this map improved significantly since the release in 2015:
```
2015: 17:39
2016: 05:48
2020: 04:54
2021: 02:23
```
Since players are using every single physics behaviour to get such top ranks, we have to keep supporting them. This means that old physics can only be deprecated and new ones be introduced for new maps, but old maps can't be changed. Otherwise the top ranks might not be beatable anymore, or might be easier to beat than before.

Our very dedicated player [Cor](https://ddnet.org/players/Cor/) [finished every single map](https://ddnet.tw/news/cor-finishes-ddnet/) on DDNet this year.

[rockuS](https://ddnet.org/players/rockuS) & [Brokecdx-](https://ddnet.tw/players/Brokecdx-45-/) managed to get top 1 team rank on every single [Novice map](https://ddnet.tw/ranks/novice/) this year!

## Popularity Rise in East Asia

The popularity of DDNet in East Asia exploded because of some streamers with lots of viewers. So I had to manually scale up the servers quickly.
You can check out the [Korean video by UZUHAMA](https://www.youtube.com/watch?v=kWhePmnWguM), at least [2](https://www.youtube.com/watch?v=G5b2KlZEhEw) Taiwanese [videos](https://www.youtube.com/watch?v=vxVo_XFRKTs&t=16s) by LunMeow Com, and [3 Chinese videos by 小白游戏指南](https://www.ixigua.com/6921922289684447758). With hundreds of thousands of viewers this also brought in many new players in these regions.

<div style="width: 49%; display: inline-block;"><div class="video-container"><div class="ytplayer" data-id="kWhePmnWguM"></div></div></div>
<div style="width: 49%; display: inline-block;"><div class="video-container"><div class="ytplayer" data-id="G5b2KlZEhEw"></div></div></div>

Watching these videos is super frustrating to me though, especially because we don't have a tutorial and the experience for new players is actually not that great.

We now have about 1200 players online average (+41% compared to one year ago), 14.000 daily active users (+40%) and a total of 11 million map finishes (+100%) by 492.000 players (+83%). So we can say that half of all finishes on DDNet were made this year, even though DDNet existed for 8 years already!

Check out this annotated [player-hours development](https://ddnet.org/stats/):

<img class="demo" src="/playersannotated.png" />

You can clearly see when the summer vacation and large Chinese holidays like Golden Week occur. The large purple line are our Chinese servers, and you can clearly see their increase in popularity. For the Korean and Taiwanese streams/videos you can also spot where I had to quickly turn new servers on for these locations to handle the incoming new players.

## Code & Development

[120 new maps](https://ddnet.org/releases) by 71 mappers have so far been released this year. So the community is still really vibrant and active. Huge thanks also to our [testers who tested all these maps](https://ddnet.tw/news/ddnet-community/)!

We have gotten some new developers this year, we shipped [6 major releases](https://ddnet.org/downloads) with a Release Candidate process to stabilize them before releasing them widely. The Release Candidates are always announced on [Discord](https://ddnet.tw/discord) and [GitHub](https://github.com/ddnet/ddnet/issues). Everyone is welcome to test and report issues.

By using the Address Sanitizer and Undefined Behaviour Sanitizer tools we managed to find and pinpoint many bugs in our server and client code. Those [tools](https://github.com/ddnet/ddnet/#using-addresssanitizer--undefinedbehavioursanitizer-or-valgrinds-memcheck) are vital for a programming language like C++.

DDNet client became part of the [Phoronix Test Suite](https://openbenchmarking.org/test/pts/ddnet), which is a Linux-oriented benchmarking suite. Thousands of test results have been uploaded, ranging from 100 FPS for low-range iGPUs to 4000 FPS for high-end dedicated GPUs. This allows us to track expected performance and even see how new developments like OpenGL-to-Vulkan translation layers like Zink [perform and develop](https://www.phoronix.com/scan.php?page=article&item=zink-sub-alloc&num=6).

I'm currently working on a [MySQL to Postgres database port](https://github.com/ddnet/ddnet/pull/4392) and in the process of this tried to refactor and unit-test the existing ranks code. This is especially important since losing ranks is the worst thing that can happen on DDNet's official servers.

I'm currently also working on [porting](https://github.com/ddnet/ddnet/pull/4455) DDNet to run natively on the new M1 Apple hardware. Cross-compiling is still causing problems, but the expected performance improvements bring my FPS from 800 (Rosetta Intel) to 1800 (Native ARM64).

The community has also been actively working on new stuff. [ChillerDragon](https://github.com/ChillerDragon/) is working on a command line based [ChillerBot-ng](https://github.com/chillerbot/chillerbot-ng) client with chat support that can be used for penetration testing servers. [Headshot2017](https://github.com/headshot2017/) created a new fun [TeeWare server modification](https://github.com/headshot2017/teeware-mod):

> TeeWare is a Teeworlds mod based on DDNet, inspired by the other mods TF2Ware and SRB2Ware, which are also inspired by the WarioWare game series by Nintendo.
> 
> Your goal is to be on top of the scoreboard by winning 20 rounds of fast-paced minigames that the game throws at you, which last 10 seconds or less. Halfway into the game at 10 rounds the game will speed up, and the speed will be reset to normal on the boss round. The boss minigames are more complex, and last an average between 30 seconds and 1 minute.
> 
> At the end, the player with the highest score wins, and will be given the ability to splat everyone on the lobby! A few seconds after this intermission, all player scores are reset to zero and the game loops once more.

A Chinese company is working on a [mobile phone DDNet-inspired game](https://www.taptap.com/app/211037), which they are building from scratch. They even hired [TsFreddie](https://github.com/TsFreddie) from our community as a lead developer! Yes, that's the same TsFreddie that's hosting most of the [Chinese DDNet servers](https://ddnet.org/funding/) for us, huge thanks for that!

There is now also a modern MediaWiki-based [DDNet Wiki](https://wiki.ddnet.org/wiki/Main_Page) where the community is collecting information about the game.

## Current Challenges

Half of DDNet's players are now Chinese, but they are quite separated from the rest of the community. Because of a [lack of English skill](https://docs.qq.com/doc/DWGFrV0xPRmVWVkla), Discord being blocked in China and foreigners being blocked in [Kaiheila, a Chinese Discord clone](https://www.kaiheila.cn/app/invite/pNXyP8) it is difficult to stay in touch. For moderation we have a bridge installed at least so that we can communicate with the Chinese moderators.

We had a problem with Denial of Service attacks against players. Every server hoster was able to find out the IP addresses of every player, since clients have to ping each server to load the Internet tab of the server browser. This has been fixed by using a decentralized [JSON-based server info](https://master1.ddnet.org/ddnet/15/servers.json). As a side-effect the server browser loads much faster on slow internet connections now.

We ran into a [JSON parser bug](https://github.com/ddnet/ddnet/issues/4202) with this exact feature on Debian, Ubuntu, Fedora and related distributions. The reason is that we patched our JSON library internally to be more convenient to use, but never brought these improvements upstream. Since our own releases are built with our version of the JSON library we never had any problem with those. But Linux distributions (for good reasons) prefer to use system libraries instead of bundled ones, and so this caused a failure in loading the server informations.

The new `/swap` feature has been a source of a myriad of bugs. Players in DDNet are the best testers since they are motivated to find cheats to get faster times. Unfortunately they don't disclose those bugs responsibly often. We had to turn off swapping feature many times (luckily we added a feature toggle), and today are finally [enabling it again](https://github.com/ddnet/ddnet/pull/4443). Hopefully with no remaining bugs.

To find those cheats we are archiving all player inputs (no chat and IP addresses though) using Teehistorian. The archive of all official DDNet gameplays in a compressed state has now reached 3 TB, which is 50% more than a year ago.

## Some Updated Statistics

If you want to read about older DDNet history also check out this [forum post from 2015](https://forum.ddnet.org/viewtopic.php?t=1824). I have updated some of the statistics here:

Oldest top ranks still standing:
```
MariaDB [teeworlds]> SELECT r1s.map, name, timestamp, time FROM record_race AS ranks INNER JOIN (SELECT map, MIN(time) AS mintime FROM record_race GROUP BY map) AS r1s ON ranks.map = r1s.map AND ranks.time = r1s.mintime ORDER BY timestamp LIMIT 20;
+---------------------+----------------+---------------------+---------+
| map                 | name           | timestamp           | time    |
+---------------------+----------------+---------------------+---------+
| Difficult 1.3       | !_Vergeboy_!   | 2013-10-08 17:55:04 |   738.3 |
| Difficult 1.3       | aaa            | 2013-10-08 17:55:04 |   738.3 |
| The Cursed Night    | (1)Ninja_Valik | 2014-04-09 20:55:25 | 2376.06 |
| The Cursed Night    | Ninja_Valik    | 2014-04-09 20:55:25 | 2376.06 |
| Orange 1            | artkis         | 2014-07-21 04:24:12 |  109.06 |
| leopold             | Gridwyn        | 2014-12-13 13:17:14 |  128.18 |
| NUT Hardcore UNITED | FarinDoc       | 2015-04-20 01:41:32 |  1935.6 |
| NUT Hardcore UNITED | Obst           | 2015-04-20 01:41:32 |  1935.6 |
| NUT Hardcore UNITED | cris           | 2015-04-20 01:41:32 |  1935.6 |
| NUT Hardcore UNITED | walter         | 2015-04-20 01:41:32 |  1935.6 |
| Killstreak 1        | levi           | 2015-06-23 00:44:42 |    50.5 |
| Adrenaline 3        | Cireme         | 2015-07-30 06:05:44 | 2289.46 |
| Adrenaline 3        | aaa            | 2015-07-30 06:05:44 | 2289.46 |
| Eternal             | Habibi57       | 2015-09-04 00:08:40 |   592.8 |
| Eternal             | Novo c:        | 2015-09-04 00:08:40 |   592.8 |
| Xabier              | <BµmM>         | 2015-09-06 00:40:05 |  398.62 |
| Xabier              | hi_leute_gll   | 2015-09-06 00:40:05 |  398.62 |
| The Way to the Hell | Lexin          | 2015-12-05 03:14:25 |  774.38 |
| The Way to the Hell | Ysu            | 2015-12-05 03:14:25 |  774.38 |
| Amor 2              | Amor           | 2015-12-20 01:22:55 |  608.78 |
+---------------------+----------------+---------------------+---------+
20 rows in set (10.008 sec)
```

Players most addicted to a specific map:
```
MariaDB [teeworlds]> select record_race.Map, Name, count(*) as Finishes from record_race inner join record_maps on record_race.Map = record_maps.Map and record_maps.Server != "Race" and record_maps.Server != "Solo" and record_race.Name != "nameless tee" and record_race.Name != "brainless tee" and record_maps.Map not like "%short%" group by Map, Name order by Finishes desc limit 20;
+---------------+-----------------+----------+
| Map           | Name            | Finishes |
+---------------+-----------------+----------+
| Multeasymap   | vento123        |     1208 |
| Multeasymap   | JaaJ            |      807 |
| Multeasymap   | EzeJe           |      693 |
| Multeasymap   | Spike_666       |      658 |
| Sunny Side Up | Catalin         |      603 |
| Sunny Side Up | clownpiece      |      578 |
| Multeasymap   | MARS FACE       |      484 |
| Multeasymap   | fla_flou        |      457 |
| Multeasymap   | Steroid Stewie  |      396 |
| Multeasymap   | Mitsch          |      393 |
| Multeasymap   | Angelofsicness  |      391 |
| Multeasymap   | (1)nameless tee |      380 |
| DontMove      | 嘻嘻            |      378 |
| Just2Easy     | (1)             |      369 |
| Multeasymap   | TickTack        |      364 |
| Multeasymap   | Kittiii         |      360 |
| Multeasymap   | Careloco117     |      357 |
| Multeasymap   | Gabe McKraken   |      345 |
| Multeasymap   | deltaTime       |      338 |
| Multeasymap   | Lucas           |      336 |
+---------------+-----------------+----------+
20 rows in set (4 min 30.680 sec)
```

Longest ranks:
```
MariaDB [teeworlds]> select Map, Name, max(Time) / 3600 / 24 as "Time (in days)" from record_race where Map != "Time Shop" and Map != "Care for your Time" and Map != "Puzzle Partners" and Map != "Avoid" group by Map order by max(Time) desc limit 20;
+----------------+----------------+--------------------+
| Map            | Name           | Time (in days)     |
+----------------+----------------+--------------------+
| Multeasymap    | !              |  5.979169560185185 |
| Kobra          | !              |  4.166667028356481 |
| Sunny Side Up  | !              | 3.0001924189814813 |
| Deadline 1     | #!D!rtyMonk~>  | 2.9732646122685185 |
| run_guy_25     | !              | 2.7308723958333334 |
| Purple Panic   | !              | 2.0099415870949073 |
| Planet Mars    | !!!            | 1.7210848885995371 |
| Binary         | (1)KynɨʟɨӼ     | 1.6669551142939814 |
| Nightmare      | (1)DickHead    | 1.6141992187499998 |
| Kobra 2        | !              |  1.471479130497685 |
| Construction I | !@pFeL!        |  1.305123878761574 |
| Patchwork      | 'faceless      |  1.297791431568287 |
| Ravillion      | !              | 1.2606562861689816 |
| Limitless      | 'Schwi♫        | 1.2550847258391202 |
| Epix           | !              | 1.1529004810474537 |
| Impel Down     | (1)TyшkaNчuk   |  1.151001880787037 |
| luminati       | !FasT$         | 1.1455877459490742 |
| Not Naufrage 4 | .:Danytto:.    | 1.1318419053819444 |
| Arcade 2       | #!D!rtyMonk~>  | 1.1293321397569445 |
| Kobra 4        | !              | 1.1189333767361112 |
+----------------+----------------+--------------------+
20 rows in set (17.879 sec)
```
Most addicted to DDNet:
```
MariaDB [teeworlds]> select Name, sum(Time) / 3600 / 24 as "Time spent in all ranks (in days)" from record_race where Map != "Time Shop" and Map != "Care for your Time" and Map != "Puzzle Partners" and Map != "Flappy Bird" and Map != "Avoid" group by Name order by sum(Time) desc limit 20;
+----------------+-----------------------------------+
| Name           | Time spent in all ranks (in days) |
+----------------+-----------------------------------+
| nameless tee   |                396.80172629974555 |
| brainless tee  |                 363.0221170298755 |
| (1)            |                131.44013152014665 |
| .              |                 92.26127706237719 |
| Deathman       |                 84.02118202235084 |
| NovaShock      |                 80.54493653676852 |
| Esckiller      |                 74.43580347107793 |
| Starkiller     |                 73.50538472452374 |
| Soapy Sandwich |                 72.51343406903588 |
| tinky          |                 68.59746930364192 |
| Freezestyler   |                 67.62215528798707 |
| Colo-Colo      |                 67.46807493708222 |
| <BµmM>         |                 66.98610506203461 |
| Grk0ne         |                 63.95829925018626 |
| Skeith         |                 60.75487943072562 |
| HaHAxD*        |                 60.46992263270878 |
| bano           |                 59.61870575764842 |
| Cøke           |                59.553821431975116 |
| Cola Dose      |                 56.27299608301785 |
| Cor            |                 56.12025486932584 |
+----------------+-----------------------------------+
20 rows in set (3 min 6.031 sec)
```

Most time spent on maps:
```
MariaDB [teeworlds]> select record_race.Map, sum(Time)/(3600*24*365) as Years, record_maps.Timestamp as "Map Release Date" from record_race inner join record_maps on record_race.Map = record_maps.Map and record_maps.Map != "Flappy Bird" and record_maps.Map != "Time Shop" and record_maps.Map != "Care for your Time" and record_maps.Map != "Puzzle Partners" and record_maps.Map != "Avoid" group by Map order by Years desc limit 20;
+----------------+--------------------+---------------------+
| Map            | Years              | Map Release Date    |
+----------------+--------------------+---------------------+
| Multeasymap    | 30.701681553776286 | 2020-09-20 00:09:00 |
| Kobra          | 29.757993722866296 | 2014-01-19 19:43:00 |
| Kobra 2        | 13.331694005769743 | 2014-04-05 18:56:00 |
| LearnToPlay    | 13.096612024798846 | 2020-01-03 15:00:00 |
| Kobra 4        | 10.581817319779999 | 2015-08-02 19:59:00 |
| Epix           | 10.479657886753827 | 2014-12-22 17:36:00 |
| Multimap       |  8.206282291054302 | 2014-11-02 10:16:00 |
| Sunny Side Up  |  6.843051391302783 | 2020-08-06 20:00:00 |
| Kobra 3        |  5.149915728102113 | 2014-09-28 19:44:00 |
| Just2Easy      |  4.073574257028823 | 2015-02-23 17:43:00 |
| Absurd 4       |  3.307934615270188 | 2014-08-27 19:12:00 |
| Sincera 2      |  3.205907567015038 | 2021-02-20 15:01:00 |
| Light Grey     | 3.1169564432456736 | 2014-05-14 16:28:00 |
| Seasons        | 2.9352046333779422 | 2015-08-27 17:24:00 |
| Sunny Land     | 2.7436703179028963 | 2015-05-19 12:31:00 |
| Planet Mercury |  2.606042209836204 | 2015-09-10 19:24:00 |
| Dark Moon      | 2.5346656167878527 | 2015-05-18 12:46:00 |
| ZeroX          |  2.534129957247482 | 2015-03-25 18:05:00 |
| Icebreaker     | 2.4930437091128708 | 2014-08-09 02:12:00 |
| CandyLand      |  2.448194580716811 | 2016-04-12 18:10:00 |
+----------------+--------------------+---------------------+
20 rows in set (13.007 sec)
```
