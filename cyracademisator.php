<?php
//echo session_id();
?>
<h1><?php echo $unterschrift; ?></h1>
<form name="languagepicker" action="" method="POST">
	<select title="Language" size="1" class="raender form-control" style="" name="language">
		<option value="da-DK" <?php if ($lang=="da-DK") {echo "selected";} ?>>Dansk</option>
		<option value="de-DE" <?php if ($lang=="de-DE") {echo "selected";} ?>>Deutsch</option>
		<option value="en-GB" <?php if (($lang=="en-GB") OR (!isset ($lang))) {echo "selected";} ?>>English</option>
		<option value="ru-RU" <?php if ($lang=="ru-RU") {echo "selected";}?>>Русский</option>
	</select>
	<input type="submit" name="sprachauswahl" class="absenden btn" style="" value=" ✔ ">
</form>

<?php
$libx = $_POST["libx"];
$opensearch = $_GET["opensearch"];			
if ( array_key_exists('libx', $_POST) ){echo" - LibX";}

////////////////erweiterte einstellungen-allgemein
if ( array_key_exists('anzeige_original', $_POST)){
$anzeige_original = $_POST['anzeige_original'];
$_SESSION['anzeige_original'] = $anzeige_original;}
if(( !array_key_exists('anzeige_original', $_POST) ) AND (isset($_POST["speichern"])))
{
unset ($_SESSION["anzeige_original"]);
}
if ( array_key_exists('anzeige_warnungen', $_POST)){
$anzeige_warnungen = $_POST['anzeige_warnungen'];
$_SESSION['anzeige_warnungen'] = $anzeige_warnungen;}
if(( !array_key_exists('anzeige_warnungen', $_POST) ) AND (isset($_POST["speichern"])))
{
unset ($_SESSION["anzeige_warnungen"]);
}
////////////////erweiterte einstellungen-spezifisch
if ( array_key_exists('isor9_ru_ausn', $_POST) ){
$isor9_ru_ausn = $_POST['isor9_ru_ausn'];
$_SESSION['isor9_ru_ausn'] = $isor9_ru_ausn;
}
elseif ( array_key_exists('isor9_ru_ausn', $_SESSION) ){
$isor9_ru_ausn = $_SESSION['isor9_ru_ausn'];}
else {$isor9_ru_ausn ="0";
$_SESSION['isor9_ru_ausn'] = $isor9_ru_ausn;
}
if ( array_key_exists('ru_isor9_ch', $_POST) ){
$ru_isor9_ch = $_POST['ru_isor9_ch'];
$_SESSION['ru_isor9_ch'] = $ru_isor9_ch;
}
elseif ( array_key_exists('ru_isor9_ch', $_SESSION) ){
$ru_isor9_ch = $_SESSION['ru_isor9_ch'];}
else {$ru_isor9_ch ="ch";
$_SESSION['ru_isor9_ch'] = $ru_isor9_ch;
}

if ( array_key_exists('ru_isor9_omega', $_POST) ){
$ru_isor9_omega = $_POST['ru_isor9_omega'];
$_SESSION['ru_isor9_omega'] = $ru_isor9_omega;
}
elseif ( array_key_exists('ru_isor9_omega', $_SESSION) ){
$ru_isor9_omega = $_SESSION['ru_isor9_omega'];}
else {$ru_isor9_omega ="1";
$_SESSION['ru_isor9_omega'] = $ru_isor9_omega;
}

if ( array_key_exists('ru_isor9_ausn', $_POST) ){
$ru_isor9_ausn = $_POST['ru_isor9_ausn'];
$_SESSION['ru_isor9_ausn'] = $ru_isor9_ausn;
}
elseif ( array_key_exists('ru_isor9_ausn', $_SESSION) ){
$ru_isor9_ausn = $_SESSION['ru_isor9_ausn'];}
else {
$ru_isor9_ausn = "0";
$_SESSION['ru_isor9_ausn'] =$ru_isor9_ausn;
}

