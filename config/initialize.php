<?php
define("DOC_ROOT" , getenv("DOCUMENT_ROOT"));
define("USER_TIMEOUT", 10);
require_once(DOC_ROOT."lib/smarty-2.6.26/libs/Smarty.class.php");
require_once(DOC_ROOT."config/class.SQL.php");
require_once(DOC_ROOT."module/global/global_controller.php");
require_once(DOC_ROOT."module/global/global_model.php");
require_once(DOC_ROOT."module/global/global_view.php");
session_start();
$sessionID = session_id();


?>


