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

    function page_view(){
         $this->global_view();
        //------------------------
        // Add css or js files here , these js and css files will only be included for this view
        //------------------------
        $this->set_placeholders("POPEYE v2.0" ,
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
        $this->smarty->display(DOC_ROOT.'module/page/tpl/page_default.tpl');
    }

}
?>
