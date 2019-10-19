<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
if(isset($_POST['button']))
{
	$test=1;
	$id = $_POST['ID'];
	$pwd = $_POST['PwD'];
	$phone=$_POST['PHONE'];
	$Email=$_POST['EMAIL'];
	if ($id==''){$id1="用户名不能为空";$test=0;}
	elseif (preg_match('/^\w{1,10}$\',$id)==0) {$id1="用户名不超过10个字符)";$test=0;}
	if ($pwd==''){$pwd1="密码不能为空";$test=0;
	elseif ()}
</body>
</html>