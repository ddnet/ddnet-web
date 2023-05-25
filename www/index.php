---
layout: default
title: DDraceNetwork
head: |
  <link rel="alternate" type="application/atom+xml" title="DDNet News" href="/feed/" />
  <link rel="stylesheet" href="/funding/jquery-ui-1.8.22.custom.css" />
  <script src="/youtube.js?version=3" type="text/javascript"></script>
menu: |
  <ul>
    <li><a href="#news">News</a> (<a href="/news/">all</a>)</li>
    <li><a href="/server/">Server&nbsp;Features</a></li>
    <li><a href="/client/">Client&nbsp;Features</a></li>
    <li><a href="/map/">Map&nbsp;Features</a></li>
    <li><a href="/howto/">How&nbsp;to&nbsp;Map</a></li>
    <li><a href="/rules/">Mapping&nbsp;Rules</a></li>
    <li><a href="/binds/">Useful&nbsp;Binds</a></li>
    <li><a href="/auto-font/">Auto-Font</a></li>
    <li><a href="/settingscommands/">Settings&nbsp;&amp;&nbsp;Commands</a></li>
    <li><a href="/renames/">Renames</a></li>
    <li><a href="/funding/">Funding</a></li>
  </ul>
---
<div class="block">
<h2>DDRace Servers and much more!</h2>
<p>
DDraceNetwork (DDNet) is an actively maintained version of DDRace, a <a href="https://www.teeworlds.com/">Teeworlds</a> modification with a unique cooperative gameplay. Help each other play through <a href="/releases/">custom maps</a> with up to 64 players, compete against the best in <a href="/tournaments/">international tournaments</a>, design your <a href="/howto/">own maps</a>, or run your <a href="/settingscommands/">own server</a>. The <a href="/status/">official servers</a> are around the world. All <a href="/ranks/">ranks</a> made on official servers are available worldwide and you can <a href="/players/">collect points</a>!
</p>
<div class="startvideo"><div class="video-container">
  <div class="ytplayer" data-id="bqf4yH4mpVU"></div>
</div></div>
{% comment %}
<style>
    .twitch-embed{
        position: relative;
        width: 100%;
        padding-bottom: 42.1875%;
    }
</style>
<div id="twitch-embed"></div>
<script src="https://embed.twitch.tv/embed/v1.js"></script>
<script type="text/javascript">
  new Twitch.Embed("twitch-embed", {
    width: 1000,
    height: 480,
    channel: "LCSG47",
  });
</script>
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
$version = '17.0';

if ($user_os == 'win32') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-win32.zip">Download DDraceNetwork Client &amp; Server ' . $version . ' for Windows (32bit)</a></span><br/><a href="/downloads/">Other systems and versions, changelogs</a></p>';
} elseif ($user_os == 'win64') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-win64.zip">Download DDraceNetwork Client &amp; Server ' . $version . ' for Windows (64bit)</a></span><br/><a href="/downloads/">Other systems and versions, changelogs</a></p>';
} elseif ($user_os == 'mac') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-macos.dmg">Download DDraceNetwork Client &amp; Server ' . $version . ' for macOS</a></span><br/><a href="/downloads/">Other systems and versions, changelogs</a></p>';
} elseif ($user_os == 'lin32') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-linux_x86.tar.xz">Download DDraceNetwork Client &amp; Server ' . $version . ' for Linux x86</a></span><br/><a href="/downloads/">Other systems and versions, changelogs</a></p>';
} elseif ($user_os == 'lin64') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-linux_x86_64.tar.xz">Download DDraceNetwork Client &amp; Server ' . $version . ' for Linux x86_64</a></span><br/><a href="/downloads/">Other systems and versions, changelogs</a></p>';
} else {
  print '<p class="download"><span class="big"><a href="/downloads/">Download DDraceNetwork Client &amp; Server ' . $version . '</a></span></p>';
}
?>
<a href="https://store.steampowered.com/app/412220/DDraceNetwork/"><img width="36" class="image-icon" src="steam.svg" alt="Steam"/></a>
<a href="discord"><img width="36" class="image-icon" src="discord.svg" alt="Discord"/></a>
<a href="feed/"><img width="36" class="image-icon" src="feed.svg" alt="Feed"/></a>
<a href="https://github.com/ddnet/"><img width="36" class="image-icon" src="github.svg" alt="GitHub"/></a>
<div class="right" style="width: 100%; max-width: 25em;">
  <a href="/funding/"><div class="progressbar" id="funding-total" style="width:100%; margin-top:0.25em"><div class="progress-label"></div></div></a>
  {% include funding.html %}
</div>
</div>
<br/>
</div>
<div class="block">
<h2 id="news">News</h2>
</div>
{% for post in site.tags.current limit:10 %}
<div class="block">
  <div class="news">
    <h3><a href="{{ site.url }}{{ site.baseurl }}{{ post.url }}">{{ post.title }}</a></h3>
    <div style="font-size: 75%;">{{ post.date | date: "%Y-%m-%d" }}</div>
    <div class="news-content">
      {{ post.content }}
    </div>
  </div>
</div>
{% endfor %}
