<?php

require_once("models/dbtools.inc.php");

class loginController extends Controller{
    
    function checkpwd(){
        //取得表單資料
        $getaccount = $_POST["account"]; 	
        $getpassword = $_POST["password"];
        
        $account=$this->models("checkpwd",$getaccount,$getpassword);
        
        return $account;
        
    }
    
    
}

?>