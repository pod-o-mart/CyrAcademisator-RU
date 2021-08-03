<?php

if ( array_key_exists('eingabetext', $_POST) ){
$text = $_POST['eingabetext'];
$_SESSION['text'] = $text;
}

elseif ( array_key_exists('eingabetext', $_SESSION) ){
$text = $_SESSION['eingabetext'];
$_SESSION['text'] = $text;
}

if ( array_key_exists('eingabekodierung', $_POST) ){
$eingabekodierung = $_POST["eingabekodierung"];
$ausgabekodierung = $_POST["ausgabekodierung"];}
if (isset($_POST["eingabetext"])){
$text = $_POST["eingabetext"];
$_SESSION['text'] = $text;}
?>

<center><h2><?php echo "$erw_einst"?></h2>
<div style="text-align: center;">
<div style="clear:both;display: inline-block;">
<form name="erw"  action="<?php echo $pageURL;if ($pagesource == "oestudier"){echo $append;}?>" method="POST">
	<input type="hidden" name="language" value="<?php echo $lang; ?>">
    <input type="hidden" name="cyracademisator" value="<?=session_id()?>">
      <select onchange="setVisibility('hinweis-info','none');setVisibility('hinweis-ein-auto','none');setVisibility('hinweis-ein-kyrillisch','none');setVisibility('hinweis-ein-isor9','none');setVisibility('hinweis-ein-iso9','none');setVisibility('hinweis-ein-gost779b','none');setVisibility('hinweis-ein-wissenschaftlich','none');setVisibility('hinweis-ein-alalc','none');setVisibility('hinweis-ein-british','none');setVisibility('hinweis-ein-translit','none');" onblur="setVisibility('hinweis-ein-auto','none');setVisibility('hinweis-ein-kyrillisch','none');setVisibility('hinweis-ein-isor9','none');setVisibility('hinweis-ein-iso9','none');setVisibility('hinweis-ein-gost779b','none');setVisibility('hinweis-ein-wissenschaftlich','none');setVisibility('hinweis-ein-alalc','none');setVisibility('hinweis-ein-british','none');setVisibility('hinweis-ein-translit','none');" onclick="setVisibility('hinweis-info','none');" size="1"  class="raender form-control"  style="max-width:calc(40% - 50px);float:left;position:relative;" name="eingabekodierung" size="3">
      <optgroup label="
<?php 
echo "$ausw_von\">
	  <option ";
if  ($eingabekodierung == "auto") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-ein-auto','inline')\" onmouseout=\"setVisibility('hinweis-ein-auto','none')\" value=\"auto\">$ausw_auto</option>
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
echo"onmouseover=\"setVisibility('hinweis-ein-alalc','inline')\" onmouseout=\"setVisibility('hinweis-ein-alalc','none')\" value=\"alalc\">$ausw_alalc</option>
      <option ";
if  ($eingabekodierung == "british") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-ein-british','inline')\" onmouseout=\"setVisibility('hinweis-ein-british','none')\" value=\"british\">$ausw_british</option>
      <option ";
if  ($eingabekodierung == "translit") {echo"selected ";}
echo"onmouseover=\"setVisibility('hinweis-ein-translit','inline')\" onmouseout=\"setVisibility('hinweis-ein-translit','none')\" value=\"translit\">$ausw_translit</option>"; ?>
      </optgroup>
    </select><img align='top' style="vertical-align:middle;float:left;margin:5px;" src='style/pfeil.png'>
      <select onchange="setVisibility('hinweis-aus-kyrillisch','none');setVisibility('hinweis-aus-isor9','none');setVisibility('hinweis-aus-iso9','none');setVisibility('hinweis-aus-gost779b','none');setVisibility('hinweis-aus-wissenschaftlich','none');setVisibility('hinweis-aus-alalc','none');setVisibility('hinweis-aus-british','none');setVisibility('hinweis-aus-translit','none');setVisibility('hinweis-aus-bgndigr','none');setVisibility('hinweis-aus-bgn','none');setVisibility('hinweis-duden','none');setVisibility('hinweis-sprognaevn','none');" onblur="setVisibility('hinweis-aus-kyrillisch','none');setVisibility('hinweis-aus-isor9','none');setVisibility('hinweis-aus-iso9','none');setVisibility('hinweis-aus-gost779b','none');setVisibility('hinweis-aus-wissenschaftlich','none');setVisibility('hinweis-aus-alalc','none');setVisibility('hinweis-aus-british','none');setVisibility('hinweis-aus-translit','none');setVisibility('hinweis-aus-bgndigr','none');setVisibility('hinweis-aus-bgn','none');setVisibility('hinweis-duden','none');setVisibility('hinweis-sprognaevn','none');"  style="max-width:calc(40% - 50px);float:left;" onclick="setVisibility('hinweis-info','none');" class="raender form-control" size="1" name="ausgabekodierung" size="3">
      <optgroup label="
