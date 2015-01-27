#!/bin/sh
. ./function.sh

[ $# -ne 2 ] && err "need 2 args, got $# args"
skinname="$1"
skinpack="$2"
#[ "$(echo "$skinname" | grep "/")" ] && err "skinname must not contain /"
#[ "$(echo "$skinpack" | grep "/")" ] && err "skinpack must not contain /"

oldskinpack="$(get_skinname_pos 2)"


echo "change_skin_pack.sh: skinname=\"$skinname\" skinpack=\"$skinpack\" oldskinpack=\"$oldskinpack\""

echo "changing skinpack in data.txt ..."
data="$(cat data.txt)"
echo "$data" | sed "s/^$(rpl "$skinname")\/\(.*\)\/.*\/\(.*\)$/$(rpl "$skinname")\/\1\/$(rpl "$skinpack")\/\2/" > data.txt

(
cd ../zip/skin_pack

if [ "$oldskinpack" ]; then
  (
  echo "removing skin from zip/skin_pack/$oldskinpack.zip ..."
  rm "$oldskinpack".dir/"$skinname".png
  rm "$oldskinpack".zip
  if [ "$(ls -A "$oldskinpack".dir)" ]; then
    zip "$oldskinpack".zip "$oldskinpack".dir/* > /dev/null
  else
    rmdir "$oldskinpack".dir
  fi
  )
fi

if [ "$skinpack" ]; then
  (
  echo "adding skin to zip/skin_pack/$skinpack.zip ..." 
  mkdir -p "$skinpack".dir
  cp ../../skin/"$skinname".png "$skinpack".dir
  zip "$skinpack".zip "$skinpack".dir/* > /dev/null
  )
fi

)

echo "successfully changed skinpack"
