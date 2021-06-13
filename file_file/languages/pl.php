<?php
/***************************************************************************
 *                                   pl.php
 *                            -------------------
 *   begin                : Tuesday', Aug 15', 2002
 *   copyright            : ('C) 2002 Bugada Andrea
 *   email                : phpATM@free.fr
 *
 *   $Id: pl.php, v1.03 2002/09/29 23:53:50 gimmi Exp $
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

$charsetencoding="iso-8859-2";
$uploadcentercaption="PHP Advanced Transfer Manager";
$uploadcentermessage="phpATM";

$mess=array(
"0" => "",
"1" => "Stycze�",
"2" => "Luty",
"3" => "Marzec",
"4" => "Kwiecie�",
"5" => "Maj",
"6" => "Czerwiec",
"7" => "Lipiec",
"8" => "Sierpie�",
"9" => "Wrzesie�",
"10" => "Pa�dziernik",
"11" => "Listopad",
"12" => "Grudie�",
"13" => "Dzisiaj",
"14" => "Wczoraj",
"15" => "Opis pliku",
"16" => "Operacje",
"17" => "Wielko��",
"18" => "Data wys�ania",
"19" => "W�a�ciciel",
"20" => "Wysy�aj",
"21" => "Plik w",
"22" => "Opis pliku",
"23" => "�ci�gnij",
"24" => "Poprzedni katalog",
"25" => "Home",
"26" => "Plik",
"27" => "Drukuj",
"28" => "Zamknij",
"29" => "Wr��",
"30" => "Ten plik zosta� skasowany",
"31" => "Nie mo�na otworzy� pliku",
"32" => "Wr��",
"33" => "B��d podczas Uploadowania!",
"34" => "musisz wybra� dobry plik",
"35" => "Wr��",
"36" => "plik",
"37" => "wys�ano poprawnie",
"38" => "plik '",
"39" => "' ju� istnieje",
"40" => "wys�ano poprawnie.",
"41" => "j�zyk zosta� wybrany.",
"42" => "witamy na PHP Advanced Transfer Manager",
"43" => "Ca�a pami�� zaj�ta",
"44" => "poka� ca�� zawarto�� archiwum.",
"45" => "Plik Zip b��dny!",
"46" => "plik zawiera:",
"47" => "Data/Godzina",
"48" => "Katalog",
"49" => "nie mo�na uploadowa� pliku o nazwie %s",
"50" => " przekracza maksymaln� d�ugo��.",
"51" => "Infomracje",
"52" => "Wybierz Skin",
"53" => "Skin",
"54" => "Witaj",
"55" => "Jest teraz godzina",
"56" => "U�ytkownik",
"57" => "U�ytkownik",
"58" => "Zarejestruj si�",
"59" => "Rejestracja",
"60" => "Niedziela",
"61" => "Poniedzia�ek",
"62" => "Wtorek",
"63" => "�roda",
"64" => "Czwartek",
"65" => "Piatek",
"66" => "Sobota",
"67" => "Wyslij",
"68" => "Wyslij poprzez e-mail",
"69" => "plik zosta� wys�any na adres %s.",
"70" => "plik wprowadzony przez u�ytkownika: %s",
"71" => "Login",
"72" => "Logout",
"73" => "Wejd�",
"74" => "Anonim",
"75" => "U�ytkownik",
"76" => "Superuzytkownik",
"77" => "Administrator",
"78" => "Teren przywatny",
"79" => "Teren publiczny",
"80" => "nazwa lub has�o nie jest poprawne.",
"81" => "Profil",
"82" => "Obs�uga profilu",
"83" => "Has�o",
"84" => "Wybierz j�zyk",
"85" => "Strefa czasowa",
"86" => "U�yj czasu bierz�cego",
"88" => "Adres e-mail:",
"89" => "sprawd� czy adres email jest poprawny, zostanie wys�any kod aktywacyjny.",
"90" => "Wstawiono plik: ",
"91" => "Adres email u�yty do rejestracji",
"92" => "Rozmiar pliku: ",
"93" => "Prosz� wprowadzi� nazwe i has�o",
"94" => "nale�y si� zarejestrowa�.",
"95" => "Nie trzeba si� rejestrowa�. Rejestracja pozwoli na dodanie twojej nazwy do wszystkich plik�w przez ciebie dodanych. �aden inny uzytkowanik nie mo�e wykorzysta� twojej nazwy do uploadowania pliku.",
"96" => "Skin wybrany.",
"97" => "Od�wie�",
"98" => "Wprowad� nazwe i has�o dost�pu",
"99" => "Jeszcze si� nie zarejestrowa�e�? - Rejestracja jest tutaj!",
"100" => "Zapomnia�e� has�a?",
"101" => "Prosz� %s wr�c %s i pon�w pr�be.",
"102" => "Logout wykonany poprawnie.",
"103" => "Nazwa u�ytkownika nie jest poprawna. Nie mo�na u�ywa� powy�ej 12 znak�w, oraz znak�w typu, '-', '_' i spacji.",
"104" => "Nazwa kt�r� wybra�e� ('%s') nie jest dostepna.",
"105" => "Wpisz ponownie has�o",
"106" => "Wpisane Has�a nie s� jednakowe.",
"107" => "Wpisany format adresu email nie jest poprawny.",
"108" => "Dzi�kuje za zarejestrowanie si�. Zapami�taj twoj� nazwe i has�o (Login i Password). Je�li zapomnisz te dane, mozliwe, �e ich nie odzyskasz, jednak postaramy sie ci pom�c.",
"109" => "Mo�esz %s wej�� na Upload naciskaj�c tutaj %s",
"110" => "Wys�any zosta� kod aktywacyjny na tw�j email. Wygenerowany dostep do konta jest wa�ny przez 2 dni, jesli nie potwierdzisz rejestracji zostanie ona usuni�ta.",
"111" => "Nie mo�na �ci�gn�� pliku, nie maj� one odpowiednich danych.",
"112" => "Aktywacja rejestracji",
"113" => "Aktywuj swoj� rejestracj�.",
"114" => "Kod aktywacyjny",
"115" => "Od tego momentu aktywowa�e� swoj� rejestracj�.",
"116" => "Prosz� %s aby� wszed� tutaj %s.",
"117" => "Nazwa lub kod aktywacyjny nie s� poprawne.",
"118" => "Ten uzytkownik zosta� ju� aktywowany.",
"119" => "Chc� otrzymywa� dzienny raport:",
"120" => "Zmie� Has�o dost�pu.",
"121" => "Stare Has�o",
"122" => "Wprowadzony w�ytkownik nie jest aktywny.",
"123" => "Wprowadzony email nie jest poprawny.",
"124" => "Nowe has�o zosta�o przes�ane poprzez email",
"125" => "nie mo�na wykonac operacji, nie znaleziono obiektu",
"126" => "Zmie� preferencje",
"127" => "Wykonaj",
"128" => "profil zapamietany.",
"129" => "has�o zmienione.",
"130" => "stare has�o nie jest poprawne.",
"131" => "Musisz poda� nowe has�o.",
"132" => "Konfiguracja",
"133" => "Upload",
"134" => "J�zyk i strefa czasowa",
"135" => "Statystyka u�ytkownika",
"136" => "Tw�j profil zosta� wygenerowany:",
"137" => "Obs�uga u�ytkownik�w",
"138" => "Go�� (tylko ogl�danie)",
"139" => "Uploader (tylko upload)",
"140" => "profil '%s' zmodyfikowany poprawnie",
"141" => "Ostatnie",
"142" => "Wszystkie",
"143" => "Zmiana adresu email jest wa�na po potwierdzeniu. Tw�j kod aktywacyjny znajdziesz w skrzynce email. Wykonaj czynno�ci opisane w emailu.",
"144" => "",
"145" => "Prosz� wprowadzi� dane i potwierdzic nowy adres email:",
"146" => "Kod aktywacyjny",
"147" => "Potwierd� nowy adres email",
"148" => "Wprowadzony u�ytkownik nie ma nic do potwierdzenia.",
"149" => "Nazwa uzytkownika i kod potwierdzaj�cy nie s� poprawne.",
"150" => "tw�j nowy adres email '%s' zosta� potwirdzony.",
"151" => "Pliki wys�ano",
"152" => "�ci�gni�to pliki",
"153" => "pliki prze emailowane",
"154" => "Data stworzenia profilu",
"155" => "Data ostatniego wej�cia",
"156" => "Rola",
"157" => "Status aktywacji",
"158" => "Odebrano raport",
"159" => "E-mail",
"160" => "Ca�o��:",
"161" => "profil",
"162" => "Skasuj profil ",
"163" => "Popa� %s profil przy wielko�ci di %s",
"164" => "konfiguracja",
"165" => "Edytuj plik",
"166" => "Edytuj plik",
"167" => "Iplikl %s zosta� zmodyfikowany poprawnie",
"168" => "Zapisz",
"169" => "Skasuj",
"170" => "Skasuj plik",
"171" => "Mirror",
"172" => "Tak",
"173" => "Nie",
"174" => "Atktywny",
"175" => "Wys�any",
"176" => "Brak autoryzacji",
"177" => "Przykronam serwer nie mo�e wykona� programu pocztowego.",
"178" => "Rejestracja nie powiod�a si�, prosz� sp�bowac p�niej",
"179" => "Prosz� spr�bowac p�niej",
"180" => "fplik zosta� skasowany",
"181" => "nie posiadasz odpowiednich uprawnie� do skasowania pliku",
"182" => "katalog zosta� skasowany",
"183" => "nie posiadasz uprawnie� do skasowania katalogu",
"184" => "katalog zosta� stworzony",
"185" => "nie posiadasz uprawnie� do stworzenia katalogu",
"186" => "Stw�rz nowy katalog",
"187" => "Nazwa katalogu",
"188" => "Stw�rz katalog",
"189" => "inie mozna stworzyc katalogu, taki juz istnieje",
"190" => "musisz poda� normaln� nazw� katalogu",
"191" => "Zmie�",
"192" => "Nazwa pliku",
"193" => "Zmie� detale katalogu",
"194" => "nazwa obiektu zmieniona poprawnie.",
"195" => "nie posiadasz odpowiednich uprawnie� do zmiany nazwy obiektu",
"196" => "Wstawiono z�y root path, zmie� ustawienia w konfiguracji!",
"197" => "Wykoanj",
"198" => "nie mozna zmieni� nazwy, taki plik istnieje",
"199" => "Pliki ostatnio wgrane",
"200" => "Pliki najcz�ciej �ci�gane",
"201" => "nie mozna zmieni�, nazwa niedost�pna",

//
// New strings introduced in version 1.02
//
"202" => "Adres web nie jest poprawny",
"203" => "Adres pliku",
"204" => "Wy�lij plik z adreseum http",

//
// New strings introduced in version 1.10
//
"205" => "Always stay logged",
"206" => "Can't execute: name not allowed",
"207" => "ip blocked",
"208" => "Your ip has been blocked by Administration!",
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
$sendfile_email_subject = '��dany plik';
$sendfile_email_body = '
Oto plik, kt�ry chcia�e� dodta� poprzez email

';
$sendfile_email_end = 'Mi�ego dnia,';

//
// Digest e-mail configuration
//
$digest_email_subject = "Dzienny raport";

//
// Confirm new e-mail configuration
//
$confirm_email_subject = 'Potwierd� zmian� emaila';
$confirm_email_body = 'Drogi u�ytkowniku %s,

Poniewa� dbamy o bezpiecze�stwo twoich danych, tw�j profil nie zosta� jeszcze stworzony.

Aby go uruchomi� musisz wprowadzi� kod aktywacyjny: %s
(UWAGA to nie jest password - has�o!)

Aktywowa� rejestracj�-profil jest bardzo �atwo:
1. Id� na stwon� %s itam zostaniesz pokierowany ktok po kroku.
2. Wprowad� nazw� u�ytkownika i email.
3. Wszystko zatwierd� .

';
$confirm_email_end = 'Mi�ego dnia,';

//
// Send password e-mail configuration
//
$chpass_email_subject = 'Nowe has�o-password';
$chpass_email_body = 'Nazwa u�ytkownika,

Nowe has�o � %s
Mo�esz je zmieni� kiedy chcesz.

';
$chpass_email_end = 'Mi�ego dnia,';

//
// Confirm registration e-mail configuration
//
$register_email_subject = 'Potwierd� rejestracje';
$register_email_body = 'U�ytkowniku  %s,

Dzi�kujemy, �e si� zarejestrowa�e�

poniewa� dbamy o bezpiecze�stwo twoich danych profil nie zosta� jeszcze aktywowany.

Aby go aktywowa� musisz wpisa� kod aktywacyjny �: %s
(uwaga! to nie jest has�o-password)

Aktywowa� rejestracj�-profil jest bardzo �atwo:
1. Id� na stwon� %s itam zostaniesz pokierowany ktok po kroku.
2. Wprowad� nazw� u�ytkownika i email.
3. Wszystko zatwierd� .

';
$register_email_end = 'Mi�ego dnia,';

?>
