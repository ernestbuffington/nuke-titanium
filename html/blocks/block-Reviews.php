<?php

/************************************************************************/
/* PHP-NUKE: Web Portal System                                          */
/* ===========================                                          */
/*                                                                      */
/* Copyright (c) by Francisco Burzi & Brandon Maintenance Management LLC                                */
/* http://php-nuke.coders.exchange                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

if ( !defined('BLOCK_FILE') ) {
    Header("Location: ../index.php");
    die();
}

global $prefix, $db;

$result = $db->sql_query("SELECT id, title FROM ".$prefix."_reviews ORDER BY id DESC LIMIT 0,10");
while ($row = $db->sql_fetchrow($result)) {
$id = intval($row['id']);
$title = filter($row['title'], "nohtml");
    $content .= "<strong><big>&middot;</big></strong>&nbsp;<a href=\"modules.php?name=Reviews&amp;rop=showcontent&amp;id=$id\">$title</a><br>";
}

?>