<?php
/***************************************************************************
 *                                   tr.php
 *                            -------------------
 *   begin                : Tuesday', Mar 26', 2004
 *   copyright            : ('C) 2002 Bugada Andrea
 *   email                : phpATM@free.fr
 *
 *   $Id: tr.php, v1.10 2004/03/26 23:53:50 bugada Exp $
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

$headerpage="include/header.htm";    // The optional header file (can absent)
$footerpage="include/footer.htm";    // The footer file (must present!)
$infopage="include/info.htm";        // The optional info file (can absent)

$charsetencoding="windows-1254";                 // The encoding for national symbols (i.e. for cyryllic  must be "windows-1251")
$uploadcentercaption="PHP Advanced Transfer Manager";
$uploadcentermessage="phpATM";

$mess=array(
"0" => "",
"1" => "Ocak",
"2" => "�ubat",
"3" => "Mart",
"4" => "Nisan",
"5" => "May�s",
"6" => "Haziran",
"7" => "Temmuz",
"8" => "A�ustos",
"9" => "Eyl�l",
"10" => "Ekim",
"11" => "Kas�m",
"12" => "Aral�k",
"13" => "Bug�n",
"14" => "D�n",
"15" => "Dosya Ad�",
"16" => "Pop�larite",
"17" => "Boyutu",
"18" => "Y�klenen",
"19" => "Sahibi",
"20" => "Dosya Y�kle",
"21" => "Yerel Dosya",
"22" => "Dosya Tan�m�",
"23" => "Y�kle",
"24" => "S�rala",
"25" => "Anasayfa",
"26" => "Dosya",
"27" => "Yazd�r",
"28" => "Kapat",
"29" => "Geri Git",
"30" => "Bu dosya kald�r�lm��t�r",
"31" => "Dosyay� a�am�yorum",
"32" => "Geri Git",
"33" => "Dosyay� y�klerken hata olu�tu !",
"34" => "Bir dosya se�melisiniz",
"35" => "Geri",
"36" => "Dosya",
"37" => "ba�ar�l� bir �ekilde y�klendi",
"38" => "Dosya ad�",
"39" => "zaten var",
"40" => "Dosya ba�ar�l� bir �ekilde y�klendi",
"41" => "Dil ba�ar�l� bir �ekilde se�ildi",
"42" => "Php Geli�mi� Transfer Y�neticisine ho� geldiniz",
"43" => "Toplam kullan�lan alan",
"44" => "T�m g�nler i�indeki dosyalar� g�ster",
"45" => "Yanl��/Hasarl� ZIP dosyas�!",
"46" => "Ar�iv i�erikleri:",
"47" => "G�n/Zaman",
"48" => "Dizin",
"49" => "%s isminde bir dosya y�klemeniz yasakt�r!",
"50" => "izin verilen dosya boyutunu a��yor",
"51" => "Bilgi",
"52" => "G�r�n�m se�in",
"53" => "G�r�n�m",
"54" => "Ho�geldiniz",
"55" => "�u anki zaman",
"56" => "Kullan�c�",
"57" => "Kullan�c� Ad�",
"58" => "Kay�t Ol",
"59" => "Kaydolma",
"60" => "Pazar",
"61" => "Pazartesi",
"62" => "Sal�",
"63" => "�ar�amba",
"64" => "Per�embe",
"65" => "Cuma",
"66" => "Cumartesi",
"67" => "G�nder",
"68" => "Dosyay� maille g�nder",
"69" => "Dosya ba�ar�yla %s addresine g�nderilmi�tir.",
"70" => "Kullan�c� taraf�ndan y�klenen dosya: %s",
"71" => "Sisteme Giri�",
"72" => "Sistemden ��k��",
"73" => "Gir",
"74" => "Anonymous",
"75" => "Normal User",
"76" => "Power User",
"77" => "Administrator",
"78" => "Private zone",
"79" => "Public zone",
"80" => "Yanl�� bir kullan�c� ad� veya �ifre girdiniz.",
"81" => "Profilim",
"82" => "Profilimi g�r�nt�le/de�i�tir",
"83" => "�ifre",
"84" => "Dil se�iniz",
"85" => "Zaman dilimi se�iniz",
"86" => "�u anki zaman",
"88" => "L�tfen ge�erli bir e-mail adresi giriniz.",
"89" => "E-mail hesab�n�z�n aktif oldu�una emin olun, ��nk� size �zel aktivasyon kodunuz bu e-mail adresine g�nderilecektir.",
"90" => "Dosya y�klendi: ",
"91" => "L�tfen kay�t s�ras�nda yazd���n�z e-mail hesab�n�z� giriniz.",
"92" => "Dosya boyutu: ",
"93" => "L�tfen isminizi ve �ifrenizi yaz�n�z",
"94" => "Kay�t olmak gereklidir. L�tfen kay�t olunuz.",
"95" => "Kay�t olman�z gerekmemektedir. E�er t�m y�kledi�iniz dosyalara isminizi eklemek isterseniz kay�t olabilirsiniz. Ba�ka hi�kimse kendi dosylar�n� y�klemek i�in sizin ad�n�z� kullanamaz.",
"96" => "G�r�n�m se�ildi.",
"97" => "Yenile",
"98" => "L�tfen kay�t isminizi ve �ifrenizi giriniz",
"99" => "Hala kay�t olmad�n�zm�? - Buradan kay�t olun!",
"100" => "�ifrenizimi unuttunuz?",
"101" => "L�tfen, geri %s gidin %s ve tekrar deneyin.",
"102" => "Ba�ar�l� olarak sistemden ��kt�n�z.",
"103" => "Kullan�c� ad� ge�ersiz. Kullan�c� ad� 12 sembolden uzun olmamal� ve latin harfleri ve numaralardan olu�mal�d�r. Kullan�c� ad� ayn� zamanda '-', '_', ve bo�luk sembollerini i�inde bar�nd�rmamal�d�r.",
"104" => "Se�mi� oldu�unuz '%s' ba�kas� taraf�ndan al�nm��t�r.",
"105" => "�ifreyi do�rula",
"106" => "�ifreler birbirleriyle uymuyor.",
"107" => "Girilen e-mail format� ge�ersizdir.",
"108" => "Kay�t oldu�unuz i�in te�ekk�rler. �ifreniz veritaban�m�zda kripte edildi�i i�in �ifrenizi size geri bildiremiyoruz, bu sebeple l�tfen �ifrenizi unutmay�n�z. Ne var ki �ifrenizi unutman�z durumunda emailinize yeni ve rasgele bir �ifre yarat�l�p g�nderilecektir.",
"109" => "Buradan %s Y�kleme alan�na giri� yapabilirsiniz. %s",
"110" => "Aktivasyon kodunuz emailinize g�nderilmi�tir. 2 g�n i�inde hesab�n�z� aktive etmezseniz hesab�n�z otomatik olarak silinecektir.",
"111" => "Bu dosyay� y�klemek i�in gerekli izne sahip de�ilsiniz",
"112" => "Hesab� aktive et",
"113" => "L�tfen hesab�n�z� aktive ediniz",
"114" => "Aktivasyon kodu",
"115" => "Hesab�n�z �u anda aktiftir.",
"116" => "L�tfen %s buradan giri� yap�n�z %s.",
"117" => "Girmi� oldu�unuz hesap ad� veya aktivasyon kodu ge�ersizdir.",
"118" => "Hesap zaten aktif durumda.",
"119" => "Emailime g�nl�k olarak y�klenen dosyalar�n listesini g�nderilmesini istiyorum.",
"120" => "�ifrenizi de�i�tirin.",
"121" => "Eski �ifreniz",
"122" => "Girilen hesap ad� ge�ersizdir.",
"123" => "Girilen e-mail adresi ge�ersizdir.",
"124" => "Yeni �ifreniz e-mailinize g�nderilmi�tir.",
"125" => "i�lemi ger�ekle�tiremiyorum, obje bulunamad�",
"126" => "Hesab�n�zdaki ayarlar� �zelle�tirin",
"127" => "Uygula",
"128" => "Profiliniz kaydedilmi�tir.",
"129" => "�ifreniz de�i�tirilmi�tir.",
"130" => "�nceki �ifrenizi yanl�� girdiniz.",
"131" => "Yeni �ifrenizi belrlemeniz gerekmektedir.",
"132" => "Ayarlar",
"133" => "Y�kle",
"134" => "Dil & zaman dilimi",
"135" => "Hesap istatistikleri",
"136" => "Hesab�n�z yarat�lm��t�r:",
"137" => "Kullan�c� y�netimi",
"138" => "G�zleyici (sadece izleyebilir)",
"139" => "Y�kleyici (sadece y�kleme yapabilir)",
"140" => "Hesap '%s' ba�ar�yla de�i�tirilmi�tir",
"141" => "Son",
"142" => "Hepsi",
"143" => "Yeni e-mail adresi onayland�ktan sonra aktif olur. Onay kodu e-maili adresinize g�nderilmi�tir. E-mailin i�indeki a��klamalara bak�n�z.",
"144" => "",
"145" => "L�tfen yeni e-mail adresinizi onaylay�n.",
"146" => "Onay kodu",
"147" => "Onayla",
"148" => "Onaylanacak bir�ey bulunamad�.",
"149" => "Girilen hesap ad� veya onay kodu ge�ersizdir.",
"150" => "Yeni e-mail adresiniz '%s' onaylanm��t�r.",
"151" => "Dosyalar y�klendi",
"152" => "Dosyalar indirildi",
"153" => "Dosyalar e-mail ile g�nderildi",
"154" => "Hesap yarat�ld�",
"155" => "Son eri�im zaman�",
"156" => "Durum",
"157" => "Aktif durum",
"158" => "Haberleri al",
"159" => "e-mail",
"160" => "Toplam:",
"161" => "hesap(s)",
"162" => "Hesab� sil",
"163" => "G�sterilen %s hesaplar�n(s) %s",
"164" => "Y�kleme alan�n� ayarla",
"165" => "Dosyalar� d�zenle",
"166" => "Dosyay� d�zenle",
"167" => "Dosya %s ba�ar�yla de�i�tirilmi�tir",
"168" => "Kaydet",
"169" => "Sil",
"170" => "Dosyalar� sil",
"171" => "alternatif",
"172" => "Evet",
"173" => "Hay�r",
"174" => "Aktif",
"175" => "Deaktif",
"176" => "�zinsiz",
"177" => "�zg�n�m ama sunucu posta program�n� �al��t�ramad�.",
"178" => "Kay�d�n�z ba�ar�s�z oldu. L�tfen daha sonra tekrar deneyin.",
"179" => "L�tfen daha sonra tekrar deneyin.",
"180" => "Dosya ba�ar�yla silindi",
"181" => "Bu dosyay� silmek i�in yetkiniz bulunmamaktad�r",
"182" => "Dizin ba�ar�yla silinmi�tir",
"183" => "Bu dizini silmek i�in yetkiniz bulunmamaktad�r",
"184" => "dizin ba�ar�yla yarat�lm��t�r",
"185" => "Dizin yaratmak i�in yetkiniz bulunmamaktad�r",
"186" => "Yeni dizin yarat",
"187" => "Dizin ad�",
"188" => "Dizin yarat",
"189" => "dizin zaten mevcut, l�tfen farkl� bir ad se�iniz",
"190" => "bir dizin ismi belirlemek zorundas�n�z",
"191" => "De�i�tir",
"192" => "Dosya Ad�",
"193" => "Dosyay� de�i�tir / dizin detaylar�",
"194" => "objenin ismi ba�ar�yla de�i�tirildi.",
"195" => "bu dosyan�n ismini de�i�tirmek i�in yetkiniz yok",
"196" => "K�k dizini do�ru de�il. Ayarlar� kontrol ediniz",
"197" => "Buna g�re s�rala",
"198" => "isim de�i�tirilme ba�ar�s�z oldu, dosya zaten mevcut",
"199" => "Son y�klenenler",
"200" => "En �ok y�klenenler",
"201" => "isim de�i�tirilme ba�ar�s�z oldu, bu isme izin verilmemektedir",

//
// New strings introduced in version 1.02
//
"202" => "Girdi�iniz url adresi ge�ersizdir",
"203" => "Dosya http adresi",
"204" => "Dosyay� http adresinden y�kle",

//
// New strings introduced in version 1.10
//
"205" => "Her zaman kay�tl� kal",
"206" => "��lem yap�lam�yor: bu isime izin verilmiyor",
"207" => "IP adresi bloke olmu�tur",
"208" => "Ip adresiniz y�netici taraf�ndan bloke edilmi�tir!",
"209" => "Daha detayl� bilgi i�in y�neticiye ba�vurunuz",


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
$sendfile_email_subject = '�stenen dosya';
$sendfile_email_body = '
E-mail ile g�nderilmesini istedi�iniz dosya

';
$sendfile_email_end = 'Sayg�lar,';

//
// Digest e-mail configuration
//
$digest_email_subject = "G�nl�k liste";

//
// Confirm new e-mail configuration
//
$confirm_email_subject = 'Yeni e-mailinizi onaylay�n';
$confirm_email_body = 'Say�n %s,

G�venli�iniz bizim i�in �nemli oldu�undan yeni e-mail adresinizin bu al�nd�dan sonra onaylanmas� gerekmektedir.
Ki�isel onay kodunuz: %s

E-mail adresinizi aktive etmek �ok basittir:
1. Sitemizi bu adresten %s ziyaret edin ve biz size bu i�lemler s�ras�nda yol g�sterelim
2. Hesab�n�z�n ad�n� ve onay kodunu girin.
3. Onayla \'Confirm\' d��mesine t�klay�n.

';
$confirm_email_end = 'Sayg�lar,';

//
// Send password e-mail configuration
//
$chpass_email_subject = 'Yeni �ifre';
$chpass_email_body = 'Say�n kullan�c�,

Yeni �ifreniz %s olarak atanm��t�r

';
$chpass_email_end = 'Sayg�lar,';

//
// Confirm registration e-mail configuration
//
$register_email_subject = 'Kayd� Onayla';
$register_email_body = 'Say�n %s,

Kay�t oldu�unuz i�in te�ekk�r ederiz.

G�venli�iniz bizim i�in �nemli oldu�undan yeni e-mail adresinizin bu al�nd�dan sonra onaylanmas� gerekmektedir.

Ki�isel onay kodunuz: %s
(not: bu sizin �ifreniz de�ildir)

E-mail adresinizi aktive etmek �ok basittir:
1. Sitemizi bu adresten %s ziyaret edin ve biz size bu i�lemler s�ras�nda yol g�sterelim
2. Hesab�n�z�n ad�n� ve onay kodunu girin.
3. Hesab� aktive et \'Activate account\' d��mesine t�klay�n.


';
$register_email_end = 'Sayg�lar,';
?>
