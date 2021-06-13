<?php
/***************************************************************************
* fi.php
* -------------------
* begin : Tuesday', Aug 15', 2002
* copyright : ('C) 2002 Bugada Andrea
* email : phpATM@free.fr
*
* $Id: en.php, v1.12 2002/10/28 23:53:50 bugada Exp $
*
* Finnish modification by: jiippana at hotmail dot com 06.06.2004
*
*
***************************************************************************/

/***************************************************************************
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License', or
* ('at your option) any later version.
*
***************************************************************************/

$headerpage="header.htm";    // The optional header file 
$footerpage="footer.htm";    // The optional footer file 
$infopage="info.htm";        // The optional info file 

$charsetencoding="iso-8859-15"; // The encoding for national symbols (i.e. for cyryllic must be "windows-1251")
$uploadcentercaption="PHP Advanced Transfer Manager";
$uploadcentermessage="phpATM";

$mess=array(
"0" => "",
"1" => "Tammikuu",
"2" => "Helmikuu",
"3" => "Maaliskuu",
"4" => "Huhtikuu",
"5" => "Toukokuu",
"6" => "Kes�kuu",
"7" => "Hein�kuu",
"8" => "Elokuu",
"9" => "Syyskuu",
"10" => "Lokakuu",
"11" => "Marraskuu",
"12" => "Joulukuu",
"13" => "T�n��n",
"14" => "Eilen",
"15" => "Tiedostonimi",
"16" => "Toiminnot",
"17" => "Koko",
"18" => "K�ytt�j�",
"19" => "Omistaja",
"20" => "L�het� tiedosto palveluun",
"21" => "Paikallinen tiedosto",
"22" => "Tiedoston kuvaus",
"23" => "Lataa omalle koneelle",
"24" => "J�rjestys",
"25" => "Koti",
"26" => "Tiedosto",
"27" => "Tulosta",
"28" => "Sulje",
"29" => "Takaisin",
"30" => "T�m� tiedosto on poistettu",
"31" => "Tiedoston avaaminen ei onnistu",
"32" => "Takaisin",
"33" => "Tiedoston vastaanotto ei onnistu!",
"34" => "Valitse tiedosto",
"35" => "Takaisin",
"36" => "Tiedosto",
"37" => "on vastaanotettu palveluun",
"38" => "Tiedosto",
"39" => "on jo olemassa",
"40" => "Tiedosto on vastaanotettu palveluun",
"41" => "Kieli on vaihdettu onnistuneesti",
"42" => "Tervetuloa PHP Advanced Transfer Manager -palveluun",
"43" => "Tiedostojen koko yhteens�",
"44" => "N�yt� kaikkien p�ivien tiedostot",
"45" => "Ep�kelpo ZIP-tiedosto!",
"46" => "Tiedoston sis�lt�:",
"47" => "PVM/aika",
"48" => "Hakemisto",
"49" => "Tiedoston jonka nimi on \"%s\" l�hett�minen palveluun kielletty!",
"50" => "Ylitt�� m��r�tyn rajan",
"51" => "Tietoja",
"52" => "Valitse nahka",
"53" => "Nahka",
"54" => "Tervetuloa",
"55" => "Kellonaika",
"56" => "K�ytt�j�",
"57" => "K�ytt�j�tunnus",
"58" => "Rekister�idy",
"59" => "Rekister�ityminen",
"60" => "Sunnuntai",
"61" => "Maanantai",
"62" => "tiistai",
"63" => "Keskiviikko",
"64" => "Torstai",
"65" => "Perjantai",
"66" => "Lauantai",
"67" => "L�het�",
"68" => "L�het� tiedosto s�hk�postitse",
"69" => "Tiedosto on l�hetetty %s s�hk�postiin.",
"70" => "K�ytt�j�n %s l�hett�m� tiedosto",
"71" => "Kirjaudu sis��n",
"72" => "Kirjaudu ulos",
"73" => "Vahvista",
"74" => "Anonyymi",
"75" => "Normaali",
"76" => "Tehok�ytt�j�",
"77" => "Yll�pit�j�",
"78" => "Yksityinen alue",
"79" => "Julkinen alue",
"80" => "Kirjoittamasi k�ytt�j�tunnus tai salasana on ep�kelpo",
"81" => "Tietosi",
"82" => "N�yt� tai muokkaa tietojasi",
"83" => "Salasana",
"84" => "Valithe kielesi",
"85" => "Valitse aikavy�hyke",
"86" => "Kellonaika",
"88" => "Kirjoita voimassaoleva s�hk�postiosoite",
"89" => "Tarkista ett� kirjoitit s�hk�postiosoitteen oikein! Sen tulee olla voimassa, sill� sinne l�hetet��n salasanasi.",
"90" => "Vastaanotettu tiedosto: ",
"91" => "Kirjoita sama s�hk�postiosoite jolla rekister�idyit.",
"92" => "Tiedoston koko: ",
"93" => "Muista k�ytt�j�tunnuksesi ja salasanasi",
"94" => "Rekister�inti on pakollista. Ole hyv� ja rekister�idy.",
"95" => "Rekister�inti ei ole pakollista. Rekister�ity� jos haluat ett� l�hett�mist�si tiedostoista k�y ilmi tietojasi.",

"96" => "Nahka vaihdettu.",
"97" => "P�ivit� n�ytt�",
"98" => "Kirjoita k�ytt�j�tunnuksesi ja salasanasi",
"99" => "Rekister�idy nyt! T��ll�!",
"100" => "Salasana hukassa?",
"101" => "Mene %s takaisin %s ja yrit� uudestaan.",
"102" => "Sinut on kirjattu pihalle. ",
"103" => "Ep�kelpo k�ytt�j�tunnus! K�ytt�j�tunnus ei voi olla pidempi kuin 12 merkki�. K�ytt�j�tunnus voi sis�lt�� aakkosia, mutta _ei_ ��kk�si�. Sallittuja merkkej� ovat lis�ksi '-', '_', ja v�lily�nti.",
"104" => "'%s' jonka valitsit on jo mennyt.",
"105" => "Salasana uudestaan",
"106" => "Salasanat eiv�t t�sm��.",
"107" => "S�hk�postiosoitteen muoto on ep�kelpo.",
"108" => "Kiitos rekister�itymisest�si. Jos unohdat salasanasi, palvelu l�hett�� s�hk�postiisi pyynn�st�si uuden salasanan.",
"109" => "Voit %s n�hd�ksesi vastaanottokeskuksen. %s",
"110" => "Aktivointitunnus on l�hetetty sinulle. Jos et kahden p�iv�n sis�ll� ole aktivoinut tunnustasi, se poistetaan.",
"111" => "sinulla ei ole valtuuksia ladata tiedostoa itsellesi",
"112" => "Aktivoi k�ytt�j�tunnus",
"113" => "Aktivoi k�ytt�j�tunnuksesi",
"114" => "Aktivointitunnus",
"115" => "K�ytt�j�tunnuksesi on aktivoitu.",
"116" => "Kirjoita %s t�h�n %s.",
"117" => "Sy�tt�m�si k�ytt�j�tunnus tai aktivointitunnus on ep�kelpo.",
"118" => "K�ytt�j�tunnus on jo aktivoitu.",
"119" => "Haluan p�ivitt�n s�hk�postiini tietoa uusista palveluun l�hetetyist� tiedostoista.",
"120" => "Vaihda salasanasi.",
"121" => "Vanha salasanasi",
"122" => "Sy�tt�m��si k�ytt�j�tunnusta ei l�ydy.",
"123" => "Sy�tt�m�si s�hk�postiosoite ei ole kelvollinen.",
"124" => "Uusi salasanasi on l�hetetty s�h�postiisi.",
"125" => "ei voi suorittaa, objektia ei l�ydy",
"126" => "Muokkaa asetuksiasi",
"127" => "Ota muutokset k�ytt��n",
"128" => "Asetuksesti on talletettu.",
"129" => "Salasanasi on vaihdettu.",
"130" => "Vanha salasana on kirjoitettu v��rin.",
"131" => "Uusi salasana t�ytyy olla annettu.",
"132" => "Asetukset",
"133" => "L�hetetty",
"134" => "Kieli ja aikavy�hyke",
"135" => "K�ytt�tilastot",
"136" => "K�ytt�j�tunnuksesi on luotu:",
"137" => "K�ytt�j�n hallinta",
"138" => "Katselija (voi vain katsella)",
"139" => "L�hett�j� (voi vain l�hett�� tiedostoja palveluun)",
"140" => "K�ytt�j�tunnus '%s' on muutettu",
"141" => "Viimeisin",
"142" => "Kaikki",
"143" => "Uusi s�hk�postiosoite astuu voimaan vahvistuksen j�lkeen. Tarkista ohjeet s�hk�postistasi.",
"144" => "",
"145" => "Vahvista s�hk�postiosoitteesi",
"146" => "Vahvistuskoodi",
"147" => "Vahvista",
"148" => "Eip� ole vahvistettavaa",
"149" => "Sy�tt�m�si k�ytt�j�tunnus tai aktivointikoodi on ep�kelpo.",
"150" => "Uusi s�hk�postiosoitteesi '%s' on hyv�ksytty.",
"151" => "Tiedostoja l�hetetty palveluun",
"152" => "Tiedostoja ladattu palvelusta",
"153" => "Tiedostoja l�hetty s�hk�posteihin",
"154" => "K�ytt�j�tunnus luotu",
"155" => "Viimeksi k�ytetty",
"156" => "Tila",
"157" => "Aktiivinen tila",
"158" => "S�hk�postita uudet tiedostot",
"159" => "S�hk�postiosoite",
"160" => "Yhteens�:",
"161" => "K�ytt�j�tunnuksia",
"162" => "Poista k�ytt�j�tunnus",
"163" => "N�ytetty %s k�ytt�j�tunnusta %s",
"164" => "Muokkaa vastaanottokeskusta",
"165" => "Muokkaa tiedostoja",
"166" => "Muokkaa tiedostoa",
"167" => "Tiedosto %s on tallennettu",
"168" => "Talleta",
"169" => "Poista",
"170" => "Poista tiedostoja",
"171" => "Peili",
"172" => "Kyll�",
"173" => "Ei",
"174" => "Aktiivinen",
"175" => "Passiivinen",
"176" => "K�ytt�j� tunnistamaton",
"177" => "Palvelu ei saanut s�hk�postin l�hetyst� toimimaan. Pahoittelut siit�.",
"178" => "Rekister�intisi ei nyt onnistu. Ole hyv�, koeta my�hemmin uudestaan.",
"179" => "Ole hyv�, koeta my�hemmin uudestaan.",
"180" => "tiedosto poistettu",
"181" => "sinulla ei ole valtuuksia poistaa t�t� tiedostoa",
"182" => "hakemisto poistettu",
"183" => "sinulla ei ole valtuuksia poistaa t�t� hakemistoa",
"184" => "hakemisto luotu",
"185" => "sinulla ei ole valtuuksia luoda hakemistoa",
"186" => "Luo uusi hakemisto",
"187" => "Hakemiston nimi",
"188" => "Luo uusi hakemisto",
"189" => "Hakemisto on jo olemassa. Valitse jokin toinen nimi hakemistolle.",
"190" => "Hakekmiston nimi t�ytyy antaa",
"191" => "Muokkaa",
"192" => "Tiedosto",
"193" => "Muokkaa tiedosto / hakemiston tietoja",
"194" => "objektin nimi vaihdettu.",
"195" => "sinulla ei ole valtuuksia nimet� tuota objektia uudestaan",
"196" => "Juurihakemisto ei ole oikein asetettu! Tarkista asetukset",
"197" => "J�rjest�",
"198" => "uudelleen nime�minen ep�onnistui, koska saman niminen tiedosto oli jo olemassa.",
"199" => "Viimeisimm�t l�hetykset palveluun",
"200" => "Merkitt�vimm�t lataukset palvelusta",
"201" => "uudelleen nime�minen ep�onnistui, tiedoston nimi ei ole sallittu.",

//
// New strings introduced in version 1.02
//
"202" => "url (osoite) on ep�kelpo",
"203" => "tiedoston (http) osoite",
"204" => "L�het� tiedosto http-osoitteella",

//
// New strings introduced in version 1.10
//
"205" => "Pysy aina kirjautuneena",
"206" => "Ei voida suorittaa, nimi ei ole sallittu",
"207" => "IP-osoite ev�tty",
"208" => "K�ytt�m�st�si IP-osoitteesta ei ole sallittua ottaa yhteytt� palveluun.",
"209" => "Lis�tietoja yll�pit�j�lt�",

//
// New strings introduced in version 1.12
//
"210" => "P�ivitt�inen Mb-raja ylitetty",
"211" => "Kuukausittainen Mb-raja ylitetty",
"212" => "P�ivitt�inen Mb-latausraja palvelusta ylitetty",
"213" => "Kuukausittainen Mb-latausraja palvelusta ylitetty",
"214" => "Vahvista tieodosto",
"215" => "Tiedosto vahvistettu",
"216" => "Oletko varma ett� haluat poistaa",
"217" => "Sinulla ei ole valtuuksia vahvistaa tuota objektia",
"218" => "T�m� tiedosto tulee n�kyviin jahka yll�pito on tarkistanut sen",
"219" => "Tiedostoselain"

);

