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
require_once(DOC_ROOT."module/image/image_controller.php");

class page_block_model extends global_model{
    //put your code here
    var $ic = null;


    function get_page_block($page_id="0" , $order_fields=false , $sort_order=false , $limit=false){
        $this->ic = new image_controller();
        if($page_id == "0"){
                $sql = "SELECT * FROM page_block where page_data_id = ". $page_id;
                $sql.= " ".$order_fields. " ". $sort_order;
                if($order_fields){
                    $sql.= " ORDER BY ".$order_fields. (($sort_order)?$sort_order: "");
                }else{
                    $sql.= " ORDER BY sort_order ASC";
                }
                if($limit){
                    $sql.= " ".$limit;
                }
                $sql_res = $this->sql->_select($sql);
                $sql_arr = array();
                while($row = mysql_fetch_assoc($sql_res)){
                    //switch will perfrom various actions to satisfy various module requirements
                    switch($row["page_module_id"]){
                        case "2":
                            //get Images for the gallery
                            $images = $this->ic->get_image_by_page_block_id($row["id"]);
                            if($images){
                                $row["image"] = $images;
                            }
                            break;
                        default:
                            //do something reasonable
                            break;
                    }
                    $sql_arr[$row["id"]] = $row;
                }
                if(is_array($sql_arr)){
                    $sql_arr = array("status" => "0" , "value" => $sql_arr , "msg" => "");
                }else{
                    $sql_arr = array("status" => "0" , "value" => 0 , "msg" => "No Page With This ID");
                }
                return $sql_arr;
        }else{
            echo "failed here";
            exit;
        }
    }
}
?>
