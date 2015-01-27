#!/bin/sh
. ./function.sh

[ $# -ne 1 ] && err "need 1 args, got $# args"
skinpack="$1"
[ "$skinpack" ] || err "skinpack must not be empty"
[ "$(echo "$skinpack" | grep "/")" ] && err "skinpack must not contain /"


echo "remove_skin_pack.sh: skinpack=\"$skinpack\""

sed -n "s/^\(.*\)\/.*\/$(rpl "$skinpack")\/.*$/\1/p" data.txt | xargs -d "\n" -n1 -r ./remove_skin.sh

echo "successfully removed skinpack"
