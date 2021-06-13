<?php
/***************************************************************************
 *                                   es.php
 *                            -------------------
 *   begin                : Saturday', Aug 31', 2002
 *   copyright            : ('C) 2002 Yoshiki
 *   email                : animeki@metropoliglobal.com
 *   URL                  : http://www.ultimatefirej.com &
 *                          http://animeki.metropoliglobal.com
 *
 *   $Id: es.php, v1.01 2002/08/31 17:32:20 Yoshiki Works $
 *
 * Este version del script en espa�ol fue realizada por mi Yoshiki el
 * el prop�sito de traducir el script es para expander el idioma espa�ol
 * cualquier problema con esta version, me pueden contactar.
 *
 * Nota: El script pertenece a: Bugada Andrea, yo solo hice la traducci�n ok!
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

$charsetencoding="";                 // The encoding for national symbols (i.e. for cyryllic  must be "windows-1251")
$uploadcentercaption="PHP Advanced Transfer Manager";
$uploadcentermessage="phpATM";

$mess=array(
"0" => "",
"1" => "Enero",
"2" => "Febrero",
"3" => "Marzo",
"4" => "Abril",
"5" => "Mayo",
"6" => "Junio",
"7" => "Julio",
"8" => "Augosto",
"9" => "Septiembre",
"10" => "Octubre",
"11" => "Noviembre",
"12" => "Diciembre",
"13" => "Hoy",
"14" => "Ayer",
"15" => "Archivo",
"16" => "Rating",
"17" => "Tama�o",
"18" => "Uploaded",
"19" => "Due�o",
"20" => "Subir Archivo",
"21" => "Archivo Local",
"22" => "Descripci�n del Archivo",
"23" => "Download",
"24" => "Ordenar",
"25" => "Principal",
"26" => "Archivo",
"27" => "Impimir",
"28" => "Cerrar",
"29" => "Regresar",
"30" => "Este archivo ha sido removido",
"31" => "No se puede abrir el archivo",
"32" => "Regresar",
"33" => "Error subiendo el archivo !",
"34" => "Tienes que seleccionar un archivo",
"35" => "Regresar",
"36" => "El Archivo",
"37" => "ha sido subido con �xito",
"38" => "Archivo con nombre",
"39" => "ya existe",
"40" => "El archivo ha sido subido con �xito",
"41" => "Lenguaje escogido con �xito",
"42" => "Bienvenido al PHP Advanced Transfer Manager",
"43" => "Espacio total usado",
"44" => "Mostrar archivos para todos los dias",
"45" => "Archivo Zip inv�lido!",
"46" => "Contenido del Archivo:",
"47" => "Fecha/Hora",
"48" => "Directorio",
"49" => "Esta prohibido subir archivos con el nombre %s!",
"50" => "Sobrepasa el limite de tama�o",
"51" => "Informacion",
"52" => "Seleccionar Skin",
"53" => "Skin",
"54" => "Bievenido",
"55" => "Hora Actual",
"56" => "Usuario",
"57" => "Username",
"58" => "Registrar",
"59" => "Registro",
"60" => "Domingo",
"61" => "Lunes",
"62" => "Martes",
"63" => "Miercoles",
"64" => "Jueves",
"65" => "Viernes",
"66" => "Sabado",
"67" => "Enviar",
"68" => "Enviar archivo al mail",
"69" => "El archivo ha sido enviado a esa direcci�n.",
"70" => "Archivo subido por: %s",
"71" => "Entrar",
"72" => "Salir",
"73" => "Entrar",
"74" => "Anonimo",
"75" => "Usuario Normal",
"76" => "Usuario Poderoso",
"77" => "Administrador",
"78" => "Zona Privada",
"79" => "Zona P�blica",
"80" => "Tu nombre de usuario o password no es valido.",
"81" => "Mi Perfil",
"82" => "Ver/Editar Perfil",
"83" => "Contrase�a",
"84" => "Seleccionar Idioma",
"85" => "Seleccionar Zona de Tiempo",
"86" => "Hora Actual",
"88" => "Por favor, introduce un e-mail valido.",
"89" => "Asegurate de que tu mail este activo ya que ahi se enviara el c�digo de activaci�n.",
"90" => "Archivo Subido: ",
"91" => "Por favor, introduce tu e-mail que pusiste cuando te registraste.",
"92" => "Tama�o: ",
"93" => "Por Favor, escribe abajo tu usuario y contrase�a",
"94" => "Registrarse es necesario. Por favor, registrate.",
"95" => "Registrarse no es necesario. Pero lo puedes hacer si asi lo deseas y asi aparecera el nombre en el tu archivo.",

"96" => "Skin Escogido.",
"97" => "Actualizar",
"98" => "Por Favor, enter your login name and password",
"99" => "Todav�a no te registras? - Registrate Aqu�!",
"100" => "Olvidaste tu contrase�a?",
"101" => "Por favor, ve %s atras %s y prueba de nuevo.",
"102" => "Haz cerrado sesi�n.",
"103" => "Usuario Invalido. no debe ser mas largo de 12 car�cteres, puede contener '_' '-' y espacios.",
"104" => "'%s' ya ha sido escogido.",
"105" => "Confirmar Contrase�a",
"106" => "Las contrase�as no coinciden.",
"107" => "El formato del e-mail es invalido.",
"108" => "Gracias por registrarte. Por favor apunta tu usuario y password.",
"109" => "Puedes %s entrar al centro de uploads aqu�. %s",
"110" => "El c�digo de activaci�n ha sido enviando. Deberas activar tu cuenta o en 2 d�as sera borrada automaticamente.",
"111" => "no tienes permiso para subir ese tipo de archivo",
"112" => "Activar Cuenta",
"113" => "Por Favor, activa tu cuenta",
"114" => "C�digo de Activaci�n",
"115" => "Tu cuenta ahora esta activa.",
"116" => "Por Favor %s entra aqui %s.",
"117" => "La cuenta o el c�digo son invalidos.",
"118" => "La cuenta ya ha sido activada.",
"119" => "Quisiera recibir un e-mail con los uploads del dia.",
"120" => "Cambiar Contrase�a.",
"121" => "Tu Contrase�a Vieja",
"122" => "El usuario no existe.",
"123" => "El e-mail no es valido.",
"124" => "tu nueva contrase�a ha sido enviada a tu correo.",
"125" => "no se puede ejecutar, objeto no encontrado",
"126" => "Customize your account settings",
"127" => "Aplicar",
"128" => "Tu Profile ha sido guardado.",
"129" => "Tu contrase�a ha cambiado.",
"130" => "Haz escrito mal tu contrase�a vieja.",
"131" => "Tienes que poner tu nueva contrase�a.",
"132" => "Configuraci�n",
"133" => "Upload",
"134" => "Idioma & Zona horaria",
"135" => "Estad�sticas de la cuenta",
"136" => "Tu cuenta ha sido creada:",
"137" => "Manejo de Usuario",
"138" => "Vista (Ver Solamenente)",
"139" => "Uploader (Solamente Upload)",
"140" => "Cuenta '%s' cambiada con �xito",
"141" => "�ltimo",
"142" => "Todo",
"143" => "Nuevo e-mail tomara efecto despues de la confirmaci�n.",
"144" => "",
"145" => "Por favor, confirma tu nuevo e-mail.",
"146" => "C�digo de Confirmaci�n",
"147" => "Confirmar",
"148" => "Nada que Confirmar.",
"149" => "La cuenta o el c�digo de confirmaci�n no es valido.",
"150" => "Tu nuevo e-mail '%s' ha sido confirmado.",
"151" => "Archivos Subidos",
"152" => "Archivos Bajados",
"153" => "Archivos enviados al correo",
"154" => "Cuenta Creada",
"155" => "�ltimo tiempo de acceso",
"156" => "Status",
"157" => "Status Activo",
"158" => "Recibir aviso",
"159" => "e-mail",
"160" => "Total:",
"161" => "cuenta(s)",
"162" => "Borrar Cuenta",
"163" => "Mostrar %s cuenta(s) de %s",
"164" => "Configurar Centro de Uploads",
"165" => "Editar Archivos",
"166" => "Editar Archivo",
"167" => "Archivo %s ha sido cambiado con �xito",
"168" => "Salvar",
"169" => "Borrar",
"170" => "Borrar Archivos",
"171" => "Mirror",
"172" => "Si",
"173" => "No",
"174" => "Activo",
"175" => "Inactivo",
"176" => "Sin Autorizaci�n",
"177" => "Lo siento, pero el servidor no pudo ejecutar el programa de correo.",
"178" => "Tu registro fallo. Por Favor, intenta de nuevo.",
"179" => "Por Favor, intenta de nuevo m�s tarde.",
"180" => "Archivo borrado con �xito",
"181" => "No tienes permiso para borrar el archivo",
"182" => "directorio borrado con �xito",
"183" => "no tienes permiso para borrar el directorio",
"184" => "directorio creado con �xito",
"185" => "no tienes permiso para crear directorio",
"186" => "Crear nuevo directorio",
"187" => "Nombre del Directorio",
"188" => "Hacer Directorio",
"189" => "directorio ya existe, prueba otro nombre",
"190" => "debes especificar el nombre del directorio",
"191" => "Modificar",
"192" => "Archivo",
"193" => "Modificar detalles de archivo / directorio ",
"194" => "objeto renombrado con �xito.",
"195" => "no tienes permiso para renombrar objeto",
"196" => "El path no es correcto. checa configuraci�n",
"197" => "Ordenar por",
"198" => "fallo al renombrar, el archivo ya existe",
"199" => "�ltimos Uploads",
"200" => "Top downloads",
"201" => "fallor al renombrar, nombre no permitido",

//
// New strings introduced in version 1.02
//
"202" => "The url you provided is not valid",
"203" => "File http address",
"204" => "Upload file by http address",

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
$sendfile_email_subject = 'Archivo pedido';
$sendfile_email_body = '
Here the file you requested by mail

';
$sendfile_email_end = 'Atentamente,';

//
// Digest e-mail configuration
//
$digest_email_subject = "Notificaci�n Diaria";

//
// Confirm new e-mail configuration
//
$confirm_email_subject = 'Confirmar nuevo e-mail';
$confirm_email_body = 'Hola! %s,

Por que nuestra seguridad es importante, tu nuevo e-mail debera de ser confirmado.

Tu C�digo personal de activaci�n es: %s

Activar la cuenta es simple:
1. Visitat %s y seras guiado durante el proceso.
2. Introduce tu Usuario y c�digo de confirmaci�n.
3. Oprime en \'Confirmar\'.

';
$confirm_email_end = 'Atentamente,';

//
// Send password e-mail configuration
//
$chpass_email_subject = 'Nueva Contrase�a';
$chpass_email_body = 'Estimado usuario,

tu contrase�a es: %s

';
$chpass_email_end = 'Atentamente,';

//
// Confirm registration e-mail configuration
//
$register_email_subject = 'Confirmar Registro';
$register_email_body = 'Hola! %s,

Gracias por registrarte.

Por que nuestra seguridad es importante, tu nuevo e-mail debera de ser confirmado.

Tu C�digo personal de activaci�n es: %s
(Nota: este no es tu contrase�a)

Activar la cuenta es simple:
1. Visitat %s y seras guiado durante el proceso.
2. Introduce tu Usuario y c�digo de confirmaci�n.
3. Oprime en \'Activar Cuenta\'.

';
$register_email_end = 'Atentamente,';
?>
