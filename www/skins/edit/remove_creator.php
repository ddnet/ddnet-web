<html>
<head>
<title>Remove Creator</title>
</head>
<body>
<h1>Remove Creator</h1>

<?php

require("function.php");



if ($_POST["confirmed"] != "true")
{
  echo("Dou you really want to remove all skins by the creator '".$_GET["creator"]."' from the skin database?\n");
  echo("<form action=\"remove_creator.php".$args."\" method=\"post\" enctype=\"multipart/form-data\">\n");
  echo("<input name=\"creator\" type=\"hidden\" value=\"".$_GET["creator"]."\">\n");
  echo("<input name=\"confirmed\" type=\"hidden\" value=\"true\">\n");
  echo("<br><input type=\"submit\" value=\"Remove Creator\">\n");
  echo("</form>\n");
}
else
{
  $command = "./remove_creator.sh ".sh($_POST["creator"]);

  echo("Script Output:<br>\n");
  echo("<textarea cols=\"100\" rows=\"20\" style=\"resize:none\" readonly>\n");
  echo(linestart(">>> ", shell_exec($command)));
  echo("</textarea><br><br>\n");
}

echo("\n<br><a href=\"index.php".$args."\">Back To Skin Database</a>\n");

?>

</body>
</html>
