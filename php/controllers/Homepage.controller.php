<?php

class HomepageController {
   
    public $params;
    
    function __construct($params){
        $this->params = $params;
    }
     
    public function display() {
        
        global $smarty;

        $smarty->display('login.tpl');
    }

}