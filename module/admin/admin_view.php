<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin_view
 *
 * @author francois
 */
class admin_view  extends global_view{
    var $title = "";

    function admin_view(){
         $this->global_view();

    }

    function load_header(){
        //------------------------
        // Add css or js files here , these js and css files will only be included for this view
        //------------------------
        $this->set_placeholders($this->title,
                                array(  "lib/plugins/popeye/jquery.popeye-2.0.3/css/popeye/jquery.popeye.css",
                                        "lib/plugins/popeye/jquery.popeye-2.0.3/css/popeye/jquery.popeye.style.css" ,
                                        "lib/plugins/popeye/jquery.popeye-2.0.3/css/site/site.css"
                                     ) ,
                                array(  "lib/plugins/popeye/jquery.popeye-2.0.3/lib/popeye/jquery.popeye-2.0.3.min.js")
                                );
        $this->show_header();
    }
    //Login Screen
    function show_admin_login($message){
        $this->title     = "Admin Login Page.";
        $this->load_header();
        $this->smarty->assign("message_div" , $message);
        $this->smarty->display(DOC_ROOT.'module/admin/tpl/admin_login.tpl');
    }

    //show menu
    function show_admin_menu(){
        $this->load_header();
        $this->smarty->assign("message_div" , $message);
        $this->smarty->display(DOC_ROOT.'module/admin/tpl/admin_menu.tpl');
    }
}
?>