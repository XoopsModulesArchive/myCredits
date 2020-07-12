<?php
/**
* XOOPS - PHP Content Management System
* Copyright (c) 2004 <http://www.xoops.org/>
*
* Module: myCredits 1.0
* Licence : GPL
* Authors :
*           - solo (www.wolfpackclan.com/wolfactory)
*			- DuGris (www.dugris.info)
*/

include_once("../../../mainfile.php");
include_once "../../../include/cp_header.php";
include_once( '../../../include/functions.php');

include_once (XOOPS_ROOT_PATH . '/modules/myCredits/include/common.php');

if ( file_exists(XOOPS_ROOT_PATH . '/modules/myCredits/language/' . $xoopsConfig['language'] . '/modinfo.php') ) {
	include_once(XOOPS_ROOT_PATH . '/modules/myCredits/language/' . $xoopsConfig['language'] . '/modinfo.php');
} else {
	include_once(XOOPS_ROOT_PATH .'/modules/myCredits/language/english/modinfo.php');
}

/*
include_once XOOPS_ROOT_PATH."/class/xoopsmodule.php";
include_once XOOPS_ROOT_PATH."/class/xoopstree.php";
include_once XOOPS_ROOT_PATH."/class/xoopslists.php";
include_once XOOPS_ROOT_PATH."/include/xoopscodes.php";
include_once XOOPS_ROOT_PATH."/class/xoopsformloader.php";
include_once XOOPS_ROOT_PATH."/class/module.errorhandler.php";
$eh = new ErrorHandler;
*/


if ( is_object($xoopsUser)) {
	$xoopsModule = XoopsModule::getByDirname("myCredits");
	if ( !$xoopsUser->isAdmin($xoopsModule->mid()) ) {
		redirect_header(XOOPS_URL."/",1,_NOPERM);
		exit();
		}
} else {
	redirect_header(XOOPS_URL."/",1,_NOPERM);
	exit();
}
$myts =& MyTextSanitizer::getInstance();

xoops_cp_header();
?>