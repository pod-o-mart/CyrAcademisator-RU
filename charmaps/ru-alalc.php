<?php
$buchstaben = $text;
if ($ru_alalc_diakr == "1")
	{
    $text = str_replace('Ё', 'Ё', $text);
    $text = str_replace('Й', 'Ĭ', $text);
    $text = str_replace('Ц', 'T͡S', $text);
    $text = str_replace('Э', 'Ė', $text);
    $text = str_replace('Ю', 'I͡U', $text);
    $text = str_replace('Я', 'I͡A', $text);
    $text = str_replace('ё', 'ё', $text);
    $text = str_replace('й', 'ĭ', $text);
	$text = str_replace('ц', 't͡s', $text);
    $text = str_replace('э', 'ė', $text);
    $text = str_replace('ю', 'i͡u', $text);
    $text = str_replace('я', 'i͡a', $text);
    $text = str_replace('І', 'Ī', $text);
    $text = str_replace('Ѣ', 'I͡E', $text);
    $text = str_replace('Ѳ', 'Ḟ', $text);
    $text = str_replace('Ѵ', 'Ỳ', $text);
    $text = str_replace('Ѡ', 'Ō', $text);
    $text = str_replace('Ѥ', 'I͡E', $text);
    $text = str_replace('Ѯ', 'K͡S', $text);
    $text = str_replace('Ѱ', 'P͡S', $text);
    $text = str_replace('Ꙗ', 'I͡A', $text);
    $text = str_replace('Ꙓ', 'I͡E', $text);
    $text = str_replace('Ѷ', 'Ẏ', $text);
    $text = str_replace('Ѿ', 'Ō͡T', $text);
    $text = str_replace('і', 'ī', $text);
    $text = str_replace('ѣ', 'i͡e', $text);
    $text = str_replace('ѳ', 'ḟ', $text);
    $text = str_replace('ѵ', 'ỳ', $text);
    $text = str_replace('ѡ', 'ō', $text);
    $text = str_replace('ѥ', 'i͡e', $text);
    $text = str_replace('ѯ', 'k͡s', $text);
    $text = str_replace('ѱ', 'p͡s', $text);
    $text = str_replace('ꙗ', 'i͡a', $text);
    $text = str_replace('ꙓ', 'i͡e', $text);
    $text = str_replace('ѷ', 'ẏ', $text);
    $text = str_replace('ѿ', 'ō͡t', $text);
	if ($ru_alalc_kirch == "rus")
		{
		$text = str_replace('ѧ', 'i͡a', $text);
		$text = str_replace('ѩ', 'i͡a', $text);
		$text = str_replace('ѫ', 'u', $text);
		$text = str_replace('ѭ', 'i͡u', $text);
		$text = str_replace('Ѧ', 'I͡A', $text);
		$text = str_replace('Ѩ', 'I͡A', $text);
		$text = str_replace('Ѫ', 'U', $text);
		$text = str_replace('Ѭ', 'I͡U', $text);
		$text = str_replace('Щ', 'Shch', $text);
		$text = str_replace('щ', 'shch', $text);
		}
	else
		{
		$text = str_replace('ѧ', 'ę', $text);
		$text = str_replace('ѩ', 'i͡ę', $text);
		$text = str_replace('ѫ', 'ǫ', $text);
		$text = str_replace('ѭ', 'i͡ǫ', $text);
		$text = str_replace('Ѧ', 'Ę', $text);
		$text = str_replace('Ѩ', 'I͡Ę', $text);
		$text = str_replace('Ѫ', 'Ǫ', $text);
		$text = str_replace('Ѭ', 'I͡Ǫ', $text);
		$text = str_replace('Щ', 'Sht', $text);
		$text = str_replace('щ', 'sht', $text);
		}
	}
