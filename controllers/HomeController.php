<?php

class HomeController extends Controller {
    
    //呼叫首頁indexPage.php
    function index() {
        $this->view("indexPage");
    }
    
    //呼叫item.php
    function item() {
        $this->view("item");
    }
    
    //呼叫contact.php
    function contact() {
        $this->view("contact");
    }
    
    //呼叫login.php
    function login() {
        $this->view("login");
    }
    
    //呼叫join.php
    function join() {
        $this->view("join");
    }
    
    //呼叫head_data.php
    function head_data(){
        $this->view("head_data");
    }
    
  
    //建立mysql連線 !!!未完成
    function create_connection(){
        $link = mysqli_connect("localhost", "root", "")
      or die("無法建立資料連接: " . mysqli_connect_error());
      mysqli_query($link, "SET NAMES utf8");
      return $sqllink;
    
        mysqli_select_db($link, $database)
      or die("開啟資料庫失敗: " . mysqli_error($link));
      $result = mysqli_query($link, $sql);
      return $result;
    }
    
    
    //checkpwd !!!未完成 
    function checkpwd(){
      
      //取得表單資料
      $account = $_POST["account"]; 	
      $password = $_POST["password"];
      mysqli_query($link, "SET NAMES utf8");
    
      //建立資料連接
      $link = mysqli_connect("localhost", "root", "");
      
      // $link = create_connection();
    					
      //檢查帳號密碼是否正確
      $sql = "SELECT * FROM users Where account = '$account' AND password = '$password'";
      $result = mysqli_query($link, $sql);
      // $result = execute_sql("member", $sql);
    
      //如果帳號密碼錯誤
      if (mysqli_num_rows($result) == 0)
      {
        //釋放 $result 佔用的記憶體
        mysqli_free_result($result);
    	
        //關閉資料連接	
        mysqli_close($link);
    		// mysqli_query($link, "SET NAMES utf8");
        //顯示訊息要求使用者輸入正確的帳號密碼
        
        echo "<script type='text/javascript'>";
        echo "alert('帳號密碼錯誤，請查明後再登入');";
        echo "history.back();";
        echo "</script>";
      }
    	
      //如果帳號密碼正確
      else
      {
        //取得 id 欄位
        $account = mysqli_fetch_object($result)->account;
    	
        //釋放 $result 佔用的記憶體	
        mysqli_free_result($result);
    		
        //關閉資料連接	
        mysqli_close($link);
    
        //將使用者資料加入 cookies
        setcookie("account", $account);
        setcookie("passed", "TRUE");		
        $this->view("indexPage");		
      }
    }
    
    
    //確認新增會員的資料欄  !!!未完成
    function check_data()
      {
        if (document.myForm.account.value.length == 0)
        {
          alert("「使用者帳號」一定要填寫哦...");
          return false;
        }
        if (document.myForm.account.value.length > 12)
        {
          alert("「使用者帳號」不可以超過 12 個字元哦...");
          return false;
        }
        if (document.myForm.password.value.length == 0)
        {
          alert("「使用者密碼」一定要填寫哦...");
          return false;
        }
        if (document.myForm.password.value.length > 12)
        {
          alert("「使用者密碼」不可以超過 12 個字元哦...");
          return false;
        }
        if (document.myForm.re_password.value.length == 0)
        {
          alert("「密碼確認」欄位忘了填哦...");
          return false;
        }
        if (document.myForm.password.value != document.myForm.re_password.value)
        {
          alert("「密碼確認」欄位與「使用者密碼」欄位一定要相同...");
          return false;
        }
        if (document.myForm.name.value.length == 0)
        {
          alert("您一定要留下真實姓名哦！");
          return false;
        }	
        if (document.myForm.year.value.length == 0)
        {
          alert("您忘了填「出生年」欄位了...");
          return false;
        }
        if (document.myForm.month.value.length == 0)
        {
          alert("您忘了填「出生月」欄位了...");
          return false;
        }	
        if (document.myForm.month.value > 12 | document.myForm.month.value < 1)
        {
          alert("「出生月」應該介於 1-12 之間哦！");
          return false;
        }
        if (document.myForm.day.value.length == 0)
        {
          alert("您忘了填「出生日」欄位了...");
          return false;
        }
        if (document.myForm.month.value == 2 & document.myForm.day.value > 29)
        {
          alert("二月只有 28 天，最多 29 天");
          return false;
        }	
        if (document.myForm.month.value == 4 | document.myForm.month.value == 6
          | document.myForm.month.value == 9 | document.myForm.month.value == 11)
        {
          if (document.myForm.day.value > 30)
          {
            alert("4 月、6 月、9 月、11 月只有 30 天哦！");
            return false;					
          }
        }	
        else
        {
          if (document.myForm.day.value > 31)
          {
            alert("1 月、3 月、5 月、7 月、8 月、10 月、12 月只有 31 天哦！");
            return false;					
          }				
        }
        if (document.myForm.day.value > 31 | document.myForm.day.value < 1)
        {
          alert("出生日應該在 1-31 之間");
          return false;
        }	
        myForm.submit();					
      }
    
    
}

?>
