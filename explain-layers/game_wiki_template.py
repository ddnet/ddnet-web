#!/usr/bin/env python3

# zlib License
#
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

# This code is used to generate https://wiki.ddnet.org/wiki/Template:Game.png
# and https://wiki.ddnet.org/wiki/Template:Game.png_style and can be used again
# when game.png changes and therefore the game.csv in this directory.

import csv

output = """
<includeonly>{{{{
}}}}  
</includeonly><noinclude>
== Usage ==
{{| class="wikitable"
|+ Usage
|-
! code !! result
|-
{table}
|}}
</noinclude>
""".strip()

style = """
<includeonly>{{{{#switch: {{{{{{1}}}}}}
{cases}
| default = Error
}}}}  
</includeonly><noinclude>
</noinclude>
""".strip()

def main():
    import argparse
    parser = argparse.ArgumentParser(description='Generate DDNet explain svgs out of the source image and explain csv')
    parser.add_argument('--explain', default='game.csv', help='Explain strings in the csv file')
    args = parser.parse_args()

    tiles = []
    sty = []
    desc = []

    with open(args.explain) as f:
        tiles_reader = csv.DictReader(f)

        for row in tiles_reader:
            # allow copying previous tiles
            title = row["Title"]
            x = int(row["Offset-width"])
            y = int(row["Offset-height"])
            dx = int(row["Width"])
            dy = int(row["Height"])

            usage = '{{{{Game.png|{}}}}}'.format(title)

            tiles.append("| <pre>{usage}</pre> || {usage}".format(usage=usage))
            sty.append('| {} = width: {}px; height: {}px; background-position: -{}px -{}px'.format(title, dx, dy, x, y))

    print(style.format(cases = '\n'.join(sty)))
    print('=====')
    print(output.format(table = '\n|-\n'.join(tiles)))
    return tiles

if __name__ == '__main__':
    main()
