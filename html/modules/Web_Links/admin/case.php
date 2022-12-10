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

$module_name = "Web_Links";
include_secure("modules/$module_name/admin/language/lang-".$currentlang.".php");

switch($op) {

    case "Links":
    case "LinksDelNew":
    case "LinksAddCat":
    case "LinksAddSubCat":
    case "LinksAddLink":
    case "LinksAddEditorial":
    case "LinksModEditorial":
    case "LinksLinkCheck":
    case "LinksValidate":
    case "LinksDelEditorial":
    case "LinksCleanVotes":
    case "LinksListBrokenLinks":
    case "LinksEditBrokenLinks":
    case "LinksDelBrokenLinks":
    case "LinksIgnoreBrokenLinks":
    case "LinksListModRequests":
    case "LinksChangeModRequests":
    case "LinksChangeIgnoreRequests":
    case "LinksDelCat":
    case "LinksModCat":
    case "LinksModCatS":
    case "LinksModLink":
    case "LinksModLinkS":
    case "LinksDelLink":
    case "LinksDelVote":
    case "LinksDelComment":
    case "LinksTransfer":
    include("modules/$module_name/admin/index.php");
    break;

}

?>
