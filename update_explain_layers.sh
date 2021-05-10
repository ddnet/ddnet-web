#!/bin/bash

ARGS="--template explain-layers/template.svg --explain explain-layers/tiles.csv"
DDNET_DIR="../ddnet"
OUT_DIR="www/explain"

./update_explain_layers.py $ARGS \
	--layer-image "${DDNET_DIR}/data/editor/entities_clear/ddnet.png" \
	--output "${OUT_DIR}/entities.svg"

./update_explain_layers.py $ARGS \
	--layer-image "${DDNET_DIR}/data/editor/entities/DDNet.png" \
	--output "${OUT_DIR}/game.svg"

./update_explain_layers.py $ARGS \
	--layer-image "${DDNET_DIR}/data/editor/front.png" \
	--output "${OUT_DIR}/front.svg"

./update_explain_layers.py $ARGS \
	--layer-image "${DDNET_DIR}/data/editor/tele.png" \
	--output "${OUT_DIR}/tele.svg"

./update_explain_layers.py $ARGS \
	--layer-image "${DDNET_DIR}/data/editor/speedup.png"\
	--output "${OUT_DIR}/speedup.svg"

./update_explain_layers.py $ARGS \
	--explain-override explain-layers/switch.csv \
	--layer-image "${DDNET_DIR}/data/editor/switch.png" \
	--output "${OUT_DIR}/switch.svg"

./update_explain_layers.py $ARGS \
	--layer-image "${DDNET_DIR}/data/editor/tune.png"\
	--output "${OUT_DIR}/tune.svg"
