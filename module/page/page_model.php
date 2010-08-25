<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page_model
 *
 * @author francois
 */
class page_model extends global_model{

    function new_page(){
        $sql = "insert into page    (name , menu_order , keywords , creator_id , date_created)
                            values  ('Home', 0 , 'The blog is awesome :)' , 1 , now());";
        $page_id = $this->sql->_insert($sql);
        return $page_id;
    }

    function build_menu(){
        
    }

    function get_home_page(){
        $result = $this->get_page("0");
        return $result;
    }

    function get_page($page_id="0"){
        if($page_id == "0"){
                $sql = "SELECT * FROM page_data where id = ". $page_id;
                $sql_arr = $this->sql->_selectSingle($sql);
                if(is_array($sql_arr)){
                    $sql_arr = array("status" => "0" , "value" => $sql_arr , "msg" => "");
                }else{
                    $sql_arr = array("status" => "0" , "value" => 0 , "msg" => "No Page With This ID");
                }
                return $sql_arr;
        }else{
            echo "failed there";
            exit;
        }
    }
}
?>
