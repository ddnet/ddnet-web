---
layout: default
title: Skin Database - DDraceNetwork
head: <base href="..">
---
      <div class="block">

<?php
chdir("..");

function change ($array, $a, $b, $c, $d) {
  for ($i = 0; $i < count($array); $i++) {
    $parts = explode("/", $array[$i]);
    $array[$i] = $parts[$a]."/".$parts[$b]."/".$parts[$c]."/".$parts[$d];
  }
  return $array;
}

function cmp ($a, $b) {
  if ($a == $b)
    return 0;

  $a = strtolower($a);
  $b = strtolower($b);

  if ($a[0] == "/")
    $a = "~".$a;
  if ($b[0] == "/")
    $b = "~".$b;

  return ($a < $b) ? -1 : 1;
}

function rcmp ($a, $b) {
  if ($a == $b)
    return 0;

  $a = strtolower($a);
  $b = strtolower($b);

  return ($a > $b) ? -1 : 1;
}

function filter ($array, $re) {
  $length = count($array);
  for ($i = 0; $i < $length; $i++) {
    if (!preg_match($re, strtolower($array[$i]))) {
      unset($array[$i]);
    }
  }
  return $array;
}



$args = "?search=".urlencode(strtolower($_GET["search"]))."&filter=".urlencode(strtolower($_GET["filter"]))."&sort=".urlencode(strtolower($_GET["sort"]))."&dir=".urlencode(strtolower($_GET["dir"]));

if ($_GET["sort"] == "creator") {
  $sort = "creator";
} elseif ($_GET["sort"] == "skin_pack") {
  $sort = "skin_pack";
} elseif ($_GET["sort"] == "release_date") {
  $sort = "release_date";
} else {
  $sort = "name";
}

if ($_GET["dir"] == "up") {
  $dir = "up";
} else{
  $dir = "down";
}

if ($_GET["search"] and strpos($_GET["search"], ";") === false) {
  $action = "search";
  $filter = strtolower($_GET["search"]);
} elseif ($_GET["filter"][0] == "c") {
  $action = "filter_creator";
  $filter = strtolower(substr($_GET["filter"], 1));
} elseif ($_GET["filter"][0] == "p") {
  $action = "filter_skin_pack";
  $filter = strtolower(substr($_GET["filter"], 1));
} elseif ($_GET["cache"][0] == "s") {
  $action = "search";
  $filter = strtolower(substr($_GET["cache"], 1));
} elseif ($_GET["cache"][0] == "c") {
  $action = "filter_creator";
  $filter = strtolower(substr($_GET["cache"], 1));
} elseif ($_GET["cache"][0] == "p") {
  $action = "filter_skin_pack";
  $filter = strtolower(substr($_GET["cache"], 1));
} else {
  $action = "";
}

?>
<h2 id="skin-database" style="display:inline">Skin Database</h2>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<form method="get" action="edit/index.php" style="display:inline">
<?php

if ($action == "search")
  echo("<input type=\"hidden\" name=\"cache\" value=\"s".$filter."\">\n");
if ($action == "filter_creator")
  echo("<input type=\"hidden\" name=\"cache\" value=\"c".$filter."\">\n");
if ($action == "filter_skin_pack")
  echo("<input type=\"hidden\" name=\"cache\" value=\"p".$filter."\">\n");

if ($action == "search")
  echo("<input type=\"text\" name=\"search\" value=\"".$filter."\">\n");
else
  echo("<input type=\"text\" name=\"search\">\n");

?>
<input type="submit" value="Search Skin">
</form>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<form method="get" action="edit/index.php" style="display:inline">
<input type="submit" value="Show All Skins">
</form>

<span style="float:right; font-size:10px">
<?php

echo("<a href=\"edit/add_skin.php".$args."\">add skin</a>\n");

?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php

echo("<a href=\"edit/add_skin_zip.php".$args."\">add skin zip</a>\n");

?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php

echo("<a href=\"index.php".$args."\">normal mode</a>\n");

?>
</span>

<?php

$data = file("edit/data.txt", FILE_IGNORE_NEW_LINES);

$count_database = count($data);

if ($action) {
  if ($action == "search")
    $re = "/^.*".preg_quote($filter).".*$/";
  if ($action == "filter_creator")
    $re = "/^.*\/".preg_quote($filter)."\/.*\/.*$/";
  if ($action == "filter_skin_pack")
    $re = "/^.*\/.*\/".preg_quote($filter)."\/.*$/";

  $data = filter($data, $re);
}

$data = array_slice($data, 0);

$count_filtered = count($data);

if ($sort == "creator")
  $data = change($data, 1, 0, 2, 3);
if ($sort == "skin_pack")
  $data = change($data, 2, 0, 1, 3);
if ($sort == "release_date")
  $data = change($data, 3, 0, 1, 2);

if ($dir == "down")
  usort($data, "cmp");
if ($dir == "up")
  usort($data, "rcmp");

if ($sort == "creator")
  $data = change($data, 1, 0, 2, 3);
if ($sort == "skin_pack")
  $data = change($data, 1, 2, 0, 3);
if ($sort == "release_date")
  $data = change($data, 1, 2, 3, 0);



