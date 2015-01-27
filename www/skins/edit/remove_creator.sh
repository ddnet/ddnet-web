#!/bin/sh
. ./function.sh

[ $# -ne 1 ] && err "need 1 args, got $# args"
creator="$1"
[ "$creator" ] || err "creator must not be empty"
[ "$(echo "$creator" | grep "/")" ] && err "creator must not contain /"


echo "remove_creator.sh: creator=\"$creator\""

sed -n "s/^\(.*\)\/$(rpl "$creator")\/.*\/.*$/\1/p" data.txt | xargs -d "\n" -n1 -r ./remove_skin.sh

echo "successfully removed creator"