else
	{
	$text = str_replace('Ё', 'E', $text);
    $text = str_replace('Й', 'I', $text);
    $text = str_replace('Ц', 'Ts', $text);
    $text = str_replace('Э', 'E', $text);
    $text = str_replace('Ю', 'Iu', $text);
    $text = str_replace('Я', 'Ia', $text);
    $text = str_replace('ё', 'e', $text);
    $text = str_replace('й', 'i', $text);
	$text = str_replace('ц', 'ts', $text);
    $text = str_replace('э', 'e', $text);
    $text = str_replace('ю', 'iu', $text);
    $text = str_replace('я', 'ia', $text);
    $text = str_replace('І', 'I', $text);
    $text = str_replace('Ѣ', 'Ie', $text);
    $text = str_replace('Ѳ', 'F', $text);
    $text = str_replace('Ѵ', 'Y', $text);
    $text = str_replace('Ѡ', 'O', $text);
    $text = str_replace('Ѥ', 'Ie', $text);
    $text = str_replace('Ѯ', 'Ks', $text);
    $text = str_replace('Ѱ', 'Ps', $text);
    $text = str_replace('Ꙗ', 'Ia', $text);
    $text = str_replace('Ꙓ', 'Ie', $text);
    $text = str_replace('Ѷ', 'Y', $text);
    $text = str_replace('Ѿ', 'Ot', $text);
    $text = str_replace('і', 'i', $text);
    $text = str_replace('ѣ', 'ie', $text);
    $text = str_replace('ѳ', 'f', $text);
    $text = str_replace('ѵ', 'y', $text);
    $text = str_replace('ѡ', 'o', $text);
    $text = str_replace('ѥ', 'ie', $text);
    $text = str_replace('ѯ', 'ks', $text);
    $text = str_replace('ѱ', 'ps', $text);
    $text = str_replace('ꙗ', 'ia', $text);
    $text = str_replace('ꙓ', 'ie', $text);
    $text = str_replace('ѷ', 'y', $text);
    $text = str_replace('ѿ', 'ot', $text);
	if ($ru_alalc_kirch == "alt")
		{
		$text = str_replace('ѧ', 'e', $text);
		$text = str_replace('ѩ', 'ie', $text);
		$text = str_replace('ѫ', 'o', $text);
		$text = str_replace('ѭ', 'io', $text);
		$text = str_replace('Ѧ', 'E', $text);
		$text = str_replace('Ѩ', 'Ie', $text);
		$text = str_replace('Ѫ', 'O', $text);
		$text = str_replace('Ѭ', 'Io', $text);
		$text = str_replace('Щ', 'Sht', $text);
		$text = str_replace('щ', 'sht', $text);
		}
	else
		{
		$text = str_replace('ѧ', 'ia', $text);
		$text = str_replace('ѩ', 'ia', $text);
		$text = str_replace('ѫ', 'u', $text);
		$text = str_replace('ѭ', 'iu', $text);
		$text = str_replace('Ѧ', 'IA', $text);
		$text = str_replace('Ѩ', 'IA', $text);
		$text = str_replace('Ѫ', 'U', $text);
		$text = str_replace('Ѭ', 'IU', $text);
		$text = str_replace('Щ', 'Shch', $text);
		$text = str_replace('щ', 'shch', $text);
		}
	}
	$text = str_replace('ѧ', 'ę', $text);
    $text = str_replace('ѩ', 'i͡ę', $text);
    $text = str_replace('ѫ', 'ǫ', $text);
    $text = str_replace('ѭ', 'i͡ǫ', $text);
    $text = str_replace('Ѧ', 'Ę', $text);
    $text = str_replace('Ѩ', 'I͡Ę', $text);
    $text = str_replace('Ѫ', 'Ǫ', $text);
    $text = str_replace('Ѭ', 'I͡Ǫ', $text);
    $text = str_replace('Щ', 'Shch', $text);
    $text = str_replace('щ', 'shch', $text);


    $text = str_replace('А', 'A', $text);
    $text = str_replace('Б', 'B', $text);
    $text = str_replace('В', 'V', $text);
    $text = str_replace('Г', 'G', $text);
    $text = str_replace('Д', 'D', $text);
    $text = str_replace('Е', 'E', $text);
    $text = str_replace('Ж', 'Zh', $text);
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
    $text = str_replace('Х', 'Kh', $text);
    $text = str_replace('Ч', 'Ch', $text);
    $text = str_replace('Ш', 'Sh', $text);
	$text = preg_replace('{Ъ$|Ъ\s}','', $text);
	$text = preg_replace('{ъ$|ъ\s}','', $text);
    $text = str_replace('Ъ', '""', $text);
    $text = str_replace('Ы', 'Y', $text);
    $text = str_replace('Ь', '\'\'', $text);
    $text = str_replace('а', 'a', $text);
    $text = str_replace('б', 'b', $text);
    $text = str_replace('в', 'v', $text);
    $text = str_replace('г', 'g', $text);
    $text = str_replace('д', 'd', $text);
    $text = str_replace('е', 'e', $text);
    $text = str_replace('ж', 'zh', $text);
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
    $text = str_replace('х', 'kh', $text);
    $text = str_replace('ч', 'ch', $text);
    $text = str_replace('ш', 'sh', $text);
    $text = str_replace('ъ', '"', $text);
    $text = str_replace('ы', 'y', $text);
    $text = str_replace('ь', '\'', $text);
    $text = str_replace('Є', 'E', $text);
    $text = str_replace('Ѕ', 'S', $text);
    $text = str_replace('Ꙃ', 'S', $text);
    $text = str_replace('Ꙁ', 'Z', $text);
    $text = str_replace('Ї', 'І', $text);
    $text = str_replace('Ꙋ', 'U', $text);
    $text = str_replace('Ѹ', 'U', $text);
    $text = str_replace('Ꙑ', 'Y', $text);
    $text = str_replace('Ѻ', 'O', $text);
    $text = str_replace('Ҁ', '90', $text);
    $text = str_replace('є', 'e', $text);
    $text = str_replace('ѕ', 's', $text);
    $text = str_replace('ꙃ', 's', $text);
    $text = str_replace('ꙁ', 'z', $text);
    $text = str_replace('ї', 'і', $text);
    $text = str_replace('ꙋ', 'u', $text);
    $text = str_replace('ѹ', 'u', $text);
    $text = str_replace('ꙑ', 'y', $text);
    $text = str_replace('ѻ', 'o', $text);
    $text = str_replace('ҁ', '90', $text);
	$text = stripslashes($text);
  ?>

