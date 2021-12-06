---
layout: post
title: "Proposal: New Rank & Team Rank Calculation"
permalink: /news/new-rank-team-rank-calculation/
tag: current
---
Disclaimer: This proposal is only about the global (team) rank points calculation, not the normal points, which you get for each map finish, can request with `/points` ingame, and have no change planned.

The [old approach](https://ddnet.tw/ranks/#points) for calculating ranks and team ranks for the best times on a map is as follows:

<table class="points">
  <tbody><tr><td>1st place</td><td>25 points</td></tr>
  <tr><td>2nd place</td><td>18 points</td></tr>
  <tr><td>3rd place</td><td>15 points</td></tr>
  <tr><td>4th place</td><td>12 points</td></tr>
  <tr><td>5th place</td><td>10 points</td></tr>
  <tr><td>6th place</td><td>8 points</td></tr>
  <tr><td>7th place</td><td>6 points</td></tr>
  <tr><td>8th place</td><td>4 points</td></tr>
  <tr><td>9th place</td><td>2 points</td></tr>
  <tr><td>10th place</td><td>1 point</td></tr>
</tbody></table>

This approach has irked me for a while as not ideal, so I thought about some things that should be improved in it:

## Design Motivations

- Player with top time should still get something for improving their time
- Player in second place should get something for improving their time a bit, even if they don't manage to reach rank 1
- Still get points when there are many good ranks already on a popular map
- Many players with close time should get similar points
- Give some points also to worse players, don't just cutt off hard after 10 players
- Worst rank shouldn't affect the points you get (don't use average, use median instead)

## New approach

```
Top time (x=0): 100 points
Tenth best time: 10 points
Median time (x=1): 0 points
Inbetween (x between 0 and 1): Exponential decay: points(x) = floor(100 * e ^ (-λ * x))
  x = (rank - top) / (median - top)
  Calculate lambda based on tenth best time: λ = ln(10) / x
  points(rank) = floor(100 * e ^ (-50 * (rank - top) / (median - top)))
First rank bonus: X points for being X% faster than next best time
  floor(100 * (second / top - 1))
```

## Example Calculation for Map Depressed

To make it easier to see, let's just do an example calculation for the map [Depressed](https://ddnet.tw/maps/Depressed/), randomly chosen map with many ranks (2194 tees finished):

