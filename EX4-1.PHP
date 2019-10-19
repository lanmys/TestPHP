<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	class Con
	{
		function_construct($num)
		{
			echo"执行构造函数";
		}
		function_destruct()
		{
			echo"执行析构函数";
		}
	}
	$a = new Con('1');
	$b = new Con('2');
	?>
</body>
</html>