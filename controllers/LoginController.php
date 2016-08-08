<?php


class LoginController extends Controller{
    
    //呼叫join.php
    function join() {
        $this->view("join");
    }
    
    function checkpwd(){
        // require_once("models/dbtools.inc.php");
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
    
    //接收views/join.php 註冊from裡submit之後接收輸入欄裡的資料
    function register(){
            
            // $account = $_PSOT['account'];
            // $password = $_PSOT['password'];
            // $name = $_PSOT['name'];
            // $sex = $_PSOT['sex'];
            // $birthday = $_PSOT['birthday'];
            // $telephone = $_PSOT['telephone'];
            // $cellphone = $_PSOT['cellphone'];
            // $address = $_PSOT['address'];
            // $email = $_PSOT['email'];
        
        if(isset($_POST["register"])){
            $session = $this -> model("session");
            $session->create_member($account,$password,$name,$sex,$birthday,$telephone,$cellphone,$address,$email);
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
            
            //將輸入的資料轉到crud/select_member_check
            $result = $registerID -> select_member_check($data['account'],$data['password'],$data['name'],$data['sex'],$data['birthday'],
                                                        $data['telephone'], $data['cellphone'],$data['address'],$data['email']);
            $dataGo= $result["go"];
            if($result["login"]=="OK"){   //註冊成功後進首頁顯示註冊成功
        	    $this->view("$dataGo",$result);
        	}
        	elseif($result){               //登入失敗傳回執並顯示訊息
        	    $this->view("$dataGo",$result);
        	}
        }
    }
    
    
}

?>