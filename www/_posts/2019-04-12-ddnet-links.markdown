---
layout: post
title: "ddnet: Links"
permalink: /news/ddnet-links/
tag: current
---

With recent versions of DDNet client you can play demo files directly by pulling them into the client instead of having to put the demo file into the demo directory and navigating to it in the client.

A less known feature that has existed for a few months is opening links to DDNet server with the client directly. The links can look like this:

- [ddnet:92.172.92.151:8303](ddnet:95.172.92.151:8303)
- Domains are supported as well: [ddnet:ger.ddnet.tw:8303](ddnet:ger.ddnet.tw:8303)
- Default port is 8303: [ddnet:ger.ddnet.tw](ddnet:ger.ddnet.tw)

You can see those links on our [status](https://ddnet.tw/status/) page as well.

On Windows you can set the default program to open ddnet: links using [this guide](https://www.howtogeek.com/223144/how-to-set-your-default-apps-in-windows-10/) by following the instructions for "Manage Launch Options by Protocol".

On Linux you can create a `~/.local/share/applications/DDNet.desktop` file with this content:

```
[Desktop Entry]
Type=Application
Name=DDNet
Path=/full/path/to/my/DDNet-12.1/
Exec=DDNet %u
Terminal=false
Categories=Games
MimeType=x-scheme-handler/ddnet;
```

And then running `xdg-settings set default-url-scheme-handler ddnet DDNet.desktop`.
