<center>
<?php 
/****************** Anfang Fenster Zieltext ****************/
if ($eingabekodierung == "kyrillisch")
	{$anz_quelle = $ausw_kyrillisch;}
elseif ($eingabekodierung == "unbestimmt")
	{$anz_quelle = $ausw_unbest;}
elseif ($eingabekodierung == "wissenschaftlich")
	{$anz_quelle = $ausw_wissensch;}
elseif ($eingabekodierung == "alalc")
	{$anz_quelle = $ausw_alalc;}
elseif ($eingabekodierung == "translit")
	{$anz_quelle = $ausw_translit;}
elseif ($eingabekodierung == "gost779b")
	{$anz_quelle = $ausw_gost779b;}
elseif ($eingabekodierung == "isor9")
	{$anz_quelle = $ausw_isor9;}
elseif ($eingabekodierung == "british")
	{$anz_quelle = "$ausw_british";}
else 
	{$anz_quelle = $ausw_iso9;};

if ($ausgabekodierung == "kyrillisch")
	{$anz_ergebnis = $ausw_kyrillisch;}
elseif ($ausgabekodierung == "wissenschaftlich")
	{$anz_ergebnis = $ausw_wissensch;}
elseif ($ausgabekodierung == "alalc")
	{$anz_ergebnis = $ausw_alalc;}
elseif ($ausgabekodierung == "translit")
	{$anz_ergebnis = $ausw_translit;}
elseif ($ausgabekodierung == "gost779b")
	{$anz_ergebnis = $ausw_gost779b;}
elseif ($ausgabekodierung == "isor9")
	{$anz_ergebnis = $ausw_isor9;}
elseif ($ausgabekodierung == "duden")
	{$anz_ergebnis = "Duden";}
elseif ($ausgabekodierung == "sprognaevn")
	{$anz_ergebnis = "Sprognævn";}
elseif ($ausgabekodierung == "bgndigr")
	{$anz_ergebnis = "BGN/PCGN $ausw_digr";}
elseif ($ausgabekodierung == "bgn")
	{$anz_ergebnis = "BGN/PCGN";}
elseif ($ausgabekodierung == "british")
	{$anz_ergebnis = "$ausw_british";}
else 
	{$anz_ergebnis = $ausw_iso9;};



	
if ((empty($ausgabekodierung)) or ($ausgabekodierung == $eingabekodierung) OR (isset ($_POST['speichern'])))
	{echo"";}
else
	{echo "<h2 style='margin-top:0;'>$ergebnis</h2>";}


if (((empty($ausgabekodierung)) and (empty($text))) OR (isset ($_POST['speichern'])))
	{echo "";}
elseif (empty($ausgabekodierung) or ($ausgabekodierung == $eingabekodierung))
	{echo "<h3>$originaltext</h3>";}
else
	{echo "<h3>$textin ($anz_ergebnis)</h3>";}
?><div>




<form name="frm" action="<?php echo $pageURL;if ($pagesource == "oestudier"){echo $append;}?>" method="POST">
    <input type="hidden" name="cyracademisator" value="<?=session_id()?>">
    <input type="hidden" name="language" value="<?php echo $lang; ?>">



<?php if (empty($ausgabekodierung))  
  {echo "<p style=\"color:red; margin: 0 0 10px 0;display:inline; \">$warnung_ausgabe_fehlt.</p>";
  $ausgabe_fehlt='1';}
