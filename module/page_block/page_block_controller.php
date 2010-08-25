<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page_block_controller
 *
 * @author francois
 */
include_once(DOC_ROOT."module/page_block/page_block_model.php");
include_once(DOC_ROOT."module/page_block/page_block_view.php");

class page_block_controller extends global_controller{

    var $pbm = null;

    function page_block_controller(){
        $this->pbm = new page_block_model();
        $this->pbv = new page_block_view();
    }

    function get_page_block($page_id){
//        if($page_id){
            //get all page_blocks from the db for this page
            $page_block_arr = $this->pbm->get_page_block($page_id);
            $page_block_data = $this->pbv->render_page_blocks($page_block_arr);
            $page_block_arr = array("status" => 1 , "msg"=>"" , "value" => $page_block_data );

//        }else{
//            //TODO: return meanigfull well formatted array error
//            $page_block_arr = "error";
//        }
        return $page_block_arr;
    }
}
?>
