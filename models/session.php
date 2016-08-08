<?php

class session {
    
    //判斷登入或登出
    function login_out(){
        if(isset($_SESSION["userName"])){
            $account = $_SESSION["account"];
        }else{
            $accout = "Guest";
        }
        return $account;
    }
    
   
}

?>