if (isset($check))
{
	if(((stristr($check, 'Й') OR stristr($check, 'Ц') OR stristr($check, 'У') OR stristr($check, 'К') OR stristr($check, 'Е') OR stristr($check, 'Н') OR stristr($check, 'Г') OR stristr($check, 'Ш') OR stristr($check, 'Щ') OR stristr($check, 'З') OR stristr($check, 'Х') OR stristr($check, 'Ъ') OR stristr($check, 'Ф') OR stristr($check, 'Ы') OR stristr($check, 'В') OR stristr($check, 'А') OR stristr($check, 'П') OR stristr($check, 'Р') OR stristr($check, 'О') OR stristr($check, 'Л') OR stristr($check, 'Д') OR stristr($check, 'Ж') OR stristr($check, 'Э') OR stristr($check, 'Я') OR stristr($check, 'Ч') OR stristr($check, 'С') OR stristr($check, 'М') OR stristr($check, 'И') OR stristr($check, 'Т') OR stristr($check, 'Ь') OR stristr($check, 'Б') OR stristr($check, 'Ю') OR stristr($check, 'й') OR stristr($check, 'ц') OR stristr($check, 'у') OR stristr($check, 'к') OR stristr($check, 'е') OR stristr($check, 'н') OR stristr($check, 'г') OR stristr($check, 'ш') OR stristr($check, 'щ') OR stristr($check, 'з') OR stristr($check, 'х') OR stristr($check, 'ъ') OR stristr($check, 'ф') OR stristr($check, 'ы') OR stristr($check, 'в') OR stristr($check, 'а') OR stristr($check, 'п') OR stristr($check, 'р') OR stristr($check, 'о') OR stristr($check, 'л') OR stristr($check, 'д') OR stristr($check, 'ж') OR stristr($check, 'э') OR stristr($check, 'я') OR stristr($check, 'ч') OR stristr($check, 'с') OR stristr($check, 'м') OR stristr($check, 'и') OR stristr($check, 'т') OR stristr($check, 'ь') OR stristr($check, 'б') OR stristr($check, 'ю') OR stristr($check, 'ё') OR stristr($check, 'Ё') OR stristr($check, 'ҁ') OR stristr($check, 'є') OR stristr($check, 'ѕ') OR stristr($check, 'і') OR stristr($check, 'ї') OR stristr($check, 'ѡ') OR stristr($check, 'ѣ') OR stristr($check, 'ѥ') OR stristr($check, 'ѧ') OR stristr($check, 'ѩ') OR stristr($check, 'ѫ') OR stristr($check, 'ѭ') OR stristr($check, 'ѯ') OR stristr($check, 'ѱ') OR stristr($check, 'ѳ') OR stristr($check, 'ѵ') OR stristr($check, 'ѷ') OR stristr($check, 'ѹ') OR stristr($check, 'ѻ') OR stristr($check, 'ѽ') OR stristr($check, 'ѿ') OR stristr($check, 'ꙋ') OR stristr($check, 'ꙗ') OR stristr($check, 'ꙓ') OR stristr($check, 'ꙃ') OR stristr($check, 'ꙁ') OR stristr($check, 'Ҁ') OR stristr($check, 'Є') OR stristr($check, 'Ѕ') OR stristr($check, 'І') OR stristr($check, 'Ї') OR stristr($check, 'Ѡ') OR stristr($check, 'Ѣ') OR stristr($check, 'Ѥ') OR stristr($check, 'Ѧ') OR stristr($check, 'Ѩ') OR stristr($check, 'Ѫ') OR stristr($check, 'Ѭ') OR stristr($check, 'Ѯ') OR stristr($check, 'Ѱ') OR stristr($check, 'Ѳ') OR stristr($check, 'Ѵ') OR stristr($check, 'Ѷ') OR stristr($check, 'Ѹ') OR stristr($check, 'Ѻ') OR stristr($check, 'Ѽ') OR stristr($check, 'Ѿ') OR stristr($check, 'Ꙋ') OR stristr($check, 'Ꙗ') OR stristr($check, 'Ꙓ') OR stristr($check, 'Ꙃ') OR stristr($check, 'Ꙁ') == TRUE) AND ($eingabekodierung == "kyrillisch")) OR ($eingabekodierung == "isor9") OR ($eingabekodierung == "iso9") OR ($eingabekodierung == "gost779b") OR ($eingabekodierung == "wissenschaftlich") OR ($eingabekodierung == "unbestimmt") OR ($eingabekodierung == "alalc") OR ($eingabekodierung == "british") OR ($eingabekodierung == "translit") OR (empty($eingabetext)) OR (empty($text)) OR ($text == "") OR (isset ($_POST['speichern'])))
		{
		}
	else
		{
		echo "<p style=\"color:red; margin: 0 0 10px 0;\">$warnung_kein_kyrillisch</p>";
		$kein_kyr ='1';
		}
	if (( !preg_match("/[A-Za-z]+/","$check")) AND (($eingabekodierung != 'kyrillisch') OR ($eingabekodierung == 'unbestimmt')) AND  (!empty($eingabetext)) AND (!empty($text)) AND (!isset ($_POST['speichern'])))
		{
		echo "<p style=\"color:red; margin: 0 0 10px 0;\">$warnung_kein_latein</p>";
		$kein_lat ='1';
		}
}
if (isset($check))
{
if ((stristr($check, 'Ђ') OR stristr($check, 'Ѓ') OR stristr($check, 'Ј') OR stristr($check, 'Љ') OR stristr($check, 'Њ') OR stristr($check, 'Ћ') OR stristr($check, 'Ќ') OR stristr($check, 'Ў') OR stristr($check, 'Џ') OR stristr($check, 'ђ') OR stristr($check, 'ѓ') OR stristr($check, 'ј') OR stristr($check, 'љ') OR stristr($check, 'њ') OR stristr($check, 'ћ') OR stristr($check, 'ќ') OR stristr($check, 'ў') OR stristr($check, 'џ') OR stristr($check, 'Ґ') OR stristr($check, 'ґ') OR stristr($check, 'Ғ') OR stristr($check, 'ғ') OR stristr($check, 'Ҕ') OR stristr($check, 'ҕ') OR stristr($check, 'Җ') OR stristr($check, 'җ') OR stristr($check, 'Ҙ') OR stristr($check, 'ҙ') OR stristr($check, 'Қ') OR stristr($check, 'қ') OR stristr($check, 'Ҝ') OR stristr($check, 'ҝ') OR stristr($check, 'Ҟ') OR stristr($check, 'ҟ') OR stristr($check, 'Ҡ') OR stristr($check, 'ҡ') OR stristr($check, 'Ң') OR stristr($check, 'ң') OR stristr($check, 'Ҥ') OR stristr($check, 'ҥ') OR stristr($check, 'Ҧ') OR stristr($check, 'ҧ') OR stristr($check, 'Ҩ') OR stristr($check, 'ҩ') OR stristr($check, 'Ҫ') OR stristr($check, 'ҫ') OR stristr($check, 'Ҭ') OR stristr($check, 'ҭ') OR stristr($check, 'Ү') OR stristr($check, 'ү') OR stristr($check, 'Ұ') OR stristr($check, 'ұ') OR stristr($check, 'Ҳ') OR stristr($check, 'ҳ') OR stristr($check, 'Ҵ') OR stristr($check, 'ҵ') OR stristr($check, 'Ҷ') OR stristr($check, 'ҷ') OR stristr($check, 'Ҹ') OR stristr($check, 'ҹ') OR stristr($check, 'Һ') OR stristr($check, 'һ') OR stristr($check, 'Ҽ') OR stristr($check, 'ҽ') OR stristr($check, 'Ҿ') OR stristr($check, 'ҿ') OR stristr($check, 'Ӂ') OR stristr($check, 'ӂ') OR stristr($check, 'Ӄ') OR stristr($check, 'ӄ') OR stristr($check, 'Ӈ') OR stristr($check, 'ӈ') OR stristr($check, 'Ӌ') OR stristr($check, 'ӌ') OR stristr($check, 'Ӑ') OR stristr($check, 'ӑ') OR stristr($check, 'Ӓ') OR stristr($check, 'ӓ') OR stristr($check, 'Ӕ') OR stristr($check, 'ӕ') OR stristr($check, 'Ӗ') OR stristr($check, 'ӗ') OR stristr($check, 'Ә') OR stristr($check, 'ә') OR stristr($check, 'Ӛ') OR stristr($check, 'ӛ') OR stristr($check, 'Ӝ') OR stristr($check, 'ӝ') OR stristr($check, 'Ӟ') OR stristr($check, 'ӟ') OR stristr($check, 'Ӡ') OR stristr($check, 'ӡ') OR stristr($check, 'Ӣ') OR stristr($check, 'ӣ') OR stristr($check, 'Ӥ') OR stristr($check, 'ӥ') OR stristr($check, 'Ӧ') OR stristr($check, 'ӧ') OR stristr($check, 'Ө') OR stristr($check, 'ө') OR stristr($check, 'Ӫ') OR stristr($check, 'ӫ') OR stristr($check, 'Ӯ') OR stristr($check, 'ӯ') OR stristr($check, 'Ӱ') OR stristr($check, 'ӱ') OR stristr($check, 'Ӳ') OR stristr($check, 'ӳ') OR stristr($check, 'Ӵ') OR stristr($check, 'ӵ') OR stristr($check, 'ӹ') OR stristr($check, 'Ӹ')))
		{ 
		echo "<p style=\"color:red; margin: 0 0 10px 0;\">$warnung_kein_rukyrillisch</p>";
		}
}

