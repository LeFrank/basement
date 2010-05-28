<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


class global_view{

    public $title_name , $css_arr , $js_arr = null;

    function global_view(){
        $this->smarty = new Smarty;
        $this->smarty->compile_check = true;

        $this->css_arr  = array( "http://".$_SERVER['SERVER_NAME']."/"."lib/css/style.css");
        $this->js_arr   = array( "http://".$_SERVER['SERVER_NAME']."/"."lib/js/here_now.js" ,
                                 "http://".$_SERVER['SERVER_NAME']."/"."lib/js/framework/jquery/jquery-1.4.2.min.js");
    }

    function set_placeholders($title_name="" , $css_arr =false, $js_arr=false){
        $this->title_name = $title_name;
        if($css_arr){
            foreach($css_arr as $css_file){
                $this->css_arr[] = "http://".$_SERVER['SERVER_NAME']."/".$css_file;
            }
        }
        if($js_arr){
            foreach($js_arr as $js_file){
                $this->js_arr[] = "http://".$_SERVER['SERVER_NAME']."/".$js_file;
            }
        }
    }

    function add_js($js_file_path=false){
        if($js_file_path){
            $this->js_arr[] = "http://".$_SERVER['SERVER_NAME']."/".$js_file_path;
        }
    }
    function add_cs($css_file_path=false){
        if($css_file_path){
            $this->css_arr[] = "http://".$_SERVER['SERVER_NAME']."/".$css_file_path;
        }
    }

    function show_header(){

        $this->smarty->assign("title_name" , $this->title_name);
        $this->smarty->assign("css_arr" , $this->css_arr);
        $this->smarty->assign("js_arr" , $this->js_arr);
        $this->smarty->assign("DOC_ROOT", DOC_ROOT);
        $this->smarty->assign("domain_name",$_SERVER['SERVER_NAME']);
        $this->smarty->display(DOC_ROOT.'module/global_template/header.tpl');
    }
}