<?php echo "$ausw_nach\">
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
onmouseover="setVisibility('hinweis-sprognaevn','inline')" onmouseout="setVisibility('hinweis-sprognaevn','none')"  value="sprognaevn">Sprognævn</option>
      </optgroup>
    </select>
	  <input onfocus="setVisibility('laden','inline')" style="float:left;margin:2px 0 0 5px" onBlur="setVisibility('laden','none')" type="submit" name="erweitert" class="absenden btn" value="<?php echo $update ?>"><br>
</form>
</div></div>


<form name="frm"  action="<?php echo $pageURL;if ($pagesource == "oestudier"){echo $append;}?>" method="POST" style="display:inline;">
    <input type="hidden" name="cyracademisator" value="<?=session_id()?>">
    <input type="hidden" name="language" value="<?php echo $lang; ?>">

<br>


<table style="text-align: left; width: 100%; outline:1px solid #555555;" border="0"
 cellpadding="2" cellspacing="0">
<!--   <tbody>
    <tr>
      <td
 style="background-color: #CFCFCF; text-align: center;"><h3><?php echo "$erw_einst_allg"?></h3></td>
</tr>
 <tr style="background-color: rgb(238, 238, 238);">    
	<td style="text-align: center;">
   <input style"none"; type="checkbox"  
<?php if ( array_key_exists('anzeige_original', $_SESSION) ) { echo" checked ";} ?> 
name="anzeige_original" value="anzeige_original"><?php echo $anz_original ?></class>
    <input type="checkbox"
	<?php if ( array_key_exists('anzeige_warnungen', $_SESSION) ) { echo" checked ";} ?> 
name="anzeige_warnungen" value="anzeige_warnungen"><?php echo $anz_bericht ?></class>
 </td>
</tr>
  </tbody>-->
</table>

<?php
if ($eingabekodierung == "kyrillisch")
	{$anz_quelle = $ausw_kyrillisch;}
elseif ($eingabekodierung == "auto")
	{$anz_quelle = $ausw_auto;}
elseif ($eingabekodierung == "wissenschaftlich")
	{$anz_quelle = $ausw_wissensch;}
elseif ($eingabekodierung == "alalc")
	{$anz_quelle = $ausw_alalc;}
elseif ($eingabekodierung == "british")
	{$anz_quelle = $ausw_british;}
elseif ($eingabekodierung == "translit")
	{$anz_quelle = $ausw_translit;}
elseif ($eingabekodierung == "gost779b")
	{$anz_quelle = $ausw_gost779b;}
elseif ($eingabekodierung == "isor9")
	{$anz_quelle = $ausw_isor9;}
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
elseif ($ausgabekodierung == "bgndigr")
	{$anz_ergebnis = "BGN/PCGN $ausw_digr";}
elseif ($ausgabekodierung == "bgn")
	{$anz_ergebnis = "BGN/PCGN";}
elseif ($ausgabekodierung == "british")
	{$anz_ergebnis = $ausw_british;}
elseif ($ausgabekodierung == "duden")
	{$anz_ergebnis = "Duden";}
elseif ($ausgabekodierung == "sprognaevn")
	{$anz_ergebnis = "Sprognævn";}
else 
	{$anz_ergebnis = $ausw_iso9;}
	
if ((($eingabekodierung == "kyrillisch") OR ($eingabekodierung == "wissenschaftlich") OR ($eingabekodierung == "alalc") OR ($eingabekodierung == "iso9") OR ($eingabekodierung == "gost779b") OR ($eingabekodierung == "translit" OR ($eingabekodierung == "british") OR ($eingabekodierung == "auto"))) AND (($ausgabekodierung == "kyrillisch") OR ($ausgabekodierung == "iso9") OR ($ausgabekodierung == "auto") OR ($ausgabekodierung == "british") OR ($ausgabekodierung == "bgndigr") OR ($ausgabekodierung == "bgn") OR ($ausgabekodierung == "gost779b") OR ($ausgabekodierung == "bgn") OR ($ausgabekodierung == "bgndigr") OR ($ausgabekodierung == "translit")))
{echo "<br><br>$erw_keine_weiteren<br>";}
elseif (empty($ausgabekodierung))
  {echo "<br><br><p style=\"color:red; margin: 0 0 10px 0;\">$warnung_ausgabe_fehlt_update</p>";}
