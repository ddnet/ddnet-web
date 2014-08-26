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
<div class="startvideo"><div class="video-container"><iframe class="ytplayer" src="http://www.youtube.com/embed/4Y4YW9JzsT4?autoplay=0&hd=1"></iframe></div></div>
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
$version = '4.8.4';

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
  <li><strong>DDNet 4.8.4</strong>:<br/>
    <li>[Client] Cut demos into parts and save them (by east)</li>
    <li>[Client] Fix: Don't render hooks to non-active character cores (by east)</li>
    <li>[Client] Fix: 64 player server info in LAN tab (by Savander)</li>
    <li>[Server] Kill protection (by Savander)</li>
    <li>[Server] Faster /points and /top5points</li>
    <li>[Server] Switch /pause and /spec with sv_pauseable 1</li>
    <li>[Server] Fix: Bullets don't explode when a player stands in their way (by Tobii)</li>
  </ul>
  <li><strong>DDNet 4.8</strong>:<br/>
  <ul>
    <li>[Client] Also show all players for 32 player servers in serverbrowser</li>
    <li>[Client] Half transparent chat and emoticons with /showothers</li>
    <li>[Client] Recording with multiple clients at the same time working</li>
    <li>[Editor] Show current quad when pressing space</li>
    <li>[Editor] Keys still work with TAB pressed</li>
    <li>[Editor] Don't show proof lines in editor when space is pressed</li>
    <li>[Server] Show time of players you're spectating</li>
    <li>[Server] Timeout protection and crash fixes</li>
    <li>[Server+Client] Protect from IP spoofing of rcon commands</li>
  </ul>
  <li><strong>DDNet 4.7.7</strong>:<br/>
  <ul>
    <li>[Client] Allow disabling custom and new skins</li>
    <li>[Client] Disable joystick on non-android devices by default</li>
    <li>[Server] Add a timeout protection message</li>
    <li>[Server] Timeout protection fixes</li>
  </ul>
  <li><strong>DDNet 4.7.6</strong>:<br/>
  <ul>
    <li>[Client] Fix: Dummy really disconnects on map change</li>
    <li>[Client] Display map name while downloading</li>
    <li>[Client] Make emoticon selector reset when you point it in the middle</li>
    <li>[Server] Add sv_shutdown_when_empty</li>
    <li>[Server] Fix: Exclude dummies from spoof protection</li>
    <li>[Server] Fix: Reset timeout protection when it's over</li>
  </ul>
  <li>New map releases on <a href="/releases/">ddnet.tw/releases</a></li>
  <li>New security feature in DDNet Client 4.7.4 opens a new network connection, some Firewalls may ask if you want to do so. For the reason for this see these two Forum threads: <a href="http://forum.ddnet.tw/viewtopic.php?f=4&t=234">Ip spoofing and teeworlds</a> and <a href="http://forum.ddnet.tw/viewtopic.php?f=4&t=308">Kicking any player and executing rcon commands</a>.</li>
  <li>Hitomi server was removed. All maps were moved to Moderate and Brutal servers.</li>
  <li>IP Spoofing protection for servers using sv_spoof_protection 1. More details about the attack on <a href="http://forum.ddnet.tw/viewtopic.php?f=4&t=306">the forum</a>.</li>
  <li>DDNet Teamspeak server by laxa: <a href="ts3server://ts.ddnet.tw">ts.ddnet.tw</a></li>
  <li>How to use the new timeout protection:<br/>
    If you have DDNet client, after a timeout, you will automatically be reconnected to your tee when you rejoin. If it doesn't work, wait a bit more (100 seconds) and rejoin server.<br/>
    If you don't have DDNet client you can still use timeout protection, by typing /timeout MYSECRETCODE every time you join a DDNet server. Then after you had a timeout you can type /timeout MYSECRETCODE again to get your tee back.</li>
  <li><strong>DDNet 4.7</strong>:<br/>
  <ul>
    <li>[Client] Automatic timeout protection on DDNet servers</li>
    <li>[Server] /timeout protection for all clients</li>
    <li>[Server] /specteam to only see players from your team when spectating</li>
    <li>[Server] 1 minute punishment for saving to prevent abuse</li>
    <li>[Server] Fixes for /save and /load</li>
  </ul>
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
  <li><a href="/downloads/DDNet-4.4.apk">Android version</a> of DDraceNetwork Client released (mainly for spectating and chatting; thanks to Pelya for porting Teeworlds to Android)</li>
  <li><strong>DDNet 4.2</strong>:<br/>
  <ul>
    <li>[Client] Fix: Don't crash when standing on start line and connecting dummy</li>
    <li>[Editor] Fix: Shifting front layer works</li>
    <li>[Editor] Fix: Allow adding more than 33 images</li>
    <li>[Editor] Fix: Show all images, no matter how many</li>
    <li>[Server] Feature: undeep, unsolo on test server</li>
  </ul>
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
