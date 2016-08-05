<?php

class checkpwd{
    
    
    function getuser($account, $password){
        // require_once("dbtools.inc.php");
        
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
            $data = "<script type='text/javascript'>alert('帳號密碼錯誤，請查明後再登入');history.back();</script>";
            return $data;
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
    
    //建立資料庫連線
    function create_connection(){
        $link = mysqli_connect("localhost", "root", "") or die("無法建立資料連接: " . mysqli_connect_error());
        mysqli_query($link, "SET NAMES utf8");
        return $link;
    }
    
    
    function execute_sql($link, $database, $sql){
        mysqli_select_db($link, $database) or die("開啟資料庫失敗: " . mysqli_error($link));
        $result = mysqli_query($link, $sql);
        return $result;
    }
    
    
}
?>