<?php
$ausw_von = "Source:";
$ausw_nach = "Target:";
$ausw_ausw = "--- choose ---";
$ausw_transkr = "Transcription:";
$ausw_auto = "Autodetect (beta)";
$ausw_unbest = "undetermined";
$ausw_kyrillisch = "Cyrillic";
$ausw_wissensch = "Scientific";
$ausw_alalc = "ALA-LC";
$ausw_alalc_dia = "ALA-LC diacritics";
$ausw_translit = "Translit";
$ausw_gost779b = "GOST 7.79B";
$ausw_isor9 = "ISO R9";
$ausw_iso9 = "ISO 9 / GOST 7.79A";
$ausw_digr = "with interpuncts";
$ausw_british = "British Standard";
$update = "apply";
$doku = "Doсumentation";
$dokuurl = "documentation/english.html";
$dokuurl2 = "documentation/english.html";
$hilfe = "Help";
$erw_titel = "Customize transliteration styles or enable advanced report";
$eingabe_transl = "Transliterate the input";
$eingabe_transl_neu = "Transliterate this text again";

$transliteration = "Transliteration";
$transliteration_neu = "New transliteration";
$anz_original = "Show source text";
$anz_bericht = "Show problems and report (beta)";

$ergebnis = "Result";
$originaltext = "Original text";
$textin = "Target text";
$quelltext = "Source text";

$warnung_ausgabe_fehlt = "Please choose target transliteration style";
$warnung_ausgabe_fehlt_update = "Please choose target transliteration style and click \"apply\".";
$warnung_kein_kyrillisch = "For transliteration <i><b>to</b></i> Cyrillic please specify this under <i><u>target</u></i> and indicate your input style as <i>source</i>.";
$warnung_kein_latein = "For transliteration of a Cyrillic text to Latin please specify \"Cyrillic\" as <i>source</i> and the desired transliteration style as <i>target</>.";
$warnung_kein_rukyrillisch = "The input text contains non-Russian Cyrillic characters. CyrAcademisator converts only <i>Russian</i> texts correctly.";
$warnung_keine_probleme ="No problems found.";
$warnung_bericht_seitenende = "See report at the end of the page.";

$zurueck = "Back";
$anfang = "Restart";

$loeschen = "Clear";
$kopieren = "Copy";
$markieren = "Highlight all";
$gtransliteration = "Autoconvert whole words to Cyrillic by typing Latin (default=off)";

$ja ="<p style=\"color:green\">yes</p>";
$nein ="<p style=\"color:red\">no</p>";
$nurhaupt ="<p style=\"color:red\">only main variant</p>";

$Anm1 ="Old Church Slavonic, not transliterated in the end of a word";
$Anm2 ="Old Church Slavonic, digit";
$anm3 ="Old Church Slavonic, ambiguos with \"сь\"";
$anm4 ="Old Church Slavonic";
$anm5 ="Before 1918";

$ber_titel = "Report / Problem Analysis (beta)";
$ber_duden = "Duden transcription";
$ber_ds = "Dansk Sprognævn transcription";
$ber_von = "Conversion from";
$ber_nach = "to";
$ber_analyse ="Analysis of the target text";
$ber_rot = "Red";
$ber_rot1 = "Not standardised for";
$ber_rot2 = ", merges with a modern character in the transliteration";
$ber_orange = "Orange";
$ber_orange1 = "Standardised transliteration for";
$ber_orange2 = "cannot be transliterated back";
$ber_gelb = "Yellow";
$ber_gelb1 = "Possible problem with capitalised characters, especially when transliterating back";

$tab_quellbuchstabe = "Source character";
$tab_variante = "Is a variant of";
$tab_transl_stand1 ="Transliteration standardised in";
$tab_transl_stand2 ="";
$tab_zus_aus ="Target text: merges with /<br>falls apart to";
$tab_hin_rueck = "Back and forth transliteration without changes possible";
$tab_anmerkungen = "Remarks";

$warnung_probleme = "Following problems were found:";
$zeitpunkt = "Time of the conversion ";


$erstellt_mit = "Compiled with";
$erstellt_auf = "at";

$feedback ="Feedback";
$feedback_url ="documentation/english.html#feedback";
$start_url ="index.php";

$erw_einst ="Advanced settings";
$erw_einst_allg ="General settings";
$erw_keine_weiteren ="No further settings for this transliteration pair.";
$erw_nur_eingabe ="In this pair input settings only.";
$erw_nur_ausgabe ="In this pair output settings only.";
$erw_eingabeeinstellungen ="Input settings";
$erw_ausgabeeinstellungen ="Output settings";
$erw_speichern ="Save";
$erw_einst_zur ="Reset to default";

$erw_ja_st ="Yes (standard)";
$erw_ja ="Yes";
$erw_nein_st ="No (standard)";
$erw_nein ="No";
$standard ="standard";

$erw_isor9_ru_ausn ="<p>Standard compliant exeption (ISO R9):<br><table style=\"text-align: left; width: 100%;\" border=\"0\"
 cellpadding=\"0\" cellspacing=\"0\">
  <tbody>
    <tr>
      <td>zh - ж</td>
      <td>kh - х</td>
      <td>ts - ц</td>
      <td>t.s - тс</td>
    </tr>
    <tr>
      <td>ch - ч</td>
      <td>sh - ш</td>
      <td>shch - щ</td>
      <td></td>
    </tr>
  </tbody>
</table>
Other exeptions will be recognised automatically.
	  </p>";
$erw_kirchen ="Transliterate Church Slavonic letters to:";
$erw_rus ="Russian Church Slavonic (default)";
$erw_alt ="Old Church Slavonic (standard)";
$diakr ="Diacritics:";

$erw_ru_isor9_ausn_ch ="Standard compliant exeption (ISO R9):<br>х - ch";
$erw_ru_isor9_ausn_en ="Standard compliant exeption (ISO R9, overrides \"h-ch\" exeption):<br><table style=\"text-align: left; width: 100%;\" border=\"0\"
 cellpadding=\"0\" cellspacing=\"0\">
  <tbody>
    <tr>
      <td>ж - zh</td>
      <td>й - ĭ</td>
      <td>х - kh</td>
      <td>ц - ts</td>
      <td>тс - t.s</td>
    </tr>
    <tr>
      <td>ч - ch</td>
      <td>ш - sh</td>
      <td>щ - shch</td>
      <td>ю - yu</td>
      <td>я - ya</td>
    </tr>
  </tbody>
</table>
and Church Slavonic letters";
$erw_ru_isor9_omega ="Transliterate Church Slavonic Ѡ to:";

$unterschrift ="CyrAcademisator-RU – Academic transliteration for Russian";
?>
