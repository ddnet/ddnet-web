#!/bin/sh
. ./function.sh

[ $# -ne 1 ] && err "need 1 args, got $# args"
skinname="$1"
[ "$(echo "$skinname" | grep "/")" ] && err "skinname must not contain /"

creator="$(get_skinname_pos 1)"
skinpack="$(get_skinname_pos 2)"


echo "remove_skin.sh: skinname=\"$skinname\" creator=\"$creator\" skinpack=\"$skinpack\""

echo "removing skin from data.txt ..."
data="$(grep -v "^$(rpl "$skinname")/" data.txt)"
[ "$data" ] && echo "$data" > data.txt || > data.txt

echo "removing skin from skin folder ..."
rm ../skin/"$skinname".png

(
echo "removing skin from zip/database.zip ..."
cd ../zip
rm database.dir/"$skinname".png
rm database.zip
if [ "$(ls -A database.dir)" ]; then
  zip database.zip database.dir/* > /dev/null
else
  rmdir database.dir
fi
)

if [ "$creator" ]; then
  (
  echo "removing skin from zip/creator/$creator.zip ..."
  cd ../zip/creator
  rm "$creator".dir/"$skinname".png
  rm "$creator".zip
  if [ "$(ls -A "$creator".dir)" ]; then
    zip "$creator".zip "$creator".dir/* > /dev/null
  else
    rmdir "$creator".dir
  fi
  )
fi

if [ "$skinpack" ]; then
  (
  echo "removing skin from zip/skin_pack/$skinpack.zip ..."
  cd ../zip/skin_pack
  rm "$skinpack".dir/"$skinname".png
  rm "$skinpack".zip
  if [ "$(ls -A "$skinpack".dir)" ]; then
    zip "$skinpack".zip "$skinpack".dir/* > /dev/null
  else
    rmdir "$skinpack".dir
  fi
  )
fi

echo "successfully removed skin"
