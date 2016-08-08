<?php
class HomeController extends Controller {
    
    
    //呼叫首頁indexPage.php
    function index() {
        $session = $this -> model("session");
        $data["account"] = $session -> login_out();
        $this->view("indexPage",$data);
    }
    
    //呼叫item.php
    function item() {
        $session = $this -> model("session");
        $data["account"] = $session -> login_out();
        $this->view("item",$data);
    }
    
    //呼叫contact.php
    function contact() {
        $session = $this -> model("session");
        $data["account"] = $session -> login_out();
        $this->view("contact",$data);
    }
    
    //呼叫結帳頁
    function pay_total(){
        $session = $this -> model("session");
        $data["account"] = $session -> login_out();
        $this->view("pay_total",$data);
    }
    
    //呼叫login.php
    function login() {
        $this->view("login");
    }
    
    
    
    
    
    
}

?>
