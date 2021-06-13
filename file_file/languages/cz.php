<?php
/***************************************************************************
 *                                   en.php
 *                            -------------------
 *   begin                : Tuesday', Aug 15', 2002
 *   copyright            : ('C) 2002 Bugada Andrea
 *   email                : phpATM@free.fr
 *
 *   $Id: en.php, v1.10 2002/08/28 23:53:50 bugada Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License', or
 *   ('at your option) any later version.
 *
 ***************************************************************************/

$headerpage="header.htm";    // The optional header file 
$footerpage="footer.htm";    // The optional footer file 
$infopage="info.htm";        // The optional info file 

$charsetencoding="windows-1250";                 // The encoding for national symbols (i.e. for cyryllic  must be "windows-1251")
$uploadcentercaption="PHP Advanced Transfer Manager";
$uploadcentermessage="phpATM";

$mess=array(
"0" => "",
"1" => "Leden",
"2" => "�nor",
"3" => "B�ezen",
"4" => "Duben",
"5" => "Kv�ten",
"6" => "�erven",
"7" => "�ervenec",
"8" => "Srpen",
"9" => "Z���",
"10" => "��jen",
"11" => "Listopad",
"12" => "Prosinec",
"13" => "Dnes",
"14" => "V�era",
"15" => "Soubor",
"16" => "Funkce",
"17" => "Velikost",
"18" => "Nahr�no",
"19" => "Majitel",
"20" => "Nahr�n� souboru",
"21" => "Lok�ln� soubor",
"22" => "Popis",
"23" => "Sta�en�",
"24" => "�azen�",
"25" => "Tituln� strana",
"26" => "Soubor",
"27" => "Tisknout",
"28" => "Uzav��t",
"29" => "Zp�t",
"30" => "Soubor byl odstran�n",
"31" => "Soubor nelze otev��t",
"32" => "Zp�t",
"33" => "ERROR - chyba p�i nahr�v�n� souboru!!!",
"34" => "Mus�te vybrat soubor",
"35" => "Zp�t",
"36" => "Soubor",
"37" => "Vpo��dku nahr�n",
"38" => "Soubor se jm�nem",
"39" => "Ji� existuje",
"40" => "OK - soubor byl nahr�n",
"41" => "OK - jazyk byl vybr�n",
"42" => "V�tejte v MCUatm",
"43" => "Obsazen� prostor",
"44" => "Zobrazit soubory ka�d� den",
"45" => "ERROR - chybn� ZIP archiv!",
"46" => "Archiv obsahuje:",
"47" => "Datum/�as",
"48" => "Adres��",
"49" => "Nen� mo�n� nahr�t soubor se jm�nem: %s!",
"50" => "p�ekro�ena maxim�ln� velikost",
"51" => "Informace",
"52" => "Vyberte vzhled",
"53" => "Vzhled",
"54" => "V�tejte",
"55" => "Sou�asn� �as",
"56" => "U�ivatel",
"57" => "U�ivatelsk� jm�no",
"58" => "Register",
"59" => "Registrace",
"60" => "Ned�le",
"61" => "Pond�l�",
"62" => "�ter�",
"63" => "St�eda",
"64" => "�tvrtek",
"65" => "P�tek",
"66" => "Sobota",
"67" => "Poslat",
"68" => "Poslat e-mailem",
"69" => "Soubor byl odesl�n na adresu: %s",
"70" => "Soubor nahr�l u�ivatel: %s",
"71" => "P�ihl�en�",
"72" => "Odhl�en�",
"73" => "Vstupte",
"74" => "Anonym",
"75" => "B�n� u�ivatel",
"76" => "Privilegovan� u�ivatel",
"77" => "Administr�tor",
"78" => "Soukrom� z�na",
"79" => "Ve�ejn� z�na",
"80" => "ERROR - chybn� u�ivatelsk� jm�no nebo heslo.",
"81" => "V� profil",
"82" => "V� profil",
"83" => "Heslo",
"84" => "Volba jazyka",
"85" => "Volba �asov�ho p�sma",
"86" => "V� sou�asn� �as",
"88" => "E-mail adresa",
"89" => "Va�e e-mail adresa mus� b�t aktivn�, nebo� aktiva�n� kod V�m bude zasl�n e-mailem.",
"90" => "Soubor nahr�n: ",
"91" => "Vlo�te Va�i e-mail adresu, kterou jste zadal p�i registraci.",
"92" => "Velikost souboru: ",
"93" => "Vlo�te Va�e u�ivatelsk� jm�no a heslo",
"94" => "Je nutn� registrace. Registrujte se, pros�m.",
"95" => "Registrace nen� nutn�. M��ete se zaregistrovat pokud chcete zobrazovat Va�e jm�no u soubor�, kter� jste nahr�l. Nikdo jin� pod Va�im jm�nem nem��e vystupovat.",

"96" => "Vzhled byl vybr�n.",
"97" => "Obnovit",
"98" => "Vlo�te pros�m sv� u�ivatelsk� jm�no a heslo",
"99" => "Nejste registrovan� u�ivatel? - Zaregistrujte se!",
"100" => "Zapomn�l jste heslo?",
"101" => "Pros�m, %s vra�te se %s a zkuste to znovu.",
"102" => "Odhl�sil jste se.",
"103" => "U�ivatelsk� jm�no je neplatn�. Jm�no mus� b�t krat�� ne� 13 znak� a m��e obsahovat p�smena, ��slice, '-', '_' a mezery.",
"104" => "The '%s' you picked has been taken.",
"105" => "Potvr�te heslo",
"106" => "Heslo nesouhlas�.",
"107" => "E-mail adresa je neplatn�.",
"108" => "D�kujeme za registraci. Nezapome�te sv� heslo. V p��pad� �e ho zapomenete, bude V�m zasl�no nov�, n�hodn� vygenerovan�.",
"109" => "M��ete %s soubory m��ete vkl�dat zde. %s",
"110" => "Aktiva�n� kod bude odesl�n na Va�ie-mail adresu. Mus�te aktivovat sv�j ��et do dvou dn�, jinak bude automaticky zru�en.",
"111" => "nem�te pr�va pr vlo�en� tohoto souboru",
"112" => "Akivace u�ivatelsk�ho ��tu",
"113" => "Pros�m, aktivujte si V� u�ivatelsk� ��et",
"114" => "Aktiva�n� kod",
"115" => "V� u�ivatelsk� ��et byl aktivov�n.",
"116" => "Pros�m %s vstupte %s.",
"117" => "U�ivatelsk� jm�ne, nebo aktiva�n� kod je neplatn�.",
"118" => "U�ivatelsk� ��et je ji� aktivn�.",
"119" => "Zas�lat denn� p�ehled vlo�en�ch soubor� e-mailem.",
"120" => "Nov� heslo",
"121" => "Star� heslo",
"122" => "U�ivatelsk� jm�no neexistuje.",
"123" => "E-mail adresa je neplatn�.",
"124" => "Va�e nov� heslo bylo odesl�no.",
"125" => "Nen� mo�n� vykonat, objekt nenalezen",
"126" => "�prava u�ivatelsk�ho profilu",
"127" => "Prove�",
"128" => "V� profil byl ulo�en.",
"129" => "Va�e heslo bylo zm�n�no.",
"130" => "Chybn� p�vodn� heslo.",
"131" => "Mus�te vlo�it nov� heslo.",
"132" => "Konfigurace",
"133" => "Nahr�v�n�",
"134" => "Jazyk a �asov� p�smo",
"135" => "U�ivatelsk� statistika",
"136" => "��et zalo�en:",
"137" => "Konfigurace u�ivatel�",
"138" => "Pouze prohl�en�",
"139" => "Pouze nahr�v�n�",
"140" => "��et '%s' korektn� upraven",
"141" => "Posledn�",
"142" => "V�echno",
"143" => "Nov� e-mail adresa bude aktivn� a� po Va�em potvrzen�. Potvrzovac� kod byl odesl�n na Va�� novou e-mail adresu. Postupujte podle instrukc� v e-mailu.",
"144" => "",
"145" => "Pros�m, potvr�te Va�� novou e-mail adresu.",
"146" => "Potvrzovac� kod",
"147" => "Potvrzen�",
"148" => "Nen� co potvrdit.",
"149" => "U�ivatelsk� jm�ne, nebo potvrzovac� kod je neplatn�.",
"150" => "Va�e nov� e-mail adresa '%s' je ulo�ena.",
"151" => "Po�et nahran�ch soubor�",
"152" => "Po�et sta�en�ch soubor�",
"153" => "Soubor byl odesl�n e-mailem",
"154" => "��et byl vytvo�en",
"155" => "Posledn� p��stup",
"156" => "Pr�va",
"157" => "Status",
"158" => "Notifikace p��rustk� e-mailem",
"159" => "e-mail",
"160" => "Celkem ��t�:",
"161" => "",
"162" => "Zru�it ��et",
"163" => "Zobrazit %s ��t� %s",
"164" => "Konfigurace nahr�vac�ho centra",
"165" => "Editace soubor�",
"166" => "Editace souboru",
"167" => "Soubor %s byl upraven",
"168" => "Ulo�it",
"169" => "Zru�it",
"170" => "Odstranit soubory",
"171" => "Mirror",
"172" => "Ano",
"173" => "Ne",
"174" => "Aktivn�",
"175" => "Neaktivn�",
"176" => "Neschv�leno",
"177" => "Lituji, ale server nem��e spustit po�tovn� program.",
"178" => "Chybn� registrace. Pros�m opakujte pozd�ji.",
"179" => "Pros�m, opakujte pozd�ji.",
"180" => "soubor odstran�n",
"181" => "nem�te opr�vn�n� odstranit tento soubor",
"182" => "adres�� odstran�n",
"183" => "nem�te opr�vn�n� odstranit tento adres��",
"184" => "adres�� byl vytvo�en",
"185" => "nem�te opr�vn�n� vytv��et nov� adres��",
"186" => "Vytvo�it nov� adres��",
"187" => "N�zev adres��e",
"188" => "Vytvo�it adres��",
"189" => "adres�� ji� existuje, zvolte jin� n�zev",
"190" => "mus�te zadat n�zev adres��e",
"191" => "Upravit",
"192" => "N�zev souboru",
"193" => "Upravit soubor/adres��",
"194" => "objekt byl p�ejmenov�n.",
"195" => "Nem�te opr�vn�n� k p�ejmenov�n� objektu",
"196" => "B�zov� adres�� je nekorektn�, zkontrolujte nastaven�",
"197" => "Se�adit podle",
"198" => "rename failed, file already exists",
"199" => "Posledn� p��sp�vky",
"200" => "Nej�ast�ji stahovan�",
"201" => "Nelze p�ejmenovat, nekorektn� n�zev",

//
// New strings introduced in version 1.02
//
"202" => "Zadan� adresa je neplatn�",
"203" => "HTTP adresa souboru",
"204" => "Nahr�n� souboru z HTTP adresy",

//
// New strings introduced in version 1.10
//
"205" => "Z�stat trvale p�ihl�en",
"206" => "Nen� mo�n� vykonat",
"207" => "IP adresa je blokov�na",
"208" => "Va�e IP adresa byla blokov�na Administr�torem!",
"209" => "Pro v�ce informac� kontaktujte Administr�tora",

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
$sendfile_email_subject = 'Po�adovan� soubor';
$sendfile_email_body = '
Tento soubor jste si nechal zaslat e-mailem

';
$sendfile_email_end = 'S pozdravem,';

//
// Digest e-mail configuration
//
$digest_email_subject = "Denn� p��r�stky";

//
// Confirm new e-mail configuration
//
$confirm_email_subject = 'Potvrzen� nov� e-mail adresy';
$confirm_email_body = 'V�en� %s,

Proto�e se sna��me o maxim�ln� bezpe�nost na�ich u�ivatel�, bude V�e e-mailov� adresa zm�n�na a� po zad�n� aktiva�n�ho kodu.

V� osobn� aktiva�n� kod je: %s

Aktivace Va�� nov� e-mailov� adresy je snadn�:
1. Nav�tivte n�s na adrese %s and a budete proveden cel�m procesem
2. Zadejte V�e u�ivatelsk� jm�no a aktiva�n� kod
3. Klikn�te na tla��tko

';
$confirm_email_end = 'S pozdravem,';

//
// Send password e-mail configuration
//
$chpass_email_subject = 'Nov� heslo';
$chpass_email_body = 'V�en� u�ivateli,

V�e mov� heslo je: %s

';
$chpass_email_end = 'S pozdravem,';

//
// Confirm registration e-mail configuration
//
$register_email_subject = 'Potvrzen� registrace';
$register_email_body = 'V�en� %s,

D�kujeme za registraci.

Proto�e se sna��me o maxim�ln� bezpe�nost na�ich u�ivatel�, bude V� u�ivatelsk� ��et aktivov�n a� po zad�n� aktiva�n�ho kodu.

V� osobn� aktiva�n� kod je: %s
(Pozor: nejedn� se o Va�e heslo)

Aktivace Va�eho ��tu je snadn�:
1. Nav�tivte n�s na adrese %s and a budete proveden cel�m procesem
2. Zadejte V�e u�ivatelsk� jm�no a aktiva�n� kod
3. Klikn�te na tla��tko

';
$register_email_end = 'S pozdravem,';
?>