//
// Send file e-mail configuration
//
$sendfile_email_subject = 'Haluamasi tiedosto';
$sendfile_email_body = '
T�ss�p� tiedosto jonka halusit saada s�hk�postiisi.

';
$sendfile_email_end = 'Terkuin,';

//
// Digest e-mail configuration
//
$digest_email_subject = "Everyday digest";

//
// Confirm new e-mail configuration
//
$confirm_email_subject = 'Vahvista s�hk�postisoitteesi';
$confirm_email_body = 'Tervehdys %s!

Nyt vaaditaan sinulta hieman toimintaa, eli uusi s�hk�postiosoitteesi t�ytyy vahvistaa palveluun.

Sinun vahvistustunnuksesi on: %s

T�m� on suoraviivainen toiminto:
1. Surffaa osoitteeseen %s.
2. Kirjoita k�ytt�j�tunnuksesi ja vahvistustunnuksesi
3. Paina \'Vahvista\' painiketta.



';
$confirm_email_end = 'Terkuin,';

//
// Send password e-mail configuration
//
$chpass_email_subject = 'Uusi salasanasi';
$chpass_email_body = 'Parahin k�ytt�j�,

Uusi salasanasi palveluun on %s

';
$chpass_email_end = 'Terkuin,';

//
// Confirm registration e-mail configuration
//
$register_email_subject = 'Vahvista rekister�itymisesi';
$register_email_body = 'Parahin %s,

Kiitoksia rekister�itymisest�si!

Nyt vaaditaan sinulta hieman toimintaa, eli k�ytt�j�tunnuksesi t�ytyy vahvistaa palveluun.

Sinun vahvistustunnuksesi on: %s
(Huomaa: T�m� _ei_ ole salasanasi)

T�m� on suoraviivainen toiminto:
1. Surffaa osoitteeseen %s.
2. Kirjoita k�ytt�j�tunnuksesi ja vahvistustunnuksesi
3. Paina \'Vahvista\' painiketta.


';
$register_email_end = 'Terkuin,';
?>