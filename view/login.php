<html>
<head>
    <title>CBTwheels</title>
	<?php require_once("views/head_data.php"); ?>
</head>
<body>
    <div class="top_bg">
		<div class="container">
			<div class="header_top-sec">
				<div class="top_right">
					<ul>
						<li><a href="contact">Contact</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--載入上層選項-->
	<?php require_once("views/menu_top.php"); ?>
	<div class="login_sec">
		<div class="container">
			<div class="col-md-6 log">
	             <form action="../Login/checkpwd" method="post" name="myForm">
					 <h5>帳號 userame:</h5>	
					 	<input placeholder="名字 username:" type="text" id="account" name="account">
					 <h5>密碼 password:</h5>
						<input placeholder="密碼 password" type="password" id="password" name="password">
						<input type="submit" name="btnOK" value="Login">
	  			     	<a class="acount-btn" href="../Login/join">Create an Account</a>
				 </form>
			</div>
		</div>
	</div>
	<?php require_once("views/menu_bottom.php"); ?>		 
</body>
</html>