```
Top time:    01:55 = 115 s
Second time: 02:01 = 121 s
Tenth time:  02:30 = 150 s
Median time: 14:42 = 882 s

λ = ln(10) / ((150 - 115) / (882 - 115)) = 50

1st rank:
Basis: floor(100 * e ^ (-50 * (115 - 115) / (882 - 115))) = 100
Bonus: floor(100 * (121 / 115 - 1)) = 5
Total: 105 points

2nd rank:
Basis: floor(100 * e ^ (-50 * (121 - 115) / (882 - 115))) = 40
Total:  40 points

Median rank:
Basis: floor(100 * e ^ (-50 * (882 - 115) / (882 - 115))) = 0
Total:   0 points
```
<table class="tight">
  <tbody><th></th><th>Time</th><th>Old Points times 4 for comparison</th><th>New Points</th><th>Server</th><th>Team</th>
  <tr title="01:55.02, 2021-12-06 12:38"><td class="rank">1.</td><td class="time">01:55</td><td class="time">100</td><td class="time">105</td><td class="flag"><img src="/countryflags/GER.png" alt="GER" height="15"></td><td><a href="/players/Inner-32-peace/">Inner peace</a> &amp; <a href="/players/ecaep-32-rennI/">ecaep rennI</a></td></tr>
  <tr title="02:01.04, 2021-12-04 04:06"><td class="rank">2.</td><td class="time">02:01</td><td class="time">72</td><td class="time">67</td><td class="flag"><img src="/countryflags/FRA.png" alt="FRA" height="15"></td><td><a href="/players/-91-D-93--32-paradise/">[D] paradise</a> &amp; <a href="/players/paradise/">paradise</a></td></tr>
  <tr title="02:01.84, 2021-10-10 16:03"><td class="rank">3.</td><td class="time">02:01</td><td class="time">60</td><td class="time">67</td><td class="flag"><img src="/countryflags/GER.png" alt="GER" height="15"></td><td><a href="/players/bed/">bed</a> &amp; <a href="/players/qed/">qed</a></td></tr>
  <tr title="02:03.10, 2021-11-30 17:43"><td class="rank">4.</td><td class="time">02:03</td><td class="time">48</td><td class="time">59</td><td class="flag"><img src="/countryflags/GER.png" alt="GER" height="15"></td><td><a href="/players/paradise/">paradise</a> &amp; <a href="/players/qed/">qed</a></td></tr>
  <tr title="02:10.66, 2021-10-11 11:55"><td class="rank">5.</td><td class="time">02:10</td><td class="time">40</td><td class="time">37</td><td class="flag"><img src="/countryflags/RUS.png" alt="RUS" height="15"></td><td><a href="/players/Draci/">Draci</a> &amp; <a href="/players/Skadi/">Skadi</a></td></tr>
  <tr title="02:13.50, 2021-10-09 20:16"><td class="rank">6.</td><td class="time">02:13</td><td class="time">32</td><td class="time">30</td><td class="flag"><img src="/countryflags/BRA.png" alt="BRA" height="15"></td><td><a href="/players/TheJoker/">TheJoker</a> &amp; <a href="/players/-9775-M-1718--628-3-9775-/">☯Mڶɴ3☯</a></td></tr>
  <tr title="02:21.14, 2021-10-11 11:48"><td class="rank">7.</td><td class="time">02:21</td><td class="time">24</td><td class="time">18</td><td class="flag"><img src="/countryflags/GER.png" alt="GER" height="15"></td><td><a href="/players/-91-D-93--32-dope/">[D] dope</a> &amp; <a href="/players/dope/">dope</a></td></tr>
  <tr title="02:23.64, 2021-10-09 16:29"><td class="rank">8.</td><td class="time">02:23</td><td class="time">16</td><td class="time">16</td><td class="flag"><img src="/countryflags/FRA.png" alt="FRA" height="15"></td><td><a href="/players/V-233-Na/">VéNa</a> &amp; <a href="/players/V-233-NaGoD/">VéNaGoD</a></td></tr>
  <tr title="02:26.68, 2021-10-11 00:30"><td class="rank">9.</td><td class="time">02:26</td><td class="time">8</td><td class="time">13</td><td class="flag"><img src="/countryflags/CHL.png" alt="CHL" height="15"></td><td><a href="/players/Chyste/">Chyste</a> &amp; <a href="/players/fe-241-a-32-te-32-amoooo/">feña te amoooo</a></td></tr>
  <tr title="02:30.36, 2021-11-25 16:04"><td class="rank">10.</td><td class="time">02:30</td><td class="time">4</td><td class="time">10</td><td class="flag"><img src="/countryflags/SGP.png" alt="SGP" height="15"></td><td><a href="/players/-91-D-93--32-cheeser0613/">[D] cheeser0613</a> &amp; <a href="/players/cheeser0613/">cheeser0613</a></td></tr>
  <tr title="02:31.58, 2021-10-09 15:48"><td class="rank">11.</td><td class="time">02:31</td><td class="time">0</td><td class="time">9</td><td class="flag"><img src="/countryflags/FRA.png" alt="FRA" height="15"></td><td><a href="/players/M-216-tiv/">MØtiv</a> &amp; <a href="/players/obv-32-dummy/">obv dummy</a></td></tr>
  <tr title="02:33.48, 2021-10-11 09:39"><td class="rank">12.</td><td class="time">02:33</td><td class="time">0</td><td class="time">8</td><td class="flag"><img src="/countryflags/USA.png" alt="USA" height="15"></td><td><a href="/players/heebie/">heebie</a> &amp; <a href="/players/heebs/">heebs</a></td></tr>
  <tr title="02:36.04, 2021-10-11 11:41"><td class="rank">13.</td><td class="time">02:36</td><td class="time">0</td><td class="time">6</td><td class="flag"><img src="/countryflags/GER.png" alt="GER" height="15"></td><td><a href="/players/Large/">Large</a> &amp; <a href="/players/Nona/">Nona</a></td></tr>
  <tr title="02:36.44, 2021-11-24 16:23"><td class="rank">14.</td><td class="time">02:36</td><td class="time">0</td><td class="time">6</td><td class="flag"><img src="/countryflags/ZAF.png" alt="ZAF" height="15"></td><td><a href="/players/-40-1-41-Trill/">(1)Trill</a> &amp; <a href="/players/Trill/">Trill</a></td></tr>
  <tr title="02:37.90, 2021-10-09 18:35"><td class="rank">15.</td><td class="time">02:37</td><td class="time">0</td><td class="time">6</td><td class="flag"><img src="/countryflags/BRA.png" alt="BRA" height="15"></td><td><a href="/players/Ventti~/">Ventti~</a> &amp; <a href="/players/-91-D-93--32-Ventti~/">[D] Ventti~</a></td></tr>
  <tr title="02:39.04, 2021-12-04 01:06"><td class="rank">16.</td><td class="time">02:39</td><td class="time">0</td><td class="time">5</td><td class="flag"><img src="/countryflags/CHL.png" alt="CHL" height="15"></td><td><a href="/players/ioi/">ioi</a> &amp; <a href="/players/-46972--46972-/">라라</a></td></tr>
  <tr title="02:39.88, 2021-10-16 11:54"><td class="rank">17.</td><td class="time">02:39</td><td class="time">0</td><td class="time">5</td><td class="flag"><img src="/countryflags/GER.png" alt="GER" height="15"></td><td><a href="/players/Koksy/">Koksy</a> &amp; <a href="/players/-91-D-93--32-Koksy/">[D] Koksy</a></td></tr>
  <tr title="02:42.52, 2021-10-16 13:23"><td class="rank">18.</td><td class="time">02:42</td><td class="time">0</td><td class="time">4</td><td class="flag"><img src="/countryflags/CHN.png" alt="CHN" height="15"></td><td><a href="/players/NoRth/">NoRth</a> &amp; <a href="/players/-27498--27604--24052--21340-/">歪比巴卜</a></td></tr>
  <tr title="02:42.66, 2021-10-10 23:33"><td class="rank">19.</td><td class="time">02:42</td><td class="time">0</td><td class="time">4</td><td class="flag"><img src="/countryflags/RUS.png" alt="RUS" height="15"></td><td><a href="/players/Smetanolub/">Smetanolub</a> &amp; <a href="/players/kys/">kys</a></td></tr>
  <tr title="02:44.48, 2021-11-08 05:06"><td class="rank">20.</td><td class="time">02:44</td><td class="time">0</td><td class="time">4</td><td class="flag"><img src="/countryflags/GER.png" alt="GER" height="15"></td><td><a href="/players/Dikjohnson/">Dikjohnson</a> &amp; <a href="/players/GeRRie/">GeRRie</a></td></tr>
