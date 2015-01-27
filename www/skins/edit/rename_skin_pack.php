<html>
<head>
<title>Rename Skin Pack</title>
</head>
<body>
<h1>Rename Skin Pack</h1>

<?php

require("function.php");



if ($_POST["confirmed"] != "true")
{
  echo("Enter the new name of the skin pack '".$_GET["skin_pack"]."'.\n");
  echo("<form action=\"rename_skin_pack.php".$args."\" method=\"post\" enctype=\"multipart/form-data\">\n");
  echo("<table cellpadding=\"5\">\n");
  echo("<tr><td>New Name</td><td><input name=\"new_name\" type=\"text\"></td></tr>\n");
  echo("</table>\n");
  echo("<input name=\"skin_pack\" type=\"hidden\" value=\"".$_GET["skin_pack"]."\">\n");
  echo("<input name=\"confirmed\" type=\"hidden\" value=\"true\">\n");
  echo("<br><input type=\"submit\" value=\"Rename Skin Pack\">\n");
  echo("</form>\n");
}
else
{
  $command = "./rename_skin_pack.sh ".sh($_POST["skin_pack"])." ".sh($_POST["new_name"]);

  echo("Script Output:<br>\n");
  echo("<textarea cols=\"100\" rows=\"20\" style=\"resize:none\" readonly>\n");
  echo(linestart(">>> ", shell_exec($command)));
  echo("</textarea><br><br>\n");
}

echo("\n<br><a href=\"index.php".$args."\">Back To Skin Database</a>\n");

?>

</body>
</html>
