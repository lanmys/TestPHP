<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<form name="form1" id="form1" method="post" action="">
用POST发送的学号：
<input type="text" name="xh" id="xh" />
<input type="submit" name="button" value="提交" />
</form>
<form id="form2" name="form2" method="get" action="">
用GET发送的姓名
<input type="text" name="xm" id="xm" />
<input type="submit" name="button1" value="提交" />
</form>
</body>
<?php
//使用$_POST接受表单变量的值
if(isset($_POST['button']))
{
	echo '学号:'.$_POST['xh'];
}
//使用$_GET接收表单变量的值
if(isset($_GET['button1']))
{
	echo '姓名:'.$_GET['xm'];
?>
</html>
