<?php
/***************************************************************************
 *                                   si.php
 *                            -------------------
 *   begin                : Wednesday', Sept 26', 2002
 *   copyright            : ('C) 2002 Stane Accetto
 *   email                : stane.accetto@siol.net
 *	 URL                  : http://stane.saax.com

 *   $Id: si.php,v 1.03 2002/09/26 21:00:00 Accetto Sta $
 *
 *	 Nota! Skripta pripada: Bugada Andrea, moj je samo prevod.
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License', or
 *   ('at your option) any later version.
 *
 ***************************************************************************/

$headerpage="include/header.htm";    // The optional header file (can absent)
$footerpage="include/footer.htm";    // The footer file (must present!)
$infopage="include/info.htm";        // The optional info file (can absent)

$charsetencoding="windows-1250";                 // The encoding for national symbols (i.e. for cyryllic  must be "windows-1251")
$uploadcentercaption="PHP Advanced Transfer Manager";
$uploadcentermessage="phpATM";

$mess=array(
"0" => "",
"1" => "Januar",
"2" => "Februar",
"3" => "Marc",
"4" => "April",
"5" => "Maj",
"6" => "Junij",
"7" => "Julij",
"8" => "Avgust",
"9" => "September",
"10" => "Oktober",
"11" => "November",
"12" => "December",
"13" => "Danes",
"14" => "V�eraj",
"15" => "Datoteka",
"16" => "Uvrstitev",
"17" => "Velikost",
"18" => "Nalo�eno",
"19" => "Lastnik",
"20" => "Nalo�i datoteko",
"21" => "Lokalna datoteka",
"22" => "Opis datoteke",
"23" => "Download",
"24" => "Order",
"25" => "Domov",
"26" => "Datoteka",
"27" => "Natisni",
"28" => "Zapri",
"29" => "Pojdi nazaj",
"30" => "Ta datoteka je bila odstranjena",
"31" => "Ne morem odpreti datoteke",
"32" => "Pojdi nazaj",
"33" => "Napaka pri nalaganju!",
"34" => "Morate izbrati datoteko",
"35" => "Nazaj",
"36" => "Datoteka",
"37" => "je bila uspe�no nalo�ena",
"38" => "Datoteka z imenom",
"39" => "�e obstoja",
"40" => "Datoteka je bila uspe�no nalo�ena",
"41" => "Izbira jezika je bila uspe�na",
"42" => "Dobrodo�li v  PHP Advanced Transfer Manager",
"43" => "Skupno uporabljen prostor",
"44" => "Prika�i vse datoteke po datumu",
"45" => "Neveljavna ZIP datoteka!",
"46" => "Vsebina datoteke:",
"47" => "Datum/�as",
"48" => "Mapa",
"49" => "Prepovedano je nalo�iti datoteko z imenom %s!",
"50" => "dovoljena velikost je prese�ena",
"51" => "Informacija",
"52" => "Izberi Skin",
"53" => "Skin",
"54" => "Dobrodo�el",
"55" => "Trenutni �as",
"56" => "Uporabnik",
"57" => "Uporabni�ko ime",
"58" => "Registriraj se",
"59" => "Registracija",
"60" => "Nedelja",
"61" => "Ponedeljek",
"62" => "Torek",
"63" => "Sreda",
"64" => "�etrtek",
"65" => "Petek",
"66" => "Sobota",
"67" => "Po�lji",
"68" => "Po�lji datoteko",
"69" => "Datoteka je bila poslana na naslov %s .",
"70" => "Datoteko je nalo�il uporabnik: %s",
"71" => "Login",
"72" => "Zaklju�i",
"73" => "Vstopi",
"74" => "Anonimni uporabniks",
"75" => "Normalni uporabnik",
"76" => "Napredni uporabnik",
"77" => "Administrator",
"78" => "Osebno podro�je",
"79" => "Javno podro�je",
"80" => "Vpisali ste neveljavno ime ra�una ali geslo.",
"81" => "Moj profil",
"82" => "Vpogled/spreminjanje profila",
"83" => "Geslo",
"84" => "Izberi jezik",
"85" => "Izberi �asovno cono",
"86" => "Va� teko�i �as",
"88" => "Prosim, vnesi veljavni E-Mail naslov.",
"89" => "Va� E-Mail naslov mora biti veljaven, ker vam bo na ta naslov poslana osebna aktivacijska koda",
"90" => "Datoteka je bila nalo�ena: ",
"91" => "Prosim, vnesite va� E-Mail naslov, katerega ste vpisali ob registraciji.",
"92" => "Velikost datoteke: ",
"93" => "Prosim, zapi�ite si va�e ime in geslo",
"94" => "Registracija je obvezna. Prosim, da se registrirate.",
"95" => "Registracija ni potrebna. �e �elite, da se va�e ime pojavi poleg nalo�ene datoteke, potem se registrirajte. Nih�e drug ne bo mogel uporabljati va�ega imena.",

"96" => "Skin je bil izbran.",
"97" => "Osve�i",
"98" => "Prosim, vpi�ite svoje ime in geslo",
"99" => "�e vedno niste registrirani? - Registrirajte se tu!",
"100" => "Ste pozabili va�e geslo?",
"101" => "Prosim, pojdite %s nazaj %s in znova poskusite.",
"102" => "Uspe�no ste se izklju�ili.",
"103" => "Ime uporabnika je neveljavno. Ime ne sme biti dalj�e od 12 �rk, lahko vsebuje latinske simbole / brez �umnikov/ in �tevilke. Ime lahko vsebuje tudi '-', '_', in space simbol.",
"104" => "Ime '%s' je �e zasedeno.",
"105" => "Potrdi geslo",
"106" => "Gesli se ne ujemata.",
"107" => "Vne�ena oblika E-Mail naslova je neveljavna.",
"108" => "Hvala, da ste se registrirali. Prosim, ne pozabite svojega gesla, ker je to �ifrirano in vam ga ne moremo posredovati. V primeru, da ste ga pozabili, lahko uporabite program, kateri vam bo naklju�no dolo�il novo geslo in ga boste prejeli po E-Mailu.",
"109" => "Tukaj %s lahko vstopite v Upload Center. %s",
"110" => "Va�a aktivacijska koda vam je bila poslana po E-Mailu. Va� ra�un morate aktivirati v roku 2 dni, ker bo v nasprotnem primeru avtomati�no odstranjen.",
"111" => "nimate pravice za download te datoteke",
"112" => "Aktiviranje ra�una",
"113" => "Prosim, aktivirajte va� ra�un",
"114" => "Aktivacijska koda",
"115" => "Va� ra�un je sedaj aktiven.",
"116" => "Prosim %s tu vstopite %s.",
"117" => "Vne�eno ime ra�una ali aktivacijska koda je neveljavno.",
"118" => "Ra�un je �e aktiven.",
"119" => "Dnevno �elim prejemati pregled nalo�enih datotek po E-Mailu.",
"120" => "Spreminjanje gesla.",
"121" => "Staro geslo",
"122" => "Vne�eno ime ra�una ne obstoja.",
"123" => "Vne�eni e-mail naslov je neveljaven.",
"124" => "Novo geslo vam je bilo poslano po E-Mailu.",
"125" => "ne morem izvr�iti, predmet ni najden",
"126" => "Spreminjanje nastavitev va�ega ra�una",
"127" => "Uporabi",
"128" => "Va� profil je bil shranjen.",
"129" => "Va�e geslo je bilo spremenjeno.",
"130" => "Vpisali ste neveljavno staro geslo.",
"131" => "Vpisati morate va�e novo geslo.",
"132" => "Nastavitve",
"133" => "Nalo�i",
"134" => "Jezik & �asovni pas",
"135" => "Statistika ra�una",
"136" => "Va� ra�un je bil ustvarjen:",
"137" => "Upravljanje uporabnikov",
"138" => "Obiskovalec (samo vpogled)",
"139" => "Nalo�itelj (samo nalaganje)",
"140" => "Ra�un '%s' je bil uspe�no spremenjen",
"141" => "Zadnji",
"142" => "Vsi",
"143" => "Novi E-Mail naslov bo veljaven �ele s potrditvijo. Potrditvena koda vam je bila poslana na va� novi E-mail naslov. Poglejte navodila v sporo�ilu.",
"144" => "",
"145" => "Prosim, potrdite va� novi E-Mail naslov.",
"146" => "Potrditvena koda",
"147" => "Potrdi",
"148" => "Ni� ni potrjeno.",
"149" => "Vne�eno ime ra�una ali potrditvena koda je neveljavno.",
"150" => "Va� novi E-Mail naslov '%s' je potrjen.",
"151" => "Nalo�ene datoteke",
"152" => "Files (datoteke) downloaded",
"153" => "Datoteke poslane po E-Mailu",
"154" => "Ra�un je bil ustvarjen",
"155" => "Zadnji obisk",
"156" => "Status",
"157" => "Aktivni status",
"158" => "Prejem pregleda",
"159" => "E-mail",
"160" => "Skupno:",
"161" => "ra�un(i)",
"162" => "Bri�i ra�un",
"163" => "Poka�i %s ra�un(e) od %s",
"164" => "Konfiguracija",
"165" => "Editiraj datoteke",
"166" => "Editiraj datoteko",
"167" => "Datoteka %s je bila uspe�no spremenjena",
"168" => "Shrani",
"169" => "Bri�i",
"170" => "Bri�i datoteke",
"171" => "Mirror",
"172" => "Da",
"173" => "Ne",
"174" => "Aktiven",
"175" => "Neaktiven",
"176" => "Neautoriziran",
"177" => "Ob�alujem, stre�nik ne more izvr�iti mail programa.",
"178" => "Va�a registracija ni uspela. Prosim, poskusite pozneje.",
"179" => "Prosim, poskusite pozneje.",
"180" => "datoteka je bila uspe�no brisana",
"181" => "nimate pravice brisati te datoteke",
"182" => "mapa je bila uspe�no brisana",
"183" => "nimate pravice brisati te mape",
"184" => "mapa je bila uspe�no ustvarjena",
"185" => "nimate pravice ustvariti nove mape",
"186" => "Ustvari novo mapo",
"187" => "Ime mape",
"188" => "Make dir",
"189" => "mapa �e obstoja, prosim, izberite drugo ime",
"190" => "ime mape je obvezno",
"191" => "Spremeni",
"192" => "Datoteka",
"193" => "Spremeni datoteko / podrobnosti mape",
"194" => "predmet je bil uspe�no preimenovan.",
"195" => "nimate pravice preimenovati ta predmet",
"196" => "Root path ni pravilen. Preglejte nastavitve",
"197" => "Vrstni red po",
"198" => "preimenovanje ni bilo uspe�no, datoteka �e obstoja",
"199" => "Zadnje nalo�ene datoteke",
"200" => "Najbolj pogosti download",
"201" => "preimenovanje ni bilo uspe�no, ime ni dovoljeno",
"202" => "Web naslov ni veljavem",
"203" => "http naslov datoteke",
"204" => "Nalo�i datoteko s http naslovom",

//
// New strings introduced in version 1.10
//
"205" => "Always stay logged",
"206" => "Can't execute: name not allowed",
"207" => "IP address blocked",
"208" => "Your IP address has been blocked by Administration!",
"209" => "To obtain more infos contact the Administrator",

//
// New strings introduced in version 1.12
//
"210" => "Daily allowed Mb exceeded",
"211" => "Monthly allowed Mb exceeded",
"212" => "Daily allowed download Mb exceeded",
"213" => "Monthly allowed download Mb exceeded",
"214" => "Validate File",
"215" => "File Validated",
"216" => "Are you sure to delete",
"217" => "you don't have permission to validate that object",
"218" => "This file will be listed only after administration validation",
"219" => "File viewer"
);


