<?php
/***************************************************************************
 *                                 getimg.php
 *                            -------------------
 *   begin                : Tuesday', Aug 15', 2002
 *   copyright            : ('C) 2002 Bugada Andrea
 *   email                : phpATM@free.fr
 *
 *   $Id: getimg.php,v 1.03 10/04/2008 16:56 Flava Clown $
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

define('IN_PHPATM', true);
$include_location = dirname($_SERVER['SCRIPT_FILENAME'])."/";
include($include_location.'include/conf.php');
include($include_location.'include/functions.'.$phpExt);

//
// Dato un file name passato nella URL con parametro 'image=' ne ritorna l'immagine
// Questo serve per prelevare immagini da directory protette
//

$image = $_GET['image'];

$imagepath = clean_path("$uploads_folder_name/$image");

if (!file_exists($imagepath))
{
	header('Status: 404 Not Found');
	exit();
}

$mime_type = mime_type($image);

if ($mime_type != '')
{
	header("Content-type: $mime_type");
	header("Content-Disposition: attachment; filename=\"$image\"");
	@readfile_chunked($imagepath);
}
else
{
	header('Status: 404 Not Found');
}
?>