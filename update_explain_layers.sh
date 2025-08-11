#!/bin/bash

ARGS="--template explain-layers/template.svg"
DDNET_DIR="../ddnet"
OUT_DIR="www/explain"

./explain-layers/update_explain_layers.py $ARGS \
	--explain explain-layers/tiles.csv \
	--layer-image "${DDNET_DIR}/data/editor/entities_clear/ddnet.png" \
	--output "${OUT_DIR}/entities.svg"

./explain-layers/update_explain_layers.py $ARGS \
	--explain explain-layers/tiles.csv \
	--layer-image "${DDNET_DIR}/data/assets/entities/comfort/ddnet.png" \
	--output "${OUT_DIR}/entities-comfort.svg"

./explain-layers/update_explain_layers.py $ARGS \
	--explain explain-layers/tiles.csv \
	--layer-image "${DDNET_DIR}/data/editor/entities/DDNet.png" \
	--output "${OUT_DIR}/game.svg"

./explain-layers/update_explain_layers.py $ARGS \
	--explain explain-layers/tiles.csv \
	--layer-image "${DDNET_DIR}/data/editor/front.png" \
	--output "${OUT_DIR}/front.svg"

./explain-layers/update_explain_layers.py $ARGS \
	--explain explain-layers/tiles.csv \
	--layer-image "${DDNET_DIR}/data/editor/tele.png" \
	--output "${OUT_DIR}/tele.svg"

./explain-layers/update_explain_layers.py $ARGS \
	--explain explain-layers/speedup.csv \
	--layer-image "${DDNET_DIR}/data/editor/speedup.png"\
	--output "${OUT_DIR}/speedup.svg"

./explain-layers/update_explain_layers.py $ARGS \
	--explain explain-layers/tiles.csv \
	--explain-override explain-layers/switch.csv \
	--layer-image "${DDNET_DIR}/data/editor/switch.png" \
	--output "${OUT_DIR}/switch.svg"

./explain-layers/update_explain_layers.py $ARGS \
	--explain explain-layers/tiles.csv \
	--layer-image "${DDNET_DIR}/data/editor/tune.png"\
	--output "${OUT_DIR}/tune.svg"

./explain-layers/update_explain_game.py $ARGS \
	--explain explain-layers/game.csv \
	--template explain-layers/template.svg \
	--layer-image "${DDNET_DIR}/data/game.png" \
	--height 1024 \
	--height 512 \
	--output "${OUT_DIR}/game-png.svg"

