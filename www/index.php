---
layout: default
title: DDraceNetwork
menu: |
  <ul>
    <li><a href="/#news">News</a></li>
    <li><a href="/server/">Server&nbsp;Features</a></li>
    <li><a href="/client/">Client&nbsp;Features</a></li>
    <li><a href="/map/">Map&nbsp;Features</a></li>
    <li><a href="/rules/">Mapper&nbsp;Rules</a></li>
    <li><a href="/howto/">How&nbsp;to&nbsp;Map</a></li>
    <li><a href="/binds/">Useful&nbsp;Binds</a></li>
    <li><a href="/settingscommands/">Settings&nbsp;&amp;&nbsp;Commands</a></li>
    <li><a href="/staff/">Staff&nbsp;&amp;&nbsp;Contact</a></li>
    <li><a href="/downloads/">Downloads</a></li>
  </ul>
---
<div class="block">
<h2>DDRace Servers and much more!</h2>
<p>
DDraceNetwork is a special version of DDRace, a <a href="https://www.teeworlds.com/">Teeworlds</a> modification. Help each other finish races with up to 64 players, compete against the best in <a href="/tournament/">international tournaments</a>, design your <a href="/howto/">own maps</a>, or run your <a href="/settingscommands/">own server</a>. The <a href="/status/">official servers</a> are located in Germany, USA, Russia, Iran, China, Chile and South Africa. All <a href="/ranks/">ranks</a> made on official servers are available everywhere and you can collect points!
</p>
<div class="startvideo"><div class="video-container"><iframe class="ytplayer" src="http://www.youtube.com/embed/WQ17c5gh7bs?autoplay=0&hd=1"></iframe></div></div>
<div class="startimages"><img class="demo" alt="Demo" src="lasers.png"/></div>
-<div class="startimages"><img class="demo" alt="Demo" src="full.png"/></div>
<!--<object id="live_embed_player_flash" width="800" height="450" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" bgcolor="#000000"><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="allowNetworking" value="all" /><param name="flashvars" value="hostname=de.twitch.tv&amp;channel=Hallowed1986&amp;auto_play=true&amp;start_volume=25" /><param name="src" value="http://de.twitch.tv/widgets/live_embed_player.swf?channel=Hallowed1986" /><embed id="live_embed_player_flash" width="800" height="450" type="application/x-shockwave-flash" src="http://de.twitch.tv/widgets/live_embed_player.swf?channel=Hallowed1986" allowFullScreen="true" allowScriptAccess="always" allowNetworking="all" flashvars="hostname=de.twitch.tv&amp;channel=Hallowed1986&amp;auto_play=true&amp;start_volume=25" bgcolor="#000000" /></object><iframe frameborder="0" scrolling="no" id="chat_embed" src="http://twitch.tv/chat/embed?channel=Hallowed1986&#038;popout_chat=true" height="450" width="300"></iframe>-->
<br/>
<div class="download"><img class="download-button" src="download.svg"/>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

function getOS() {
  global $user_agent;
  $os_platform = "unk";

  if (preg_match('/android/i', $user_agent))
    $os_platform = 'and';
  elseif (preg_match('/windows/i', $user_agent))
    $os_platform = 'win';
  elseif (preg_match('/linux.*x86_64/i', $user_agent))
    $os_platform = 'lin64';
  elseif (preg_match('/linux.*i686/i', $user_agent))
    $os_platform = 'lin32';
  elseif (preg_match('/macintosh|mac os/i', $user_agent))
    $os_platform = 'mac';

  return $os_platform;
}

$user_os = getOS();
$version = '4.6.3';

