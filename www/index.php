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
DDraceNetwork is a special version of DDRace, a <a href="https://www.teeworlds.com/">Teeworlds</a> modification. Help each other finish races with up to 64 players, compete against the best in <a href="/tournaments/">international tournaments</a>, design your <a href="/howto/">own maps</a>, or run your <a href="/settingscommands/">own server</a>. The <a href="/status/">official servers</a> are located in Germany, USA, Russia, Iran, China, Chile and South Africa. All <a href="/ranks/">ranks</a> made on official servers are available everywhere and you can collect points!
</p>
<div class="startvideo"><div class="video-container"><iframe class="ytplayer" src="http://www.youtube.com/embed/I8T3EFRgEkg?autoplay=0&hd=1"></iframe></div><div align="right">More videos in the <a href="/halloffame/">Hall of Fame</a></div></div>
<div class="startimages"><img class="demo" alt="Demo" src="lasers.png"/></div>
<!--<div class="startvideo"><div class="video-container"><iframe src="http://hitbox.tv/#!/embed/Hallowed1986" frameborder="0" allowfullscreen></iframe></div></div>
<div class="startimages"><iframe height="400" src="http://www.hitbox.tv/embedchat/Hallowed1986" frameborder="0" allowfullscreen></iframe></div>-->
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
$version = '6.2.1';

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
  <li><strong>DDNet 6.2</strong>:<br/>
  <ul>
    <li>[Mapping] Fix editor sound replacing (by BeaR)</li>
    <li>[Client] Remove Bandana Brothers skins (use skinpacks instead)</li>
    <li>[Client] Make sound more accurate</li>
    <li>[Client] Don't render useless CTele-in number</li>
    <li>[Client] gfx_text_overlay to stop rendering text at far distances</li>
    <li>[Server] Improve performance and ping</li>
    <li>[Server] Improve /rank performance</li>
  </ul></li>
  <li>DDNet CAN now running in Canada thanks to o_be_one from r0x.fr! All locations now:<br/>
    <img class="demo" src="/locations.png" /></li>
  <li>zCatch Servers are now run by Savander with his mod including /rank and /top5!</li>
  <li><a href="http://forum.ddnet.tw/viewtopic.php?f=3&t=604">Halloween Tournament with the new Moderate map "Spooky" by Ama, this Sunday at 20:00 CET!</a> (German livestream will be on <a href="http://www.hitbox.tv/Hallowed1986">Hallowed1986's Hitbox channel</a>)</li>
  <li>New GER servers sponsored by xRoThx</li>
  <li><strong>DDNet 6.1</strong>:<br/>
  <ul>
    <li>[Mapping] Use opus codec for map sounds instead of wavpack (with help by BeaR)</li>
    <li>[Client] Antiping for Weapons improved, might also work for Vanilla (by nuborn)</li>
    <li>[Client] Add bind for dyncam to settings</li>
    <li>[Server] Balance sending of vote options (by east)</li>
  </ul></li>
  <li><a href="http://ddnet.tw/612.png">612 players (including dummies) during the last Tournament</a></li>
  <li><a href="http://forum.ddnet.tw/viewtopic.php?f=3&t=545">Quick Tournament #23</a> with two maps: <br/>
    <ul>
      <li>Novice Solo-map "Rollercoaster" by DoNe on Saturday 20:00 CEST: Best time after 60 minutes wins</li>
      <li>Brutal Dummy-map "Skychase" by SickCunt on Sunday 20:00 CET: First finish wins</li>
    </ul></li>
  <li><strong>DDNet 6.0.3</strong>:<br/>
  <ul>
    <li>[Client] Flash window on chat highlight (Windows by BeaR &amp; Linux)</li>
    <li>[Client] Option for disabling gunfire</li>
    <li>[Server] Delay of 1 minute for loading savegames</li>
    <li>[Server] Fix solo zone + laser drag in spec</li>
  </ul></li>
  <li><strong>DDNet 6.0</strong>:<br/>
  <ul>
    <li>[Mapping] <strong>Map Sounds</strong> (by BeaR)</li>
    <li>[Mapping] Fixed jungle_background (by 645654)</li>
    <li>[Mapping] Fixed grass_main_0.7 (by Saavik) and automapper rules (by hi_leute_gll)</li>
    <li>[Client] AntiPing for weapons (by nuborn)</li>
    <li>[Client] Demo recording fixed</li>
    <li>[Client] Quads look the same on every GPU (by BeaR)</li>
    <li>[Client] Right click to decrease FSAA samples in menu (by Wohoo)</li>
    <li>[Client] Don't clear rcon history when connecting to new server</li>
    <li>[Editor] Shift + right click to delete a quad</li>
    <li>[Editor] Fixed automapper rules (grass_main_0.7, ddnet-tiles, ddnet-walls, desert_main, fadeout, grass_main, jungle_main, round-tiles, winter_main, by DoNe)</li>
    <li>[Server] Show sleepy eyes when a player is paused</li>
    <li>[Server] /mapinfo shows more information</li>
  </ul></li>
  <li>On November 1 our hoster is cancelling the DDNet GER server because of the continuing DDoS attacks.</li>
  <li><a href="http://forum.ddnet.tw/viewtopic.php?f=3&t=530">Quick Tournament #22 with the new Moderate map "SunDay 2" by Gridwyn, this Sunday at 20:00 CEST!</a> (German livestream will be on <a href="http://www.hitbox.tv/Hallowed1986">Hallowed1986's Hitbox channel</a>)</li>
  <li><a href="http://forum.ddnet.tw/viewtopic.php?f=3&t=518">Quick Tournament #21 with a new Moderate map (★★★★✰) by Tuna & Hake, this Sunday at 20:00 CEST!</a> (German livestream will be on <a href="http://www.hitbox.tv/Hallowed1986">Hallowed1986's Hitbox channel</a>)</li>
  <li><strong>DDNet 5.3</strong>:<br/>
  <ul>
    <li>[Client] Skin name in skin selector (by Savander)</li>
    <li>[Client] Sort player completion (TAB) by name</li>
    <li>[Client] Shift + TAB to invert completion order in chat (by Wohoo)</li>
    <li>[Client] Automatically rcon-authenticate dummy on connection if player is authenticated already</li>
    <li>[Client] Add cl_zoom_background_layers (set to 0 to keep background nice when zoomed out)</li>
    <li>[Mapping] New "Entities off" sign</li>
    <li>[Editor] Scale quad point selection indicator with zoomlevel (by BeaR)</li>
    <li>[Editor] Zoom into cursor position (by BeaR)</li>
    <li>[Editor] Fix: Consistently allow rotations and flipping in editor</li>
    <li>[Server] Vote random map with defined number of stars (add number as reason)</li>
    <li>[Server] Vote random unfinished map with defined number of stars (add number as reason)</li>
    <li>[Server] Show stars in /mapinfo</li>
    <li>[Server] Spectated tee can be changed more often</li>
  </ul></li>
  <li><strong>DDNet 5.1</strong>:<br/>
  <ul>
    <li>[Client] Sort ingame menus (by laxa)</li>
    <li>[Client] Print broadcasts in console (by laxa)</li>
    <li>[Client] Add button to select whether to reset wanted weapon on death (by laxa)</li>
    <li>[Editor] Fix editor input on Android</li>
    <li>[Editor] Fix buggy envelope editor while tile picker is active</li>
    <li>[Editor] Automapper support rotation (by DoNe)</li>
    <li>[Editor] Disable key inputs in editor when typing in a field</li>
    <li>[Editor] Fix: Selecting quads works after having rotated one</li>
    <li>[Server] Kill protection: Prevent joining to spectators (by Savander)</li>
    <li>[Server] Lock works for single player teams</li>
    <li>[Server] Fix: Log player out of rcon after timeout protection was used</li>
    <li>[Server] Check whether team has finished once a player in the team kills</li>
    <li>[Server] Add sv_player_demo_record (mostly from Teerace, not used on official DDNet Servers)</li>
    <li>[Server] Fix a bunch of crashes on server demo recording</li>
  </ul></li>
  <li><a href="http://forum.ddnet.tw/viewtopic.php?f=3&t=453">Quick Tournament #20 with the Novice map "Kobra 3" by Zerodin, this Sunday at 20:00 CEST!</a> (German livestream will be on <a href="http://www.hitbox.tv/Hallowed1986">Hallowed1986's Hitbox channel</a>)<br/><img class="demo" src="http://forum.ddnet.tw/download/file.php?id=3216&mode=view" /></li>
  <li>DDNet Persian staying up thanks to KinG, bor, chucky &amp; F1rst</li>
  <li><a href="http://forum.ddnet.tw/viewtopic.php?f=3&t=426">Quick Tournament #19 with a Moderate (4 stars) map by Welf, this Sunday at 20:00 CEST!</a> (German livestream will be on <a href="http://www.hitbox.tv/Hallowed1986">Hallowed1986's Hitbox channel</a>)</li>
  <li><strong>DDNet 5.0</strong>:<br/>
  <ul>
    <li>[Client] DDNet page with all DDNet servers, filterable by country (by east)</li>
    <li>[Client] Fix: Make the initial ping in serverbrowser less wrong (still not perfect)</li>
    <li>[Client] Fix: Prevent animated server names and fake 0 pings in serverbrowser</li>
    <li>[Client] Fix: also record a demo when the start line is on the front layer (by Tobii)</li>
    <li>[Client] Fix: Show tune layer when cl_overlay_entities is less than 100</li>
    <li>[Client] Fix: Separate timed-switch-activation and unsolo tiles in ingame-entities</li>
    <li>[Client] Fix: Rcon spoofing protection bans clients after password change (by Tobii)</li>
    <li>[Editor] automapper works without basetile (by DoNe)</li>
    <li>[Server] Add number of finishes to /mapinfo</li>
  </ul></li>
  <li><a href="/mappers/">List of all mappers</a></li>
  <li>Link to <a href="/mappers/Aoe/">mapper profiles</a> for each mapper on <a href="/releases/">releases</a> and <a href="/ranks/novice/">ranks pages</a>: Every map listed by mapper</li>
  <li>Player search function on each <a href="/ranks/">ranks page</a>: Find every player that ever finished a map on DDNet</li>
  <li>Comparison button for each <a href="/players/milk/">player profile</a>: Compare times and ranks on all finished maps</li>
  <li><a href="http://ddnet.spreadshirt.de/">DDNet T-Shirt shop reopened</a></li>
  <li><a href="http://forum.ddnet.tw/viewtopic.php?f=3&t=407">New Moderate Tournament this Sunday at 20:00 CEST!</a> (German livestream will be on <a href="http://www.hitbox.tv/Hallowed1986">Hallowed1986's Hitbox channel</a>)</li>
  <li><a href="/halloffame/">Hall of Fame</a></li>
  <li><strong>DDNet 4.9.2</strong>:<br/>
  <ul>
    <li>[Client] Fix clamping in network objects to prevent many crashes</li>
    <li>[Client] Fix: Reset zoom when going out of spectate mode (in zcatch for example)</li>
    <li>[Client+Server] Threaded logger output for fewer lags</li>
    <li>[Server] Ignore user inputs when paused</li>
    <li>[Server] Instead of banning players for reconnecting too often, make them wait 3 seconds</li>
  </ul></li>
  <li><strong>DDoS protected DDNet FRA server running!</strong></li>
  <li><strong>DDNet 4.9</strong>:<br/>
  <ul>
    <li>[Client] Use settings_ddnet.cfg instead of settings.cfg</li>
    <li>[Client] Add switch to disable CPU throttle when window is inactive</li>
    <li>[Client] Unix only: FIFO console (as in server)</li>
    <li>[Client] Add demo speed setting in menu</li>
    <li>[Client] Don't show quit popup on update</li>
    <li>[Client] Fix: Android controls working again</li>
    <li>[Client] Fix: Only use rcon spoofing protection on ddnet servers as it's buggy on others</li>
    <li>[Client] Fix: Case insensitive map filenames on Windows</li>
    <li>[Client] Fix: Repopulate demo list after closing demo player because a new demo could have been created</li>
    <li>[Client] Fix: Remove damage indications when entering game</li>
    <li>[Client] Fix: Don't crash on broken demo files</li>
    <li>[Editor] Fix: Negative clipping width and height make no sense</li>
    <li>[Server] Fix: Only set active weapon when it actually has ammo</li>
    <li>[Server] Fix: Make /save reset switches</li>
  </ul></li>
  <li><a href="http://ddnet.tw/status/">Teamspeak status</a></li>
</ul>
</div>
