<?php


class loginController extends Controller{
    
    function checkpwd(){
        require_once("models/dbtools.inc.php");
        //取得表單資料
        $getaccount = $_POST["account"]; 	
        $getpassword = $_POST["password"];
        
        $account = $this->models("checkpwd"); //先呼叫models/checkpwd的類別裡的方法
        
        $account->getuser($getaccount, $getpassword);//再將$getaccount，$getpassword放進models/checkpwd.php裡的getuser方法
        
        return $account;
        
    }
    
    
}

?>