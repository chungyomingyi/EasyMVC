<html>
  <head>
    <title>CBTwheels</title>
    <?php require_once("head_data.php"); ?>
    		
  </head>
  
  <body>
    <div class="top_bg">
    	<div class="container">
    		<div class="header_top-sec">
    			<div class="top_right">
    				<ul>
    					<li><a href="contact">Contact</a></li>|
    					<li><a href="login">My Account</a></li>
    				</ul>
    			</div>
    				<div class="clearfix"> </div>
    		</div>
    	</div>
    </div>
<!--載入上層選項-->
<?php require_once("menu_top.php"); ?>
<div class="container">
    <p align="center">
      <div class="registration">
        <h2 align="center">新帳號註冊 <span> create an account </span></h2>
        <h3 align="center">請填入下列資料 <span>(標示「*」欄位請務必填寫)</span></h1>
        <div class="registration_form">
    <form action="check_data" method="post" name="myForm">
      <table border="2" align="center" bordercolor="#6666FF">
        <tr bgcolor="#00a0dc"> 
          <td align="right">*使用者帳號：</td>
          <td><input name="account" type="text" size="15">
          (請使用英文或數字鍵)</td>
        </tr>
        <tr bgcolor="#00a0dc"> 
          <td align="right">*使用者密碼：</td>
          <td><input name="password" type="password" size="15">
          (請使用英文或數字鍵)</td>
        </tr>
        <tr bgcolor="#00a0dc"> 
          <td align="right">*密碼確認：</td>
          <td><input name="re_password" type="password" size="15">
          (再輸入一次密碼)</td>
        </tr>
        <tr bgcolor="#00a0dc">
          <td align="right">*姓名：</td>
          <td><input name="name" type="text" size="8"></td>
        </tr>
        <tr bgcolor="#00a0dc"> 
          <td align="right">*性別：</td>
          <td> 
            <input type="radio" name="sex" value="男" checked>男 
            <input type="radio" name="sex" value="女">女
          </td>
        </tr>
        <tr bgcolor="#00a0dc"> 
          <td align="right">*生日：</td>
          <td>民國
            <input name="year" type="TEXT" size="2">年 
            <input name="month" type="TEXT" size="2">月 
            <input name="day" type="TEXT" size="2">日
          </td>
        </tr>
        <tr bgcolor="#00a0dc"> 
          <td align="right">電話：</td>
          <td><input name="telephone" type="text" size="20"></td>
        </tr>
        <tr bgcolor="#00a0dc"> 
          <td align="right">行動電話：</td>
          <td><input name="cellphone" type="text" size="20"></td>
        </tr>
        <tr bgcolor="#00a0dc"> 
          <td align="right">地址：</td>
          <td><input name="address" type="text" size="45"></td>
        </tr>
        <tr bgcolor="#00a0dc">
          <td align="right">E-mail 帳號：</td>
          <td><input name="email" type="text" size="30"></td>
        </tr>
        <tr bgcolor="#00a0dc"> 
          <td align="right">個人網站：</td>
          <td><input name="url" type="text" value="http://" size="40"></td>
        </tr>
        <tr bgcolor="#00a0dc"> 
          <td align="right">備註：</td>
          <td><textarea name="comment" cols="45" rows="4" ></textarea></td>
        </tr>
        <tr bgcolor="#00a0dc"> 
          <td align="center" colspan="2"> 
            <input type="submit" value="加入會員" >　
            <input type="reset" value="重新填寫">
          </td>
        </tr>
      </table>
    </form>
    </div>
    </div>
    </div>
  </div>
  <?php require_once("menu_bottom.php"); ?>		
  </body>
</html>