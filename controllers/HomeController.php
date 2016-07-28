<?php

class HomeController extends Controller {
    
    //判斷登入/登出
    function session_login_out(){
        if(isset($_SESSION["account"])){
            $account = $_SESSION["account"];
        }else{
            $account = "Guest";
        }
        
        $data = $account;
        return $data;
        
    }
    
    //呼叫首頁indexPage.php
    function index() {
        $data["account"] = $this -> session_login_out();
        $this->view("indexPage",$data);
    }
    
    //呼叫item.php
    function item() {
        $data["account"] = $this -> session_login_out();
        $this->view("item",$data);
    }
    
    //呼叫contact.php
    function contact() {
        $data["account"] = $this -> session_login_out();
        $this->view("contact",$data);
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
    
    //呼叫model裡的checkpwd並回傳比對的資料
    function checkpwd(){
        $this->model();
    }
    
    
  
}

?>
