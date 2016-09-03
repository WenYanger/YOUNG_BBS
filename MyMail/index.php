<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Mail System</title>
<link href="css_index_Mainpage.css" rel="stylesheet" type="text/css">
<script>
	var input = window.document.getElementById("userOuter");
	input.onfocus = function(){
			var innerFonts = window.document.getElementsByClass("userTips")[0];
			if(!innerFonts) {
				alert('NULL');
			}else {
				alert('YES');
				innerFonts.style.color = white;
			}
		}
</script>
</head>

<body>
<div class="Whole">
  <div class="Banner">
    <a class="Banner_logo" href="index.php">QQ邮箱</a>
  </div>
  <div class="Body">
  <div style="clear:both"></div>
    <div class="Body_Login">
      <form action="index.php" method="post" name="logForm" enctype="multipart/form-data">
        <div id="user_div">
          <label class="userTips" style="display: block;">支持QQ号/邮箱/手机号登录</label>
          <div id="userOuter">
            <input name="user" type="text" id="user" size="30" maxlength="200">
          </div>
        </div>
        <div id="password_div">
          <label class="passwordTips" style="display: block;">密码</label>
          <div id="passOuter">
            <input name="password" type="text" id="password" size="30" maxlength="200">
          </div>
        </div>
        <div>
          <input name="submit" type="submit" id="loginButton" value="登陆">
        </div>
        <div class="OtherButton"> <a href="forget_password.php" class="link" id="forgetpwd" target="_blank">忘了密码？</a>&nbsp; <span class="dotted">|</span> &nbsp;<a href="register.php" class="link" target="_blank">注册新账号</a> &nbsp;<span class="dotted">|</span> &nbsp;<a href="register.php" class="link" target="_blank">意见反馈</a> </div>
      </form>
    </div>
  </div>
  <div class="Bottom"> 
  	<a href="http://www.tencent.com" target="_blank">关于WY Studio</a> 
    &nbsp;|&nbsp;
    <a href="http://www.tencent.com" target="_blank">服务条款</a> 
    &nbsp;|&nbsp;
    <a href="http://www.tencent.com" target="_blank">联系我们</a> 
    &nbsp;|&nbsp;
    <a href="http://www.tencent.com" target="_blank">帮助中心</a> 
    &nbsp;|&nbsp;
    <span class="gray">©1998 - 2015 Wen Yang Studio. All Rights Reserved.</span>
  </div>
</div>
<?php
    //处理POST消息
	switch($_POST["submit"]){
		case '登陆':
		    if($_POST["user"] == '') {
				echo "<script>alert('Please input Username');</script>";
			}else if($_POST["password"] == '') {
				echo "<script>alert('Please input Password');</script>";
			}else {
				//连接MySql数据库
				$link = mysql_connect("localhost","root","root")or die("不能连接数据库".mysql_error());
				//选择数据库
				$db_selected = mysql_select_db("MailSystem",$link);
				if($link) {
					echo "Database Server Connected!\n";
					if($db_selected) {
						echo "Database Chosen!\n";
						
						$result = mysql_query("select * from user where User_Id=".$_POST[user],$link);
						$info = mysql_fetch_array($result);
						//一定要区分大小写，与数据库中的保持一致
						if($info[Password] == $_POST["password"]){
							/*echo "<script>alert('Login Success!');</script>";*/
							$url = 'main.php';
							echo ("<script>window.open('".$url."');</script>"); 
						}else{
							echo "<script>alert('Login Failed!');</script>";
						}
						
						//关闭结果集和MySQL服务器
						mysql_free_result($result);
						mysql_close($link);
						//echo $info[Age];
					}
				}
				break;
			}
			default:
				break;
	}
?>
</body>
</html>