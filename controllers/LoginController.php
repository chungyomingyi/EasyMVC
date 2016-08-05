<?php


class LoginController extends Controller{
    
    //呼叫join.php
    function join() {
        $this->view("join");
    }
    
    function checkpwd(){
        require_once("models/dbtools.inc.php");
        //取得表單資料
        $getaccount = $_POST["account"]; 	
        $getpassword = $_POST["password"];
        
        $account = $this->models("checkpwd"); //先呼叫models/checkpwd的類別裡的方法
        
        $account->getuser($getaccount, $getpassword);//再將$getaccount，$getpassword放進models/checkpwd.php裡的getuser方法
        
        return $account;
        
    }
    
    //會員註冊
    function addMember(){
        $session = $this->model("session");
        $data['account'] = $session -> session_in_out();
        $this->view("join",$data);
    }
    
    function register(){
        if(isset($_POST["register"])){
            $session = $this -> model("session");
            $data['account'] = $session -> login_out();
            $registerID = $this -> model("crud");
            
            //讀取註冊頁輸入的資料
            $data['account'] = $_POST['account'];
            $data['password'] = $_POST['password'];
            $data['name'] = $_POST['name'];
            $data['sex'] = $_POST['sex'];
            $data['birthday'] = $_POST['birthday'];
            $data['telephone'] = $_POST['telephone'];
            $data['cellphone'] = $_POST['cellphone'];
            $data['address'] = $_POST['address'];
            $data['email'] = $_POST['email'];
            
            $result = $registerID -> select_member_check();
        }
    }
    
    
}

?>