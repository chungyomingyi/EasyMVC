<?php

require_once("models/dbtools.inc.php");

class loginController extends Controller{
    
    function checkpwd(){
        $account=$this->models("checkpwd");
        
        return $account;
        
    }
    
    
}

?>