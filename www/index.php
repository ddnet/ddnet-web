---
layout: default
title: DDraceNetwork
head: |
  <link rel="alternate" type="application/atom+xml" title="DDNet News" href="/feed/" />
  <link rel="stylesheet" href="/funding/jquery-ui-1.8.22.custom.css" />
  <script src="/youtube.js" type="text/javascript"></script>
menu: |
  <ul>
    <li><a href="#news">News</a> (<a href="/news/">all</a>)</li>
    <li><a href="/server/">Server&nbsp;Features</a></li>
    <li><a href="/client/">Client&nbsp;Features</a></li>
    <li><a href="/map/">Map&nbsp;Features</a></li>
    <li><a href="/howto/">How&nbsp;to&nbsp;Map</a></li>
    <li><a href="/binds/">Useful&nbsp;Binds</a></li>
    <li><a href="/auto-font/">Auto-Font</a></li>
    <li><a href="/settingscommands/">Settings&nbsp;&amp;&nbsp;Commands</a></li>
    <li><a href="/staff/">Staff&nbsp;&amp;&nbsp;Contact</a></li>
    <li><a href="/funding/">Funding</a></li>
  </ul>
---
<div class="block">
<h2>DDRace Servers and much more!</h2>
<p>
DDraceNetwork (DDNet) is an actively maintained version of DDRace, a <a href="https://www.teeworlds.com/">Teeworlds</a> modification with a unique cooperative gameplay. Help each other play through <a href="/releases/">custom maps</a> with up to 64 players, compete against the best in <a href="/tournaments/">international tournaments</a>, design your <a href="/howto/">own maps</a>, or run your <a href="/settingscommands/">own server</a>. The <a href="/status/">official servers</a> are located in Germany, Russia, USA, China, Chile, Brazil and South Africa. All <a href="/ranks/">ranks</a> made on official servers are available worldwide and you can <a href="/players/milk">collect points</a>!
</p>
<div class="startvideo"><div class="video-container">
  <div class="ytplayer" data-id="AEpwlUVv-d4"></div>
</div></div>
{% comment %}
<div class="startvideo">
	<div class="video-container"><iframe src="http://hitbox.tv/#!/embed/vasten100" frameborder="0" allowfullscreen></iframe></div>
</div>
<div class="startimages">
	<iframe height="400" src="http://www.hitbox.tv/embedchat/vasten100" frameborder="0" allowfullscreen></iframe>
</div>
<style>
    .twitch-wrapper{
        position: relative;
        width: 100%;
        padding-bottom: 42.1875%;
    }
    .twitch-wrapper iframe.player{
        position: absolute;
        width: 75%;
        height: 100%;
        top: 0;
        left: 0;
    }
    .twitch-wrapper iframe.chat{
        position: absolute;
        width: 25%;
        height: 100%;
        top: 0;
        right: 0;
    }
    @media screen and (max-width:768px){
        .twitch-wrapper{
            padding-bottom: 56.25%;
        }
        .twitch-wrapper iframe.chat{
            display: none;
        }
        .twitch-wrapper iframe.player{
            width: 100%;
        }
    }
</style>
<div class="twitch-wrapper">
    <iframe class="player"  width="620" height="378" src="https://player.twitch.tv/?channel=ryozukii" frameborder="0" allowfullscreen="true" scrolling="no"></iframe>
    <iframe class="chat" src="https://www.twitch.tv/ryozukii/chat?popout=" frameborder="0" scrolling="no" width="350" height="500"></iframe>
</div>
{% endcomment %}
<br/>
<div class="download"><img class="download-button" src="download.svg" alt="Download"/>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

function getOS() {
  global $user_agent;
  $os_platform = "unk";

  if (preg_match('/android/i', $user_agent))
    $os_platform = 'and';
  elseif (preg_match('/wow64/i', $user_agent))
    $os_platform = 'win64';
  elseif (preg_match('/win64/i', $user_agent))
    $os_platform = 'win64';
  elseif (preg_match('/windows/i', $user_agent))
    $os_platform = 'win32';
  elseif (preg_match('/linux.*x86_64/i', $user_agent))
    $os_platform = 'lin64';
  elseif (preg_match('/linux.*i686/i', $user_agent))
    $os_platform = 'lin32';
  elseif (preg_match('/macintosh|mac os/i', $user_agent))
    $os_platform = 'mac';

  return $os_platform;
}

$user_os = getOS();
$version = '12.0';

if ($user_os == 'win32') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-win32.zip">Download DDraceNetwork Client &amp; Server ' . $version . ' for Windows (32bit)</a></span><br/><a href="/downloads/">Other systems and versions</a></p>';
} elseif ($user_os == 'win64') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-win64.zip">Download DDraceNetwork Client &amp; Server ' . $version . ' for Windows (64bit)</a></span><br/><a href="/downloads/">Other systems and versions</a></p>';
} elseif ($user_os == 'mac') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-osx.dmg">Download DDraceNetwork Client &amp; Server ' . $version . ' for Mac OS X</a></span><br/><a href="/downloads/">Other systems and versions</a></p>';
} elseif ($user_os == 'lin32') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-linux_x86.tar.xz">Download DDraceNetwork Client &amp; Server ' . $version . ' for Linux x86</a></span><br/><a href="/downloads/">Other systems and versions</a></p>';
} elseif ($user_os == 'lin64') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-linux_x86_64.tar.xz">Download DDraceNetwork Client &amp; Server ' . $version . ' for Linux x86_64</a></span><br/><a href="/downloads/">Other systems and versions</a></p>';
} else {
  print '<p class="download"><span class="big"><a href="/downloads/">Download DDraceNetwork Client &amp; Server ' . $version . '</a></span></p>';
}
?>
<a href="discord"><img width="36" src="discord.svg" alt="Discord"/></a>
<a href="feed/"><img width="36" src="feed.svg" alt="Feed"/></a>
<a href="https://github.com/ddnet/"><img width="36" src="github.svg" alt="GitHub"/></a>

<div class="right" style="width: 100%; max-width: 20em;">
  <a href="/funding/"><div class="progressbar" id="funding-total" style="width:100%; margin-top:0.25em"><div class="progress-label"></div></div></a>
  <a href="/funding/"><div class="progressbar" id="funding-old" style="width:100%; margin-top:0.25em"><div class="progress-label"></div></div></a>
  {% include funding.html %}
</div>
</div>
<br/>
</div>
<div class="block">
<h2 id="news">News</h2>
{% for post in site.tags.current limit:10 %}
  <div class="news">
    <h3><a href="{{ site.url }}{{ site.baseurl }}{{ post.url }}">{{ post.title }}</a></h3>
    <div style="font-size: 75%;">{{ post.date | date: "%Y-%m-%d" }}</div>
    <div class="news-content">
      {{ post.content }}
    </div>
  </div>
{% endfor %}
</div>
