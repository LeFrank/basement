<?php
/**
 * Description of page_controller
 *
 * @author francois
 */
define("DOC_ROOT" , getenv("DOCUMENT_ROOT"));
include_once(DOC_ROOT."module/page/page_view.php");
include_once(DOC_ROOT."module/page/page_model.php");

class page_controller extends global_controller{


    function page_controller(){
        
    }

    function __default(){
        //display page
        $pv = new page_view();
        echo $pv->show_page_one();
    }
}
?>
