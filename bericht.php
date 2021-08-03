<?php 
if (empty($buchstaben)){
}
else
{
echo "<br><hr><a name=\"bericht\"></a>
<h3>
$ber_titel</h3>";
if($eingabekodierung == "isor9")
	{$quelltext = $ausw_isor9;}
elseif($eingabekodierung == "iso9")
	{$quelltext = $ausw_iso9;}
elseif ($eingabekodierung == "kyrillisch")
	{$quelltext = $ausw_kyrillisch;}
elseif ($eingabekodierung == "wissenschaftlich")
	{$quelltext = $ausw_wissensch;}
elseif ($eingabekodierung == "gost779b")
	{$quelltext = $ausw_gost779b;}
elseif ($eingabekodierung == "alalc")
	{$quelltext = $ausw_alalc;}
elseif ($eingabekodierung == "translit")
	{$quelltext = $ausw_translit;}
if($ausgabekodierung == "isor9")
	{$zieltext = $ausw_isor9;}
elseif($ausgabekodierung == "iso9")
	{$zieltext = $ausw_iso9;}
elseif ($ausgabekodierung == "kyrillisch")
	{$zieltext = $ausw_kyrillisch;}
elseif ($ausgabekodierung == "wissenschaftlich")
	{$zieltext = $ausw_wissensch;}
elseif ($ausgabekodierung == "gost779b")
	{$zieltext = $ausw_gost779b;}
elseif ($ausgabekodierung == "alalc")
	{$zieltext = $ausw_alalc;}
elseif ($ausgabekodierung == "translit")
	{$zieltext = $ausw_translit;}
elseif ($ausgabekodierung == "duden")
	{$zieltext = $ber_duden;}
elseif ($ausgabekodierung == "sprognaevn")
	{$zieltext = $ber_ds;}
echo '<P> ' . $ber_von . ' <b> ' .$quelltext .' </b> ' . $ber_nach . ' <b> ' . $zieltext . '</b></p></center></center>';
if($ausgabekodierung == "isor9")
	{include ("berichte/tabelle-isor9.php");}
elseif($ausgabekodierung == "iso9")
	{include ("berichte/tabelle-iso9.php");}
elseif ($ausgabekodierung == "wissenschaftlich")
	{include ("berichte/tabelle-wissenschaftlich.php");}
elseif ($ausgabekodierung == "gost779b")
	{include ("berichte/tabelle-gost779b.php");}
elseif ($ausgabekodierung == "alalc")
	{include ("berichte/tabelle-alalc.php");}
elseif ($ausgabekodierung == "translit")
	{include ("berichte/tabelle-translit.php");}
echo '<p style="margin: 0 0 5px 0;"><b>' . $ber_analyse . '</b> (' . $zieltext . '):</p><div id="berichttexte">';
if($ausgabekodierung == "isor9")
	{include ("berichte/zieltext-isor9.php");}
if($ausgabekodierung == "iso9")
	{include ("berichte/zieltext-iso9.php");}
if($ausgabekodierung == "wissenschaftlich")
	{include ("berichte/zieltext-wissenschaftlich.php");}
if($ausgabekodierung == "gost779b")
	{include ("berichte/zieltext-gost779b.php");}
if($ausgabekodierung == "alalc")
	{include ("berichte/zieltext-alalc.php");}
if($ausgabekodierung == "translit")
	{include ("berichte/zieltext-translit.php");}

echo $text;
?>
</div>
<div id="berichttexte2">
<span style="background-color: red;"><?php echo "$ber_rot:</span> $ber_rot1 $zieltext $ber_rot2<br>"; ?> 
<span style="background-color: orange;"><?php echo "$ber_orange:</span> $ber_orange1 $zieltext, $ber_orange2<br>"; ?>
<span style="background-color: yellow;"><?php echo "$ber_gelb:</span> $ber_gelb1<br>"; ?>
</div>
<?php 
/****************** Anfang Ergebistabelle ****************/

if (empty($buchstabenwarnung)) {
echo "<p style=\"color:red; margin: 15px 0 5px 0;\">$warnung_keine_probleme</p>";
  }
  else {
echo "<br><p style=\"color:red; margin: 15px 0 5px 0;font-weight:bold;\">$warnung_probleme</p>";
echo "<table style=\"text-align: left; width: 100%; outline:1px solid #555555;\" border=\"0\"
 cellpadding=\"2\" cellspacing=\"0\">
  <tbody>
    <tr style=\"background-color: #888;outline:1px solid #555\">
      <td style=\"text-align: center;\"";
      if ($eingabekodierung == "kyrillisch"){echo"";}
    else {echo" colspan=\"2\" rowspan=\"1\" ";}
      echo "> $tab_quellbuchstabe </td>
      <td style=\"text-align: center;\" rowspan=\"2\"
 colspan=\"1\"> $tab_variante </td>
      <td style=\"text-align: center;\" colspan=\"1\"
 rowspan=\"2\"> $tab_transl_stand1 $zieltext $tab_transl_stand2 </td>
      <td style=\"text-align: center;\" colspan=\"2\"
 rowspan=\"1\"> $tab_zus_aus </td>
      <td style=\"text-align: center;\" colspan=\"1\"
 rowspan=\"2\"> $tab_hin_rueck </td>
      <td style=\"text-align: center;\" colspan=\"1\"
 rowspan=\"2\"> $tab_anmerkungen </td>
    </tr>
    <tr>";
    if ($eingabekodierung == "kyrillisch"){echo"";}
    else {echo "<td style=\"text-align: center;background-color: rgb(223, 223, 223);\">$quelltext</td>";}
      echo "<td style=\"text-align: center;background-color: rgb(238, 238, 238);\">$ausw_kyrillisch</td>
      <td style=\"text-align: center;background-color: rgb(223, 223, 223);\">$zieltext</td>
      <td style=\"text-align: center;background-color: rgb(238, 238, 238);\">$ausw_kyrillisch</td>
    </tr>"; foreach($buchstabenwarnung as $buchstabenwarnung_aus) 
      {echo "<tr style=\"outline:1px solid #555\">";
          if ($eingabekodierung == "kyrillisch"){echo"";}
       else
      {echo "<td id=\"bericht\" style=\"background-color: rgb(223, 223, 223);\">"; 
	  	$text = $buchstabenwarnung_aus["1"];
  if($eingabekodierung == "isor9")
    {include ("charmaps/ru-isor9.php");}
  if($eingabekodierung == "iso9")
      {include ("charmaps/ru-iso9.php");}
  if($eingabekodierung == "wissenschaftlich")
      {include ("charmaps/ru-wissenschaftlich.php");}
  if($eingabekodierung == "translit")
      {include ("charmaps/ru-translit.php");}
  if($eingabekodierung == "gost779b")
      {include ("charmaps/ru-gost779b.php");}
  if($eingabekodierung == "alalc")
      {include ("charmaps/ru-alalc.php");}
	  echo $text;
	  echo "</td>";}
      echo "<td class=\"bericht\" style=\"background-color: rgb(238, 238, 238);\"> $buchstabenwarnung_aus[1] </td>
      <td class=\"bericht\" style=\"background-color: rgb(223, 223, 223);\"> $buchstabenwarnung_aus[2] </td>
      <td style=\"text-align: center;background-color: rgb(238, 238, 238);\"> $buchstabenwarnung_aus[3] </td>
      <td class=\"bericht\" style=\"background-color: rgb(223, 223, 223);\"> $buchstabenwarnung_aus[4] </td>
      <td class=\"bericht\" style=\"background-color: rgb(238, 238, 238);\"> $buchstabenwarnung_aus[5] </td>
      <td style=\"text-align:center; background-color: rgb(223, 223, 223);\"> $buchstabenwarnung_aus[6] </td>
      <td style=\"text-align: center;background-color: rgb(238, 238, 238);\"> $buchstabenwarnung_aus[7] </td>
    </tr>";}
echo "</tbody></table></center>";}

/****************** Ende Ergebistabelle ****************/

echo "</div><br>";
if ($lang == "da-DK")
    {echo $zeitpunkt;
 $timestamp = time();
  $datum = date("d/m-Y",$timestamp);
  $uhrzeit = date("H.i",$timestamp);
  echo  $datum," - kl. ",$uhrzeit;}
elseif ($lang == "de-DE")
    {echo $zeitpunkt;
 $timestamp = time();
  $datum = date("d.m.Y",$timestamp);
  $uhrzeit = date("H:i",$timestamp);
  echo  $datum," - ",$uhrzeit," Uhr";}
elseif ($lang == "ru-RU")
    {echo $zeitpunkt;
 $timestamp = time();
  $datum = date("d.m.Y",$timestamp);
  $uhrzeit = date("H:i",$timestamp);
  echo  $datum," - ",$uhrzeit;}
else
    {echo $zeitpunkt;
 $timestamp = time();
  $datum = date("M dS Y",$timestamp);
  $uhrzeit = date("g:i a",$timestamp);
  echo  $datum," - ",$uhrzeit;}
 

}

?>
