<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING ^ E_COMPILE_WARNING);
if(!ob_start("ob_gzhandler"))
	ob_start();
require_once("./config/initialize.php");

$ad_data_array = $_REQUEST;

print_r($_GET);
if (isset($_GET['module'])) {
      $module = $_GET['module'];
      if (isset($_GET['event'])) {
          $event = $_GET['event'];
      } else {
          $event = '__default';
      }

      if (isset($_GET['class'])) {
          $class = $_GET['class'];
      } else {
          $class = $module."_controller";
      }
      $classFile = DOC_ROOT.'module/'.$module.'/'.$class.'.php';
      if (file_exists($classFile)) {
          require_once($classFile);
          if (class_exists($class)) {
              try {
                  $instance = new $class();
                  if (!is_object($instance)) {
                      die("Requested module is not a valid framework module!");
                  }
                  $instance->moduleName = $module;
                      try {
                          $result = $instance->$event();
                      } catch (Exception $error) {
                          die($error->getMessage());
                      }
              } catch (Exception $error) {
                  die($error->getMessage());
              }
          } else {
              die("An valid module for your request was not found");
          }
      } else {
          die("Could not find: $classFile");
      }
  } else {
      header('Location: http://'.$_SERVER['SERVER_NAME'].'/?module=page') ;
  }
ob_end_flush();
exit;
?>