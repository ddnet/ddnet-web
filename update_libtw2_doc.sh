#!/bin/bash

URL="/docs/libtw2"

if [ -z "$1" ]; then
	OUT_DIR="www/docs/libtw2"
else
	OUT_DIR="$1"
fi

function file_names() {
	# When adding/removing files, edit www/_data/menus.yml to update the menu
	echo connection.md,Connection
	echo datafile.md,Datafile
	echo demo.md,Demo
	echo huffman.md,Huffman
	echo int.md,Int
	echo map.md,Map
	echo packet.md,Packet
	echo packet7.md,Packet7
	echo quirks.md,Quirks
	echo serverinfo_extended.md,Serverinfo extended
	echo snapshot.md,Snapshot
	echo teehistorian.md,Teehistorian
}

function import_article() {
	local REMOTE_NAME="$1"
	local TITLE="$2"

	echo "---"
	echo "title: \"${TITLE}\""
	echo "layout: default"
	echo "menu-extern: docs-libtw2"
	echo "---"
	echo '<div id="global" class="block">'
	echo ""
	echo "<h2>${TITLE}</h2>"
	echo ""
	echo "<!-- File imported from https://github.com/heinrich5991/libtw2/blob/master/doc/${REMOTE_NAME}. -->"
	echo "<!-- Please create pull requests at https://github.com/heinrich5991/libtw2 if you want to edit this page. -->"
	echo ""
	echo '<small><i>This file is mirrored from the <a href="https://github.com/heinrich5991/libtw2">libtw2</a> documentation and is dual-licensed under MIT or APACHE.</i></small><br>'
	echo ""

	curl "https://raw.githubusercontent.com/heinrich5991/libtw2/master/doc/${REMOTE_NAME}" \
		| pandoc --from gfm --to commonmark \
		| sed 's/^#/###/g' \
		| sed 's/\.md)/)/g' \
		| pandoc --from commonmark --to html \

	echo '</div>'
}

mkdir -p "$OUT_DIR"

IFS=','

file_names | while read NAME TITLE
do
	FILENAME="${OUT_DIR}/${NAME/.md/}/index.html"
	mkdir -p "$(dirname "$FILENAME")"
	echo "importing ${NAME} to ${FILENAME}"
	import_article $NAME $TITLE > ${FILENAME}
done
