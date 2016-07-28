<?php
class loginController extends Controller{
    
    function login(){
       $this -> models("checkpwd") ; //呼叫models裡的checkpwd.php
       
       $result = $this->models("checkpwd");
   
       
    	if (trim($account) != "")
    	{
    		$_SESSION("account", $account);
    		if (isset($_SESSION["lastPage"]))
    		  header(sprintf("Location: %s", $_SESSION["lastPage"]));
    		else
    		   header("Location: index");
    		exit();
    	}
    }
    
}

?>