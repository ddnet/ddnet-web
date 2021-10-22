---
layout: post
title: "/swap cheat"
permalink: /news/swap-cheat/
tag: current
---

The new `/swap` feature allows two players in a team to swap their position. It had a bug that kept a player hooked when they were swapped. This allowed skipping parts on many maps:

<video class="fullvideo" controls>
  <source src="/swap_cheat.mp4" type="video/mp4">
</video>

Thanks to murpi for the video demonstration.

As a reaction we have temporarily disabled the swap feature by making it time out instantly. Once [this bug](https://github.com/ddnet/ddnet/issues/3766) is fixed `/swap` can be reenabled.

We were only notified of this problem after it had been abused already. Using teehistorian and with the help of Learath2 and murpi we determined a list of suspicious ranks and then checked them manually. The following team ranks were cheated using the `/swap` hook bug and have now been removed:

```
Fiasko:
1. Blurry, Cireme, Fluday & =Pipou=

Destiny 1:
1. Blurry, Cireme, Fluday & =Pipou=
2. simple & HaHAxD*

Destiny 2:
1. Blurry, Cireme, Fluday & =Pipou=

Arctic Frost:
5. Blurry, Cireme, DarkOort, Fluday & Neben

Springlobe 3:
17. Avasus, Bubble Gum, DarkOort, Eratyck, Fluday & saucisse
```

In the future please report such bugs to an admin on Discord privately, so that we can take steps to quickly mitigate and solve the issue, without causing further harm and without having to delete ranks.
