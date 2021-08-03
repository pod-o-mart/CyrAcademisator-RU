<?php
$buchstaben = $text;
	$text = str_replace('ẽ', 'ę', $text);
	$text = str_replace('õ', 'ǫ', $text);
	$text = str_replace('Ẽ', 'Ę', $text);
	$text = str_replace('Õ', 'Ǫ', $text);
	$text = str_replace('Ō', 'Ô', $text);
	$text = str_replace('ō', 'ô', $text);
    $text = str_replace('jǫ', 'ѭ', $text);
    $text = str_replace('ję', 'ѩ', $text);
    $text = str_replace('Jǫ', 'Ѭ', $text);
    $text = str_replace('Ję', 'Ѩ', $text);
	$text = str_replace('ŠČ', 'Щ', $text);
	$text = str_replace('Šč', 'Щ', $text);
	$text = str_replace('Ë', 'Ё', $text);
	$text = str_replace('X', 'Х', $text);
    $text = str_replace('JU', 'Ю', $text);
    $text = str_replace('Ju', 'Ю', $text);
    $text = str_replace('JA', 'Я', $text);
    $text = str_replace('Ja', 'Я', $text);
	$text = str_replace('šč', 'щ', $text);	
    $text = str_replace('ë', 'ё', $text);
    $text = str_replace('x', 'х', $text);
    $text = str_replace('ju', 'ю', $text);
    $text = str_replace('ja', 'я', $text);
    $text = str_replace('A', 'А', $text);
    $text = str_replace('B', 'Б', $text);
    $text = str_replace('V', 'В', $text);
    $text = str_replace('G', 'Г', $text);
    $text = str_replace('D', 'Д', $text);
    $text = str_replace('E', 'Е', $text);
    $text = str_replace('Ž', 'Ж', $text);
    $text = str_replace('Z', 'З', $text);
    $text = str_replace('I', 'И', $text);
    $text = str_replace('J', 'Й', $text);
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
    $text = str_replace('C', 'Ц', $text);
    $text = str_replace('Č', 'Ч', $text);
    $text = str_replace('Š', 'Ш', $text);
    $text = str_replace('Y', 'Ы', $text);
    $text = str_replace('È', 'Э', $text);
    $text = str_replace('a', 'а', $text);
    $text = str_replace('b', 'б', $text);
    $text = str_replace('v', 'в', $text);
    $text = str_replace('g', 'г', $text);
    $text = str_replace('d', 'д', $text);
    $text = str_replace('e', 'е', $text);
    $text = str_replace('ž', 'ж', $text);
    $text = str_replace('z', 'з', $text);
    $text = str_replace('i', 'и', $text);
    $text = str_replace('j', 'й', $text);
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
    $text = str_replace('c', 'ц', $text);
    $text = str_replace('č', 'ч', $text);
    $text = str_replace('š', 'ш', $text);
    $text = str_replace('y', 'ы', $text);
    $text = str_replace('è', 'э', $text);
    $text = str_replace('І', 'І', $text);
    $text = str_replace('Ě', 'Ѣ', $text);
    $text = str_replace('Ḟ', 'Ѳ', $text);
    $text = str_replace('Ô', 'Ѡ', $text);
    $text = str_replace('Ę', 'Ѧ', $text);
    $text = str_replace('Ǫ', 'Ѫ', $text);
    $text = str_replace('і', 'і', $text);
    $text = str_replace('ě', 'ѣ', $text);
    $text = str_replace('ḟ', 'ѳ', $text);
    $text = str_replace('ô', 'ѡ', $text);
    $text = str_replace('ę', 'ѧ', $text);
    $text = str_replace('ǫ', 'ѫ', $text);
    $text = str_replace('Ẏ', 'Ѵ', $text);
    $text = str_replace('ẏ', 'ѵ', $text);
    $text = str_replace('\'', 'ь', $text);
    $text = str_replace('"', 'ъ', $text);
	$text = stripslashes($text);
/*	$text = preg_replace('{(?<=[БВГДЖЗКЛМНПРСТФХЦЧШЩѲѮꙀꙂҀѰЅ])ь}','Ь', $text);
	$text = preg_replace('{(?<=[БВГДЖЗКЛМНПРСТФХЦЧШЩѲѮꙀꙂҀѰЅ])ъ}','Ъ', $text);
	$text = stripslashes($text);*/


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