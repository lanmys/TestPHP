<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
请输入一个正方形的边长
<input type="text" name="Rad" id="Rad" />
<input type="submit" name="send" id="send" value="提交" />
</form>
<?php
	if(isset($_POST['send']))
	{
		$Rad=$_POST['Rad'];
		$area=$Rad*$Rad;
		echo'正方形的面积是'.$area;
	}
	?>
</body>
</html>