</tbody></table>

## Example Calculation for Map Luna

Another calculation for a map with few ranks (only 6 tees finished): [Luna](https://ddnet.tw/maps/Luna/):

```
Top time:    34:36 =  2076 s
Second time: 49:36 =  2976 s
Tenth time: 207:49 = 12469 s (doesn't exist, take last time)
Median time: 76:47 =  4007 s

λ = ln(10) / ((12469 - 2076) / (4007 - 2076)) = 0.43

1st rank:
Basis: floor(100 * e ^ (-0.43 * (2076 - 2076) / (4007 - 2076))) = 100
Bonus: floor(100 * (2976 / 2076 - 1)) = 43
Total: 143 points

2nd rank:
Basis: floor(100 * e ^ (-0.43 * (2976 - 2076) / (4007 - 2076))) = 81
Total:  81 points
```
<table class="tight">
  <tbody><th></th><th>Time</th><th>Old Points times 4 for comparison</th><th>New Points</th><th>Server</th><th>Rank</th>
  <tr title="34:36.74, 2021-12-01 00:37, 4 finishes total"><td class="rank">1.</td><td class="time">34:36.74</td><td class="time">100</td><td class="time">143</td><td class="flag"><img src="/countryflags/GER.png" alt="GER" height="15"></td><td><a href="/players/lost-32-monke/">lost monke</a></td></tr>
  <tr title="49:36.90, 2021-10-27 20:48, 1 finish total"><td class="rank">2.</td><td class="time">49:36.90</td><td class="time">72</td><td class="time">81</td><td class="flag"><img src="/countryflags/RUS.png" alt="RUS" height="15"></td><td><a href="/players/-91-Wu-93--42-GzA/">[Wu]*GzA</a></td></tr>
  <tr title="01:47:45.28, 2021-10-28 23:24, 1 finish total"><td class="rank">3.</td><td class="time">01:47:45.28</td><td class="time">60</td><td class="time">37</td><td class="flag"><img src="/countryflags/GER.png" alt="GER" height="15"></td><td><a href="/players/Knuski/">Knuski</a></td></tr>
  <tr title="02:26:48.00, 2021-11-01 01:55, 1 finish total"><td class="rank">4.</td><td class="time">02:26:48.00</td><td class="time">48</td><td class="time">22</td><td class="flag"><img src="/countryflags/GER.png" alt="GER" height="15"></td><td><a href="/players/RedFight/">RedFight</a></td></tr>
  <tr title="02:41:53.76, 2021-10-30 12:55, 1 finish total"><td class="rank">5.</td><td class="time">02:41:53.76</td><td class="time">40</td><td class="time">18</td><td class="flag"><img src="/countryflags/GER.png" alt="GER" height="15"></td><td><a href="/players/I-46-K-46-U/">I.K.U</a></td></tr>
  <tr title="03:27:49.30, 2021-10-28 17:28, 1 finish total"><td class="rank">6.</td><td class="time">03:27:49.30</td><td class="time">32</td><td class="time">10</td><td class="flag"><img src="/countryflags/FRA.png" alt="FRA" height="15"></td><td><a href="/players/Starkiller/">Starkiller</a></td></tr>
</tbody></table>

If you have any thoughts on this, feel free to discuss on [our Discord server](https://ddnet.tw/discord). If the general feedback is good, I'm planning to implement this change soon.
