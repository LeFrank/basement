<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page_view
 *
 * @author francois
 */
class page_view  extends global_view{
    var $title = "";

    function page_view(){
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
    //first view function yay. Going to be scrapped shortly though :(
    function show_page_one(){
        //$this->smarty->display(DOC_ROOT.'module/page/tpl/page_default.tpl');
    }

    function new_page(){
        $this->smarty->display(DOC_ROOT.'module/page/tpl/page_default.tpl');
    }

    function show_page($page_data=false){
        if($page_data){
//            echo "<pre>";
//            print_r($page_data);
//            echo "</pre>";
            $page_value =  $page_data['value'];
            $this->title     = $page_value['title'];
            $this->load_header();
            $this->smarty->assign("page_blocks" , $page_data["page_block_data"]["value"]["page_blocks"]);

            $this->smarty->display(DOC_ROOT.'module/page/tpl/ttmp_page.tpl');
        }

    }

}
?>