?>



<div style='float:right;margin-top:7px;' title='<?php echo $gtransliteration ?>' id='translControl'></div>
<div style="clear:both";></div>
      <textarea data-disable-touch-keyboard="" name="eingabetext" id="eingabetext" class="keyboardInput" style="border:1px solid #aaa; margin:2px; clear:left;width:100%;"><?php 
	  if ((($ausgabe_fehlt == '1') OR ($kein_kyr == '1') OR ($kein_lat == '1'))){
	  echo stripslashes($eingabetext);}
	  elseif ( isset($text) ){
	  echo $text;}
	  ?></textarea>

<div style="text-align: center;">
<div style="clear:both;display: inline-block;">
      <select onchange="setVisibility('hinweis-info','none');setVisibility('hinweis-ein-auto','none');setVisibility('hinweis-ein-kyrillisch','none');setVisibility('hinweis-ein-isor9','none');setVisibility('hinweis-ein-iso9','none');setVisibility('hinweis-ein-gost779b','none');setVisibility('hinweis-ein-wissenschaftlich','none');setVisibility('hinweis-ein-alalc','none');setVisibility('hinweis-ein-british','none');setVisibility('hinweis-ein-translit','none');" onblur="setVisibility('hinweis-ein-auto','none');setVisibility('hinweis-ein-kyrillisch','none');setVisibility('hinweis-ein-isor9','none');setVisibility('hinweis-ein-iso9','none');setVisibility('hinweis-ein-gost779b','none');setVisibility('hinweis-ein-wissenschaftlich','none');setVisibility('hinweis-ein-alalc','none');setVisibility('hinweis-ein-british','none');setVisibility('hinweis-ein-translit','none');" onclick="setVisibility('hinweis-info','none');" title='<?php echo $quelltext ?>' size="1"  class="raender form-control" style="vertical-align:middle; width: auto;position:relative; float:left;max-width:calc(40% - 50px);" name="eingabekodierung" size="3">
