#!/bin/sh
. ./function.sh

[ $# -ne 2 ] && err "need 2 args, got $# args"
skinname="$1"
creator="$2"
[ "$(echo "$skinname" | grep "/")" ] && err "skinname must not contain /"
[ "$(echo "$creator" | grep "/")" ] && err "creator must not contain /"

oldcreator="$(get_skinname_pos 1)"


echo "change_creator.sh: skinname=\"$skinname\" creator=\"$creator\" oldcreator=\"$oldcreator\""

echo "changing creator in data.txt ..."
data="$(cat data.txt)"
echo "$data" | sed "s/^$(rpl "$skinname")\/.*\/\(.*\)\/\(.*\)$/$(rpl "$skinname")\/$(rpl "$creator")\/\1\/\2/" > data.txt

(
cd ../zip/creator

if [ "$oldcreator" ]; then
  (
  echo "removing skin from zip/creator/$oldcreator.zip ..."
  rm "$oldcreator".dir/"$skinname".png
  rm "$oldcreator".zip
  if [ "$(ls -A "$oldcreator".dir)" ]; then
    zip "$oldcreator".zip "$oldcreator".dir/* > /dev/null
  else
    rmdir "$oldcreator".dir
  fi
  )
fi

if [ "$creator" ]; then
  (
  echo "adding skin to zip/creator/$creator.zip ..." 
  mkdir -p "$creator".dir
  cp ../../skin/"$skinname".png "$creator".dir
  zip "$creator".zip "$creator".dir/* > /dev/null
  )
fi

)

echo "successfully changed creator"
