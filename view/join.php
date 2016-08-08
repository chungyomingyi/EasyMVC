<?php 
if($data["alert"])
echo "<script language='javascript'> alert('{$data['alert']}'); </script>";
?>

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
<?php require_once("views/menu_top.php"); ?>
    <div class="container">
        <p align="center">
            <div class="registration">
                <h2 align="center">新帳號註冊 <span> create an account </span></h2>
                <h3 align="center">請填入下列資料 <span>(標示「*」欄位請務必填寫)</span></h1>
                    <div class="registration_form">
                        <form action="../Login/register" method="post" name="myForm">
                            <table border="2" align="center" bordercolor="#6666FF">
                                <tr bgcolor="#00a0dc"> 
                                    <td align="right"><font color="#ffffff">*使用者帳號：</font></td>
                                    <td><input name="account" type="text" size="15"><font color="#ffffff">(請使用英文或數字鍵)</font></td>
                                </tr>
                                <tr bgcolor="#00a0dc"> 
                                    <td align="right"><font color="#ffffff">*使用者密碼：</font></td>
                                    <td><input name="password" type="password" size="15"><font color="#ffffff">(請使用英文或數字鍵)</font></td>
                                </tr>
                                <tr bgcolor="#00a0dc"> 
                                    <td align="right"><font color="#ffffff">*密碼確認：</font></td>
                                    <td><input name="re_password" type="password" size="15"><font color="#ffffff">(再輸入一次密碼)</font></td>
                                </tr>
                                <tr bgcolor="#00a0dc">
                                    <td align="right"><font color="#ffffff">*姓名：</font></td>
                                    <td><input name="name" type="text" size="8"></td>
                                </tr>
                                <tr bgcolor="#00a0dc"> 
                                    <td align="right"><font color="#ffffff">*性別：</font></td>
                                    <td> 
                                        <input type="radio" name="sex" value="男" checked><font color="#ffffff">男</font>
                                        <input type="radio" name="sex" value="女"><font color="#ffffff">女</font>
                                    </td>
                                </tr>
                                <tr bgcolor="#00a0dc"> 
                                    <td align="right"><font color="#ffffff">*生日：</font></td>
                                    <td><font color="#ffffff">西元</font>
                                        <input name="year" type="date" size="15"> 
                                    </td>
                                </tr>
                                <tr bgcolor="#00a0dc"> 
                                    <td align="right"><font color="#ffffff">電話：</font></td>
                                    <td><input name="telephone" type="text" size="20"></td>
                                </tr>
                                <tr bgcolor="#00a0dc"> 
                                    <td align="right"><font color="#ffffff">行動電話：</font></td>
                                    <td><input name="cellphone" type="text" size="20"></td>
                                </tr>
                                <tr bgcolor="#00a0dc"> 
                                    <td align="right"><font color="#ffffff">地址：</font></td>
                                    <td><input name="address" type="text" size="45"></td>
                                </tr>
                                <tr bgcolor="#00a0dc">
                                    <td align="right"><font color="#ffffff">E-mail 帳號：</font></td>
                                    <td><input name="email" type="text" size="30"></td>
                                </tr>
                                
                                <tr bgcolor="#00a0dc"> 
                                  <td align="center" colspan="2"> 
                                    <input type="submit" value="加入會員" name="addMember" id="addMember" >　
                                    <input type="reset" value="重新填寫">
                                  </td>
                                </tr>
                            </table>
                        </form>
                    </div>
            </div>
    </div>
    <?php require_once("views/menu_bottom.php"); ?>		
</body>
</html>