#!/bin/sh
. ./function.sh

[ $# -ne 2 ] && err "need 2 args, got $# args"
creator="$1"
newcreator="$2"
[ "$creator" ] || err "creator must not be empty"
[ "$(echo "$creator" | grep "/")" ] && err "creator must not contain /"
[ "$(echo "$newcreator" | grep "/")" ] && err "newcreator must not contain /"


echo "rename_creator.sh: creator=\"$creator\" newcreator=\"$newcreator\""

echo "changing creator in data.txt ..."
data="$(cat data.txt)"
echo "$data" | sed "s/^\(.*\)\/$(rpl "$creator")\/\(.*\)\/\(.*\)$/\1\/$(rpl "$newcreator")\/\2\/\3/" > data.txt

(
echo "renaming zip/creator/$creator.zip to zip/creator/$newcreator.zip ..."
cd ../zip/creator
mv "$creator".dir "$newcreator".dir
mv "$creator".zip "$newcreator".zip
)

echo "successfully renamed creator"