if ($count_filtered) {
  if ($action == "filter_creator") {
    $creator = explode("/", $data[0])[1];
    $line = "<h3>All skins by creator '".$creator."' ";
    $line .= "<span style=\"font-size:10px\"><a href=\"edit/rename_creator.php".$args."&creator=".urlencode($creator)."\">rename</a></span> ";
    $line .= "<span style=\"font-size:10px\"><a href=\"edit/remove_creator.php".$args."&creator=".urlencode($creator)."\">remove</a></span> ";
    $line .= ": <a href=\"zip/creator/".$creator.".zip\" download=\"".$creator.".zip\">";
    $line .= "Download [".$count_filtered."]</a></h3>\n";
  }

  if ($action == "filter_skin_pack") {
    $skin_pack = explode("/", $data[0])[2];
    $line = "<h3>All skins from skin pack '".$skin_pack."' ";
    $line .= "<span style=\"font-size:10px\"><a href=\"edit/rename_skin_pack.php".$args."&skin_pack=".urlencode($skin_pack)."\">rename</a></span> ";
    $line .= "<span style=\"font-size:10px\"><a href=\"edit/remove_skin_pack.php".$args."&skin_pack=".urlencode($skin_pack)."\">remove</a></span> ";
    $line .= ": <a href=\"zip/skin_pack/".$skin_pack.".zip\" download=\"".$skin_pack.".zip\">";
    $line .= "Download [".$count_filtered."]</a></h3>\n";
  }

  if ($action == "search" or $action == "") {
    $line = "<h3>All skins from the database : <a href=\"zip/database.zip\" download=\"database.zip\">";
    $line .= "Download [".$count_database."]</a></h3>\n";
  }

  echo($line);
}

?>

<div style="padding-right:30px">
<table class="nowraptable" cellpadding="5" style="width:100%">
<?php

if ($action == "search")
  $settings = "search=".urlencode($filter)."&";
if ($action == "filter_creator")
  $settings = "filter=c".urlencode($filter)."&";
if ($action == "filter_skin_pack")
  $settings = "filter=p".urlencode($filter)."&";
if ($action == "")
  $settings = "";

$line = "  <tr><td></td><td><a href=\"edit/index.php?".$settings;

if ($sort == "name") {
  if ($dir == "down")
    $line .= "sort=name&dir=up\">Name ▾</a>";
  if ($dir == "up")
    $line .= "sort=name&dir=down\">Name ▴</a>";
} else {
  $line .= "sort=name\">Name&nbsp;&nbsp;</a>";
}

$line .= "</td><td><a href=\"edit/index.php?".$settings;

if ($sort == "creator") {
  if ($dir == "down")
    $line .= "sort=creator&dir=up\">Creator ▾</a>";
  if ($dir == "up")
    $line .= "sort=creator&dir=down\">Creator ▴</a>";
} else {
  $line .= "sort=creator\">Creator&nbsp;&nbsp;</a>";
}

$line .= "</td>\n  <td><a href=\"edit/index.php?".$settings;

if ($sort == "skin_pack") {
  if ($dir == "down")
    $line .= "sort=skin_pack&dir=up\">Skin Pack ▾</a>";
  if ($dir == "up")
    $line .= "sort=skin_pack&dir=down\">Skin Pack ▴</a>";
} else {
  $line .= "sort=skin_pack\">Skin Pack&nbsp;&nbsp;</a>";
}

$line .= "</td><td><a href=\"edit/index.php?".$settings;

if ($sort == "release_date") {
  if ($dir == "down")
    $line .= "sort=release_date&dir=up\">Release Date ▾</a>";
  if ($dir == "up")
    $line .= "sort=release_date&dir=down\">Release Date ▴</a>";
} else {
  $line .= "sort=release_date\">Release Date&nbsp;&nbsp;</a>";
}

$line .= "</td><td></td></tr>\n";

echo($line);



for ($i = 0; $i < count($data); $i++) {
  $parts = explode("/", $data[$i]);

  $line = "  <tr><td><a href=\"skin/".$parts[0].".png\"><img src=\"skin/".$parts[0].".png\" alt=\"".$parts[0].".png\" width=\"100\"></a></td>";
  $line .= "<td><strong>".$parts[0]." ";
  $line .= "<span style=\"font-size:10px\"><a href=\"edit/remove_skin.php".$args."&skin=".urlencode($parts[0])."\">remove</a></span>";
  $line .= "</strong></td>\n  <td>";

  if ($parts[1])
    $line .= "<a href=\"edit/index.php?filter=c".urlencode(strtolower($parts[1]))."\">".$parts[1]."</a> ";
  $line .= "<span style=\"font-size:10px\"><a href=\"edit/change_creator.php".$args."&skin=".urlencode($parts[0])."\">change</a></span>";

  $line .= "</td><td>";

  if ($parts[2])
    $line .= "<a href=\"edit/index.php?filter=p".urlencode(strtolower($parts[2]))."\">".$parts[2]."</a> ";
  $line .= "<span style=\"font-size:10px\"><a href=\"edit/change_skin_pack.php".$args."&skin=".urlencode($parts[0])."\">change</a></span>";

  $line .= "</td><td>".$parts[3]."</td><td><a href=\"skin/".$parts[0].".png\" download=\"".$parts[0].".png\">Download</a></td></tr>\n";

  echo($line);
}

?>
</table>
</div>
