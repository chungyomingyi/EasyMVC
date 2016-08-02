<?php


class loginController extends Controller{
    
    function checkpwd(){
        require_once("models/dbtools.inc.php");
        //取得表單資料
        $getaccount = $_POST["account"]; 	
        $getpassword = $_POST["password"];
        
        $account = $this->models("checkpwd"); //呼叫models/checkpwd的類別裡的方法
        
        $account->getuser($getaccount, $getpassword);
        
        return $account;
        
    }
    
    
}

?>