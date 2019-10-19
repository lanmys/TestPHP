<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" gbcontent="text/html; charset=utf-8" />
<title>test one</title>
</head>
<script language="javascript">
	if(window.top.localtion.href!=window.location.href)
	{
			window.top.location.href=window.location.href;
	}
	</script>
<body>
	<h1>这是标题</h1>
<p>这是一个段</p>
<b>这里使用b标签加粗字体</b>
<p align="center" style="color:#F00;fony-size:+2">这里使字体居中，颜色为红色，字体加大2</p>
<p align="center" style="color:#00F;fony-size:+2">这里使字体居中，颜色为蓝色，字体加大2。<font style="color:#FF0000;fony-size:+5">这里用font标签使这一段中标签内的属性的改变</font></p>
<form action="" method="post">
<table width="40%" border="1" align="center" cellpadding="0" bordercolor="#00FF00">
<tr>
<td align="center" valign="middle" bgcolor="#00FFFF"><h2>学生学籍成绩管理系统</h2></td>
</tr>
<tr>
<td height="133">
<table width="328" border="0" align="center">
<tr>
<td width="98" height="30" align="center">用户名:</td>
<td width="230" height="30" > 
<input name="userid" type="text" size="26" placeholder="学号/工号"/></td>
</tr>
<tr>
<td width="98" height="30" align="center">密码：</td>
<td height="30" ><input name="password" type="password" size="26" placeholder="密码"/></td>
</tr>
<tr>
<td width="30" height="30" colspan="2" align="center">
<input name="role" type="radio" value="admin" checked="checked" />管理员
<input type="radio" name="role" value="teacher"/>任课教师
<input type="radio" name="role" value="student"/>学生
</td>
</tr>
</tr>
<td height="30" colspan="2" align="center" ><input type="submit" name="login" value="登录" /></td>
</tr>
</table>
</td>
</tr>
</table>
</form>
<?php
	session_start();
	session_destroy();
	include "sx2-1.php";
	if(isset($_POST['login']))
	{
		$role = $_POST["role"];
		$userid = trim($_POST["userid"]);
		$pwd=trim($_POST["password"]);
		$sql="select * from $role where ".$role."id='$userid' and pwd='$pwd'";
		$result = mysql_query($sql);
		$row=mysql_fetch_array($result);
		if($row)
		{
			$_SESSION["role"] = $role;
			$_SESSION["userid"] = $userid;
			echo "<script>location.href = 'Index.php';</script>";
            }
            else
            {
            echo"<script>alert('用户名或密码错误!');location.href = 'login.php';</script>";
            }
            }
            ?>
</body>
</html>