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
class page_block_view  extends global_view{
    var $title = "";

    function page_block_view(){
         $this->global_view();
        //------------------------
        // Add css or js files here , these js and css files will only be included for this view
        //------------------------
    }

    function render_page_blocks($page_data=false){
        $page_data_rendered = array();
        if($page_data){
//            echo "<pre>";
//            print_r($page_data);
//            echo "</pre>";
            foreach($page_data["value"] as $k=>$pb){
                switch($pb['page_module_id']){
                    case 1:
                        $page_data_rendered['page_blocks'][]['page_block'] = $this->render_text($pb['id'],$pb['page_module_id'] , $pb['content']);
                        break;
                    default:
                        $page_data_rendered['page_blocks'][]['page_block'] = $this->render_gallery($pb['id'],$pb['page_module_id'] , $pb['content'] , $pb['image']);
                        break;
                }
            }
        }
        return $page_data_rendered;
    }

    function render_text($id , $page_module_id ,$content){
        //TODO:add some sort of text cleanser here
        $this->smarty->assign("id" , $id);
        $this->smarty->assign("page_module_id" , $page_module_id);
        $this->smarty->assign("content" , $content);
        $html = $this->smarty->fetch(DOC_ROOT.'module/page_block/tpl/render_text.tpl');
        return $html;
    }

    function render_gallery($id, $page_module_id , $content , $image){
        $this->smarty->assign("id" , $id);
        $this->smarty->assign("page_module_id" , $page_module_id);
        $this->smarty->assign("content" , $content);
        $this->smarty->assign("domain" , $_SERVER['SERVER_NAME']);
        $this->smarty->assign("image" , $image);
        $html = $this->smarty->fetch(DOC_ROOT.'module/page/tpl/page_image_gallery.tpl');
        return $html;
    }
}
?>