<?php if (isset($_POST["speichern"])){

echo "<optgroup label=\"$ausw_von\">
 <!--     <option onmouseover=\"setVisibility('hinweis-ein-auto','inline')\" onmouseout=\"setVisibility('hinweis-ein-auto','none')\" value=\"auto\">$ausw_auto</option>-->
	<option ";
if  ($eingabekodierung == "kyrillisch") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-ein-kyrillisch','inline')\" onmouseout=\"setVisibility('hinweis-ein-kyrillisch','none')\" value=\"kyrillisch\">$ausw_kyrillisch</option>
      <option ";
if  ($eingabekodierung == "isor9") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-ein-isor9','inline')\" onmouseout=\"setVisibility('hinweis-ein-isor9','none')\" value=\"isor9\">$ausw_isor9</option>
      <option ";
if  ($eingabekodierung == "iso9") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-ein-iso9','inline')\" onmouseout=\"setVisibility('hinweis-ein-iso9','none')\" value=\"iso9\">$ausw_iso9</option>
      <option ";
if  ($eingabekodierung == "gost779b") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-ein-gost779b','inline')\" onmouseout=\"setVisibility('hinweis-ein-gost779b','none')\" value=\"gost779b\">$ausw_gost779b</option>
      <option ";
if  ($eingabekodierung == "wissenschaftlich") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-ein-wissenschaftlich','inline')\" onmouseout=\"setVisibility('hinweis-ein-wissenschaftlich','none')\" value=\"wissenschaftlich\">$ausw_wissensch</option>
      <option ";
if  ($eingabekodierung == "alalc") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-ein-alalc','inline')\" onmouseout=\"setVisibility('hinweis-ein-alalc','none')\" value=\"alalc\">$ausw_alalc_dia</option>
      <option ";
if  ($eingabekodierung == "british") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-ein-british','inline')\" onmouseout=\"setVisibility('hinweis-ein-british','none')\" value=\"british\">$ausw_british</option>
      <option ";
if  ($eingabekodierung == "translit") {echo"selected ";}
echo "onmouseover=\"setVisibility('hinweis-ein-translit','inline')\" onmouseout=\"setVisibility('hinweis-ein-translit','none')\" value=\"translit\">$ausw_translit</option>
      </optgroup>
    </select>&nbsp;<img style=\"float:left;margin:5px;\" align='top' title='$warnung_ausgabe_fehlt' src='style/pfeil.png'>
      <select onchange=\"setVisibility('hinweis-aus-kyrillisch','none');setVisibility('hinweis-aus-isor9','none');setVisibility('hinweis-aus-iso9','none');setVisibility('hinweis-aus-gost779b','none');setVisibility('hinweis-aus-wissenschaftlich','none');setVisibility('hinweis-aus-alalc','none');setVisibility('hinweis-aus-british','none');setVisibility('hinweis-aus-translit','none');setVisibility('hinweis-aus-bgndigr','none');setVisibility('hinweis-aus-bgn','none');setVisibility('hinweis-duden','none');setVisibility('hinweis-sprognaevn','none');\" onblur=\"setVisibility('hinweis-aus-kyrillisch','none');setVisibility('hinweis-aus-isor9','none');setVisibility('hinweis-aus-iso9','none');setVisibility('hinweis-aus-gost779b','none');setVisibility('hinweis-aus-wissenschaftlich','none');setVisibility('hinweis-aus-alalc','none');setVisibility('hinweis-aus-british','none');setVisibility('hinweis-aus-translit','none');setVisibility('hinweis-aus-bgndigr','none');setVisibility('hinweis-aus-bgn','none');setVisibility('hinweis-duden','none');setVisibility('hinweis-sprognaevn','none');\" onclick=\"setVisibility('hinweis-info','none');\" title='$textin' class=\"raender form-control\" style=\"vertical-align:middle; width: auto;float:left;max-width:calc(40% - 50px);\" size=\"1\" name=\"ausgabekodierung\" size=\"3\">
      <optgroup label=\"$ausw_nach \">
	  <option value=\"\">$ausw_ausw</option>
      <option ";
if  ($ausgabekodierung == "kyrillisch") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-aus-kyrillisch','inline')\" onmouseout=\"setVisibility('hinweis-aus-kyrillisch','none')\" value=\"kyrillisch\">$ausw_kyrillisch</option>
      <option ";
if  ($ausgabekodierung == "isor9") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-aus-isor9','inline')\" onmouseout=\"setVisibility('hinweis-aus-isor9','none')\" value=\"isor9\">$ausw_isor9</option>
      <option ";
if  ($ausgabekodierung == "iso9") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-aus-iso9','inline')\" onmouseout=\"setVisibility('hinweis-aus-iso9','none')\" value=\"iso9\">$ausw_iso9</option>
      <option ";
if  ($ausgabekodierung == "gost779b") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-aus-gost779b','inline')\" onmouseout=\"setVisibility('hinweis-aus-gost779b','none')\" value=\"gost779b\">$ausw_gost779b</option>
      <option ";
if  ($ausgabekodierung == "wissenschaftlich") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-aus-wissenschaftlich','inline')\" onmouseout=\"setVisibility('hinweis-aus-wissenschaftlich','none')\" value=\"wissenschaftlich\">$ausw_wissensch</option>
      <option ";
if  ($ausgabekodierung == "alalc") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-aus-alalc','inline')\" onmouseout=\"setVisibility('hinweis-aus-alalc','none')\" value=\"alalc\">$ausw_alalc</option>
      <option ";
if  ($ausgabekodierung == "bgndigr") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-aus-bgndigr','inline')\" onmouseout=\"setVisibility('hinweis-aus-bgndigr','none')\" value=\"bgndigr\">BGN/PCGN $ausw_digr</option>
      <option ";
if  ($ausgabekodierung == "bgn") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-aus-bgn','inline')\" onmouseout=\"setVisibility('hinweis-aus-bgn','none')\" value=\"bgn\">BGN/PCGN</option>
      <option ";
if  ($ausgabekodierung == "british") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-aus-british','inline')\" onmouseout=\"setVisibility('hinweis-aus-british','none')\" value=\"british\">$ausw_british</option>
      <option ";
if  ($ausgabekodierung == "translit") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-aus-translit','inline')\" onmouseout=\"setVisibility('hinweis-aus-translit','none')\" value=\"translit\">$ausw_translit</option>
      <option ";
if  ($ausgabekodierung == "duden") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-duden','inline')\" onmouseout=\"setVisibility('hinweis-duden','none')\" value=\"duden\">Duden</option>
      <option ";
if  ($ausgabekodierung == "sprognaevn") 
{echo"selected ";} ?>
onmouseover="setVisibility('hinweis-sprognaevn','inline')" onmouseout="setVisibility('hinweis-sprognaevn','none')" value="sprognaevn">Sprognævn</option>
      </optgroup>
    </select>

<?php


}
else
{
	  echo "<optgroup label=\"$ausw_von\">
	<!--  <option onmouseover=\"setVisibility('hinweis-ein-auto','inline')\"  onmouseout=\"setVisibility('hinweis-ein-auto','none')\" value=\"auto\">$ausw_auto</option>-->
      <option ";
if  ($ausgabekodierung == "kyrillisch") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-ein-kyrillisch','inline')\" onmouseout=\"setVisibility('hinweis-ein-kyrillisch','none')\" value=\"kyrillisch\">$ausw_kyrillisch</option>
      <option ";
if  ($ausgabekodierung == "isor9") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-ein-isor9','inline')\" onmouseout=\"setVisibility('hinweis-ein-isor9','none')\" value=\"isor9\">$ausw_isor9</option>
      <option ";
if  ($ausgabekodierung == "iso9") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-ein-iso9','inline')\" onmouseout=\"setVisibility('hinweis-ein-iso9','none')\" value=\"iso9\">$ausw_iso9</option>
      <option ";
if  ($ausgabekodierung == "gost779b") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-ein-gost779b','inline')\" onmouseout=\"setVisibility('hinweis-ein-gost779b','none')\" value=\"gost779b\">$ausw_gost779b</option>
      <option ";
if  ($ausgabekodierung == "wissenschaftlich") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-ein-wissenschaftlich','inline')\" onmouseout=\"setVisibility('hinweis-ein-wissenschaftlich','none')\" value=\"wissenschaftlich\">$ausw_wissensch</option>
      <option ";
if  ($ausgabekodierung == "alalc") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-ein-alalc','inline')\" onmouseout=\"setVisibility('hinweis-ein-alalc','none')\" value=\"alalc\">$ausw_alalc_dia</option>
      <option ";
if  ($ausgabekodierung == "british") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-ein-british','inline')\" onmouseout=\"setVisibility('hinweis-ein-british','none')\" value=\"british\">$ausw_british</option>
      <option ";
if  ($ausgabekodierung == "translit") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-ein-translit','inline')\" onmouseout=\"setVisibility('hinweis-ein-translit','none')\" value=\"translit\">$ausw_translit</option>
      </optgroup>
    </select>&nbsp;<img align='top' title='$warnung_ausgabe_fehlt' style=\"vertical-align:middle;float:left;margin:5px;\" src='style/pfeil.png'>
      <select  onchange=\"setVisibility('hinweis-aus-kyrillisch','none');setVisibility('hinweis-aus-isor9','none');setVisibility('hinweis-aus-iso9','none');setVisibility('hinweis-aus-gost779b','none');setVisibility('hinweis-aus-wissenschaftlich','none');setVisibility('hinweis-aus-alalc','none');setVisibility('hinweis-aus-british','none');setVisibility('hinweis-aus-translit','none');setVisibility('hinweis-aus-bgndigr','none');setVisibility('hinweis-aus-bgn','none');setVisibility('hinweis-duden','none');setVisibility('hinweis-sprognaevn','none');\" onblur=\"setVisibility('hinweis-aus-kyrillisch','none');setVisibility('hinweis-aus-isor9','none');setVisibility('hinweis-aus-iso9','none');setVisibility('hinweis-aus-gost779b','none');setVisibility('hinweis-aus-wissenschaftlich','none');setVisibility('hinweis-aus-alalc','none');setVisibility('hinweis-aus-british','none');setVisibility('hinweis-aus-translit','none');setVisibility('hinweis-aus-bgndigr','none');setVisibility('hinweis-aus-bgn','none');setVisibility('hinweis-duden','none');setVisibility('hinweis-sprognaevn','none');\" onclick=\"setVisibility('hinweis-info','none');\" title='$textin' class=\"raender form-control\" style=\"vertical-align:middle;width:auto;float:left;max-width:calc(40% - 50px);\" size=\"1\" name=\"ausgabekodierung\" size=\"3\">
      <optgroup label=\" $ausw_nach \">
      <option value=\"\">$ausw_ausw</option>
      <option onmouseover=\"setVisibility('hinweis-aus-kyrillisch','inline')\" onmouseout=\"setVisibility('hinweis-aus-kyrillisch','none')\" value=\"kyrillisch\"> $ausw_kyrillisch </option>
      <option onmouseover=\"setVisibility('hinweis-aus-isor9','inline')\" onmouseout=\"setVisibility('hinweis-aus-isor9','none')\" value=\"isor9\"> $ausw_isor9</option>
      <option onmouseover=\"setVisibility('hinweis-aus-iso9','inline')\" onmouseout=\"setVisibility('hinweis-aus-iso9','none')\" value=\"iso9\">$ausw_iso9</option>
      <option onmouseover=\"setVisibility('hinweis-aus-gost779b','inline')\" onmouseout=\"setVisibility('hinweis-aus-gost779b','none')\" value=\"gost779b\">$ausw_gost779b</option>
      <option onmouseover=\"setVisibility('hinweis-aus-wissenschaftlich','inline')\" onmouseout=\"setVisibility('hinweis-aus-wissenschaftlich','none')\" value=\"wissenschaftlich\">$ausw_wissensch</option>
      <option onmouseover=\"setVisibility('hinweis-aus-alalc','inline')\" onmouseout=\"setVisibility('hinweis-aus-alalc','none')\" value=\"alalc\">$ausw_alalc</option>
      <option onmouseover=\"setVisibility('hinweis-aus-bgndigr','inline')\" onmouseout=\"setVisibility('hinweis-aus-bgndigr','none')\" value=\"bgndigr\">BGN/PCGN $ausw_digr</option>
      <option onmouseover=\"setVisibility('hinweis-aus-bgn','inline')\" onmouseout=\"setVisibility('hinweis-aus-bgn','none')\" value=\"bgn\">BGN/PCGN</option>
      <option onmouseover=\"setVisibility('hinweis-aus-british','inline')\" onmouseout=\"setVisibility('hinweis-aus-british','none')\" value=\"british\">$ausw_british</option>
      <option onmouseover=\"setVisibility('hinweis-aus-translit','inline')\" onmouseout=\"setVisibility('hinweis-aus-translit','none')\" value=\"translit\">$ausw_translit</option>
      <option onmouseover=\"setVisibility('hinweis-duden','inline')\" onmouseout=\"setVisibility('hinweis-duden','none')\" value=\"duden\">Duden</option>
      <option onmouseover=\"setVisibility('hinweis-sprognaevn','inline')\" onmouseout=\"setVisibility('hinweis-sprognaevn','none')\" value=\"sprognaevn\">Sprognævn</option>
      </optgroup>
    </select>";
}
?>
    <input type="submit" name="senden" class="absenden btn" style="vertical-align:middle; margin:2px 0 0 5px;float:left;" title="<?php echo $eingabe_transl?>" value="<?php echo $transliteration ?>" onfocus="setVisibility('laden','inline')" onBlur="setVisibility('laden','none')"><br>
