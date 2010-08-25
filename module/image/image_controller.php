<?php
/**
 * Description of page_controller
 *
 * @author francois
 */
define("DOC_ROOT" , getenv("DOCUMENT_ROOT"));
include_once(DOC_ROOT."module/image/image_view.php");
include_once(DOC_ROOT."module/image/image_model.php");


class image_controller extends global_controller{
    var $im , $iv= null;

    function image_controller(){
        $this->im = new image_model();
        $this->iv = new image_view();
    }

    function __default(){

    }

    function get_image_by_page_block_id($pb_id=false){
        if($pb_id){
            $page_block_image_arr = $this->im->get_image_by_page_block_id($pb_id);
            return $page_block_image_arr;
        }else{
            //throw error
        }
    }
}