if ( array_key_exists('ru_isor9_kirch', $_POST) ){
$ru_isor9_kirch = $_POST['ru_isor9_kirch'];
$_SESSION['ru_isor9_kirch'] = $ru_isor9_kirch;
}
elseif ( array_key_exists('ru_isor9_kirch', $_SESSION) ){
$ru_isor9_kirch = $_SESSION['ru_isor9_kirch'];}
else {
$ru_isor9_kirch = "rus";
$_SESSION['ru_isor9_kirch'] =$ru_isor9_kirch;
}
//
if ( array_key_exists('ru_wissenschaftlich_omega', $_POST) ){
$ru_wissenschaftlich_omega = $_POST['ru_wissenschaftlich_omega'];
$_SESSION['ru_wissenschaftlich_omega'] = $ru_wissenschaftlich_omega;
}
elseif ( array_key_exists('ru_wissenschaftlich_omega', $_SESSION) ){
$ru_wissenschaftlich_omega = $_SESSION['ru_wissenschaftlich_omega'];}
else {$ru_wissenschaftlich_omega ="1";
$_SESSION['ru_wissenschaftlich_omega'] = $ru_wissenschaftlich_omega;
}
if ( array_key_exists('ru_wissenschaftlich_kirch', $_POST) ){
$ru_wissenschaftlich_kirch = $_POST['ru_wissenschaftlich_kirch'];
$_SESSION['ru_wissenschaftlich_kirch'] = $ru_wissenschaftlich_kirch;
}
elseif ( array_key_exists('ru_wissenschaftlich_kirch', $_SESSION) ){
$ru_wissenschaftlich_kirch = $_SESSION['ru_wissenschaftlich_kirch'];}
else {
$ru_wissenschaftlich_kirch = "rus";
$_SESSION['ru_wissenschaftlich_kirch'] =$ru_wissenschaftlich_kirch;
}
//
if ( array_key_exists('ru_sprognaevn_znak', $_POST) ){
$ru_sprognaevn_znak = $_POST['ru_sprognaevn_znak'];
$_SESSION['ru_sprognaevn_znak'] = $ru_sprognaevn_znak;
}
elseif ( array_key_exists('ru_sprognaevn_znak', $_SESSION) ){
$ru_sprognaevn_znak = $_SESSION['ru_sprognaevn_znak'];}
else {$ru_sprognaevn_znak ="0";
$_SESSION['ru_sprognaevn_znak'] = $ru_sprognaevn_znak;
}
if ( array_key_exists('ru_sprognaevn_sj', $_POST) ){
$ru_sprognaevn_sj = $_POST['ru_sprognaevn_sj'];
$_SESSION['ru_sprognaevn_sj'] = $ru_sprognaevn_sj;
}
elseif ( array_key_exists('ru_sprognaevn_sj', $_SESSION) ){
$ru_sprognaevn_sj = $_SESSION['ru_sprognaevn_sj'];}
else {
$ru_sprognaevn_sj = "sj";
$_SESSION['ru_sprognaevn_sj'] =$ru_sprognaevn_sj;
}
//
if ( array_key_exists('ru_duden_gen', $_POST) ){
$ru_duden_gen = $_POST['ru_duden_gen'];
$_SESSION['ru_duden_gen'] = $ru_duden_gen;
}
elseif ( array_key_exists('ru_duden_gen', $_SESSION) ){
$ru_duden_gen = $_SESSION['ru_duden_gen'];}
else {$ru_duden_gen ="1";
$_SESSION['ru_duden_gen'] = $ru_duden_gen;
}
if ( array_key_exists('ru_duden_je', $_POST) ){
$ru_duden_je = $_POST['ru_duden_je'];
$_SESSION['ru_duden_je'] = $ru_duden_je;
}
elseif ( array_key_exists('ru_duden_je', $_SESSION) ){
$ru_duden_je = $_SESSION['ru_duden_je'];}
else {$ru_duden_je ="1";
$_SESSION['ru_duden_je'] = $ru_duden_je;
}
if ( array_key_exists('ru_duden_scho', $_POST) ){
$ru_duden_scho = $_POST['ru_duden_scho'];
$_SESSION['ru_duden_scho'] = $ru_duden_scho;
}
elseif ( array_key_exists('ru_duden_scho', $_SESSION) ){
$ru_duden_scho = $_SESSION['ru_duden_scho'];}
else {$ru_duden_scho ="1";
$_SESSION['ru_duden_scho'] = $ru_duden_scho;
}
if ( array_key_exists('ru_duden_ji', $_POST) ){
$ru_duden_ji = $_POST['ru_duden_ji'];
$_SESSION['ru_duden_ji'] = $ru_duden_ji;
}
elseif ( array_key_exists('ru_duden_ji', $_SESSION) ){
$ru_duden_ji = $_SESSION['ru_duden_ji'];}
else {$ru_duden_ji ="1";
$_SESSION['ru_duden_ji'] = $ru_duden_ji;
}
if ( array_key_exists('ru_duden_yj', $_POST) ){
$ru_duden_yj = $_POST['ru_duden_yj'];
$_SESSION['ru_duden_yj'] = $ru_duden_yj;
}
elseif ( array_key_exists('ru_duden_yj', $_SESSION) ){
$ru_duden_yj = $_SESSION['ru_duden_yj'];}
else {$ru_duden_yj ="1";
$_SESSION['ru_duden_yj'] = $ru_duden_yj;
}
if ( array_key_exists('ru_duden_ik', $_POST) ){
$ru_duden_ik = $_POST['ru_duden_ik'];
$_SESSION['ru_duden_ik'] = $ru_duden_ik;
}
elseif ( array_key_exists('ru_duden_ik', $_SESSION) ){
$ru_duden_ik = $_SESSION['ru_duden_ik'];}
else {$ru_duden_ik ="1";
$_SESSION['ru_duden_ik'] = $ru_duden_ik;
}
if ( array_key_exists('ru_duden_ks', $_POST) ){
$ru_duden_ks = $_POST['ru_duden_ks'];
$_SESSION['ru_duden_ks'] = $ru_duden_ks;
}
elseif ( array_key_exists('ru_duden_ks', $_SESSION) ){
$ru_duden_ks = $_SESSION['ru_duden_ks'];}
else {$ru_duden_ks ="1";
$_SESSION['ru_duden_ks'] = $ru_duden_ks;
}
if ( array_key_exists('ru_duden_ss', $_POST) ){
$ru_duden_ss = $_POST['ru_duden_ss'];
$_SESSION['ru_duden_ss'] = $ru_duden_ss;
}
elseif ( array_key_exists('ru_duden_ss', $_SESSION) ){
$ru_duden_ss = $_SESSION['ru_duden_ss'];}
else {$ru_duden_ss ="1";
$_SESSION['ru_duden_ss'] = $ru_duden_ss;
}
if ( array_key_exists('ru_duden_znak', $_POST) ){
$ru_duden_znak = $_POST['ru_duden_znak'];
$_SESSION['ru_duden_znak'] = $ru_duden_znak;
}
elseif ( array_key_exists('ru_duden_znak', $_SESSION) ){
$ru_duden_znak = $_SESSION['ru_duden_znak'];}
else {$ru_duden_znak ="0";
$_SESSION['ru_duden_znak'] = $ru_duden_znak;
}
if ( array_key_exists('ru_duden_jo', $_POST) ){
$ru_duden_jo = $_POST['ru_duden_jo'];
$_SESSION['ru_duden_jo'] = $ru_duden_jo;
}
elseif ( array_key_exists('ru_duden_jo', $_SESSION) ){
$ru_duden_jo = $_SESSION['ru_duden_jo'];}
else {$ru_duden_jo ="1";
$_SESSION['ru_duden_jo'] = $ru_duden_jo;
}
if ( array_key_exists('ru_duden_sh', $_POST) ){
$ru_duden_sh = $_POST['ru_duden_sh'];
$_SESSION['ru_duden_sh'] = $ru_duden_sh;
}
elseif ( array_key_exists('ru_duden_sh', $_SESSION) ){
$ru_duden_sh = $_SESSION['ru_duden_sh'];}
else {$ru_duden_sh ="0";
$_SESSION['ru_duden_sh'] = $ru_duden_sh;
}
if ( array_key_exists('ru_duden_stsch', $_POST) ){
$ru_duden_stsch = $_POST['ru_duden_stsch'];
$_SESSION['ru_duden_stsch'] = $ru_duden_stsch;
}
elseif ( array_key_exists('ru_duden_stsch', $_SESSION) ){
$ru_duden_stsch = $_SESSION['ru_duden_stsch'];}
else {$ru_duden_stsch ="0";
$_SESSION['ru_duden_stsch'] = $ru_duden_stsch;
}
//
if ( array_key_exists('ru_alalc_kirch', $_POST) ){
$ru_alalc_kirch = $_POST['ru_alalc_kirch'];
$_SESSION['ru_alalc_kirch'] = $ru_alalc_kirch;
}
elseif ( array_key_exists('ru_alalc_kirch', $_SESSION) ){
$ru_alalc_kirch = $_SESSION['ru_alalc_kirch'];}
else {$ru_alalc_kirch ="rus";
$_SESSION['ru_alalc_kirch'] = $ru_alalc_kirch;
}
if ( array_key_exists('ru_alalc_diakr', $_POST) ){
$ru_alalc_diakr = $_POST['ru_alalc_diakr'];
$_SESSION['ru_alalc_diakr'] = $ru_alalc_diakr;
}
elseif ( array_key_exists('ru_alalc_diakr', $_SESSION) ){
$ru_alalc_diakr = $_SESSION['ru_alalc_diakr'];}
else {$ru_alalc_diakr ="1";
$_SESSION['ru_alalc_diakr'] = $ru_alalc_diakr;
}

