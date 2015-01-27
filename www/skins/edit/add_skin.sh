#!/bin/sh
. ./function.sh

if [ "$1" = "-z" ]; then
  ./add_skin.sh "$4" "$(basename "$4")" "$2" "$3"
  exit
fi

[ $# -ne 4 ] && err "need 4 args, got $# args"
tmpname="$1"
skinname="$2"
creator="$3"
skinpack="$4"
[ "$(echo "$skinname" | grep ".png$")" ] || err "skinname must end with .png"
[ "$(file -b --mime-type "$tmpname")" = "image/png" ] || err "image must be png"
[ "$(echo "$skinname" | grep "/")" ] && err "skinname must not contain /"
[ "$(echo "$creator" | grep "/")" ] && err "creator must not contain /"
[ "$(echo "$skinpack" | grep "/")" ] && err "skinpack must not contain /"

skinname="$(basename "$skinname" .png)"
releasedate="$(date "+%Y-%m-%d")"


echo "add_skin.sh: skinname=\"$skinname\" creator=\"$creator\" skinpack=\"$skinpack\" releasedate=\"$releasedate\""

if [ "$(grep "^$(rpl "$skinname")/" data.txt)" ]; then
  echo "removing old skin with same name ..."
  ./remove_skin.sh "$skinname"
fi

echo "adding skin to data.txt ..."
echo "$skinname/$creator/$skinpack/$releasedate" >> data.txt

echo "adding skin to skin folder ..."
cp "$tmpname" ../skin/"$skinname".png

(
echo "adding skin to zip/database.zip ..."
cd ../zip
mkdir -p database.dir
cp ../skin/"$skinname".png database.dir
zip database.zip database.dir/* > /dev/null
)

if [ "$creator" ]; then
  (
  echo "adding skin to zip/creator/$creator.zip ..."
  cd ../zip/creator
  mkdir -p "$creator".dir
  cp ../../skin/"$skinname".png "$creator".dir
  zip "$creator".zip "$creator".dir/* > /dev/null
  )
fi

if [ "$skinpack" ]; then
  (
  echo "adding skin to zip/skin_pack/$skinpack.zip ..."
  cd ../zip/skin_pack
  mkdir -p "$skinpack".dir
  cp ../../skin/"$skinname".png "$skinpack".dir
  zip "$skinpack".zip "$skinpack".dir/* > /dev/null
  )
fi

echo "successfully added skin"
