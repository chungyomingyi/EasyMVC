<?php

class checkpwd{
        
    function getuser($account, $password){
        require_once("dbtools.php");
        
        //檢查帳號密碼是否正確
        $link = create_connection();
        $sql = "SELECT * FROM users Where account = '$account' AND password = '$password'";
        $result = execute_sql($link, "member", $sql);
        
        //如果帳號密碼錯誤
        if (mysqli_num_rows($result) == 0){
            //釋放 $result 佔用的記憶體
            mysqli_free_result($result);
            //關閉資料連接	
            mysqli_close($link);
            //顯示訊息要求使用者輸入正確的帳號密碼
            echo "<script type='text/javascript'>alert('帳號密碼錯誤，請查明後再登入');history.back();</script>";
        }else{  //如果帳號密碼正確
            //取得 id 欄位
            $account = mysqli_fetch_object($result)->account;
            //釋放 $result 佔用的記憶體	
            mysqli_free_result($result);
            //關閉資料連接	
            mysqli_close($link);
            //將使用者資料加入 SESSION
            $_SESSION["account"] = $account;
            echo "<script type='text/javascript'>alert('登入成功');history.back();</script>";
            		
            return $_SESSION["account"]; 
            header("location:index");
        }
    }
}
?>