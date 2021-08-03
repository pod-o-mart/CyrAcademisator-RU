<?php
$buchstaben = $text;
if  ($ru_sprognaevn_sj == "zj")
	{
    $text = str_replace('Ж', 'Zj', $text);
    $text = str_replace('ж', 'zj', $text);
    $text = str_replace('З', 'Z', $text);
    $text = str_replace('з', 'z', $text);
	}
elseif  ($ru_sprognaevn_sj == "dof")
	{
    $text = str_replace('Ж', 'Zj', $text);
    $text = str_replace('ж', 'zj', $text);
    $text = str_replace('З', 'Z', $text);
    $text = str_replace('з', 'z', $text);
    $text = str_replace('Х', 'H', $text);
    $text = str_replace('х', 'h', $text);
    $text = str_replace('Щ', 'Stj', $text);
    $text = str_replace('щ', 'stj', $text);
	}
else
	{
	$text = str_replace('Ж', 'Sj', $text);
    $text = str_replace('ж', 'sj', $text);
    $text = str_replace('З', 'S', $text);
    $text = str_replace('з', 's', $text);
	}
    $text = str_replace('ьи', 'ji', $text);
    $text = str_replace('ЬИ', 'JI', $text);

/*if($ru_sprognaevn_dfo == "1")
	{
	}
else
	{
    $text = str_replace('Х', 'H', $text);
    $text = str_replace('х', 'h', $text);
    $text = str_replace('Щ', 'Stj', $text);
    $text = str_replace('щ', 'stj', $text);
	}
    $text = str_replace('ЧЁ', 'Чo', $text);
    $text = str_replace('ШЁ', 'Шo', $text);
    $text = str_replace('ЩЁ', 'Щo', $text);
    $text = str_replace('Чё', 'Чo', $text);
    $text = str_replace('Шё', 'Шo', $text);
    $text = str_replace('Щё', 'Щo', $text);
    $text = str_replace('чё', 'чo', $text);
    $text = str_replace('шё', 'шo', $text);
    $text = str_replace('щё', 'щo', $text);
    $text = str_replace('ЪЕЕ', 'JEJE', $text);
    $text = str_replace('ъее', 'jeje', $text);
    $text = str_replace('ЬЕЕ', 'JEJE', $text);
    $text = str_replace('ьее', 'JEJE', $text);
    $text = str_replace('ЕЕ', 'Eje', $text);
    $text = str_replace('Ее', 'Eje', $text);
    $text = str_replace('ее', 'eje', $text);
    $text = str_replace('АЕ', 'Aje', $text);
    $text = str_replace('ЁЕ', 'Joje', $text);
    $text = str_replace('ИЕ', 'Ije', $text);
    $text = str_replace('ОЕ', 'Oje', $text);
    $text = str_replace('УЕ', 'Uje', $text);
    $text = str_replace('ЫЕ', 'Yje', $text);
    $text = str_replace('ЮЕ', 'Juje', $text);
    $text = str_replace('ЭЕ', 'Eje', $text);
    $text = str_replace('ЯЕ', 'Jaje', $text);
    $text = str_replace('Ае', 'Aje', $text);
    $text = str_replace('Ёе', 'Joje', $text);
    $text = str_replace('Ие', 'Ije', $text);
    $text = str_replace('Ое', 'Oje', $text);
    $text = str_replace('Уе', 'Uje', $text);
    $text = str_replace('Ые', 'Yje', $text);
    $text = str_replace('Юе', 'Juje', $text);
    $text = str_replace('Эе', 'Eje', $text);
    $text = str_replace('Яе', 'Jaje', $text);
    $text = str_replace('ае', 'aje', $text);
    $text = str_replace('ёе', 'joje', $text);
    $text = str_replace('ие', 'ije', $text);
    $text = str_replace('ое', 'oje', $text);
    $text = str_replace('уе', 'uje', $text);
    $text = str_replace('ые', 'yje', $text);
    $text = str_replace('юе', 'juje', $text);
    $text = str_replace('эе', 'eje', $text);
    $text = str_replace('яе', 'jaje', $text);*/
 /*   $text = str_replace(' Е', ' Je', $text);
    $text = str_replace(' е', ' je', $text);
	$text = preg_replace('{^Е}','Je', $text);
	$text = preg_replace('{^е}','je', $text);
	$text = preg_replace('{\nЕ}','Je', $text);
	$text = preg_replace('{\nе}','je', $text);
	$text = preg_replace('{(?<=[АЭИОУЯЕЁЮЫЬЪ])Е}','Je', $text);
	$text = preg_replace('{(?<=[аэиоуяеёюыъь])е}','je', $text);*/
	
