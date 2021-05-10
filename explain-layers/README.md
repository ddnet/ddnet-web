# Generate Explain Layers

Preview at <https://ddnet.tw/explain/>

To change the descriptions, modify [tiles.csv](tiles.csv) with [LibreOffice Calc][1] or the text editor of your choice. Using the [Github web editor][2] is also possible.

It is possible to reference tiles from previous lines with a `$`-sign, to not repeat the exact same explain text. E.g. `$3` to copy the field from the unhookable-tile.

## For maintainers

Updating all svgs is possible by executing [`./update_explain_layers.sh`](../update_explain_layers.sh) in the parent directory.
Extending the explanations to other mods is easy by using the `--explain-override` option. See [switch.csv](switch.csv) and [../update_explain_layers.sh](../update_explain_layers.sh) for an example.

You can reference the image instead of embedding by specifying an additional command line argument.
The following command line arguments are possible, assuming the svg is located in `https://ddnet.tw/explain/f-ddrace.svg` and the image is located in `https://ddnet.tw/explain/f-ddrace.png`:

```bash
--external-image "https://ddnet.tw/explain/f-ddrace.png"
--external-image "f-ddrace.png"
--external-image "/explain/f-ddrace.png"
```

[1]: https://www.libreoffice.org/
[2]: https://github.com/ddnet/ddnet-web/edit/master/explain-layers/tiles.csv
