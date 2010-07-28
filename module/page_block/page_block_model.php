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
class page_block_model extends global_model{
    //put your code here


    function get_page_block($page_id=false){
        if($page_id == "0"){
                $sql = "SELECT * FROM page_block where page_data_id = ". $page_id;
                $sql_res = $this->sql->_select($sql);
                while($row = mysql_fetch_assoc($sql_res)){
                    $sql_arr[$row["id"]] = $row;
                }
                if(is_array($sql_arr)){
                    $sql_arr = array("status" => "0" , "value" => $sql_arr , "msg" => "");
                }else{
                    $sql_arr = array("status" => "0" , "value" => 0 , "msg" => "No Page With This ID");
                }
                return $sql_arr;
        }else{
            echo "failed";
            exit;
        }
    }
}
?>
