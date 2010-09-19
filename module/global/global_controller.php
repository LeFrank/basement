<?php
require_once("global_model.php");
require_once("global_view.php");

class global_controller{

    function global_controller(){
    }

    function __default()
    {
    	$global_model 	= new global_model();
    	$global_model->set_navigation_variables(null, $_GET["current_page"], $_GET["order_date_by"], $_GET["results_per_page"]);
    }

    function debug($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
}