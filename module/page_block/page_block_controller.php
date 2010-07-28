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

class page_block_controller extends global_controller{

    var $pbm = null;

    function page_block_controller(){
        $this->pdb = new page_block_model();
    }

    function get_page_block($page_id){
//        if($page_id){
            //get all page_blocks from the db for this page
            $page_block_arr = $this->pdb->get_page_block($page_id);
            $page_block_arr = array("status" => 1 , "msg"=>"" , "value" => $page_block_arr );
//        }else{
//            //TODO: return meanigfull well formatted array error
//            $page_block_arr = "error";
//        }
        return $page_block_arr;
    }
}
?>
