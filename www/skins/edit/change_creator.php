<html>
<head>
<title>Change Creator</title>
</head>
<body>
<h1>Change Creator</h1>

<?php

require("function.php");



if ($_POST["confirmed"] != "true")
{
  echo("Enter the new creator of the skin '".$_GET["skin"]."'.\n");
  echo("<form action=\"change_creator.php".$args."\" method=\"post\" enctype=\"multipart/form-data\">\n");
  echo("<table cellpadding=\"5\">\n");
  echo("<tr><td>New Creator</td><td><input name=\"new_creator\" type=\"text\"></td></tr>\n");
  echo("</table>\n");
  echo("<input name=\"skin\" type=\"hidden\" value=\"".$_GET["skin"]."\">\n");
  echo("<input name=\"confirmed\" type=\"hidden\" value=\"true\">\n");
  echo("<br><input type=\"submit\" value=\"Change Creator\">\n");
  echo("</form>\n");
}
else
{
  $command = "./change_creator.sh ".sh($_POST["skin"])." ".sh($_POST["new_creator"]);

  echo("Script Output:<br>\n");
  echo("<textarea cols=\"100\" rows=\"20\" style=\"resize:none\" readonly>\n");
  echo(linestart(">>> ", shell_exec($command)));
  echo("</textarea><br><br>\n");
}

echo("\n<br><a href=\"index.php".$args."\">Back To Skin Database</a>\n");

?>

</body>
</html>
