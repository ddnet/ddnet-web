---
layout: post
title: "Client Crash with AMD Beta driver 22.7.1 using OpenGL"
permalink: /news/amd-beta-opengl-crash/
tag: current
---

According to [player](https://steamcommunity.com/app/412220/discussions/0/3463849349658412872/) [reports](https://steamcommunity.com/app/412220/discussions/0/3463849349659227048/) and [verified](https://github.com/ddnet/ddnet/issues/5676) by Jupeyy the new [AMD Radeon Beta driver 22.7.1](https://www.amd.com/en/support/kb/release-notes/rn-rad-win-22-7-1) is currently crashing in DDNet client when using OpenGL.

So far we have no solution and have reported this problem to AMD. As a workaround you can downgrade the GPU driver to a stable version again, or alternatively use the Vulkan backend in DDNet as per these instructions provided by Jupeyy:

> Right click DDNet in Steam, add `"gfx_backend Vulkan"` to the start parameters inside Steam
> (notice you HAVE to include the ")

For non-Steam version you can edit the %appdata%\DDNet\settings_ddnet.cfg or %appdata%\Teeworlds\settings_ddnet.cfg and add a line with `gfx_backend Vulkan`, then start client.
