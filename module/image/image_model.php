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

class image_model extends global_model{

    function get_image_by_page_block_id($pb_id=false){
        if($pb_id){
            $sql = "SELECT * FROM image WHERE page_block_id = ".$pb_id;
            $sql_res = $this->sql->_select($sql);
            $image_arr = array();
            while($row = mysql_fetch_assoc($sql_res)){
                $image_arr[] = $row;
            }
            return $image_arr;
        }else{
            //throw error
        }
    }
    



}