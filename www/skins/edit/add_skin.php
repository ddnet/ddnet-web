<html>
<head>
<title>Add Skin</title>
</head>
<body>
<h1>Add Skin</h1>

<?php

require("function.php");



if ($_POST["confirmed"] != "true")
{
  echo("<form action=\"add_skin.php".$args."\" method=\"post\" enctype=\"multipart/form-data\">\n");
  echo("<table cellpadding=\"5\">\n");
  echo("<tr><td>Image</td><td><input name=\"image\" type=\"file\"></td></tr>\n");
  echo("<tr><td>Creator</td><td><input name=\"creator\" type=\"text\"></td></tr>\n");
  echo("<tr><td>Skin Pack</td><td><input name=\"skin_pack\" type=\"text\"></td></tr>\n");
  echo("</table>\n");
  echo("<input name=\"confirmed\" type=\"hidden\" value=\"true\">\n");
  echo("<br><input type=\"submit\" value=\"Add Skin\">\n");
  echo("</form>\n");
}
else
{
  $command = "./add_skin.sh ".sh($_FILES["image"]["tmp_name"])." ".sh($_FILES["image"]["name"])." ".sh($_POST["creator"])." ".sh($_POST["skin_pack"]);

  echo("Script Output:<br>\n");
  echo("<textarea cols=\"100\" rows=\"20\" style=\"resize:none\" readonly>\n");
  echo(linestart(">>> ", shell_exec($command)));
  echo("</textarea><br><br>\n");
}

echo("\n<br><a href=\"index.php".$args."\">Back To Skin Database</a>\n");

?>

</body>
</html>
