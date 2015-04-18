<?php

/*** UploadScript 1.0.1 **************************************************
 * Copyright (C) 2006-2007 Andreas Waidler
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

$results      = array('Error! <meta http-equiv="refresh"
content="5; URL=http://ddnet.tw/nimrocks">', 'Successfully uploaded. <meta http-equiv="refresh"
content="5; URL=http://ddnet.tw/">');
$accessDenied = "Invalid!";

error_reporting(E_ALL);

$fileNameFilter = '<[^a-z\!\?\ #0-9\-\._]>i';

function b_renameAndSaveFile() {
    global $fileNameFilter;
    global $fileNameFilter2;
    $fileName = $_FILES['uploadFile']['name'];

    if (preg_match($fileNameFilter, $fileName)) return false;

    $path = 'uploads/' . $fileName;
    #if (file_exists($path)) return false;
    chmod($_FILES['uploadFile']['tmp_name'], 0666);
    return move_uploaded_file($_FILES['uploadFile']['tmp_name'], $path);
}

if (!isset($_FILES) || empty($_FILES) || !array_key_exists('uploadFile', $_FILES)) {
    #$body = getForm();
} elseif (is_uploaded_file($_FILES['uploadFile']['tmp_name'])) {
    $body = $results[ (int) b_renameAndSaveFile() ];
} else {
    $body = $accessDenied;
}



### begin HTML output ###

echo '<?xml version="1.0" encoding="iso-8859-1"?>'."\n"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="../css.css" />
</head>


<body>
    <?php echo $body; ?>
</body>

</html>