else
{
if (($ausgabekodierung == "kyrillisch") OR ($ausgabekodierung == "iso9") OR ($ausgabekodierung == "gost779b") OR ($ausgabekodierung == "bgndigr") OR ($ausgabekodierung == "bgn") OR ($ausgabekodierung == "translit"))
{echo "<br><br>$erw_nur_eingabe";}


if (($eingabekodierung == "kyrillisch") OR ($eingabekodierung == "wissenschaftlich") OR ($eingabekodierung == "auto") OR ($eingabekodierung == "british") OR ($eingabekodierung == "alalc") OR ($eingabekodierung == "iso9") OR ($eingabekodierung == "gost779b") OR ($eingabekodierung == "translit"))
{echo "<br><br>$erw_nur_ausgabe";}
else
{
echo"<br>
<table style=\"text-align: left; width: 100%; outline:1px solid #555555;\" border=\"0\"
 cellpadding=\"2\" cellspacing=\"0\">
  <tbody>
    <tr>
      <td colspan=\"2\" rowspan=\"1\"
 style=\"background-color: #CFCFCF; text-align: center;\"><h3>$erw_eingabeeinstellungen ($anz_quelle)</h3></td>
    </tr>";
if ($eingabekodierung == "wissenschaftlich")
	{include ("erweitert/wissenschaftlich-ru.php");}
elseif ($eingabekodierung == "alalc")
	{include ("erweitert/alalc-ru.php");}
elseif ($eingabekodierung == "isor9")
	{include ("erweitert/isor9-ru.php");}
}

if (($ausgabekodierung == "wissenschaftlich") OR ($ausgabekodierung == "alalc") OR ($ausgabekodierung == "duden") OR ($ausgabekodierung == "sprognaevn") OR ($ausgabekodierung == "isor9"))
{
echo"<br>
<table style=\"text-align: left; width: 100%; outline:1px solid #555555;\" border=\"0\"
 cellpadding=\"2\" cellspacing=\"0\">
  <tbody>
    <tr>
      <td colspan=\"2\" rowspan=\"1\"
 style=\"background-color: #CFCFCF; text-align: center;\"><h3>$erw_ausgabeeinstellungen ($anz_ergebnis)</h3></td>
    </tr>


";	}
if ($ausgabekodierung == "wissenschaftlich")
	{include ("erweitert/ru-wissenschaftlich.php");}
elseif ($ausgabekodierung == "alalc")
	{include ("erweitert/ru-alalc.php");}
elseif ($ausgabekodierung == "duden")
	{include ("erweitert/ru-duden.php");}
elseif ($ausgabekodierung == "sprognaevn")
	{include ("erweitert/ru-sprognaevn.php");}
elseif  ($ausgabekodierung == "isor9")
	{include ("erweitert/ru-isor9.php");}

}
?>
<div id="laden"></div>
<br>
<br>
<input onfocus="setVisibility('laden','inline')" onBlur="setVisibility('laden','none')" type="submit" name="speichern" class="absenden btn" style="display:inline;" value="<?php echo "$erw_speichern";?>">
</form>
<form name="frm"  action="<?php echo $pageURL;if ($pagesource == "oestudier"){echo $append;}?>" method="POST" style="display:inline;">
	<input type="hidden" name="language" value="<?php echo $lang; ?>">
    <input type="hidden" name="cyracademisator" value="<?=session_id()?>">
    <input type="hidden" name="ru_isor9_ch" value="h">
    <input type="hidden" name="ru_isor9_ausn" value="0">
    <input type="hidden" name="ru_isor9_kirch" value="rus">
    <input type="hidden" name="ru_isor9_omega" value="1">
    <input type="hidden" name="ru_wissenschaftlich_kirch" value="rus">
    <input type="hidden" name="ru_wissenschaftlich_omega" value="1">
    <input type="hidden" name="ru_sprognaevn_sj" value="zj">
    <input type="hidden" name="ru_sprognaevn_znak" value="0">
	<input type="hidden" name="ru_duden_gen" value="1">
	<input type="hidden" name="ru_duden_je" value="1">
	<input type="hidden" name="ru_duden_scho" value="1">
	<input type="hidden" name="ru_duden_ji" value="1">
	<input type="hidden" name="ru_duden_yj" value="1">
	<input type="hidden" name="ru_duden_ik" value="1">
	<input type="hidden" name="ru_duden_ks" value="1">
	<input type="hidden" name="ru_duden_ss" value="1">
	<input type="hidden" name="ru_duden_znak" value="0">
	<input type="hidden" name="ru_duden_jo" value="1">
	<input type="hidden" name="ru_duden_sh" value="0">
	<input type="hidden" name="ru_duden_stsch" value="0">
    <input type="hidden" name="ru_alalc_kirch" value="rus">
    <input type="hidden" name="ru_alalc_diakr" value="1">
    <input type="hidden" name="isor9_ru_ausn" value="0">
<input onfocus="setVisibility('laden','inline')" onBlur="setVisibility('laden','none')" type="submit" name="erweitert" class="absenden btn" value="<?php echo "$erw_einst_zur"?>">
</form>

<form name="frm" action="<?php echo $pageURL;if ($pagesource == "oestudier"){echo $append;}?>" method="POST" style="display:inline;">
<input type="hidden" name="language" value="<?php echo $lang; ?>">
<input onfocus="setVisibility('laden','inline')" onBlur="setVisibility('laden','none')" type="submit" name="neustart" class="absenden btn" value="<?php echo "$anfang";?>" style="display:inline;">
</form>
<form name="frm" action="javascript:history.back()" method="POST" style="display:inline;">
<input type="hidden" name="language" value="<?php echo $lang; ?>">
<input onfocus="setVisibility('laden','inline')" onBlur="setVisibility('laden','none')"  type="submit" class="absenden btn" value="<?php echo "$zurueck";?>" style="display:inline;">
</form><br>

<br>
