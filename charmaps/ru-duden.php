<?php

$buchstaben = $text;
if ($ru_duden_sh == "0")
	{
    $text = str_replace('Ж', 'Sch', $text);
    $text = str_replace('ж', 'sch', $text);
	}
else
	{
    $text = str_replace('Ж', 'Sh', $text);
    $text = str_replace('ж', 'sh', $text);
	}
if ($ru_duden_stsch == "0")
	{
    $text = str_replace('Щ', 'Schtsch', $text);
    $text = str_replace('щ', 'schtsch', $text);
	}
else
	{
    $text = str_replace('Щ', 'Stsch', $text);
    $text = str_replace('щ', 'stsch', $text);
	}
if ($ru_duden_jo == "1")
	{
    $text = str_replace('ьо', 'jo', $text);
    $text = str_replace('ЬО', 'JO', $text);
	}
if ($ru_duden_ji == "1")
	{
    $text = str_replace('ьи', 'ji', $text);
    $text = str_replace('ье', 'je', $text);
    $text = str_replace('ЬИ', 'JI', $text);
    $text = str_replace('ЬЕ', 'JE', $text);
    $text = str_replace('ъе', 'je', $text);
    $text = str_replace('ЪЕ', 'JE', $text);
	}
if ($ru_duden_scho == "1")
	{
	$text = preg_replace('{(?<=[ЖЧШЩ])Ё}','O', $text);
	$text = preg_replace('{(?<=[ЖЧШЩжчшщ])ё}','o', $text);
	}
else
	{
	$text = str_replace('Ё', 'Jo', $text);
	$text = str_replace('ё', 'o', $text);
	}
