#!/bin/sh
. ./function.sh

[ $# -ne 2 ] && err "need 2 args, got $# args"
skinpack="$1"
newskinpack="$2"
[ "$skinpack" ] || err "skinpack must not be empty"
[ "$(echo "$skinpack" | grep "/")" ] && err "skinpack must not contain /"
[ "$(echo "$newskinpack" | grep "/")" ] && err "newskinpack must not contain /"


echo "rename_skin_pack.sh: skinpack=\"$skinpack\" newskinpack=\"$newskinpack\""

echo "changing skinpack in data.txt ..."
data="$(cat data.txt)"
echo "$data" | sed "s/^\(.*\)\/\(.*\)\/$(rpl "$skinpack")\/\(.*\)$/\1\/\2\/$(rpl "$newskinpack")\/\3/" > data.txt

(
echo "renaming zip/skin_pack/$skinpack.zip to zip/skin_pack/$newskinpack.zip ..."
cd ../zip/skin_pack
mv "$skinpack".dir "$newskinpack".dir
mv "$skinpack".zip "$newskinpack".zip
)

echo "successfully renamed skinpack"
