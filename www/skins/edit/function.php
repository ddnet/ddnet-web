<?php

function linestart ($start, $text) {
  if ($text) {
    $text = str_replace("\n", "\n".$start, $text);
    $text = substr($text, 0, -strlen($start));
    $text = $start.$text;
  }

  return $text;
}

function sh ($argument) {
  return escapeshellarg($argument);
}



$args = "?search=".urlencode(strtolower($_GET["search"]))."&filter=".urlencode(strtolower($_GET["filter"]))."&sort=".urlencode(strtolower($_GET["sort"]))."&dir=".urlencode(strtolower($_GET["dir"]));

?>
