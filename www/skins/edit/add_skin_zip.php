<html>
<head>
<title>Add Skin Zip</title>
</head>
<body>
<h1>Add Skin Zip</h1>

<?php

require("function.php");



if ($_POST["confirmed"] != "true")
{
  echo("<form action=\"add_skin_zip.php".$args."\" method=\"post\" enctype=\"multipart/form-data\">\n");
  echo("<table cellpadding=\"5\">\n");
  echo("<tr><td>Image Zip</td><td><input name=\"image_zip\" type=\"file\"></td></tr>\n");
  echo("<tr><td>Creator</td><td><input name=\"creator\" type=\"text\"></td></tr>\n");
  echo("<tr><td>Skin Pack</td><td><input name=\"skin_pack\" type=\"text\"></td></tr>\n");
  echo("</table>\n");
  echo("<input name=\"confirmed\" type=\"hidden\" value=\"true\">\n");
  echo("<br><input type=\"submit\" value=\"Add Skin Zip\">\n");
  echo("</form>\n");
}
else
{
  $command = "./add_skin_zip.sh ".sh($_FILES["image_zip"]["tmp_name"])." ".sh($_FILES["image_zip"]["name"])." ".sh($_POST["creator"])." ".sh($_POST["skin_pack"]);

  echo("Script Output:<br>\n");
  echo("<textarea cols=\"100\" rows=\"20\" style=\"resize:none\" readonly>\n");
  echo(linestart(">>> ", shell_exec($command)));
  echo("</textarea><br><br>\n");
}

echo("\n<br><a href=\"index.php".$args."\">Back To Skin Database</a>\n");

?>

</body>
</html>
