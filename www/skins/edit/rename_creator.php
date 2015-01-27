<html>
<head>
<title>Rename Creator</title>
</head>
<body>
<h1>Rename Creator</h1>

<?php

require("function.php");



if ($_POST["confirmed"] != "true")
{
  echo("Enter the new name of the creator '".$_GET["creator"]."'.\n");
  echo("<form action=\"rename_creator.php".$args."\" method=\"post\" enctype=\"multipart/form-data\">\n");
  echo("<table cellpadding=\"5\">\n");
  echo("<tr><td>New Name</td><td><input name=\"new_name\" type=\"text\"></td></tr>\n");
  echo("</table>\n");
  echo("<input name=\"creator\" type=\"hidden\" value=\"".$_GET["creator"]."\">\n");
  echo("<input name=\"confirmed\" type=\"hidden\" value=\"true\">\n");
  echo("<br><input type=\"submit\" value=\"Rename Creator\">\n");
  echo("</form>\n");
}
else
{
  $command = "./rename_creator.sh ".sh($_POST["creator"])." ".sh($_POST["new_name"]);

  echo("Script Output:<br>\n");
  echo("<textarea cols=\"100\" rows=\"20\" style=\"resize:none\" readonly>\n");
  echo(linestart(">>> ", shell_exec($command)));
  echo("</textarea><br><br>\n");
}

echo("\n<br><a href=\"index.php".$args."\">Back To Skin Database</a>\n");

?>

</body>
</html>
