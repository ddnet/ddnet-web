#!/usr/bin/env python3

# zlib License
#
# (C) 2020 Patiga
# (C) 2022 Zwelf
#
# This software is provided 'as-is', without any express or implied
# warranty.  In no event will the authors be held liable for any damages
# arising from the use of this software.
#
# Permission is granted to anyone to use this software for any purpose,
# including commercial applications, and to alter it and redistribute it
# freely, subject to the following restrictions:
#
# 1. The origin of this software must not be misrepresented; you must not
#    claim that you wrote the original software. If you use this software
#    in a product, an acknowledgment in the product documentation would be
#    appreciated but is not required.
# 2. Altered source versions must be plainly marked as such, and must not be
#   misrepresented as being the original software.
# 3. This notice may not be removed or altered from any source distribution.

from PIL import Image
import numpy as np
import base64
from typing import Optional
import csv
import itertools

class Tile:
    def __init__(self, title: str, desc: str, x: int, y: int, dx: int, dy: int, group: str, direction: str, link: Optional[str]):
        self.title = title
        self.desc = desc
        self.x = x
        self.y = y
        self.dx = dx
        self.dy = dy
        self.group = group
        self.direction = direction
        self.link = link

    def get_pos(self):
        """
        returns the pixel coordinates on the layer image of the tile
        on an layer image there are 16x16 tiles and each with a dimension of 64x64 pixels
        """
        return (self.x, self.x + self.dx, self.y, self.y + self.dy)

    def get_svg(self, is_grouped):
        x1, x2, y1, y2 = self.get_pos()
        width = x2 - x1
        height = y2 - y1
        tabs = 1
        if is_grouped:
            tabs += 1
        rectangle = "\t" * tabs + "<rect id=\"{index}\" x=\"{x}\" y=\"{y}\" width=\"{width}\" height=\"{height}\" class=\"tooltip\"></rect>\n" \
            .format(index=self.title,
                    x=x1,
                    y=y1,
                    width=width,
                    height=height)
        if self.link is None:
            return rectangle
        
        else:
            # wrap into rectangle into <a> </a>
            return tabs * "\t" + "<a xlink:href=\"{link}\">\n \
                    \t{rectangle}\n".format(link=self.link, rectangle=rectangle) \
                    + tabs * "\t" + "</a>\n"

    def get_svg_tooltip(self):
        """
        get svg tooltip into the direction "up" or "down"
        """
        x1, x2, y1, y2 = self.get_pos()
        x = (x1 + x2) // 2
        if self.direction == "up":
            y = y1
        elif self.direction == "down":
            y = y2
        else:
            raise ValueError('direction should be either "up" or "down"')

        return '\t<text id="desc{id}" x="{x}" y="{y}" direction="{direction}" class="multiline" data-width="400" visibility="hidden">{text}</text>\n' \
            .format(id=self.title, x=x, y=y, direction=self.direction, text = "{} ({}x{}+{}+{})  {}".format(self.title, self.dx, self.dy, self.x, self.y, self.desc))

def parse_tiles_explanations(tiles, file_name: str):
    """
    parses tiles explanations for the entities_clear image, since this contains
    allmost all game tiles
    returns dictionary mapping from tile_index to Tile
    """
    with open(file_name) as f:
        tiles_reader = csv.DictReader(f)

        for row in tiles_reader:
            # allow copying previous tiles
            title = row["Title"]
            group = row["Group"]
            x = int(row["Offset-width"])
            y = int(row["Offset-height"])
            dx = int(row["Width"])
            dy = int(row["Height"])
            direction = row["Direction"]
            desc = row["Description"]
            link = row["Link"]

            # optionally include link
            if link == "":
                link = None
            tiles[title] = Tile(title, desc, x, y, dx, dy, group, direction, link)
    return tiles

def parse_groups(tiles):
    """
    return groups -> list of tile indices
    """
    groups = {}
    for tile_idx in tiles:
        tile = tiles[tile_idx]
        if tile.group != "":
            if tile.group in groups:
                groups[tile.group].append(tile_idx)
            else:
                groups[tile.group] = [tile_idx]
    return groups

def layer_filter_groups(layer_tiles, groups):
    layer_groups = []
    for group in groups:
        # filter elements which are not present in the current layer
        group = [t for t in groups[group] if t in layer_tiles]
        if len(group) > 1:
            layer_groups.append(group)
    return layer_groups

def main():
    import argparse
    parser = argparse.ArgumentParser(description='Generate DDNet explain svgs out of the source image and explain csv')
    parser.add_argument('--width', help='width of the image', default=1024, type=int)
    parser.add_argument('--height', help='height of the image', default=1024, type=int)
    parser.add_argument('--layer-image', help='path to the ddnet image to parse', required=True)
    parser.add_argument('--explain', default='explain-layers/game.csv', help='Explain strings in the csv file')
    parser.add_argument('--explain-override', help='Same as explain, but can override strings set in explain')
    parser.add_argument('--template', default='explain-layers/template.svg', help='template file to fill the svgs with')
    parser.add_argument('--output', default='output.svg', help='output .svg file')
    parser.add_argument('--external-image', help='Load background image from external source. Image gets embedded if not set, can be a relative or an absolute link')
    args = parser.parse_args()

    # parses explain and groups strings from csv 
    tiles = {}
    parse_tiles_explanations(tiles, args.explain)
    if args.explain_override != None:
        parse_tiles_explanations(tiles, args.explain_override)
    groups = parse_groups(tiles)
   
    with open(args.template) as f:
        template = f.read()

    layer_groups = layer_filter_groups(tiles, groups)
    save_svg(tiles,
            args.layer_image,
            args.width,
            args.height,
            args.output,
            layer_groups,
            template,
            args.external_image)

def save_svg(layer_tiles, image_path, width, height, output_path, groups, template, external_image):
    tiles = []
    tooltips = []

    for group in groups:
        group_tiles = []
        for index in group:
            group_tiles.append(layer_tiles[index].get_svg(is_grouped = True))
            tooltips.append(layer_tiles[index].get_svg_tooltip())
            del layer_tiles[index]
        tiles.append("\t<g>\n{tiles}\t</g>\n".format(tiles = "".join(group_tiles)))

    # iterate over remaining (non-grouped) tiles
    for index in layer_tiles:
        tiles.append(layer_tiles[index].get_svg(is_grouped = False))
        tooltips.append(layer_tiles[index].get_svg_tooltip())

    svg = "{}{}".format(
            "".join(tiles),
            "".join(tooltips))

    if external_image != None:
        image = external_image
    else:
        with open(image_path, "rb") as img:
            # embedding the image, could link instead to reduce file size
            image = img.read()
            image = "data:image/png;base64," + base64.b64encode(image).decode()
    with open(output_path, "w") as w:
        w.write(template.format(image_file = image, explanations = svg, width = width, height = height))

if __name__ == "__main__":
    main()
