<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class global_model{

    var $sql = null;

    function global_model(){
        $this->sql = new SQL();
    }
}