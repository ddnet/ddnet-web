---
layout: default
title: DDraceNetwork
head: |
  <link rel="alternate" type="application/atom+xml" title="DDNet News" href="/feed/" />
  <link rel="stylesheet" href="/funding/jquery-ui-1.8.22.custom.css" />
menu: |
  <ul>
    <li><a href="/#news">Latest News</a></li>
    <li><a href="/news/">All News</a></li>
    <li><a href="/server/">Server&nbsp;Features</a></li>
    <li><a href="/client/">Client&nbsp;Features</a></li>
    <li><a href="/map/">Map&nbsp;Features</a></li>
    <li><a href="/howto/">How&nbsp;to&nbsp;Map</a></li>
    <li><a href="/binds/">Useful&nbsp;Binds</a></li>
    <li><a href="/settingscommands/">Settings&nbsp;&amp;&nbsp;Commands</a></li>
    <li><a href="/staff/">Staff&nbsp;&amp;&nbsp;Contact</a></li>
    <li><a href="/funding/">Funding</a></li>
  </ul>
---
<div class="block">
<h2>DDRace Servers and much more!</h2>
<p>
DDraceNetwork (DDNet) is an actively maintained version of DDRace, a <a href="https://www.teeworlds.com/">Teeworlds</a> modification with a unique cooperative gameplay. Help each other play through <a href="/releases/">custom maps</a> with up to 64 players, compete against the best in <a href="/tournaments/">international tournaments</a>, design your <a href="/howto/">own maps</a>, or run your <a href="/settingscommands/">own server</a>. The <a href="/status/">official servers</a> are located in Germany, Russia, USA, Canada, China, Chile, Brazil, South Africa and Iran. All <a href="/ranks/">ranks</a> made on official servers are available worldwide and you can <a href="/players/milk">collect points</a>!
</p>
<div class="startvideo"><div class="video-container">
  <div class="ytplayer" data-id="jTP-Oz05IN4"></div>
</div></div>
<div class="startimages">
  <a href="https://forum.ddnet.tw/viewtopic.php?t=5449"><img class="demo" alt="Happy 4th Birthday DDNet!" src="bday4.png" /></a>
</div>
{% comment %}
<div class="startvideo">
	<div class="video-container"><iframe src="http://hitbox.tv/#!/embed/vasten100" frameborder="0" allowfullscreen></iframe></div>
</div>
<div class="startimages">
	<iframe height="400" src="http://www.hitbox.tv/embedchat/vasten100" frameborder="0" allowfullscreen></iframe>
</div>
<iframe id="live_embed_player_flash" src="https://player.twitch.tv/?channel=hallowed1986" frameborder="0" scrolling="no" height="378" width="620"></iframe><a href="https://www.twitch.tv/hallowed1986?tt_medium=live_embed&tt_content=text_link" style="padding:2px 0px 4px; display:block; width:345px; font-weight:normal; font-size:10px;text-decoration:underline;">Watch live video from Hallowed1986 on www.twitch.tv</a>
<iframe id="chat_embed" src="https://www.twitch.tv/hallowed1986/chat?popout=" frameborder="0" scrolling="no" height="500" width="350"></iframe>
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
$version = '10.6.8';

if ($user_os == 'win32') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-win32.zip">Download DDraceNetwork Client &amp; Server ' . $version . ' for Windows (32bit)</a></span><br/><a href="/downloads/">Other systems and versions</a></p>';
} elseif ($user_os == 'win64') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-win64.zip">Download DDraceNetwork Client &amp; Server ' . $version . ' for Windows (64bit)</a></span><br/><a href="/downloads/">Other systems and versions</a></p>';
} elseif ($user_os == 'mac') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-osx.dmg">Download DDraceNetwork Client &amp; Server ' . $version . ' for Mac OS X</a></span><br/><a href="/downloads/">Other systems and versions</a></p>';
} elseif ($user_os == 'lin32') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-linux_x86.tar.xz">Download DDraceNetwork Client &amp; Server ' . $version . ' for Linux x86</a></span><br/><a href="/downloads/">Other systems and versions</a></p>';
} elseif ($user_os == 'lin64') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-' . $version . '-linux_x86_64.tar.xz">Download DDraceNetwork Client &amp; Server ' . $version . ' for Linux x86_64</a></span><br/><a href="/downloads/">Other systems and versions</a> | <a href="http://teewebs.net/">Try it out in your browser</a></p>';
} elseif ($user_os == 'and') {
  print '<p class="download"><span class="big"><a href="/downloads/DDNet-9.3.1.apk">Download DDraceNetwork Client 9.3.1 for Android</a></span><br/><a href="/downloads/">Other systems and versions</a></p>';
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

<script>
    var div, n,
        v = document.getElementsByClassName("ytplayer");
    for (n = 0; n < v.length; n++) {
        div = document.createElement("div");
        div.setAttribute("data-id", v[n].dataset.id);
        div.innerHTML = '<img src="https://i.ytimg.com/vi/' + v[n].dataset.id + '/hqdefault.jpg"><div class="play"></div>';
        div.onclick = ytiframe;
        v[n].appendChild(div);
    }

    function ytiframe() {
        var iframe = document.createElement("iframe");
        iframe.setAttribute("src", 'https://www.youtube.com/embed/' + this.dataset.id + '?autoplay=1');
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("allowfullscreen", "1");
        this.parentNode.replaceChild(iframe, this);
    }
</script>
<style>
    .ytplayer img {
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        display: block;
        margin: auto;
        width: 100%;
        position: absolute;
        height: auto;
        cursor: pointer;
        -webkit-transition: .4s all;
        -moz-transition: .4s all;
        transition: .4s all;
    }

    .ytplayer img:hover {
        -webkit-filter: brightness(75%);
    }

    .ytplayer .play {
        height: 72px;
        width: 72px;
        left: 50%;
        top: 50%;
        margin-left: -36px;
        margin-top: -36px;
        position: absolute;
        background: url("/youtube-play.png") no-repeat;
        pointer-events: none;
    }
</style>
