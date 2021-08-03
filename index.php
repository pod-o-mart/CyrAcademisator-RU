<?php
session_start();
$lang = $_POST['language'];
if ($lang == "da-DK")
{include ("sprache/dansk.php");}
elseif ($lang == "ru-RU")
{include ("sprache/russian.php");}
elseif ($lang == "de-DE")
{include ("sprache/deutsch.php");}
elseif ($lang == "en-GB")
{include ("sprache/english.php");}
else
{include ("sprache/english.php");
$lang = "en-GB";	
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php echo $unterschrift; ?></title>
    <meta name='author' content='Martin Podolak'>
    <meta name='description' content='<?php echo $unterschrift; ?>'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://slavonic.github.io/css/fonts.css" type="text/css">
    <link href="https://pod-o-mart.github.io/keyboardBookmarklets/kb-slav.css" rel="stylesheet" type="text/css" />
    <link href="style/style.css" rel="stylesheet" type="text/css" />
	<script src="https://pod-o-mart.github.io/keyboardBookmarklets/kb-slav.js" type="text/javascript"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
require "cyracademisator.php";
?>
<p style="width:100%;text-align:center;"><a href="documentation/english.html">Documentation in English</a>  /  <a href="documentation/deutsch.html">Dokumentation auf deutsch</a></p>
</body>
</html>