<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
define("DOC_ROOT" , getenv("DOCUMENT_ROOT"));
include_once(DOC_ROOT."module/admin/admin_view.php");
include_once(DOC_ROOT."module/admin/admin_model.php");
include_once(DOC_ROOT."module/page/page_controller.php");

class admin_controller extends global_controller{
    var $am , $av , $pc= null;

    public function admin_controller(){
        $this->am = new admin_model();
        $this->av = new admin_view();
        $this->pc = new page_controller();
    }

    public function __default(){
        $this->av->show_admin_login();
    }

    public function login(){
        //check session
        if($_SESSION["is_admin"] == true){
            header("Location: http://".$_SERVER['SERVER_NAME']."/?module=admin&event=show_admin_menu");
            exit;
        }
        //attempt to verify login information
        if(isset($_POST[email]) && isset($_POST[password]) ){
            $result = $this->am->admin_login($_POST[email] , $_POST[password]);
            $_SESSION["admin"] = $result['value'];
             if($result){
                //success you are now logged in.
                //redir to admin page
                $_SESSION["is_admin"] = true;
                header("Location: http://".$_SERVER['SERVER_NAME']."/?module=admin&event=show_admin_menu");
                exit;
             }else{
                //failure , show admin plus failure message
                $this->av->show_admin_login("Invalid credentials.");
             }
        }
    }

    public function show_admin_section(){
        
    }

    public function show_admin_menu(){
        $this->av->show_admin_menu();
    }

    public function show_pages(){
        $pages = $this->pc->admin_show_pages();
        
    }

    public function admin_logout(){
        echo "logout";
    }
    
}