if ($ru_duden_ks == "1")
	{
    $text = str_replace('КС', 'X', $text);
    $text = str_replace('Кс', 'X', $text);
    $text = str_replace('кс', 'x', $text);
	}
    $text = str_replace('А', 'A', $text);
    $text = str_replace('Б', 'B', $text);
    $text = str_replace('В', 'W', $text);
    $text = str_replace('Г', 'G', $text);
    $text = str_replace('Д', 'D', $text);
    $text = str_replace('Е', 'E', $text);
    $text = str_replace('Ё', 'Jo', $text);
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
    $text = str_replace('Х', 'Ch', $text);
    $text = str_replace('Ц', 'Z', $text);
    $text = str_replace('Ч', 'Tsch', $text);
    $text = str_replace('Ш', 'Sch', $text);
    $text = str_replace('Ы', 'Y', $text);
    $text = str_replace('Ю', 'Ju', $text);
    $text = str_replace('Я', 'Ja', $text);
    $text = str_replace('а', 'a', $text);
    $text = str_replace('б', 'b', $text);
    $text = str_replace('в', 'w', $text);
    $text = str_replace('г', 'g', $text);
    $text = str_replace('д', 'd', $text);
    $text = str_replace('ё', 'jo', $text);
    $text = str_replace('е', 'e', $text);
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
    $text = str_replace('х', 'ch', $text);
    $text = str_replace('ц', 'z', $text);
    $text = str_replace('ч', 'tsch', $text);
    $text = str_replace('ш', 'sch', $text);
    $text = str_replace('ы', 'y', $text);
    $text = str_replace('ю', 'ju', $text);
    $text = str_replace('я', 'ja', $text);
    $text = str_replace('І', 'I', $text);
    $text = str_replace('Ѳ', 'F', $text);
    $text = str_replace('Ѵ', 'I', $text);
    $text = str_replace('Ѕ', 'S', $text);
    $text = str_replace('Ѡ', 'O', $text);
    $text = str_replace('Ѧ', 'Ja', $text);
    $text = str_replace('Ѩ', 'Ja', $text);
  	$text = preg_replace('{Ѫ(?=[. ,;:\\\/\[\]\"»«])|Ѫ$|Ѫ\s}','', $text);
    $text = str_replace('Ѫ', 'U', $text);
    $text = str_replace('Ѭ', 'Ju', $text);
    $text = str_replace('Ѯ', 'Ks', $text);
    $text = str_replace('Ѱ', 'Ps', $text);
    $text = str_replace('Ї', 'І', $text);
    $text = str_replace('Ꙋ', 'U', $text);
    $text = str_replace('Ѹ', 'U', $text);
    $text = str_replace('Ꙑ', 'Y', $text);
    $text = str_replace('Ꙗ', 'Ja', $text);
    $text = str_replace('Ѷ', 'I', $text);
    $text = str_replace('Ѿ', 'Ot', $text);
    $text = str_replace('Ѻ', 'O', $text);
    $text = str_replace('Ҁ', '90', $text);
    $text = str_replace('і', 'i', $text);
    $text = str_replace('ѳ', 'f', $text);
    $text = str_replace('ѵ', 'i', $text);
    $text = str_replace('ѕ', 's', $text);
    $text = str_replace('ѡ', 'o', $text);
    $text = str_replace('ѧ', 'ja', $text);
    $text = str_replace('ѩ', 'ja', $text);
	$text = preg_replace('{ѫ(?=[. ,;:\\\/\[\]\"»«])|ѫ$|ѫ\s}','', $text);
    $text = str_replace('ѫ', 'u', $text);
    $text = str_replace('ѭ', 'ju', $text);
    $text = str_replace('ѯ', 'ks', $text);
    $text = str_replace('ѱ', 'ps', $text);
    $text = str_replace('ї', 'і', $text);
    $text = str_replace('ꙋ', 'u', $text);
    $text = str_replace('ѹ', 'u', $text);
    $text = str_replace('ꙑ', 'y', $text);
    $text = str_replace('ꙗ', 'ja', $text);
    $text = str_replace('ѷ', 'i', $text);
    $text = str_replace('ѿ', 'ot', $text);
    $text = str_replace('ѻ', 'o', $text);
    $text = str_replace('ҁ', '90', $text);
	$text = str_replace('И', 'I', $text);
    $text = str_replace('Й', 'J', $text);	
    $text = str_replace('и', 'i', $text);
    $text = str_replace('й', 'j', $text);
    $text = str_replace('е', 'e', $text);

    $text = str_replace('Ѣ', 'Je', $text);
    $text = str_replace('Є', 'E', $text);
    $text = str_replace('Ѥ', 'Je', $text);
    $text = str_replace('Ꙓ', 'Je', $text);
    $text = str_replace('ѣ', 'je', $text);
    $text = str_replace('є', 'e', $text);
    $text = str_replace('ѥ', 'je', $text);
    $text = str_replace('ꙓ', 'je', $text);
if ($ru_duden_znak == "1")
	{	
	$text = str_replace('ь', '\'', $text);
	$text = str_replace('ъ', '"', $text);
    $text = str_replace('Ь', '\'', $text);
    $text = str_replace('Ъ', '"', $text);
	}
else
	{
	$text = str_replace('ь', '', $text);
	$text = str_replace('ъ', '', $text);
    $text = str_replace('Ь', '', $text);
    $text = str_replace('Ъ', '', $text);
	}
if ($ru_duden_ss == "1")
	{
	$text = preg_replace('{(?<=[aiouyeэ])s(?=[aiouyeэ])}','ss', $text);
	$text = preg_replace('{(?<=[AIOUYEЭ])S(?=[AIOUYEЭ])}','SS', $text);
	}
$text = preg_replace('{(?<=[i])j(?=[bwgdhsjklmnprstfhz. ,;:\\\/\[\]\"»«])|j}','j', $text);
$text = preg_replace('{(?<=[I])J(?=[BWGDHSJKLMNPRSTFCZT. ,;:\\\/\[\]\"»«])|J}','J', $text);
$text = preg_replace('{(?<=[y])j(?=[bwgdhsjklmnprstfhz. ,;:\\\/\[\]\"»«])|j}','j', $text);
$text = preg_replace('{(?<=[Y])J(?=[BWGDHSJKLMNPRSTFCZT. ,;:\\\/\[\]\"»«])|J}','J', $text);

