#!/usr/bin/env python3

# zlib License
#
# (C) 2020 Patiga
# (C) 2021 Zwelf
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
import os
from typing import Optional

IMAGE_PATHS = {
        "entities": "data/editor/entities_clear/ddnet.png",
        "game": "data/editor/entities/DDNet.png",
        "front": "data/editor/front.png",
        "tele": "data/editor/tele.png",
        "speedup": "data/editor/speedup.png",
        "switch": "data/editor/switch.png",
        "tune": "data/editor/tune.png",
}

class Tile:
    def __init__(self, label: str, desc: str, index: int, link: Optional[str]):
        self.label = label
        self.desc = desc
        self.index = index
        self.link = link

    def copy_with_index(self, index):
        """
        In the switch layer the "Timed Switch Activator" is on a different index (22 instead of 8)
        """
        return Tile(self.label, self.desc, index, self.link)

    def get_dim(self):
        """
        returns how many tiles in the x and y direction are occupied by this tile
        """
        if self.index == 140:
            return (4, 2) # Credit Tile
        if self.index == 190:
            return (2, 1) # Entities Off Warning Tile
        return (1, 1)

    def get_pos(self):
        """
        returns the pixel coordinates on the layer image of the tile
        on an layer image there are 16x16 tiles and each with a dimension of 64x64 pixels
        """
        dim = self.get_dim()
        x = self.index % 16
        x1 = x * 64
        x2 = (x + dim[0]) * 64
        y = self.index // 16
        y1 = y * 64
        y2 = (y + dim[1]) * 64
        return (x1, x2, y1, y2)

    # takes a layer_image and extracts this tile
    def get_image(self, layer_image):
        x1, x2, y1, y2 = self.get_pos()
        return layer_image[y1:y2, x1:x2]

    def get_svg(self, is_grouped):
        x1, x2, y1, y2 = self.get_pos()
        dim = self.get_dim()
        width = x2 - x1
        height = y2 - y1
        tabs = 1
        if is_grouped:
            tabs += 1
        rectangle = "\t" * tabs + "<rect id=\"{index}\" x=\"{x}\" y=\"{y}\" width=\"{width}\" height=\"{height}\" class=\"tooltip\"></rect>\n" \
            .format(index=self.index,
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
        if self.index < 140:
            direction = "down"
        else:
            direction = "up"

        x1, x2, y1, y2 = self.get_pos()
        x = (x1 + x2) // 2
        if direction == "up":
            y = y1
        elif direction == "down":
            y = y2
        else:
            raise ValueError('direction should be either "up" or "down"')

        return '\t<text id="desc{id}" x="{x}" y="{y}" direction="{direction}" class="multiline" data-width="400" visibility="hidden">{text}</text>\n' \
            .format(id=self.index, x=x, y=y, direction=direction, text = "{} ({})  {}".format(self.label, self.index, self.desc))

def parse_tiles_explanations(file_name: str):
    """
    parses tiles explanations for the entities_clear image, since this contains
    allmost all game tiles
    returns dictionary mapping from tile_index to Tile
    """
    tiles = {}
    with open(file_name) as f:
        desc = None
        for line in f:
            line = [string.strip() for string in line.split(";")]
            index = int(line[0])
            label = line[1]
            # if no description is provided, keep the description from the previous tile
            if line[2] != "":
                desc = line[2]
            # optionally include link
            if len(line) == 4 and line[3] != "":
                link = line[3]
            else:
                link = None
            tiles[index] = Tile(label, desc, index, link)
    return tiles

# parses lines from 'groups.csv'
def parse_ranges(line):
    indices = set()
    for string in line.split(","):
        x = string.split("-")
        indices.update(range(int(x[0]), int(x[-1]) + 1))
    return indices

def merge_group(g, merge_groups):
    for (i, group) in enumerate(merge_groups):
        if not g.isdisjoint(group):
            merge_groups[i] = g.union(group)
            return
    merge_groups.append(g)

def union_non_disjunct(groups):
    # union of all sets where the intersection != empty
    merged_groups = []
    for group in groups:
        merge_group(group, merged_groups)
    return merged_groups

def parse_groups(file_name: str):
    with open(file_name) as f:
        groups = [parse_ranges(line) for line in f]
    prev_num_groups = -1
    while prev_num_groups != len(groups):
        prev_num_groups = len(groups)
        groups = union_non_disjunct(groups)
    return groups

# excluding transparent
def extract_layer_tiles(image_path, tiles):
    layer_image = np.array(Image.open(image_path)).astype("int32")
    # store for each pixel, if is it fully transparent (the a value of the rgba equals to zero)
    is_transparent = layer_image[:, :, 3:4] == 0
    layer_tiles = {}
    for index in tiles:
        tile_image = tiles[index].get_image(layer_image)
        # only add tiles with some sort of content (or the air tile)
        if index == 0 or np.any(tile_image[:, :, 3:4] != 0):
            layer_tiles[index] = tiles[index]
    return layer_tiles

def layer_filter_groups(layer, layer_tiles, groups):
    layer_groups = []
    for group in groups:
        # hacky solution for the different index in the switch layer
        if layer == "switch":
            if 22 in group:
                continue
            if 8 in group:
                group = [22 if x == 8 else x for x in group]
        # filter elements which are not present in the current layer
        group = [t for t in group if t in layer_tiles]
        if len(group) > 1:
            layer_groups.append(group)
    return layer_groups

def main():
    import argparse
    parser = argparse.ArgumentParser(description='Generate DDNet explain svgs out of the source image and explain csv')
    parser.add_argument('--ddnet', default='../ddnet', help='path to the ddnet git repository')
    parser.add_argument('--explain', default='explain-layers/tiles.csv', help='Explain strings in the csv file')
    parser.add_argument('--groups', default='explain-layers/groups.txt', help='File containing the grouped tiles')
    parser.add_argument('--template', default='explain-layers/template.svg', help='template file to fill the svgs with')
    parser.add_argument('--output', default='www/explain', help='output directory for the .svgs')
    args = parser.parse_args()

    # parses explain strings in tiles.csv and groups
    tiles = parse_tiles_explanations(args.explain)
    groups = parse_groups(args.groups)
   
    layer_tiles = {}
    for layer in IMAGE_PATHS:
        png_path = IMAGE_PATHS[layer]
        # parses pngs of layers and maps all significant indices to its visual representation in that layer
        layer_tiles[layer] = extract_layer_tiles(os.path.join(args.ddnet, png_path), tiles)

    # In the switch layer the "Timed Switch Activator" is on a different index (22 instead of 8)
    layer_tiles["switch"][22] = tiles[8].copy_with_index(22)

    with open(args.template) as f:
        template = f.read()

    for layer in IMAGE_PATHS:
        image_path = IMAGE_PATHS[layer]
        layer_groups = layer_filter_groups(layer, layer_tiles[layer], groups)
        save_svg(layer,
                layer_tiles[layer],
                os.path.join(args.ddnet, image_path),
                os.path.join(args.output, layer + '.svg'),
                layer_groups,
                template)

def save_svg(layer, layer_tiles, image_path, output_path, groups, template):
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

    with open(image_path, "rb") as img:
        # embedding the image, could link instead to reduce file size
        embedded_image = img.read()
        embedded_image = "data:image/png;base64," + base64.b64encode(embedded_image).decode()
    with open(output_path, "w") as w:
        w.write(template.format(image_file = embedded_image, explanations = svg))

if __name__ == "__main__":
    main()
