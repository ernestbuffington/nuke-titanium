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

$result = $db->sql_query("SELECT eid, title FROM " . $prefix . "_encyclopedia WHERE active='1'");
while ($row = $db->sql_fetchrow($result)) {
$eid = intval($row['eid']);
$title = filter($row['title'], "nohtml");
    $content .= "<strong><big>&middot;</big></strong>&nbsp;<a href=\"modules.php?name=Encyclopedia&amp;op=list_content&amp;eid=$eid\">$title</a><br>";
}

?>