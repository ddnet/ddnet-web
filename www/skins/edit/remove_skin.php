<html>
<head>
<title>Remove Skin</title>
</head>
<body>
<h1>Remove Skin</h1>

<?php

require("function.php");



if ($_POST["confirmed"] != "true")
{
  echo("Dou you really want to remove the skin '".$_GET["skin"]."' from the skin database?\n");
  echo("<form action=\"remove_skin.php".$args."\" method=\"post\" enctype=\"multipart/form-data\">\n");
  echo("<input name=\"skin\" type=\"hidden\" value=\"".$_GET["skin"]."\">\n");
  echo("<input name=\"confirmed\" type=\"hidden\" value=\"true\">\n");
  echo("<br><input type=\"submit\" value=\"Remove Skin\">\n");
  echo("</form>\n");
}
else
{
  $command = "./remove_skin.sh ".sh($_POST["skin"]);

  echo("Script Output:<br>\n");
  echo("<textarea cols=\"100\" rows=\"20\" style=\"resize:none\" readonly>\n");
  echo(linestart(">>> ", shell_exec($command)));
  echo("</textarea><br><br>\n");
}

echo("\n<br><a href=\"index.php".$args."\">Back To Skin Database</a>\n");

?>

</body>
</html>
