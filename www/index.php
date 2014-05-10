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
    <li><a href="/staff/">Staff</a></li>
    <li><a href="/downloads/">Downloads</a></li>
  </ul>
---
<div class="block">
<h2>DDRace Servers and much more!</h2>
<p>
DDraceNetwork is a special version of DDRace, a <a href="https://www.teeworlds.com/">Teeworlds</a> modification. Help each other finish races with up to 64 players, compete against the best in <a href="/tournament/">international tournaments</a>, design your <a href="/howto/">own maps</a>, or run your <a href="/settingscommands/">own server</a>. The <a href="/status/">official servers</a> are located in Germany, USA, Russia, Iran, China and Chile. All <a href="/ranks/">ranks</a> made on official servers are available everywhere and you can collect points!
</p>
<div class="startvideo"><div class="video-container"><iframe class="ytplayer" src="http://www.youtube.com/embed/ApCo64AnIuI?autoplay=0&hd=1"></iframe></div></div>
<div class="startimages"><img class="demo" alt="Demo" src="tower.png"/></li></div>
<br/>
<div class="download"><img class="download-button" src="download.svg"/>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

function getOS() {
  global $user_agent;
  $os_platform = "unk";

  if (preg_match('/windows/i', $user_agent))
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
$version = '3.8.3';

if ($user_os == 'win') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-win32.zip">Download DDraceNetwork Client &amp; Server ' . $version . ' for Windows</a></span><br/><a href="/downloads/">Other systems and versions</a></p>';
} elseif ($user_os == 'mac') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-osx.dmg">Download DDraceNetwork Client &amp; Server ' . $version . ' for Mac OS X</a></span><br/><a href="/downloads/">Other systems and versions</a></p>';
} elseif ($user_os == 'lin32') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-linux_x86.tar.gz">Download DDraceNetwork Client &amp; Server ' . $version . ' for Linux x86</a></span><br/><a href="/downloads/">Other systems and versions</a></p>';
} elseif ($user_os == 'lin64') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-linux_x86_64.tar.gz">Download DDraceNetwork Client &amp; Server ' . $version . ' for Linux x86_64</a></span><br/><a href="/downloads/">Other systems and versions</a></p>';
} else {
  print '<p class="download"><span class="big"><a href="/downloads/">Download DDraceNetwork Client &amp; Server ' . $version . '</a></span></p>';
}
?>
</div>
</div>
<div class="block">
<h2 id="news">News</h2>
<ul>
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
  <li><strong><a href="http://forum.ddnet.tw/viewtopic.php?f=3&t=5">Quick Tournament #10: Novice</a></strong> on Sunday, May 11 at 19:00 CEST</li>
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
      <source src="/map/freezeinput.mp4" type="video/mp4">
      <source src="/map/freezeinput.ogg" type="video/ogg">
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
  <li><a href="http://inspectors.ddnet.tw/">The Inspectors</a><br/>
</ul>
</div>
