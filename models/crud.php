<?php

class CRUD{
    var $dbh;
    
    function __construct(){
        $db_con = new DB_con();
        $dbh = $db_con->db;
        $this-> dbh= $dbh;  
    }
    
}
    //新增會員
    public function create_member($account,$password,$name,$sex,$birthday,$telephone,$cellphone,$address,$email){
        $dbh = $this -> dbh;
        $sth = $dbh -> prepare("INSERT INTO `users` (`account`, `password`, `name`, `sex`, `birthday`, `telephone`, `cellphone`, `address`, `email`)
                        VALUES (?,?,?,?,?,?,?,?,?)");
        $sth->bindParam(1, $account);
        $sth->bindParam(2, $password);
        $sth->bindParam(3, $name);
        $sth->bindParam(4, $sex);
        $sth->bindParam(5, $birthday);
        $sth->bindParam(6, $telephone);
        $sth->bindParam(7, $cellphone);
        $sth->bindParam(8, $address);
        $sth->bindParam(9, $email);
        $dbh = null;
        return $sth->execute();	
    }
    
    
    //查詢會員資料
    public function select_member($account){
        $dbh = $this -> dbh;
        $sth = $dbh -> prepare("SELECT * FROM `users` WHERE `account` = :account");
        $sth -> bindParam(':account', $account);
        $sth -> execute();
        $dbh = null;
        return $sth -> fetchALL();
    }
    
    //註冊頁比對資料用
    public function select_member_check($account,$password,$name,$sex,$bithday){ //將要比對的資料丟進crud裡
        $dbh = $this -> dbh;
        $sth = $dbh -> prepare("SELECT * FROM `users` WHERE `account` = :account");
        $sth -> bindParam(':account', $account);
        $sth -> execute();
        $dbh = null;
        $result = array();
        foreach(($sth -> fetchALL()) as $row);
        
        if($account!=null && $password!=null && $name!=null && $bithday!=null){  //欄位不能為空
            if($row[1] == $id){  //驗証帳號是否重複
                
            }
        }
    }
    
    

?>