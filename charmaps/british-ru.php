﻿<?php
$text = $eingabetext;
$buchstaben = $text;
    $text = str_replace('Shch', 'Щ', $text);
    $text = str_replace('SHCH', 'Щ', $text);
    $text = str_replace('shch', 'щ', $text);
    $text = str_replace('ZH', 'Ж', $text);
    $text = str_replace('Zh', 'Ж', $text);
    $text = str_replace('Kh', 'Х', $text);
    $text = str_replace('KH', 'Х', $text);
    $text = str_replace('Ts', 'Ц', $text);
    $text = str_replace('TS', 'Ц', $text);
    $text = str_replace('CH', 'Ч', $text);
    $text = str_replace('Ch', 'Ч', $text);
    $text = str_replace('SH', 'Ш', $text);
    $text = str_replace('Sh', 'Ш', $text);
    $text = str_replace('YU', 'Ю', $text);
    $text = str_replace('Yu', 'Ю', $text);
    $text = str_replace('YA', 'Я', $text);
    $text = str_replace('Ya', 'Я', $text);
    $text = str_replace('zh', 'ж', $text);
    $text = str_replace('kh', 'х', $text);
    $text = str_replace('ts', 'ц', $text);
    $text = str_replace('ch', 'ч', $text);
    $text = str_replace('sh', 'ш', $text);
    $text = str_replace('yu', 'ю', $text); 
    $text = str_replace('ya', 'я', $text);
    $text = str_replace('A', 'А', $text);
    $text = str_replace('B', 'Б', $text);
    $text = str_replace('V', 'В', $text);
    $text = str_replace('G', 'Г', $text);
    $text = str_replace('D', 'Д', $text);
    $text = str_replace('E', 'Е', $text);
    $text = str_replace('Ё', 'Ë', $text);
    $text = str_replace('Z', 'З', $text);
    $text = str_replace('I', 'И', $text);
    $text = str_replace('Ĭ', 'Й', $text);
    $text = str_replace('K', 'К', $text);
    $text = str_replace('L', 'Л', $text);
    $text = str_replace('M', 'М', $text);
    $text = str_replace('N', 'Н', $text);
    $text = str_replace('O', 'О', $text);
    $text = str_replace('P', 'П', $text);
    $text = str_replace('R', 'Р', $text);
    $text = str_replace('S', 'С', $text);
    $text = str_replace('T', 'Т', $text);
    $text = str_replace('U', 'У', $text);
    $text = str_replace('F', 'Ф', $text);
    $text = str_replace('Ȳ', 'Ы', $text);
    $text = str_replace('É', 'Э', $text);
    $text = str_replace('a', 'а', $text);
    $text = str_replace('b', 'б', $text);
    $text = str_replace('v', 'в', $text);
    $text = str_replace('g', 'г', $text);
    $text = str_replace('d', 'д', $text);
    $text = str_replace('e', 'е', $text);
	$text = str_replace('ë', 'ё', $text);
    $text = str_replace('z', 'з', $text);
    $text = str_replace('i', 'и', $text);
    $text = str_replace('ĭ', 'й', $text);
    $text = str_replace('k', 'к', $text);
    $text = str_replace('l', 'л', $text);
    $text = str_replace('m', 'м', $text);
    $text = str_replace('n', 'н', $text);
    $text = str_replace('o', 'о', $text);
    $text = str_replace('p', 'п', $text);
    $text = str_replace('r', 'р', $text);
    $text = str_replace('s', 'с', $text);
    $text = str_replace('t', 'т', $text);
    $text = str_replace('u', 'у', $text);
    $text = str_replace('f', 'ф', $text);
    $text = str_replace('\'', 'ь', $text);
    $text = str_replace('ȳ', 'ы', $text);
    $text = str_replace('é', 'э', $text);
    $text = str_replace('"', 'ъ', $text);
	$text = stripslashes($text);
	
  if($ausgabekodierung == "wissenschaftlich")
    {include ("ru-wissenschaftlich.php");}
  elseif($ausgabekodierung == "iso9")
    {include ("ru-iso9.php");}
  elseif($ausgabekodierung == "isor9")
    {include ("ru-isor9.php");}
  elseif($ausgabekodierung == "alalc")
    {include ("ru-alalc.php");}
  elseif($ausgabekodierung == "translit")
    {include ("ru-translit.php");}
  elseif($ausgabekodierung == "gost779b")
    {include ("ru-gost779b.php");}
  elseif($ausgabekodierung == "duden")
    {include ("ru-duden.php");}
  elseif($ausgabekodierung == "sprognaevn")
    {include ("ru-sprognaevn.php");}
  elseif($ausgabekodierung == "bgndigr")
    {include ("ru-bgndigr.php");}
  elseif($ausgabekodierung == "bgn")
    {include ("ru-bgn.php");}
  elseif($ausgabekodierung == "british")
    {include ("ru-british.php");}
  ?>