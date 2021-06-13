<?php
/***************************************************************************
 *                             viewer_content.php
 *                            --------------------
 *   begin                : Saturday', Mar 08', 2003
 *   copyright            : ('C) 2002-03 Bugada Andrea
 *   email                : phpATM@free.fr
 *
 *   $Id: viewer_content.php, v1.22 10/04/2008 17:01 Flava Clown $
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
include($include_location.'include/common.'.$phpExt);

$filename  = getGetVar('file');
$directory = getGetDir('dir');

$current_dir = $uploads_folder_name;
if ($directory != '')
{ $current_dir.="/$directory"; }

// Recupero l'estensione del file ed eseguo il viewer associato.
// Se non esiste il viewer specifico lancio quello di default
$path_parts = pathinfo($filename);
$extension = strtolower($path_parts["extension"]);
$viewer_path = $viewers_folder_name."/".$extension.".".$phpExt;

if (file_exists($viewer_path))
{ include($include_location.$viewer_path); }
?>