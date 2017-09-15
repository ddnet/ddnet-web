---
layout: post
title: "DDNet Persian Abuse and Shutdown"
permalink: /news/ddnet-irn-abuse/
tag: current
---

On the [DDNet Discord chat](https://ddnet.tw/discord) we run a bot to show new map records. After it posted strange records, people became suspicious.

I tried to figure out why the bot was showing strange records, but could not find out:

    [3:36 AM] Konsti: what happened to ddnet bot :wut:
    [3:39 AM] Konsti: Shows wrong time
    [10:34 AM] deen: Not sure, can't reproduce the problem with records bot

Konsti on the other hand tried defending his ranks:

    [8:39 PM] RockuS: guys
    [8:39 PM] RockuS: isn't adrenaline 4 rank cheated?
    [9:07 PM] Konsti: Why
    [9:08 PM] Konsti: The bot just show wrong time

Tonight around 1 AM snail noticed further strange ranks while investigating the situation. As a consequence the DDNet admins Learath2, snail, HMH and heinrich5991 investigated the situation throughout the night. (I had no idea everyone was awake and busy while I was sleeping.) They discovered that Sajed, the person sponsoring the DDNet Persian server, was abusing his control of the server to manipulate ranks. See a small excerpt of his activity from the logs:

    INSERT INTO record_race (`Map`, `Name`, `Time`, `Server`) VALUES ('Aimlicious', 'Sajed', 312, 'IRN');
    update record_race set time = 0.1 where name ='An0ny' and Map = 'Naufrage 3';
    update record_race set time = 14378.1 where name ='Konsti' and Map = 'Naufrage 3';
    INSERT INTO record_race (Map, Name, Time, Server) VALUES ('Naufrage 3', 'An0ny', 0.1, 'GER');
    delete from record_race where name = 'An0ny' and map = 'Naufrage 3';
    INSERT INTO record_race (Map, Name, Time, Server) VALUES ('Adrenaline 4', 'Cendren', 2648, 'GER');

Some affected players like Konsti afterwards tried to hide their suspicious new ranks by finishing race maps many times and asking Sajed to increase the manipulated times to more realistic values.

As a consequence the Persian server has been shut down, the affected ranks have been removed and all passwords were reset.

(Update: I heard that the cheated ranks have in fact not been removed yet, but we will do that later.)

In hindsight it was a gamble to run the Persian server with a sponsor that we didn't know. Most of DDNet servers are hosted by me directly (DDNet.tw, GER, RUS, Chile, South Africa, USA). The remaining three servers are run by trustworthy people from the community: Brazil by [RafaelFF](https://github.com/rffontenelle), CHN by [ACTom](https://github.com/ACTom)), CAN by o\_be\_one from [r0x.fr](https://r0x.fr/).

In related news: Does anyone know a good VPS hoster in Iran?
