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

if (!defined('ADMIN_FILE')) {
	die ("Access Denied");
}

switch($op) {
    case "ipban":
    case "save_banned":
    case "ipban_delete":
	case "ipban_edit":
	case "ipban_save":
    include("admin/modules/ipban.php");
    break;

}

?>