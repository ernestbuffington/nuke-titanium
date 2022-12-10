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

    case "BlocksAdmin":
    case "BlocksAdd":
    case "BlocksEdit":
    case "BlocksEditSave":
    case "ChangeStatus":
    case "BlocksDelete":
    case "BlockOrder":    
    case "HeadlinesDel":
    case "HeadlinesAdd":
    case "HeadlinesSave":
    case "HeadlinesAdmin":
    case "HeadlinesEdit":
    case "fixweight":
    case "block_show":
    include("admin/modules/blocks.php");
    break;

}

?>