#!/bin/sh
set -e
cd www
jekyll build
rsync -rtv _site/ ddnet.tw:/var/www
