<?php

/************************************************************************/
/* PHP-Nuke Titanium: An Enhanced and Advanced CMS                         */
/* ============================================                         */
/*                                                                      */
/* Copyright (c) by Francisco Burzi & Brandon Maintenance Management LLC                                */
/* http://php-nuke.coders.exchange                                                   */
/*                                                                      */
/* PHP-Nuke Installer was based on Joomla Installer                     */
/* Joomla is Copyright (c) by Open Source Matters                       */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

$version_number = "8.1";
$filedate = filemtime("version.php");
$filedate = date("F d, Y", $filedate);
$version = "PHP-Nuke $version_number (Release Date: $filedate)";

?>