//	$text = preg_replace('{(?:(?<=[^\n\. ,;:\\\/\[\]\"»«АЭИОУЯЕЁЮЫЬЪ]))Е}','Je', $text);
//	$text = preg_replace('{(?:(?<=[^\n\. ,;:\\\/\[\]\"»«аэиоуяеёюыъь]))е}','je', $text);
	
	
    $text = str_replace('Е', 'E', $text);
    $text = str_replace('е', 'e', $text);
    $text = str_replace('Ё', 'Jo', $text);
    $text = str_replace('ё', 'jo', $text);
    $text = str_replace('И', 'I', $text);
    $text = str_replace('и', 'i', $text);
    $text = str_replace('А', 'A', $text);
    $text = str_replace('Б', 'B', $text);
    $text = str_replace('В', 'V', $text);
    $text = str_replace('Г', 'G', $text);
    $text = str_replace('Д', 'D', $text);
    $text = str_replace('Е', 'E', $text);
    $text = str_replace('Ё', 'O', $text);
    $text = str_replace('И', 'I', $text);
    $text = str_replace('Й', 'J', $text);
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
    $text = str_replace('Ч', 'Tj', $text);
    $text = str_replace('Ц', 'Ts', $text);
    $text = str_replace('Ш', 'Sj', $text);
    $text = str_replace('Щ', 'Sjtj', $text);
    $text = str_replace('Ы', 'Y', $text);
    $text = str_replace('Э', 'E', $text);
    $text = str_replace('Ю', 'Ju', $text);
    $text = str_replace('Я', 'Ja', $text);
    $text = str_replace('а', 'a', $text);
    $text = str_replace('б', 'b', $text);
    $text = str_replace('в', 'v', $text);
    $text = str_replace('г', 'g', $text);
    $text = str_replace('д', 'd', $text);
    $text = str_replace('е', 'e', $text);
    $text = str_replace('ё', 'o', $text);
    $text = str_replace('и', 'i', $text);
    $text = str_replace('й', 'j', $text);
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
    $text = str_replace('ч', 'tj', $text);
    $text = str_replace('ц', 'ts', $text);
    $text = str_replace('ш', 'sj', $text);
    $text = str_replace('щ', 'sjtj', $text);
    $text = str_replace('ы', 'y', $text);
    $text = str_replace('э', 'e', $text);
    $text = str_replace('ю', 'ju', $text);
    $text = str_replace('я', 'ja', $text);
    $text = str_replace('І', 'I', $text);
    $text = str_replace('Ѣ', 'Je', $text);
    $text = str_replace('Ѳ', 'F', $text);
    $text = str_replace('Ѵ', 'I', $text);
    $text = str_replace('Є', 'E', $text);
    $text = str_replace('Ѕ', 'S', $text);
    $text = str_replace('Ѡ', 'O', $text);
    $text = str_replace('Ѥ', 'Je', $text);
    $text = str_replace('Ѧ', 'Ja', $text);
    $text = str_replace('Ѩ', 'Ja', $text);
    $text = str_replace('Ѫ ', ' ', $text);
    $text = str_replace('Ѫ', 'U', $text);
    $text = str_replace('Ѭ', 'Ju', $text);
    $text = str_replace('Ѯ', 'Ks', $text);
    $text = str_replace('Ѱ', 'Ps', $text);
    $text = str_replace('Ꙃ', 'S', $text);
    $text = str_replace('Ꙁ', 'Z', $text);
    $text = str_replace('Ї', 'І', $text);
    $text = str_replace('Ꙋ', 'U', $text);
    $text = str_replace('Ѹ', 'U', $text);
    $text = str_replace('Ꙑ', 'Y', $text);
    $text = str_replace('Ꙗ', 'Ja', $text);
    $text = str_replace('Ꙓ', 'Je', $text);
    $text = str_replace('Ѷ', 'I', $text);
    $text = str_replace('Ѿ', 'Ot', $text);
    $text = str_replace('Ѻ', 'O', $text);
    $text = str_replace('Ҁ', '90', $text);
    $text = str_replace('і', 'i', $text);
    $text = str_replace('ѣ', 'je', $text);
    $text = str_replace('ѳ', 'f', $text);
    $text = str_replace('ѵ', 'i', $text);
    $text = str_replace('є', 'e', $text);
    $text = str_replace('ѕ', 's', $text);
    $text = str_replace('ѡ', 'o', $text);
    $text = str_replace('ѥ', 'je', $text);
    $text = str_replace('ѧ', 'ja', $text);
    $text = str_replace('ѩ', 'ja', $text);
    $text = str_replace('ѫ ', ' ', $text);
    $text = str_replace('ѫ', 'u', $text);
    $text = str_replace('ѭ', 'ju', $text);
    $text = str_replace('ѯ', 'ks', $text);
    $text = str_replace('ѱ', 'ps', $text);
    $text = str_replace('ꙃ', 's', $text);
    $text = str_replace('ꙁ', 'z', $text);
    $text = str_replace('ї', 'і', $text);
    $text = str_replace('ꙋ', 'u', $text);
    $text = str_replace('ѹ', 'u', $text);
    $text = str_replace('ꙑ', 'y', $text);
    $text = str_replace('ꙗ', 'ja', $text);
    $text = str_replace('ꙓ', 'je', $text);
    $text = str_replace('ѷ', 'i', $text);
    $text = str_replace('ѿ', 'ot', $text);
    $text = str_replace('ѻ', 'o', $text);
    $text = str_replace('ҁ', '90', $text);
if($ru_sprognaevn_znak == "0") 
	{
    $text = str_replace('Ъ', '', $text);
    $text = str_replace('ъ', '', $text);
	$text = str_replace('ь', '', $text);
    $text = str_replace('Ь', '', $text);
	}
else
	{
    $text = str_replace('Ъ', '"', $text);
	$text = str_replace('ь', '\'', $text);
    $text = str_replace('Ь', '\'', $text);
    $text = str_replace('ъ', '"', $text);
	}
	$text = preg_replace('{(?:^|\n|(?<=[. ,;:\\\/\[\]\"»«aiouyeAIOUYE]))E}','Je', $text);
	$text = preg_replace('{(?:^|\n|(?<=[. ,;:\\\/\[\]\"»«aiouyeAIOUYE]))e}','je', $text);
    $text = str_replace('jJ', 'j', $text);
    $text = str_replace('jj', 'j', $text);
    $text = str_replace('JJ', 'J', $text);
	$text = stripslashes($text);
  ?>