</div></div>
<!--<div id="laden" style="float:right;"></div></div>-->
<br />
<!--<div style="clear:both";>-->

<input style="display:inline;" type="submit"  onfocus="setVisibility('laden','inline')" onBlur="setVisibility('laden','none')" title="<?php echo $erw_titel ?>" name="erweitert" class="absenden btn" value="<?php echo $erw_einst?>" >



<form name="frm"  action="<?php echo $pageURL;if ($pagesource == "oestudier"){echo $append;}?>" method="POST" style="display:inline;float:left;">
<input type="hidden" name="language" value="<?php echo $lang; ?>">
<input class="absenden btn" onfocus="setVisibility('laden','inline')" onBlur="setVisibility('laden','none')"  type="submit" name="neustart"  value="<?php echo $anfang;?>" >

</div></form>

  </form>



<!--****************** Ende Fenster Zieltext **************** -->
     <?php 


  if ((empty($ausgabekodierung)) OR (empty($buchstaben)))
 
{echo "";}
elseif (( array_key_exists('anzeige_warnungen', $_SESSION) ) AND ( array_key_exists('text', $_SESSION) )  )
{echo "<p style=\"outline:2px solid #00527F;\"><a href=\"#bericht\">$warnung_bericht_seitenende</a></p>";} 




