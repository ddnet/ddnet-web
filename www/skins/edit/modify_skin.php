<html>
<head>
<title>Modify Skin</title>
</head>
<body>
<h1>Modify Skin</h1>

<?php
$fp = fopen("skins.lock", "w");
if(!$fp || !flock($fp, LOCK_EX)) {
  echo "cannot lock skins lock, maybe someone else is modifying right now.";
  die();
}
  
if(!function_exists('str_ends_with')) {
  function str_ends_with($haystack, $needle) {
    if($haystack === '' && $needle !== '')
      return false;
    
    $len = strlen($needle);
    return substr_compare($haystack, $needle, -$len, $len) === 0;
  }
}
  
if(!function_exists('str_contains')) {
  function str_contains($haystack, $needle) {
    return $needle === '' || strpos($haystack, $needle) !== false;
  }
}

$skin_json_file_name = "../skin/skins.json";

try {
  if(!file_exists($skin_json_file_name))
    throw new ErrorException("no skins file");
  $skinfilecont = file_get_contents($skin_json_file_name);
  if($skinfilecont == "")
    throw new ErrorException("skin file empty");
  $skin_json = json_decode($skinfilecont);
  if(!property_exists($skin_json, "skins"))
    throw new ErrorException("no skins key");
    if(!property_exists($skin_json, "version"))
      throw new ErrorException("no skins version");
}
catch(Exception $e) {
  $skin_json = json_decode("{ \"skins\": [], \"version\": \"1.0.0\" }");
}

function textarea_echo($echostr, $type = 0) {
  echo("<p style=\"color: " . ($type == 0 ? "black" : ($type == 1 ? "red" : "darkgoldenrod")) . "; margin: 0;\">");
  echo("&gt;&gt;&gt; ");
  if($type == 1)
    echo("[error] ");
  else if($type == 2)
      echo("[warning] ");
  echo(htmlspecialchars($echostr)."</p>");
}

function textarea_die() {
  flock($GLOBALS['fp'], LOCK_UN);
  fclose($GLOBALS['fp']);

  echo("</div>\n");
  
  echo("<a href=\"javascript:window.history.back();\">Back To Skin Database</a>");
  echo("</body>");
  echo("</html>");
  die();
}

echo("Script Output:<br>\n");
echo("<div style=\"border: 1px solid black; font-family: monospace;\" readonly>\n");

function check_for_skin($skinarr, $skinname) {
  $reti = 0;
  foreach($skinarr as $skin_obj) {
    if($skin_obj->name == $skinname)
      return $reti;
    $reti = $reti + 1;        
  }
  return -1;
}

function check_image_props($imgprops) {
  return $imgprops[0] % 8 == 0 && $imgprops[1] % 4 == 0 && $imgprops[0] / 2 == $imgprops[1];
}

