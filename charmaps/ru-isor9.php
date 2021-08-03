<?php
$buchstaben = $text;


if ($ru_isor9_ausn == "1")
	{
    $text = str_replace('Ж', 'Zh', $text);
    $text = str_replace('ж', 'zh', $text);
    $text = str_replace('Й', 'Y', $text);
    $text = str_replace('й', 'y', $text);
    $text = str_replace('тс', 't.s', $text);
    $text = str_replace('тс', 't.s', $text);
    $text = str_replace('ТС', 'T.S', $text);
    $text = str_replace('Тс', 'T.s', $text);
    $text = str_replace('Ц', 'Ts', $text);
    $text = str_replace('ц', 'ts', $text);
    $text = str_replace('Ч', 'Ch', $text);
    $text = str_replace('ч', 'ch', $text);
    $text = str_replace('ш', 'sh', $text);
    $text = str_replace('щ', 'shch', $text);
    $text = str_replace('Ш', 'Sh', $text);
    $text = str_replace('Щ', 'Shch', $text);
    $text = str_replace('ю', 'yu', $text);
    $text = str_replace('я', 'ya', $text);
    $text = str_replace('Ю', 'Yu', $text);
    $text = str_replace('Я', 'Ya', $text);
	$text = str_replace('х', 'kh', $text);
	$text = str_replace('Х', 'Kh', $text);
	}
else
	{
	$text = str_replace('Ж', 'Ž', $text);
    $text = str_replace('ж', 'ž', $text);
    $text = str_replace('Й', 'J', $text);
    $text = str_replace('й', 'j', $text);
    $text = str_replace('Ц', 'C', $text);
    $text = str_replace('ц', 'c', $text);
    $text = str_replace('Ч', 'Č', $text);
    $text = str_replace('ч', 'č', $text);
    $text = str_replace('ш', 'š', $text);
    $text = str_replace('щ', 'šč', $text);
    $text = str_replace('Ш', 'Š', $text);
    $text = str_replace('Щ', 'Šč', $text);
    $text = str_replace('ю', 'ju', $text);
    $text = str_replace('я', 'ja', $text);
    $text = str_replace('Ю', 'Ju', $text);
    $text = str_replace('Я', 'Ja', $text);
	}
if ($ru_isor9_ch == "h")
    {
	$text = str_replace('х', 'h', $text);
	$text = str_replace('Х', 'H', $text);
	}
else 
	{
	$text = str_replace('х', 'ch', $text);
	$text = str_replace('Х', 'Ch', $text);
	}
    $text = str_replace('А', 'A', $text);
    $text = str_replace('Б', 'B', $text);
    $text = str_replace('В', 'V', $text);
    $text = str_replace('Г', 'G', $text);
    $text = str_replace('Д', 'D', $text);
    $text = str_replace('Е', 'E', $text);
    $text = str_replace('Ё', 'Ë', $text);
    $text = str_replace('З', 'Z', $text);
    $text = str_replace('И', 'I', $text);
    $text = str_replace('К', 'K', $text);
    $text = str_replace('Л', 'L', $text);
    $text = str_replace('М', 'M', $text);
    $text = str_replace('Н', 'N', $text);
    $text = str_replace('О', 'O', $text);
    $text = str_replace('П', 'P', $text);
    $text = str_replace('Р', 'R', $text);
    $text = str_replace('С', 'S', $text);
    $text = str_replace('Т', 'T', $text);
    $text = str_replace('У', 'U', $text);
    $text = str_replace('Ф', 'F', $text);
    $text = str_replace('Ъ', '"', $text);
    $text = str_replace('Ы', 'Y', $text);
    $text = str_replace('Ь', '\'', $text);
    $text = str_replace('Э', 'Ė', $text);
    $text = str_replace('а', 'a', $text);
    $text = str_replace('б', 'b', $text);
    $text = str_replace('в', 'v', $text);
    $text = str_replace('г', 'g', $text);
    $text = str_replace('д', 'd', $text);
    $text = str_replace('е', 'e', $text);
    $text = str_replace('ё', 'ë', $text);
    $text = str_replace('з', 'z', $text);
    $text = str_replace('и', 'i', $text);
    $text = str_replace('к', 'k', $text);
    $text = str_replace('л', 'l', $text);
    $text = str_replace('м', 'm', $text);
    $text = str_replace('н', 'n', $text);
    $text = str_replace('о', 'o', $text);
    $text = str_replace('п', 'p', $text);
    $text = str_replace('р', 'r', $text);
    $text = str_replace('с', 's', $text);
    $text = str_replace('т', 't', $text);
    $text = str_replace('у', 'u', $text);
    $text = str_replace('ф', 'f', $text);
    $text = str_replace('ъ', '"', $text);
    $text = str_replace('ы', 'y', $text);
    $text = str_replace('ь', '\'', $text);
    $text = str_replace('э', 'ė', $text);
    $text = str_replace('Ѣ', 'Ě', $text);
    $text = str_replace('Ѳ', 'Ḟ', $text);
    $text = str_replace('Ѵ', 'Ẏ', $text);
    $text = str_replace('Є', 'E', $text);
    $text = str_replace('Ѕ', 'Dz', $text);
    $text = str_replace('Ѥ', 'Je', $text);
    $text = str_replace('Ѯ', 'Ks', $text);
    $text = str_replace('Ѱ', 'Ps', $text);
    $text = str_replace('Ꙃ', 'S', $text);
    $text = str_replace('Ꙁ', 'Z', $text);
    $text = str_replace('Ꙋ', 'U', $text);
    $text = str_replace('Ѹ', 'U', $text);
    $text = str_replace('Ꙑ', 'Y', $text);
    $text = str_replace('Ꙗ', 'Ja', $text);
    $text = str_replace('Ꙓ', 'Ě', $text);
    $text = str_replace('Ѷ', 'Ẏ', $text);
    $text = str_replace('Ѿ', 'Ôt', $text);
    $text = str_replace('Ѻ', 'O', $text);
    $text = str_replace('Ҁ', '90', $text);
    $text = str_replace('І', 'Ī', $text);
    $text = str_replace('і', 'ī', $text);
    $text = str_replace('Ї', 'Ï', $text);
    $text = str_replace('ї', 'ï', $text);
    $text = str_replace('ѣ', 'ě', $text);
    $text = str_replace('ѳ', 'ḟ', $text);
    $text = str_replace('ѵ', 'ẏ', $text);
    $text = str_replace('є', 'e', $text);
    $text = str_replace('ѕ', 'dz', $text);
    $text = str_replace('ѥ', 'je', $text);
    $text = str_replace('ѯ', 'ks', $text);
    $text = str_replace('ѱ', 'ps', $text);
    $text = str_replace('ꙃ', 's', $text);
    $text = str_replace('ꙁ', 'z', $text);
    $text = str_replace('ꙋ', 'u', $text);
    $text = str_replace('ѹ', 'u', $text);
    $text = str_replace('ꙑ', 'y', $text);
    $text = str_replace('ꙗ', 'ja', $text);
    $text = str_replace('ꙓ', 'ě', $text);
    $text = str_replace('ѷ', 'ẏ', $text);
    $text = str_replace('ѿ', 'ôt', $text);
    $text = str_replace('ѻ', 'o', $text);
    $text = str_replace('ҁ', '90', $text);