if ( array_key_exists('text', $_GET) ){
$eingabetext = $_GET['text'];
$_SESSION['eingabetext'] = $eingabetext;
}

if ( array_key_exists('in', $_GET) )
	{
	$in = $_GET['in'];
	$out = $_GET['out'];
	$text = $_GET['text'];
	$eingabetext = $_GET['text'];
	$eingabekodierung = $in;
    $ausgabekodierung = $out;
	$quelle = $_GET['text'];
	$check = $_GET['text'];
	include ("charmaps/bereinigung.php");
  if($eingabekodierung == "auto")
    {include ("charmaps/auto.php");}
  if($eingabekodierung == "unbestimmt")
    {include ("charmaps/isor9-ru.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "isor9")
    {include ("charmaps/ru-isor9.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "iso9")
    {include ("charmaps/ru-iso9.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "wissenschaftlich")
    {include ("charmaps/ru-wissenschaftlich.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "translit")
    {include ("charmaps/ru-translit.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "gost779b")
    {include ("charmaps/ru-gost779b.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "duden")
    {include ("charmaps/ru-duden.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "sprognaevn")
    {include ("charmaps/ru-sprognaevn.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "alalc")
    {include ("charmaps/ru-alalc.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "bgndigr")
    {include ("charmaps/ru-bgndigr.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "bgn")
    {include ("charmaps/ru-bgn.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "british")
    {include ("charmaps/ru-british.php");}
  if($eingabekodierung == "isor9")
    {include ("charmaps/isor9-ru.php");}
  if($eingabekodierung == "iso9")
      {include ("charmaps/iso9-ru.php");}
  if($eingabekodierung == "wissenschaftlich")
      {include ("charmaps/wissenschaftlich-ru.php");}
  if($eingabekodierung == "translit")
      {include ("charmaps/translit-ru.php");}
  if($eingabekodierung == "gost779b")
      {include ("charmaps/gost779b-ru.php");}
  if($eingabekodierung == "alalc")
      {include ("charmaps/alalc-ru.php");}
  if($eingabekodierung == "british")
      {include ("charmaps/british-ru.php");}
include ("ausgabe.php");
	
}
// alter opensearch plugin
elseif ( array_key_exists('translit-ru', $_GET) )
{
$text = $_GET["translit-ru"];
$check = $_GET["translit-ru"];
$ausgabekodierung = "kyrillisch";
      include ("charmaps/translit-ru.php");
	  include ("ausgabe.php");
}


//////////////////////////////////libx

elseif ( array_key_exists('libx', $_POST) ){

if ( array_key_exists('libx', $_POST) ){
$translitru = $_POST["translit-ru"];
$autoru = $_POST["auto-ru"];
$rutranslit = $_POST["ru-translit"];
$isor9ru = $_POST["isor9-ru"];
$ruisor9 = $_POST["ru-isor9"];
$ruiso9 = $_POST["ru-iso9"];
$ruwissenschaftlich = $_POST["ru-wissenschaftlich"];
$rugost779b = $_POST["ru-gost779b"];
$rualalc = $_POST["ru-alalc"];
$rududen = $_POST["ru-duden"];
$rusprognaevn = $_POST["ru-sprognaevn"];
$iso9ru = $_POST["iso9-ru"];
$wissenschaftlichru = $_POST["wissenschaftlich-ru"];
$gost779bru = $_POST["gost779b-ru"];
$alalcru = $_POST["alalc-ru"];
$rubgndigr = $_POST["ru-bgndigr"];
$rubgn = $_POST["ru-bgn"];
$rubritish = $_POST["ru-british"];
}
else
{
$autoru="";
$translitru="";
$isor9ru="";
$ruisor9="";
$ruiso9="";
$ruwissenschaftlich="";
$rugost779b="";
$rualalc="";
$rutranslit="";
$rududen="";
$rusprognaevn="";
$iso9ru = "";
$wissenschaftlichru = "";
$gost779bru = "";
$alalcru = "";
$rubgndigr = "";
$rubgn = "";
$rubritish = "";

$eingabekodierung = "";
$ausgabekodierung = "";
$text="";
	  include ("ausgabe.php");
}

    if ($autoru == "")
    {echo "";}
    else
      {
      $text = $autoru;
	  $eingabetext = $autoru;
	  $ausgabekodierung = "kyrillisch";
	  include ("charmaps/bereinigung.php");
	  include ("charmaps/auto.php");

  if($eingabekodierung == "isor9")
    {include ("charmaps/isor9-ru.php");}
  elseif($eingabekodierung == "iso9")
    {include ("charmaps/iso9-ru.php");}
  elseif($eingabekodierung == "wissenschaftlich")
    {include ("charmaps/wissenschaftlich-ru.php");}
  elseif($eingabekodierung == "gost779b")
    {include ("charmaps/gost779b-ru.php");}
  elseif($eingabekodierung == "alalc")
    {include ("charmaps/alalc-ru.php");}
  elseif($eingabekodierung == "unbestimmt")
    {include ("charmaps/isor9-ru.php");}
  else
    {include ("charmaps/translit-ru.php");}
	  include ("ausgabe.php");
      }

 if ($translitru == "")
    {echo "";}
    else
      {
      $text = $translitru;
	  $eingabetext = $translitru;
      $eingabekodierung = "translit";
      $ausgabekodierung = "kyrillisch";
	  include ("charmaps/bereinigung.php");
      include ("charmaps/translit-ru.php");
	  include ("ausgabe.php");
      }  
    if ($isor9ru == "")
    {echo "";}
    else
      {
      $text = $isor9ru;
	  $eingabetext = $isor9ru;
      $eingabekodierung = "isor9";
      $ausgabekodierung = "kyrillisch";
	  include ("charmaps/bereinigung.php");
      include ("charmaps/isor9-ru.php");
	  include ("ausgabe.php");
      }
    if ($ruisor9 == "")
    {echo "";}
    else
      {
      $text = $ruisor9;
	  $eingabetext = $ruisor9;
      $eingabekodierung = "kyrillisch";
      $ausgabekodierung = "isor9";
      include ("charmaps/ru-isor9.php");
	  include ("ausgabe.php");
      }
    if ($ruiso9 == "")
    {echo "";}
    else
      {
      $text = $ruiso9;
	  $eingabetext = $ruiso9;
      $eingabekodierung = "kyrillisch";
      $ausgabekodierung = "iso9";
      include ("charmaps/ru-iso9.php");
	  include ("ausgabe.php");
      }  
    if ($ruwissenschaftlich == "")
    {echo "";}
    else
      {
      $text = $ruwissenschaftlich;
	  $eingabetext = $ruwissenschaftlich;
      $eingabekodierung = "kyrillisch";
      $ausgabekodierung = "wissenschaftlich";
      include ("charmaps/ru-wissenschaftlich.php");
	  include ("ausgabe.php");
      }  
    if ($rugost779b == "")
    {echo "";}
    else
      {
      $text = $rugost779b;
	  $eingabetext = $rugost779b;
      $eingabekodierung = "kyrillisch";
      $ausgabekodierung = "gost779b";
      include ("charmaps/ru-gost779b.php");
	  include ("ausgabe.php");
      }  
    if ($rualalc == "")
    {echo "";}
    else
      {
      $text = $rualalc;
	  $eingabetext = $rualalc;
      $eingabekodierung = "kyrillisch";
      $ausgabekodierung = "alalc";
      include ("charmaps/ru-alalc.php");
	  include ("ausgabe.php");
      }
    if ($rubgndigr == "")
    {echo "";}
    else
      {
      $text = $rubgndigr;
	  $eingabetext = $rubgndigr;
      $eingabekodierung = "kyrillisch";
      $ausgabekodierung = "bgndigr";
      include ("charmaps/ru-bgndigr.php");
	  include ("ausgabe.php");
      } 
    if ($rubgn == "")
    {echo "";}
    else
      {
      $text = $rubgn;
	  $eingabetext = $rubgn;
      $eingabekodierung = "kyrillisch";
      $ausgabekodierung = "bgn";
      include ("charmaps/ru-bgn.php");
	  include ("ausgabe.php");
      }
    if ($rubritish == "")
    {echo "";}
    else
      {
      $text = $rubritish;
	  $eingabetext = $rubritish;
      $eingabekodierung = "kyrillisch";
      $ausgabekodierung = "rubritish";
      include ("charmaps/ru-british.php");
	  include ("ausgabe.php");
      }
    if ($rutranslit == "")
    {echo "";}
    else
      {
      $text = $rutranslit;
	  $eingabetext = $rutranslit;
      $eingabekodierung = "kyrillisch";
      $ausgabekodierung = "translit";
      include ("charmaps/ru-translit.php");
	  include ("ausgabe.php");
      }
    if ($rududen == "")
    {echo "";}
    else
      {
      $text = $rududen;
	  $eingabetext = $rududen;
      $eingabekodierung = "kyrillisch";
      $ausgabekodierung = "duden";
      include ("charmaps/ru-duden.php");
	  include ("ausgabe.php");
      }
    if ($rusprognaevn == "")
    {echo "";}
    else
      {
      $text = $rusprognaevn;
	  $eingabetext = $rusprognaevn;
      $eingabekodierung = "kyrillisch";
      $ausgabekodierung = "sprognaevn";
	  include ("charmaps/bereinigung.php");
      include ("charmaps/ru-sprognaevn.php");
	  include ("ausgabe.php");
      } 
    if ($iso9ru == "")
    {echo "";}
    else
      {
      $text = $iso9ru;
	  $eingabetext = $iso9ru;
      $eingabekodierung = "isor9";
      $ausgabekodierung = "kyrillisch";
	  include ("charmaps/bereinigung.php");
      include ("charmaps/iso9-ru.php");
	  include ("ausgabe.php");
      } 	  
    if ($wissenschaftlichru == "")
    {echo "";}
    else
      {
      $text = $wissenschaftlichru;
	  $eingabetext = $wissenschaftlichru;
      $eingabekodierung = "wissenschaftlich";
      $ausgabekodierung = "kyrillisch";
	  include ("charmaps/bereinigung.php");
      include ("charmaps/wissenschaftlich-ru.php");
	  include ("ausgabe.php");
      }  
    if ($gost779bru == "")
    {echo "";}
    else
      {
      $text = $gost779bru;
	  $eingabetext = $gost779bru;
      $eingabekodierung = "gost779b";
      $ausgabekodierung = "kyrillisch";
	  include ("charmaps/bereinigung.php");
      include ("charmaps/gost779b-ru.php");
	  include ("ausgabe.php");
      }
    if ($alalcru == "")
    {echo "";}
    else
      {
      $text = $alalcru;
	  $eingabetext = $alalcru;
      $eingabekodierung = "alalc";
      $ausgabekodierung = "kyrillisch";
	  include ("charmaps/bereinigung.php");
      include ("charmaps/alalc-ru.php");
	  include ("ausgabe.php");
      }
	  
	


  }
else
{
//////////////////////////libx ende
if ( array_key_exists('neustart', $_POST) ){
session_destroy();
  session_unset();
  $_SESSION=array();
}

if ( array_key_exists('grau', $_POST) ){
$eingabetext = $_POST['grau'];
$_SESSION['eingabetext'] = $eingabetext;
}
else {

if ( array_key_exists('eingabetext', $_POST) ){
$eingabetext = $_POST['eingabetext'];
$_SESSION['eingabetext'] = $eingabetext;
}

elseif ( array_key_exists('eingabetext', $_SESSION) ){
$eingabetext = $_SESSION['eingabetext'];}
}


/////////////////////////////////////////////

if ( array_key_exists('eingabetext', $_POST) ){
$text = $_POST['eingabetext'];
$check = $_POST['eingabetext'];
$_SESSION['eingabetext'] = $text;
$_SESSION['text'] = $text;
	$text = stripslashes($text);
}
elseif ( array_key_exists('eingabetext', $_SESSION) ){
$text = $_SESSION['eingabetext'];
$check = $_SESSION['eingabetext'];
$_SESSION['text'] = $text;
	$text = stripslashes($text);
}
elseif ( array_key_exists('text', $_SESSION) ){
$text = $_SESSION['text'];

	$text = stripslashes($text);
}


if ( array_key_exists('eingabekodierung', $_POST) ){
$eingabekodierung = $_POST["eingabekodierung"];
$ausgabekodierung = $_POST["ausgabekodierung"];
$_SESSION["eingabekodierung"] = $eingabekodierung;
$_SESSION["ausgabekodierung"] = $ausgabekodierung;}
elseif ( array_key_exists('eingabekodierung', $_SESSION) ){
$eingabekodierung = $_SESSION["eingabekodierung"];
$ausgabekodierung = $_SESSION["ausgabekodierung"];
}
if (isset($_POST["eingabetext"])){
$text = $_POST["eingabetext"];
$check = $_POST["eingabetext"];
}

if (empty($eingabekodierung)){
$eingabekodierung ="";
$ausgabekodierung="";
$eingabetext="";}
///////////////////////////////////////////////////
if (isset($_POST["erweitert"])){
include ("einstellungen.php");
}
elseif (isset($_POST["speichern"])){
include ("ausgabe.php");
}
else
{
include ("charmaps/bereinigung.php");
  if($eingabekodierung == "auto")
    {include ("charmaps/auto.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "isor9")
    {include ("charmaps/ru-isor9.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "iso9")
    {include ("charmaps/ru-iso9.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "wissenschaftlich")
    {include ("charmaps/ru-wissenschaftlich.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "translit")
    {include ("charmaps/ru-translit.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "gost779b")
    {include ("charmaps/ru-gost779b.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "duden")
    {include ("charmaps/ru-duden.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "sprognaevn")
    {include ("charmaps/ru-sprognaevn.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "alalc")
    {include ("charmaps/ru-alalc.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "bgndigr")
    {include ("charmaps/ru-bgndigr.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "bgn")
    {include ("charmaps/ru-bgn.php");}
  if($eingabekodierung == "kyrillisch" and $ausgabekodierung == "british")
    {include ("charmaps/ru-british.php");}
  if($eingabekodierung == "isor9")
    {include ("charmaps/isor9-ru.php");}
  if($eingabekodierung == "unbestimmt")
    {include ("charmaps/isor9-ru.php");}
  if($eingabekodierung == "iso9")
      {include ("charmaps/iso9-ru.php");}
  if($eingabekodierung == "wissenschaftlich")
      {include ("charmaps/wissenschaftlich-ru.php");}
  if($eingabekodierung == "translit")
      {include ("charmaps/translit-ru.php");}
  if($eingabekodierung == "gost779b")
      {include ("charmaps/gost779b-ru.php");}
  if($eingabekodierung == "alalc")
      {include ("charmaps/alalc-ru.php");}
  if($eingabekodierung == "british")
      {include ("charmaps/british-ru.php");}
include ("ausgabe.php");
	  }
?><br>


<?php } ?>
