<?php


class loginController extends Controller{
    function login(){
        $account = $_POST["account"];
    	if (trim($account) != "")
    	{
    		setcookie("account", $account);
    		if (isset($_COOKIE["lastPage"]))
    		  header(sprintf("Location: %s", $_COOKIE["lastPage"]));
    		else
    		   header("Location: index");
    		exit();
    	}
    
    }
    
    
}

?>