<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
define("DOC_ROOT" , getenv("DOCUMENT_ROOT"));
define("GOOGLE_ADS_API" , DOC_ROOT."/lib/google_ads_api_v200909/");
define("USER_TIMEOUT", 10);
require_once(DOC_ROOT."/config/mysql_connect.php");
require_once(DOC_ROOT."/config/class.SQL.php");
require_once(DOC_ROOT."/lib/smarty-2.6.26/libs/Smarty.class.php");
require_once(DOC_ROOT."/modules/global/global_controller.php");
require_once(DOC_ROOT."/modules/global/global_model.php");
require_once(DOC_ROOT."/modules/global/global_view.php");
require_once(DOC_ROOT."/helpers/convenience/convenience.php");
session_start();
$sessionID = session_id();

?>
