<?php
/**
 * Description of page_controller
 *
 * @author francois
 */
define("DOC_ROOT" , getenv("DOCUMENT_ROOT"));
include_once(DOC_ROOT."module/page/page_view.php");
include_once(DOC_ROOT."module/page/page_model.php");
include_once(DOC_ROOT."module/page_block/page_block_controller.php");

class page_controller extends global_controller{
    var $pm , $pv= null;

    function page_controller(){
        $this->pm = new page_model();
        $this->pv = new page_view();
    }

    function __default(){
        //display page
        $this->pv = new page_view();
        $page_data = $this->pm->get_home_page();
//        print_r($page_data);
        $pbc = new page_block_controller();
        $page_block = $pbc->get_page_block($page_data["value"][id]);
        $page_data["page_block"] = $page_block;
        $this->pv->show_page($page_data);
    }

    function meta_data(){
        
    }

    function new_page(){
        $result = $this->pm->new_page();
        echo $this->pv->new_page();

    }

    function build_menu(){
        
    }

}
?>
