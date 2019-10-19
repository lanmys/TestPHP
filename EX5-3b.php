<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	$no=$_REQUEST["no"];
	$name=$_REQUEST["name"];
	echo "学号：",$no,"姓名",$name;
	?>
    <br /><br />
    <input type="button" name="button2" value="返回" onclick="window.location.replace('5-3a.php')" />
</body>
</html>