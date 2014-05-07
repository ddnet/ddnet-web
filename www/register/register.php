<?php
global $domain;

$username = $_POST['user'];
$secdom = 'trac';
$p = $_POST['pass'];

if (empty($username) || empty($p) || $username == "" || $p == "")
{
  $body = 'Error! <meta http-equiv="refresh" content="5; URL=http://ddnet.tw/register">';
}
else
{
  $changed = false;
  $f = fopen( 'htdigest', 'a' );
  $hash = md5("$username:$secdom:$p");
  fwrite($f, "$username:$secdom:$hash\n");
  fclose($f);

  $body='Successfully registered. Ask deen to activate your account. <meta http-equiv="refresh" content="5; URL=http://ddnet.tw/">';
}

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
