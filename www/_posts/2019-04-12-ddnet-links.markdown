---
layout: post
title: "ddnet:// Links"
permalink: /news/ddnet-links/
tag: current
---

With recent versions of DDNet client you can play demo files directly by pulling them into the client instead of having to put the demo file into the demo directory and navigating to it in the client.

A less known feature that has existed for a few months is opening links to DDNet server with the client directly. The links can look like this:

- [ddnet://176.9.114.238:8303](ddnet://176.9.114.238:8303)
- Domains are supported as well: [ddnet://ger2.ddnet.org:8303](ddnet://ger2.ddnet.org:8303)
- Default port is 8303: [ddnet://ger2.ddnet.org](ddnet://ger2.ddnet.org)

You can see those links on our [status](https://ddnet.org/status/) page as well.

On Windows you can set the default program to open ddnet:// links using [this guide](https://www.howtogeek.com/223144/how-to-set-your-default-apps-in-windows-10/) by following the instructions for "Manage Launch Options by Protocol".
For Windows, edit this [windows-ddnet-protocol-handler.reg](/windows-ddnet-protocol-handler.reg) file with any plain text editor. Replace the path examples and point them at any ddnet executable (can be the one downloaded from steam aswell). Save the file and execute it.

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