if ($ru_duden_yj == "1")
	{
	$text = preg_replace('{(?<=[iy])j(?=[. ,;:\\\/\[\]\"»«])|j$|j\b}','i', $text);
	$text = preg_replace('{(?<=[IY])J(?=[. ,;:\\\/\[\]\"»«])|J$|J\b}','I', $text);
	$text = preg_replace('{(?<=[iy])ii(?=[. ,;:\\\/\[\]\"»«])|i$|i\b}','i', $text);
	$text = preg_replace('{(?<=[IY])II(?=[. ,;:\\\/\[\]\"»«])|I$|I\b}','I', $text);
	$text = preg_replace('{(?<=[IY])YI(?=[. ,;:\\\/\[\]\"»«])|YI$|YI\b}','Y', $text);	
	$text = preg_replace('{(?<=[IY])yi(?=[. ,;:\\\/\[\]\"»«])|yi$|yi\b}','y', $text);
    /*$text = str_replace('yj', 'y', $text);
    $text = str_replace('ij', 'i', $text);*/
    }
if ($ru_duden_ik == "1")
	{
	$text = preg_replace('{(?<=[aoueэ])j(?=[bwgdhsjklmnprstfhz. ,;:\\\/\[\]\"»«])}','i', $text);
	$text = preg_replace('{(?<=[AOUEЭ])J(?=[BWGDHSJKLMNPRSTFCZT. ,;:\\\/\[\]\"»«])}','I', $text);
	}
	$text = preg_replace('{(?<=[.])ii(?=[. ,;:\\\/\[\]\"»«])|ii$|ii\s}','i', $text);
	$text = preg_replace('{(?<=[.])II(?=[. ,;:\\\/\[\]\"»«])|II$|II\s}','I', $text);
if ($ru_duden_je == "1")
	{
	$text = preg_replace('{(?:^|\n|(?<=[. ,;:\\\/\[\]\"»«aiouyeAIOUYE]))E}','Je', $text);
	$text = preg_replace('{(?:^|\n|(?<=[. ,;:\\\/\[\]\"»«aiouyeAIOUYE]))e}','je', $text);
	}
if ($ru_duden_gen == "1")
	{
	$text = preg_replace('{(?:^|(?<=[\.,;:\\\/\[\]\"»«aijouyeAIJOUYE]))ego(?=[. ,;:\\\/\[\]\"»«])|ego$|ego\b|ego\s}','ewo', $text);
	$text = preg_replace('{(?<=[\.,;:\\\/\[\]\"»«aijouyeAIJOUYE])ogo(?=[. ,;:\\\/\[\]\"»«])|ogo$|ogo\b|ogo\s}','owo', $text);
	$text = preg_replace('{(?:^|(?<=[\.,;:\\\/\[\]\"»«aijouyeAIJOUYE]))EGO(?=[. ,;:\\\/\[\]\"»«])|EGO$|EGO\b|EGO\s}','EWO', $text);
	$text = preg_replace('{(?<=[\.,;:\\\/\[\]\"»«aijouyeAIJOUYE])OGO(?=[. ,;:\\\/\[\]\"»«])|OGO$|OGO\b|OGO\s}','OWO', $text);
	}
    $text = str_replace('З', 'S', $text);
	$text = str_replace('з', 's', $text);
    $text = str_replace('Ꙃ', 'S', $text);
    $text = str_replace('Ꙁ', 'Z', $text);
    $text = str_replace('ꙃ', 's', $text);
    $text = str_replace('ꙁ', 'z', $text);
	$text = str_replace('э', 'e', $text);
    $text = str_replace('Э', 'E', $text);
	$text = stripslashes($text);
  ?>