/****************** Anfang Fenster Quelltext ***************/
if (( !isset($eingabetext) ) OR ( $text == "" ) OR ( array_key_exists('translit-ru', $_GET) OR ($ausgabe_fehlt == '1') OR ($kein_kyr == '1') OR ($kein_lat == '1'))){}
else {


if ($ausgabekodierung == $eingabekodierung)
	{echo "<br><h3>$originaltext</h3>";}
	else
	{echo "<br><h3>$quelltext ($anz_quelle)</h3>";} ?>
<form name="frm2" id="eingabetext2" action="<?php echo $pageURL;if ($pagesource == "oestudier"){echo $append;}?>" method="POST">
    <input type="hidden" name="cyracademisator" value="<?=session_id()?>">
    <input type="hidden" name="language" value="<?php echo $lang; ?>">


<br>
      <textarea data-disable-touch-keyboard="" id="grau" name="grau" class="keyboardInput" style="border:1px solid #666; margin:2px; clear:left;width:100%;"  rows="10" ><?php 
	  $quelle = stripslashes($eingabetext);
	  echo $quelle ?></textarea><br>
<div style="text-align: center;">
<div style="clear:both;display: inline-block;">
<select title='<?php echo $quelltext ?>' class="raender form-control" size="1" style="vertical-align:middle;width: auto;position:relative;float:left;max-width:calc(40% - 50px);" name="eingabekodierung" size="3">
<optgroup label=<?php echo "\"$ausw_von\">
      <option ";
if  ($eingabekodierung == "kyrillisch") {echo"selected ";}
echo"value=\"kyrillisch\">$ausw_kyrillisch</option>
      <option ";
if  ($eingabekodierung == "isor9") {echo"selected ";}
echo"value=\"isor9\">$ausw_isor9</option>
      <option ";
if  ($eingabekodierung == "iso9") {echo"selected ";}
echo"value=\"iso9\">$ausw_iso9</option>
      <option ";
if  ($eingabekodierung == "gost779b") {echo"selected ";}
echo"value=\"gost779b\">$ausw_gost779b</option>
      <option ";
if  ($eingabekodierung == "wissenschaftlich") {echo"selected ";}
echo"value=\"wissenschaftlich\">$ausw_wissensch</option>
      <option ";
if  ($eingabekodierung == "alalc") {echo"selected ";}
echo"value=\"alalc\">$ausw_alalc_dia</option>
      <option ";
if  ($eingabekodierung == "british") {echo"selected ";}
echo"value=\"british\">$ausw_british</option>
      <option ";
if  ($eingabekodierung == "translit") {echo"selected ";} ?>
value="translit"><?php echo $ausw_translit?></option>
      </optgroup>
    </select>&nbsp;<img align='top' title='<?php echo $warnung_ausgabe_fehlt ?>' style="vertical-align:middle;float:left;margin:5px;" src='style/pfeil.png'>
      <select title='<?php echo $textin?>' style="vertical-align:middle;width: auto;float:left;max-width:calc(40% - 50px);" class="raender form-control" size="1" name="ausgabekodierung" size="3">
      <optgroup label="<?php echo $ausw_nach ?>">
      <option <?php
if  ($ausgabekodierung == "kyrillisch") {echo"selected ";}
echo"value=\"kyrillisch\">$ausw_kyrillisch</option>
      <option ";
if  ($ausgabekodierung == "isor9") {echo"selected ";}
echo"value=\"isor9\">$ausw_isor9</option>
      <option ";
if  ($ausgabekodierung == "iso9") {echo"selected ";}
echo"value=\"iso9\">$ausw_iso9</option>
      <option ";
if  ($ausgabekodierung == "gost779b") {echo"selected ";}
echo"value=\"gost779b\">$ausw_gost779b</option>
      <option ";
if  ($ausgabekodierung == "wissenschaftlich") {echo"selected ";}
echo"value=\"wissenschaftlich\">$ausw_wissensch</option>
      <option ";
if  ($ausgabekodierung == "alalc") {echo"selected ";}
echo"value=\"alalc\">$ausw_alalc</option>
      <option ";
if  ($ausgabekodierung == "bgndigr") {echo"selected ";}
echo"value=\"bgndigr\">BGN/PCGN $ausw_digr</option>
      <option ";
if  ($ausgabekodierung == "bgn") {echo"selected ";}
echo"value=\"bgn\">BGN/PCGN</option>
      <option ";
if  ($ausgabekodierung == "british") {echo"selected ";}
echo"value=\"british\">$ausw_british</option>

      <option ";
if  ($ausgabekodierung == "translit") {echo"selected ";}
echo"value=\"translit\">$ausw_translit</option>
      <option ";
if  ($ausgabekodierung == "duden") {echo"selected ";}
echo"value=\"duden\">Duden</option>
      <option ";
if  ($ausgabekodierung == "sprognaevn") 
{echo"selected ";} ?>
value="sprognaevn">Sprognævn</option>
      </optgroup>
    </select>
    <input type="submit" onfocus="setVisibility('laden','inline')" onBlur="setVisibility('laden','none')" class="absenden btn" style="margin:2px 0 0 5px; vertical-align:middle;float:left;" title='<?php echo $eingabe_transl?>' value="<?php echo $transliteration_neu ?>">
	</div><div style="clear:both;"></div><br>
<div class="ifjs">
<input type="submit" onfocus="setVisibility('laden','inline')" onBlur="setVisibility('laden','none')"  title="<?php echo $erw_titel ?>" name="erweitert" class="absenden btn" value="<?php echo "$erw_einst"?>">
<form name="frm"  action="<?php echo $pageURL;if ($pagesource == "oestudier"){echo $append;}?>" method="POST" style="display:inline;">
<input type="hidden" name="language" value="<?php echo $lang; ?>">
<input class="absenden btn" onfocus="setVisibility('laden','inline')" onBlur="setVisibility('laden','none')"  type="submit" name="neustart"  value="<?php echo $anfang;?>" >
</div></div></form>
  </form>

  <?php 
} 

