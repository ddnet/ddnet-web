<html>
<head>
<title>Change Skin Pack</title>
</head>
<body>
<h1>Change Skin Pack</h1>

<?php

require("function.php");



if ($_POST["confirmed"] != "true")
{
  echo("Enter the new skin pack of the skin '".$_GET["skin"]."'.\n");
  echo("<form action=\"change_skin_pack.php".$args."\" method=\"post\" enctype=\"multipart/form-data\">\n");
  echo("<table cellpadding=\"5\">\n");
  echo("<tr><td>New Skin Pack</td><td><input name=\"new_skin_pack\" type=\"text\"></td></tr>\n");
  echo("</table>\n");
  echo("<input name=\"skin\" type=\"hidden\" value=\"".$_GET["skin"]."\">\n");
  echo("<input name=\"confirmed\" type=\"hidden\" value=\"true\">\n");
  echo("<br><input type=\"submit\" value=\"Change Skin Pack\">\n");
  echo("</form>\n");
}
else
{
  $command = "./change_skin_pack.sh ".sh($_POST["skin"])." ".sh($_POST["new_skin_pack"]);

  echo("Script Output:<br>\n");
  echo("<textarea cols=\"100\" rows=\"20\" style=\"resize:none\" readonly>\n");
  echo(linestart(">>> ", shell_exec($command)));
  echo("</textarea><br><br>\n");
}

echo("\n<br><a href=\"index.php".$args."\">Back To Skin Database</a>\n");

?>

</body>
</html>