//
// Send file e-mail configuration
//
$sendfile_email_subject = 'Zahtevana datoteka';
$sendfile_email_body = '
Tukaj je zahtevana datoteka po E-Mailu

';
$sendfile_email_end = 'Lep pozdrav,';

//
// Digest e-mail configuration
//
$digest_email_subject = "Dnevni pregled";

//
// Confirm new e-mail configuration
//
$confirm_email_subject = 'Potrditev e-maila';
$confirm_email_body = 'Spo�tovani uporabnik %s,

Ker nam je va�a varnost pomembna, je nujno, da potrdite va� novi e-mail naslov.

Va�a osebna potrditvena koda je: %s

Aktiviranje e-mail naslova je preprosto:
1. Obi��ite nas  %s in mi vas bomo vodili
2. Vnesite ime va�ega ra�una in potrditveno kodo.
3. Kliknite na \'Potrdi\' gumb.

';
$confirm_email_end = 'Lep pozdrav,';

//
// Send password e-mail configuration
//
$chpass_email_subject = 'Novo geslo';
$chpass_email_body = 'Spo�tovani uporabnik,

Va�e new geslo je %s

';
$chpass_email_end = 'Lep pozdrav,';

//
// Confirm registration e-mail configuration
//
$register_email_subject = 'Potrditev registracije';
$register_email_body = 'Spo�tovani uporabnik %s,

Hvala lepa za registracijo.

Ker nam je va�a varnost pomembna, je nujno, da potrdite va� ra�un.

Va�a osebna aktivacijska koda je: %s
(pozor: to ni va�e geslo)

Aktiviranje Va�ega ra�una je preprosto:
1. Obi��ite nas  %s in mi vas bomo vodili
2. Vnesite ime va�ega ra�una in aktivacijsko kodo.
3. Kliknite na \'Aktiviraj ra�un\' gumb.

';
$register_email_end = 'Lep pozdrav,';
?>