?>
  

</center>
<?php
/////////// Log ////////////////

$datum=date("d.m.Y:");
$zeit=date("H:i:s");
$ip=getenv("REMOTE_ADDR");
$site = $_SERVER['REQUEST_URI'];
$monate = array(1=>"Januar", 2=>"Februar", 3=>"Maerz", 4=>"April", 5=>"Mai", 6=>"Juni", 7=>"Juli", 8=>"August", 9=>"September", 10=>"Oktober", 11=>"November", 12=>"Dezember");

$monat = date("n");
$jahr = date("y");
$dateiname="log/log_$monate[$monat]_$jahr.txt";
//if ($ip != ('194.255.31.1')){
if (($isor9_ru_ausn !='0') OR ($ru_alalc_diakr !='1') OR ($ru_duden_gen !='1') OR ($ru_duden_je !='1') OR ($ru_duden_scho !='1') OR ($ru_duden_ji !='1') OR ($ru_duden_yj !='1') OR ($ru_duden_ik !='1') OR ($ru_duden_ks !='1') OR ($ru_duden_ss !='1') OR ($ru_duden_znak !='0') OR ($ru_duden_jo !='1') OR ($ru_duden_sh !='0') OR ($ru_duden_stsch !='0') OR ($ru_isor9_ch !='ch') OR ($ru_isor9_ausn !='0') OR ($ru_isor9_kirch !='rus') OR ($ru_isor9_omega !='1') OR ($ru_sprognaevn_sj !='zj') OR ($ru_sprognaevn_znak !='0') OR ($ru_wissenschaftlich_kirch !='rus') OR ($ru_wissenschaftlich_omega !='1') OR ($anzeige_warnungen =='anzeige_warnungen'))
	{
	$eintragen="[$datum$zeit] isor9_ru_ausn $isor9_ru_ausn ru_alalc_diakr $ru_alalc_diakr ru_duden_gen $ru_duden_gen ru_duden_je $ru_duden_je ru_duden_scho $ru_duden_scho ru_duden_ji $ru_duden_ji ru_duden_yj $ru_duden_yj ru_duden_ik $ru_duden_ik ru_duden_ks $ru_duden_ks ru_duden_ss $ru_duden_ss ru_duden_znak $ru_duden_znak ru_duden_jo $ru_duden_jo ru_duden_sh $ru_duden_sh ru_duden_stsch $ru_duden_stsch ru_isor9_ch $ru_isor9_ch ru_isor9_ausn $ru_isor9_ausn ru_isor9_kirch $ru_isor9_kirch ru_isor9_omega $ru_isor9_omega ru_sprognaevn_sj $ru_sprognaevn_sj ru_sprognaevn_znak $ru_sprognaevn_znak ru_wissenschaftlich_kirch $ru_wissenschaftlich_kirch ru_wissenschaftlich_omega $ru_wissenschaftlich_omega Warnungen:$anzeige_warnungen --------- Input:$eingabekodierung  Output:$ausgabekodierung  Quelltext:$quelle -------- Zieltext:$text -------- $site  $ip";
	}
else
	{
	$eintragen="[$datum$zeit] Input:$eingabekodierung  Output:$ausgabekodierung  Quelltext:$quelle -------- Zieltext:$text -------- LibX:$libx OpenSearch:$opensearch $site  $ip";
	}


$datei=fopen($dateiname,"a");
fputs($datei,"$eintragen\n");
fclose($datei);
//}
/////////// Log Ende ////////////////

  if (empty($ausgabekodierung))
{echo "";}
elseif (( array_key_exists('anzeige_warnungen', $_SESSION) ) AND ( array_key_exists('text', $_SESSION) )  )
{include ("bericht.php");}


?>
