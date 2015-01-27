#!/bin/sh
. ./function.sh

[ $# -ne 4 ] && err "need 4 args, got $# args"
tmpname="$1"
zipname="$2"
creator="$3"
skinpack="$4"
[ "$(echo "$zipname" | grep ".zip$")" ] || err "skinzip must end with .zip"
[ "$(file -b --mime-type "$tmpname")" = "application/zip" ] || err "imagezip must be zip"
[ "$(echo "$zipname" | grep "/")" ] && err "skinzip must not contain /"
[ "$(echo "$creator" | grep "/")" ] && err "creator must not contain /"
[ "$(echo "$skinpack" | grep "/")" ] && err "skinpack must not contain /"

zipname="$(basename "$zipname" .zip)"
tmpdir="$(basename $(mktemp -d))"


echo "add_skin_zip.sh: zipname=\"$zipname\" creator=\"$creator\" skinpack=\"$skinpack\""

(cd /tmp/$tmpdir; unzip "$tmpname") > /dev/null
find /tmp/$tmpdir -type f -name "*.png" | xargs -d "\n" -n1 -r ./add_skin.sh -z "$creator" "$skinpack"
rm -r /tmp/$tmpdir

echo "successfully added skinzip"

