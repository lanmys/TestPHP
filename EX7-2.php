<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	$conn=mysql_connect('localhost','root','12345678');
	mysql_select_db('stu_db');
	mysql_query("set names utf8");
	$sql="insert into student value('95270','lan','123','男','1998-4-5','15021','0')";
	$row=mysql_query($sql);
	if ($row) echo "yes";
	?>
</body>
</html>