function DoSkinAction($skin_json_file_name, &$skin_json, $explicit_skin_name = "", $explicit_skin_file = "") {
  // check all parameters
  if((!array_key_exists("image", $_FILES) && !array_key_exists("skin_name", $_POST) && $explicit_skin_name == "") || !array_key_exists("modifyaction", $_POST)) {
    textarea_echo("wrong parameters, maybe clear your browser cache and reload your window", 1);
    textarea_echo("modify action, image or skin hd information missing", 1);
    textarea_die();
  }

  $skinaction = $_POST["modifyaction"];

  $skinname = array_key_exists("image", $_FILES) ? $_FILES["image"]["name"] : ($explicit_skin_name != "" ? $explicit_skin_name : $_POST["skin_name"]);
  $old_skinname = array_key_exists("image", $_FILES) ? $_FILES["image"]["tmp_name"] : ($explicit_skin_file != "" ? $explicit_skin_file : $_POST["skin_name"]);
  $skinisuhd = (array_key_exists("skinisuhd", $_POST) && ($_POST["skinisuhd"] == "true" || $_POST["skinisuhd"] == "1" || $_POST["skinisuhd"] == "on")) ? true : false;
  settype($skinisuhd, "boolean");

  if($skinaction == "add") {
    // check all parameters
    if(!array_key_exists("creator", $_POST) || !array_key_exists("skin_pack", $_POST) || !array_key_exists("skin_type", $_POST) || !array_key_exists("skin_license", $_POST) ||
      !array_key_exists("skin_part", $_POST) || !array_key_exists("game_version", $_POST)) {
      textarea_echo("wrong parameters, maybe clear your browser cache and reload your window", 1);
      textarea_echo("creator, skin pack, skin type, skin part or game version missing", 1);
      textarea_die();
    }

    $skinname_tmp = $old_skinname;

    $skintype = $_POST["skin_type"];
    $skinlicense = $_POST["skin_license"];

    $skinbodypart = $_POST["skin_part"];
    $skingameversion = $_POST["game_version"];

    $skincreator = $_POST["creator"];
    $skinpack = $_POST["skin_pack"];
    $skincreatedate = date("Y-m-d");
    
    // check paramters for correctness
    if($skinname_tmp == "") {
      echo "skin file was wrong";
      textarea_die();
    }
    
    if($skintype != "normal" && $skintype != "community") {
      echo "skin type must be \"normal\" or \"community\"";
      textarea_die();
    }
    
    if($skinlicense == "") {
      echo "skin must contain a license (or unknown)";
      textarea_die();
    }
    
    if($skinbodypart != "full") {
      echo "skin body part must be \"full\"";
      textarea_die();
    }
    
    if($skingameversion != "tw-0.6") {
      echo "skin game version must be \"tw-0.6\"";
      textarea_die();
    }

    $imgispng = ($skinname_tmp != "" && exif_imagetype($skinname_tmp) == IMAGETYPE_PNG);
    $imgiscorrectratio = ($imgispng && $skinname_tmp != "" && check_image_props(getimagesize($skinname_tmp)));
    $imgendswithpng = str_ends_with($skinname, ".png");
    $fullskinname = $skinname;
    $skinname = substr($skinname, 0, -4);
    $imgcontainsslash = str_contains($skinname, "/") || str_contains($skinname, "\"") || str_contains($skinname, ",");
    $creatorcontainsslash = str_contains($skincreator, "/");
    $skinpackcontainsslash = str_contains($skinpack, "/");

    $inserterror = (array_key_exists("image", $_FILES) && $_FILES["image"]["error"] != 0) || !$imgispng || !$imgiscorrectratio || !$imgendswithpng || $imgcontainsslash || $creatorcontainsslash || $skinpackcontainsslash;

    if($inserterror) {
      if(!$imgispng) {
        textarea_echo("file must be a png image", 1);
      }
      if(!$imgiscorrectratio) {
        textarea_echo("image width must be divisible by 8, the height by 4, the aspect ratio between width and height must be 2:1 (stricter rules than the client might accept)", 1);
      }
      if(!$imgendswithpng) {
        textarea_echo("skinname must end with .png", 1);
      }
      if($imgcontainsslash) {
        textarea_echo("skinname must not contain / or , or \"", 1);
      }
      if($creatorcontainsslash) {
        textarea_echo("creator must not contain /", 1);
      }
      if($skinpackcontainsslash) {
        textarea_echo("skinpack must not contain /", 1);
      }
    }
    else {
      textarea_echo("modify skin: action=\"$skinaction\" skinname=\"".$fullskinname."\" creator=\"".$skincreator."\" skinpack=\"".$skinpack."\" releasedate=\"".$skincreatedate."\" license=\"$skinlicense\" skintype=\"$skintype\" skinhd=\"".($skinisuhd ? "true" : "false")."\"");

      $skinindex = check_for_skin($skin_json->skins, $skinname);
      $skinhdwasdropped = false;
      $skinhdexisted = false;
      if($skinindex != -1) {
        if(isset($skin_json->skins[$skinindex]->hd->uhd) && $skin_json->skins[$skinindex]->hd->uhd == true)
          $skinhdexisted = true;
        // if the request is not any HD modify request => drop old versions, if type also changed also drop HD skins
        // if the request is HD modify request => only drop HD skins and only if type did not change
        // if type did not change only replace the skin file
        $alsodrophdskins = $skin_json->skins[$skinindex]->type != $skintype;
        $onlydrophdskins = $skinisuhd;
        if($alsodrophdskins && $skinisuhd) {
          textarea_echo("you changed the skin's type from \"".$skin_json->skins[$skinindex]->type."\" to \"$skintype\", but also selected UHD as option, change the primary skin first before changing the HD skin", 1);
          textarea_die();
        }
        // if the skin type did not change OR it's not HD skin, old versions get dropped
        if(!$alsodrophdskins || !$skinisuhd) {
          textarea_echo("removing old skin with same name (type: " . $skin_json->skins[$skinindex]->type . ", has hd: ".($skinhdexisted ? "true" : "false").") ...", 2);
          if($skin_json->skins[$skinindex]->type == "normal") {
            if(!$onlydrophdskins)
              unlink("../skin/".$fullskinname);
            if($alsodrophdskins || ($onlydrophdskins && isset($skin_json->skins[$skinindex]->hd->uhd) && $skin_json->skins[$skinindex]->hd->uhd == true)) {
              unlink("../skin/uhd/".$fullskinname);
              $skinhdwasdropped = true;
              if($alsodrophdskins)
                textarea_echo("also dropping HD skins, because the skin type was changed!", 2);
            }
          }
          // normal skin is also mirrored in community path
          if($skin_json->skins[$skinindex]->type == "normal" || $skin_json->skins[$skinindex]->type == "community") {
            if(!$onlydrophdskins)
              unlink("../skin/community/".$fullskinname);
            if($alsodrophdskins || ($onlydrophdskins && isset($skin_json->skins[$skinindex]->hd->uhd) && $skin_json->skins[$skinindex]->hd->uhd == true)) {
              unlink("../skin/community/uhd/".$fullskinname);
              $skinhdwasdropped = true;
              if($alsodrophdskins)
                textarea_echo("also dropping community HD skins, because the skin type was changed!", 2);
            }
          }

          if($skin_json->skins[$skinindex]->type == "template") {
            if(!$onlydrophdskins)
              unlink("../skin/template/".$fullskinname);
            if($alsodrophdskins || ($onlydrophdskins && isset($skin_json->skins[$skinindex]->hd->uhd) && $skin_json->skins[$skinindex]->hd->uhd == true)) {
              unlink("../skin/template/uhd/".$fullskinname);
              $skinhdwasdropped = true;
              if($alsodrophdskins)
                textarea_echo("also dropping template HD skins, because the skin type was changed!", 2);
            }
          }
        }

        array_splice($skin_json->skins, $skinindex, 1);
      }
      // if no skin is in the database and the request is to only add a UHD skin, disallow this. Needs a base skin first
      else if($skinisuhd) {
        textarea_echo("an UHD skin was requested to be added, but no previous non UHD skin was added, please upload a non UHD skin first.", 1);
        textarea_die();
      }

      textarea_echo("adding skin to $skin_json_file_name ...");
      $skinindex = 
      array_push(
            $skin_json->skins, 
            json_decode("{ \"name\": \"$skinname\", \"type\": \"$skintype\", \"hd\": { \"uhd\": ".($skinisuhd || ($skinhdexisted && !$skinhdwasdropped) ? "true" : "false")." },".
                        "\"creator\": \"$skincreator\", \"license\": \"$skinlicense\", \"bodypart\": \"$skinbodypart\", \"gameversion\": \"$skingameversion\", \"date\": \"$skincreatedate\", \"skinpack\": \"$skinpack\", \"imgtype\": \"png\" }")
      ) - 1;

      if(!is_dir("../skin"))
        mkdir("../skin");
      if(!is_dir("../skin/uhd"))
        mkdir("../skin/uhd");
        if(!is_dir("../skin/community"))
          mkdir("../skin/community");
        if(!is_dir("../skin/community/uhd"))
          mkdir("../skin/community/uhd");
          if(!is_dir("../skin/template"))
            mkdir("../skin/template");
          if(!is_dir("../skin/template/uhd"))
            mkdir("../skin/template/uhd");

      textarea_echo("adding skin to skin directory ...");
      if($skin_json->skins[$skinindex]->type == "normal") {
        if(!$skinisuhd)
          file_put_contents("../skin/".$fullskinname, file_get_contents($skinname_tmp));
        // if skin is uhd or nor UHD exists, add it as mirror
        if($skinisuhd || !isset($skin_json->skins[$skinindex]->hd->uhd) || $skin_json->skins[$skinindex]->hd->uhd == false) {
          file_put_contents("../skin/uhd/".$fullskinname, file_get_contents($skinname_tmp));
        }
      }
      // normal skin is also mirrored in community path
      if($skin_json->skins[$skinindex]->type == "normal" || $skin_json->skins[$skinindex]->type == "community") {
        if(!$skinisuhd)
          file_put_contents("../skin/community/".$fullskinname, file_get_contents($skinname_tmp));
        // if skin is uhd or nor UHD exists, add it as mirror
        if($skinisuhd || !isset($skin_json->skins[$skinindex]->hd->uhd) || $skin_json->skins[$skinindex]->hd->uhd == false) {
          file_put_contents("../skin/community/uhd/".$fullskinname, file_get_contents($skinname_tmp));
        }
      }
      // template skins
      if($skin_json->skins[$skinindex]->type == "template") {
        if(!$skinisuhd)
          file_put_contents("../skin/template/".$fullskinname, file_get_contents($skinname_tmp));
        // if skin is uhd or nor UHD exists, add it as mirror
        if($skinisuhd || !isset($skin_json->skins[$skinindex]->hd->uhd) || $skin_json->skins[$skinindex]->hd->uhd == false) {
          file_put_contents("../skin/template/uhd/".$fullskinname, file_get_contents($skinname_tmp));
        }
      }

      textarea_echo("saving $skin_json_file_name ...");
      file_put_contents($skin_json_file_name, json_encode($skin_json));
      // create a backup
      file_put_contents("skins.json.bk", json_encode($skin_json));

      textarea_echo("successfully ".$skinaction."ed skin");
    }
  }
  else if($skinaction == "delete") {
    $skinisuhd = false;
    if(!str_ends_with($skinname, ".png")) {
      textarea_echo("Skin to delete must end with .png", 1);
      textarea_die();
    }
    $fullskinname = $skinname;
    $skinname = substr($skinname, 0, -4);
    $skinindex = check_for_skin($skin_json->skins, $skinname);
    $skinhdexisted = false;
    if($skinindex != -1) {
      if(isset($skin_json->skins[$skinindex]->hd->uhd) && $skin_json->skins[$skinindex]->hd->uhd == true)
        $skinhdexisted = true;
      $onlydrophdskins = $skinisuhd;
      textarea_echo("removing skin (type: " . $skin_json->skins[$skinindex]->type . ", has hd: ".($skinhdexisted ? "true" : "false").") ...");
      if($onlydrophdskins)
        textarea_echo("only removing HD skins ...", 2);
      if($skin_json->skins[$skinindex]->type == "normal") {
        if(!$onlydrophdskins)
          unlink("../skin/".$fullskinname);
        unlink("../skin/uhd/".$fullskinname);
      }
      // normal skin is also mirrored in community path
      if($skin_json->skins[$skinindex]->type == "normal" || $skin_json->skins[$skinindex]->type == "community") {
        if(!$onlydrophdskins)
          unlink("../skin/community/".$fullskinname);
        unlink("../skin/community/uhd/".$fullskinname);
      }
      // template skins
      if($skin_json->skins[$skinindex]->type == "template") {
        if(!$onlydrophdskins)
          unlink("../skin/template/".$fullskinname);
        unlink("../skin/template/uhd/".$fullskinname);
      }

      array_splice($skin_json->skins, $skinindex, 1);
    }

    textarea_echo("saving $skin_json_file_name ...");
    file_put_contents($skin_json_file_name, json_encode($skin_json));
    // create a backup
    file_put_contents("skins.json.bk", json_encode($skin_json));

    textarea_echo("successfully removed skin");
  }
}

// expecting a list of skins
if(array_key_exists("skin_list", $_POST) && array_key_exists("skin_name_list", $_POST) && gettype($_POST["skin_list"]) == "array" && gettype($_POST["skin_name_list"]) == "array" && count($_POST["skin_list"]) == count($_POST["skin_name_list"])) {
  for($i = 0; $i < count($_POST["skin_name_list"]); ++$i) {
    $next_skin_name = $_POST["skin_name_list"][$i];
    $skin_base64 = $_POST["skin_list"][$i];
    $pid = getmypid();
    $tmp_name = "phpTmpDBSkin$pid.png";

    file_put_contents($tmp_name, base64_decode($skin_base64));
    
    DoSkinAction($skin_json_file_name, $skin_json, $next_skin_name, $tmp_name);
    unlink($tmp_name);
  }
}
// single skin
else {
  DoSkinAction($skin_json_file_name, $skin_json);
}

textarea_die();

?>
