---
layout: default
title: DDraceNetwork
menu: |
  <ul>
    <li><a href="/#news">News</a></li>
    <li><a href="/server/">Server&nbsp;Features</a></li>
    <li><a href="/client/">Client&nbsp;Features</a></li>
    <li><a href="/map/">Map&nbsp;Features</a></li>
    <li><a href="/howto/">How&nbsp;to&nbsp;Map</a></li>
    <li><a href="/binds/">Useful&nbsp;Binds</a></li>
    <li><a href="/settingscommands/">Settings&nbsp;&amp;&nbsp;Commands</a></li>
    <li><a href="/staff/">Staff&nbsp;&amp;&nbsp;Contact</a></li>
  </ul>
---
<div class="block">
<h2>DDRace Servers and much more!</h2>
<p>
DDraceNetwork is a special version of DDRace, a <a href="https://www.teeworlds.com/">Teeworlds</a> modification. Help each other finish races with up to 64 players, compete against the best in <a href="/tournaments/">international tournaments</a>, design your <a href="/howto/">own maps</a>, or run your <a href="/settingscommands/">own server</a>. The <a href="/status/">official servers</a> are located in Germany, USA, Canada, Russia, China, Chile, Brazil and South Africa. All <a href="/ranks/">ranks</a> made on official servers are available everywhere and you can collect points!
</p>
<!--<div class="video-container"><iframe id="jsclient" class="ytplayer" src="http://teewebs.net/"></iframe></div><div align="right"><a href="http://teewebs.net/">DDnet JS client by eeeee</a></div>
<script src="/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).click(function() { $("#jsclient").focus() });
$(document).ready(function() { $("#jsclient").focus() });
</script>-->
<div class="startvideo"><div class="video-container"><iframe allowfullscreen class="ytplayer" src="http://www.youtube.com/embed/DGxDwr4nG3c?autoplay=0&hd=1"></iframe></div></div>
<div class="startimages"><img class="demo" alt="Demo" src="8.png"/><img class="demo" alt="Demo" src="up.png"/></div>
<!--<div class="startvideo"><div class="video-container"><iframe src="http://hitbox.tv/#!/embed/Hallowed1986" frameborder="0" allowfullscreen></iframe></div></div>
<div class="startimages"><iframe height="400" src="http://www.hitbox.tv/embedchat/Hallowed1986" frameborder="0" allowfullscreen></iframe></div>-->
<!--<object id="live_embed_player_flash" width="800" height="450" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" bgcolor="#000000"><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="allowNetworking" value="all" /><param name="flashvars" value="hostname=de.twitch.tv&amp;channel=weeelf&amp;auto_play=true&amp;start_volume=25" /><param name="src" value="http://de.twitch.tv/widgets/live_embed_player.swf?channel=weeelf" /><embed id="live_embed_player_flash" width="800" height="450" type="application/x-shockwave-flash" src="http://de.twitch.tv/widgets/live_embed_player.swf?channel=weeelf" allowFullScreen="true" allowScriptAccess="always" allowNetworking="all" flashvars="hostname=de.twitch.tv&amp;channel=weeelf&amp;auto_play=true&amp;start_volume=25" bgcolor="#000000" /></object><iframe frameborder="0" scrolling="no" id="chat_embed" src="http://twitch.tv/chat/embed?channel=weeelf&#038;popout_chat=true" height="450" width="300"></iframe>-->
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
$version = '7.7.2';

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
<div class="right"><a href="/staff/#donations">Donate</a></div>
</div>
<br/>
</div>
<div class="block">
<h2 id="news">News</h2>
<ul>
  <li><strong><a href="http://forum.ddnet.tw/viewtopic.php?f=3&t=1633">Novice Tournament on Sunday at 20:00 CEST</a></strong> on Aoe's new map Planet Venus:<br/>
    <img class="demo" src="Planet_Venus.png" /></li>
  <li><a href="http://forum.ddnet.tw/viewtopic.php?f=6&t=1621"><img src="http://www11.pic-upload.de/15.06.15/u8qah8blrdup.png" /></a></li>
  <li><strong><a href="http://forum.ddnet.tw/viewtopic.php?f=3&t=1613">SURPRISE Moderate (★★★★★) Tournament TODAY on Sunday at 20:00 CEST</a></strong> on Welf's new map Eternal 2:<br/>
    <img class="demo" src="Eternal_2.png" /></li>
  <li><strong>DDNet 7.7</strong>:<br/>
  <ul>
    <li>[Client] Detailed statboard for vanilla gaming (by Shiki)</li>
    <li>[Client] Dyncam remembers settings (by Shiki)</li>
    <li>[Client] Enable timeouts and low speed limits for HTTP downloads</li>
    <li>[Client] Only refresh serverbrowser when necessary</li>
    <li>[Client] Fix bug with 'Join Red' and 'Spectate' buttons sharing same state variable (by Shiki)</li>
    <li>[Client] Fix console page color</li>
    <li>[Editor] Fix a few freezes and crashes and make them recoverable</li>
    <li>[Mapping] Freeze tiles on switch layer can be switched off</li>
    <li>[Server] Fix start info spam protection</li>
    <li>[Server] Fix crash with doors</li>
    <li>[Server] Fix banning of websocket clients (by eeeee)</li>
  </ul></li>
  <li><strong><a href="http://forum.ddnet.tw/viewtopic.php?f=3&t=1522">Moderate (★★★★★) Tournament on Sunday at 20:00 CEST</a></strong> on Spyker's new map Desert Wolf:<br/>
    <img class="demo" src="Desert_Wolf.png" /></li>
  <li>A bit nicer <a href="http://ddnet.tw/players/Xurike/">player tables by Xurike</a></li>
  <li><strong>DDNet Client 7.6.1 needs manual update</strong>:
    <p>As many of you have noticed the autoupdater didn't work in 7.5 and 7.6. You need to manually download 7.6.1 from DDNet.tw. Sorry for the trouble!</p>
  <li><strong>DDNet 7.6</strong>:<br/>
  <ul>
    <li>[Client] <strong>New game tiles</strong> (by Soreu)</li>
    <li>[Client] Improve antiping prediction of collision between players (by nuborn)</li>
    <li>[Client] Fix dummy connect delay (by east)</li>
    <li>[Client] Disable buttons while dummy is connecting</li>
    <li>[Client] Fix: Resend player and dummy info if it was filtered by server (by DoNe)</li>
    <li>[Client] Hopefully fix player move on dummy connect</li>
    <li>[Client] Fix popup title overflow on disconnect</li>
    <li>[Client] Fix client crash</li>
    <li>[Editor] Go back in envelopes with right mouse click</li>
    <li>[Editor] Move "Add Sound" button down for 5:4 resolutions</li>
    <li>[Editor] Fix: On switch layer correct delay number when filling</li>
    <li>[Server] Disallow spectators to participate in kick votes</li>
    <li>[Server] Rename rifle_fire_delay tuning to laser_fire_delay</li>
  </ul></li>
  <li>New DDNet GER Football server running</li>
  <li><strong><a href="http://teewebs.net/">DDNet web client by eeeee</a></strong></li>
  <li><strong>DDNet 7.5</strong>:<br/>
  <ul>
    <li>[Client] Render kill messages with DDRace team color (with cl_chat_teamcolors 1)</li>
    <li>[Client] Fix autoupdater on Windows XP (with Learath2)</li>
    <li>[Client] Fix voting problems</li>
    <li>[Client] Fix map saving with RGB images by converting them to RGBA</li>
    <li>[Client] Fix compilation on new OS X systems</li>
    <li>[Editor] Allow to exit editor value selectors with mouse clicks (by HMH)</li>
    <li>[Editor] Fix rendering of images in editor when scrolling</li>
    <li>[Mapping] Add black tile to ddnet-walls (by Saavik)</li>
    <li>[Server] Add /r, /rescue: teleport yourself out of freeze (disabled by default, sv_allow_rescue 1 in config to enable)</li>
  </ul></li>
  <li>Sorting in player profiles by <a href="/players/milk/">milk</a></li>
  <li><strong>DDNet DDmaX server started!</strong>
  <p>Lady Saavik worked hard and here it is:</p>
  <ul>
    <li>We are reviving the DDracemaX maps from the dead</li>
    <li>5 maps will be released every day!</li>
    <li>Check out the DDNet DDmaX servers with already released maps</li>
  </ul>
  <p>Many of us enjoyed playing on DDmaX back in the old days. Now that it's gone
  it's a shame that all the maps have disappeared with it. Over the time we have
  accepted many maps that mappers and players have requested (81 in total). Now
  we will bring back the rest. For our non-European players this may be the first
  time you see all these maps, so get ready for lots of nice maps!</p></li>
</ul>
</div>
