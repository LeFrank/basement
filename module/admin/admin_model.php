<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin_model
 *
 * @author francois
 */
class admin_model extends global_model{

    function admin_login($email=false , $password=false){
        if($email && $password){
            if($this->validEmail($email)){
                $sql = "SELECT * FROM  users WHERE email = '".$email."' AND password =  '".MD5($password)."'";
                $sql_arr = $this->sql->_selectSingle($sql);
                if(is_array($sql_arr)){
                    $sql_arr = array("status" => "0" , "value" => $sql_arr , "msg" => "");
                }else{
                    $sql_arr = false;
                }
                return $sql_arr;
            }else{
                echo "not valid email";
            }
        }else{
            echo "failed there";
            exit;
        }
    }
}
?>