if ($ru_isor9_kirch == "alt")
	{
    $text = str_replace('Ѧ', 'Ę', $text);
    $text = str_replace('ѧ', 'ę', $text);
    $text = str_replace('ѫ', 'ǫ', $text);
    $text = str_replace('Ѫ', 'Ǫ', $text);
	if ($ru_isor9_ausn == "1")
		{
	    $text = str_replace('Ѩ', 'Yę', $text);
		$text = str_replace('ѩ', 'yę', $text);
		$text = str_replace('Ѭ', 'Yǫ', $text);
		$text = str_replace('ѭ', 'yǫ', $text);
		$text = str_replace('щ', 'sht', $text);
		$text = str_replace('Щ', 'Sht', $text);
		}
	else
		{
		$text = str_replace('Ѩ', 'Ję', $text);
		$text = str_replace('ѩ', 'ję', $text);
		$text = str_replace('Ѭ', 'Jǫ', $text);
		$text = str_replace('ѭ', 'jǫ', $text);
		$text = str_replace('щ', 'št', $text);
		$text = str_replace('Щ', 'Št', $text);
		}
	}
else
	{
	$text = str_replace('ѫ', 'u', $text);
    $text = str_replace('Ѫ', 'U', $text);
	if ($ru_isor9_ausn == "1")
		{
		$text = str_replace('Ѧ', 'Ya', $text);
		$text = str_replace('Ѩ', 'Ya', $text);
		$text = str_replace('ѧ', 'ya', $text);
		$text = str_replace('ѩ', 'ya', $text);
		$text = str_replace('Ѭ', 'Yu', $text);
		$text = str_replace('ѭ', 'Yu', $text);
		$text = str_replace('щ', 'shch', $text);
		$text = str_replace('Щ', 'Shch', $text);
		}
	else
		{
		$text = str_replace('Ѧ', 'Ja', $text);
		$text = str_replace('Ѩ', 'Ja', $text);
		$text = str_replace('ѧ', 'ja', $text);
		$text = str_replace('ѩ', 'ja', $text);
		$text = str_replace('Ѭ', 'Ju', $text);
		$text = str_replace('ѭ', 'ju', $text);
		$text = str_replace('щ', 'šč', $text);
		$text = str_replace('Щ', 'Šč', $text);
		}
	}
if ($ru_isor9_omega == "1")
	{
	    $text = str_replace('Ѡ', 'Ô', $text);
		$text = str_replace('ѡ', 'ô', $text);
	}
	else
	{
	    $text = str_replace('Ѡ', 'O', $text);
		$text = str_replace('ѡ', 'o', $text);
	}
	$text = stripslashes($text);
  ?>