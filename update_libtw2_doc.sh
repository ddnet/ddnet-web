#!/bin/bash

URL="/docs/libtw2"

if [ -z "$1" ]; then
	OUT_DIR="www/docs/libtw2"
else
	OUT_DIR="$1"
fi

INDEX="${OUT_DIR}/index.html"

function file_names() {
	echo connection.md,Connection
	echo datafile.md,Datafile
	echo demo.md,Demo
	echo huffman.md,Huffman
	echo int.md,Int
	echo map.md,Map
	echo packet.md,Packet
	echo quirks.md,Quirks
	echo serverinfo_extended.md,Serverinfo extended
	echo snapshot.md,Snapshot
	echo teehistorian.md,Teehistorian
}

function menu() {
	echo "menu: |"
	echo "  <ul>"
	file_names | while read NAME TITLE
	do
		echo "    <li><a href=\"${URL}/${NAME/.md/}\">${TITLE}</a></li>"
	done
	echo "  </ul>"
}


function import_article() {
	local REMOTE_NAME="$1"
	local TITLE="$2"

	echo "---"
	echo "title: \"${TITLE}\""
	echo "layout: default"
	menu
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

	# add a link to the index page
	echo "  <li><a href=\"${REMOTE_NAME/.md/}\">${TITLE}</a></li>" >> $INDEX
}

function generate_index_pre() {
	echo "---"
	echo "title: \"Libtw2 doc\""
	echo "layout: default"
	menu
	echo "---"
	echo '<div id="global" class="block">'
	echo ""
	echo "<!-- This is an auto generated file. If you want to make changes edit scripts/import-twmap2-doc.sh instead -->"
	echo ""
	echo "<h2>Libtw2 doc</h2> "
	echo '<small><i>'
	echo 'This section is mirrored from the <a href="https://github.com/heinrich5991/libtw2">libtw2</a> documentation and is dual-licensed under MIT or APACHE.</i></small>'
	echo '</i></small><br>'
	echo ""
	echo "Technical documentation of Teeworlds file formats and network protocol"
	echo ""
	echo "<ul>"
}

function generate_index_post() {
	echo "</ul>"
	echo "</div>"
}

mkdir -p "$OUT_DIR"

IFS=','

# regenerate index page
generate_index_pre > $INDEX

file_names | while read NAME TITLE
do
	FILENAME="${OUT_DIR}/${NAME/.md/}/index.html"
	mkdir "$(basename "$FILENAME")"
	echo "importing ${NAME} to ${FILENAME}"
	import_article $NAME $TITLE > ${FILENAME}
done

generate_index_post >> $INDEX