if ($user_os == 'win') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-win32.zip">Download DDraceNetwork Client &amp; Server ' . $version . ' for Windows</a></span><br/><a href="/downloads/">Other systems and versions</a></p>';
} elseif ($user_os == 'mac') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-osx.dmg">Download DDraceNetwork Client &amp; Server ' . $version . ' for Mac OS X</a></span><br/><a href="/downloads/">Other systems and versions</a></p>';
} elseif ($user_os == 'lin32') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-linux_x86.tar.gz">Download DDraceNetwork Client &amp; Server ' . $version . ' for Linux x86</a></span><br/><a href="/downloads/">Other systems and versions</a></p>';
} elseif ($user_os == 'lin64') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-linux_x86_64.tar.gz">Download DDraceNetwork Client &amp; Server ' . $version . ' for Linux x86_64</a></span><br/><a href="/downloads/">Other systems and versions</a></p>';
} elseif ($user_os == 'and') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '.apk">Download DDraceNetwork Client ' . $version . ' for Android</a></span><br/><a href="/downloads/">Other systems and versions</a></p>';
} else {
  print '<p class="download"><span class="big"><a href="/downloads/">Download DDraceNetwork Client &amp; Server ' . $version . '</a></span></p>';
}
?>
</div>
</div>
<div class="block">
<h2 id="news">News</h2>
<ul>
  <li><strong><a href="http://forum.ddnet.tw/viewtopic.php?f=3&p=2170">Quick Tournament #18: Moderate: Neverwhere by Bixes &amp; Themix</a></strong> on Sunday, August 10 at 19:00 CEST:<br/>
    <img class="demo" src="neverwhere.png"/></li>
  <li><strong><a href="/tournament/23/">Quick Tournament #17: Brutal</a></strong> on Sunday, August 3 at 20:00 CEST</li>
  <li><strong>DDNet 4.6.3</strong>:<br/>
  <ul>
    <li>[Client] Case insensitive player sort</li>
    <li>[Client] Removed buggy speedup prediction</li>
    <li>[Server] Bugs in /save fixed</li>
    <li>[Server] Message about joining team 0 after you finish in team</li>
  </ul>
  <li><strong>DDNet 4.6</strong>:<br/>
  <ul>
    <li>[Server] Save a game in team using /save password (by HMH)</li>
    <li>[Client] Fix some default binds (pageup, pagedown)</li>
    <li>[Client] Prevent dummy from reconnecting too often</li>
    <li>[Blocker] Disable rejoin to team 0 after finish</li>
    <li>[Blocker] Add freeze hammer</li>
    <li>and many more fixes</li>
  </ul>
  <li><a href="https://ddnet.spreadshirt.net/">Get a DDNet T-Shirt</a></li>
  <li><strong>Watch <a href="http://www.twitch.tv/Hallowed1986">Hallowed1986's livestream</a> of the Tournament on Sunday at 20:00</strong> (in German)</li>
  <li><strong><a href="http://forum.ddnet.tw/viewtopic.php?f=3&t=219">Birthday Tournament</a></strong> with 120 € to win:
    <ul>
      <li>Solo map <strong>Chill Let's Climb 2</strong> by Chill [TD] on <strong>Friday, July 18 at 20:00 CEST</strong></li>
      <li>Novice map <strong>Planet Venus</strong> by Aoe &amp; Knight :3 on <strong>July 20 at 20:00 CEST</strong></li>
    </ul></li>
  <li><strong>DDNet 4.5</strong>:<br/>
  <ul>
    <li>[Mapping] A new DDNet start line (ddnet-start.png)</li>
    <li>[Mapping] See in editor which images are used and which not</li>
    <li>[Client] Added editor button, Cleanup of some menus, Ask before disconnect</li>
    <li>[Client] Feature: Add cl_dummy_resetonswitch to reset dummy keys</li>
    <li>[Client] Feature: Lots of color customization (by CookieMichal)</li>
    <li>[Client] Major skin cleanup</li>
    <li>[Client] Fix a few hangs</li>
    <li>[Server] Players join team 0 after finishing in team (without /lock)</li>
  </ul>
  <li>DDNet's planned successor <a href="http://hookrace.net/">HookRace</a> got a development blog</li>
  <li><strong><a href="/tournament/22/">Quick Tournament #16: Moderate</a></strong> on Sunday, July 6 at 20:00 CEST (We had <a href="/over400.png">over 400</a> players on DDNet for the first time!)</li>
  <li><strong>1 Year DDraceNetwork!</strong><br/>
    DDraceNetwork will celebrate its first birthday on July 19 and 20 by holding a tournament with two maps. For the first time there will be prizes to be won. If you want to help, you can donate via PayPal:<br/>
    <table>
    <tr>
    <td><strong>2 donations so far. Current prize money: 116.31€</strong></td>
    <td><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="7WT2PXW6V2C3C">
      <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
      <img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
    </form></td>
    </tr>
    </table>
    PayPal has high fees for donations, so if you want to donate without losing 4% to PayPal, send me a mail at <a href="mailto:deen@ddnet.tw">deen@ddnet.tw</a> and I'll give you my bank information. All donations will entirely go to the winners. Depending on how much prize money we get, we will decide how to split it and whether to host a third map! If you like some statistics, these were the first finishes on DDNet:
    <table>
    <tr><th>Date</th><th>Map</th><th>Player</th><th>Time</th></tr>
    <tr><td>2013-07-18 03:38</td><td>Rainbow Sunrise</td><td>.me'</td><td>72:01</td></tr>
    <tr><td>2013-07-18 03:38</td><td>Rainbow Sunrise</td><td>Rigmu</td><td>74:36</td></tr>
    <tr><td>2013-07-18 17:05</td><td>Challenge</td><td>.me'</td><td>23:38</td></tr>
    <tr><td>2013-07-18 17:05</td><td>Challenge</td><td>deen</td><td>23:32</td></tr>
    <tr><td>2013-07-21 23:21</td><td>[SI] SELEN</td><td>Megaman | Cold</td><td>09:21</td></tr>
    <tr><td>2013-07-21 23:21</td><td>[SI] SELEN</td><td>Hitomi</td><td>09:19</td></tr>
    <tr><td>2013-07-21 23:35</td><td>[SI] KABOO</td><td>phacrum</td><td>12:18</td></tr>
    <tr><td>2013-07-21 23:36</td><td>[SI] KABOO</td><td>Megaman | Cold</td><td>08:29</td></tr>
    <tr><td>2013-07-21 23:36</td><td>[SI] KABOO</td><td>Hitomi</td><td>14:48</td></tr>
    <tr><td>2013-07-21 23:36</td><td>[SI] KABOO</td><td>potsnacew</td><td>09:01</td></tr>
    </table>
    In the last 12 months DDNet got <strong>522 maps</strong>. By then <strong>154238 ranks</strong> were made, an average of <strong>295 ranks per map</strong> with an average time of <strong>19 minutes per map</strong> (excluding Flappy Bird). These ranks took a total of <strong>6 man-years</strong> (and that's without all the times where players don't finish!). About <strong>1200 people</strong> use DDNet client every day. At a good time <strong>350 players</strong> are online on DDNet at the same time. There are about <strong>2600 players on GER server</strong> every day, <strong>1300 in Chile</strong>, <strong>650 in South Africa</strong>, <strong>500 in Russia</strong>, <strong>350 in USA</strong> and <strong>150 in China</strong>. (DDNet and Blocker only)
    <br/>
    Thanks to everyone who helped build DDNet during this first year and all the players who found their ways on our servers. Special thanks to:<br/>
    <ul>
      <li>Lady Saavik for testing and fixing maps the entire time,</li>
      <li>Broken for financing the USA server for 8 months now,</li>
      <li>and all the testers and mappers, without which this would have been impossible.</li>
    </ul></li>
  <li><strong><a href="/tournament/21/">Quick Tournament #15: Brutal</a></strong> on Saturday, June 28 at 20:00 CEST</li>
  <li><strong>DDNet 4.4</strong>:<br/>
  <ul>
    <li>[Client] Feature: Auto-Reconnect (by CookieMichal)</li>
    <li>[Mapping] Add some Teeworlds 0.7 mapres</li>
    <li>[Server] Feature: Show who locked and unlocked a team</li>
    <li>[Server] Fix: Walljump works properly</li>
  </ul>
  <li><strong>DDNet 4.3</strong>:<br/>
  <ul>
    <li>[Mapping] Feature: Wall jump tiles (put it next to wall):<br/>
    <video class="fullvideo" controls>
      <source src="/map/walljump.mp4" type="video/mp4">
      <source src="/map/walljump.ogg" type="video/ogg">
    </video></li>
    <li>[Client] Feature: CPU throttle in Settings → General</li>
    <li>[Server] Feature: Vote a random map you haven't finished yet</li>
    <li>[Server] Fix: Don't show draggers of players in solo part</li>
    <li>[Server] Fix: You can keep pistol when going through armor entities</li>
  </ul>
  <li><strong><a href="/tournament/20/">Quick Tournament #14: Novice</a></strong> on Sunday, June 22 at 20:00 CEST</li>
  <li><a href="/downloads/DDNet-4.4.apk">Android version</a> of DDraceNetwork Client released (mainly for spectating and chatting; thanks to Pelya for porting Teeworlds to Android)</li>
  <li><strong><a href="/tournament/19/">Brutal Tournament: Naufrage 2</a></strong> on Saturday, June 14 at 20:00 CEST</li>
  <li><strong>DDNet 4.2</strong>:<br/>
  <ul>
    <li>[Client] Fix: Don't crash when standing on start line and connecting dummy</li>
    <li>[Editor] Fix: Shifting front layer works</li>
    <li>[Editor] Fix: Allow adding more than 33 images</li>
    <li>[Editor] Fix: Show all images, no matter how many</li>
    <li>[Server] Feature: undeep, unsolo on test server</li>
  </ul>
  <li><strong><a href="/tournament/18/">Quick Tournament #12: Moderate (1 star)</a></strong> on Saturday, June 7 at 20:00 CEST</li>
  <li><strong>DDNet 4.1</strong>:<br/>
  <ul>
    <li>Feature: News in client</li>
    <li>Fix: News in correct directory</li>
    <li>Fix: Jetpack tuning works with tunezones</li>
    <li>Fix: Dummy can see 64 players on non-DDNet servers</li>
    <li>Fix: Don't crash when standing on start line and connecting dummy</li>
  </ul>
  <li><strong>DDNet 3.9.6</strong>:<br/>
  <ul>
    <li>Feature: Set how far to shift a layer in editor</lI>
    <li>Feature: Server works on older Linux systems</li>
  </ul>
  <li>New servers in South Africa thanks to <a href="/players/goo/">goo</a>, <a href="/players/lordtheuns/">lordtheuns</a>, <a href="/players/Lexy/">Lexy</a>! All DDNet locations now:<br/>
    <img class="demo" src="/locations.png" /></li>
  <li><strong><a href="/tournament/17/">Quick Tournament #11: Brutal Solo Jetpack</a></strong> on Sunday, May 25 at 19:00 CEST</li>
  <li>How to hookfly with dummy: Hold the keys for hook and run and switch. Use hammerfly toggle key to make your dummy hook and stop hooking:<br/>
    <video class="fullvideo" controls>
      <source src="/client/dummyhookfly.mp4" type="video/mp4">
      <source src="/client/dummyhookfly.ogg" type="video/ogg">
    </video></li>
  <li>Persian server is back</li>
  <li><strong>After a disk failure German server is back</strong><br/>The records and forum entries from 2014-05-15 were unfortunately lost<br/><strong>Update: Records have been restored</strong></li>
  <li>New Chilean server</li>
  <li><strong>DDNet 3.9</strong>:<br/>
  <ul>
    <li>Feature: Autoupdater asks before updating</li>
    <li>Feature: Autoupdater doesn't hang when server is unreachable</li>
    <li>Feature: Show in editor if tele or switch number are used already</li>
    <li>Feature: Choose person to spectate before spectating (spectate -1; say /pause)</li>
    <li>Fix: Joining with dummy should always work</li>
    <li>Fix: 64 player servers should show up properly in serverbrowser</li>
    <li>Fix: gfx_threaded_old 0 and gfx_asyncrender_old 0 for old computers</li>
    <li>Fix: Image selection popups always visible in editor</li>
    <li>Fix: Info with grid and animations works in editor</li>
    <li>Fix: Dummy only connects to server when we're connected too</li>
  </ul>
  <li><a href="http://forum.ddnet.tw/viewtopic.php?f=9&t=49&p=215">The Great Testing Guide by Lady Saavik & deen</a></li>
  <li><strong>DDNet 3.8</strong>:<br/>
  <ul>
    <li>Feature: Separate inputs for dummy and player</li>
    <li>Feature: Guns and draggers work for each player in a solo part individually</li>
    <li>Feature: Old gun holding position<br/>
    <img class="demo" src="client/oldgun.png" /></li>
    <li>Fix: Still receive dummy whispers and team messages</li>
    <li>Fix: Dummy should behave better</li>
    <li>Fix: Key presses more visible</li>
  </ul>
  <li><strong><a href="http://forum.ddnet.tw/viewtopic.php?f=3&t=25">Call for Testers</a></strong></li>
  <li><strong><a href="/tournament/16/">Quick Tournament #10: Novice</a></strong> on Sunday, May 11 at 19:00 CEST</li>
  <li><a href="http://forum.ddnet.tw/">Official DDraceNetwork Forum!</a></li>
  <li><strong>DDNet 3.7</strong>:<br/>
  <ul>
    <li>Feature: cl_overlay_entities (0-100) instead of cl_show_entities<br/>
    <img class="demo" src="/client/overlayentities.png"/></li>
    <li>Feature: More colors in serverbrowser (thanks to NooBxGockeL &amp; GamerClient)<br/>
    <img class="demo" src="/client/scoreboard2.png"/></li>
    <li>Fix: Draw player direction arrows at different positions</li>
    <li>Fix: Tunes with dummies (by HMH)</li>
    <li>Fix: Better switching with dummy</li>
  </ul>
  <li><strong>DDNet 3.6</strong>:<br/>
  <ul>
    <li>Feature: Inputs always work in freeze (on any DDRace server)<br/>
    <video class="fullvideo" controls>
      <source src="/client/freezeinput.mp4" type="video/mp4">
      <source src="/client/freezeinput.ogg" type="video/ogg">
    </video></li>
    </li>
    <li>Feature: Hammerfly with dummy tee (more accurate now)<br/>
    <img class="demo" src="/client/dummyhammer.png"/></li>
    <li>Feature: Dummy tee (thanks to //toast and Monsta, more stable now)</li>
    <li>Feature: Show key presses (by unsigned char*)<br/>
    <img class="demo" src="/client/showkeypresses.png"/></li>
    <li>Feature: Auto-Updater (thanks to unsigned char*)</li>
  </ul>
  <li>New logo thanks to Landil and Saavik</li>
</ul>
</div>
