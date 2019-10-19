<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	class student{
		var $a;
		static $b;
		function construct()
		{
			$this->a=20;
			student::$b=200;
		}
	}
	$stu1=new student();
	$stu2=new student();
	$stu->a=10;
	student::$b=100;
	echo '$stu2->a='.$stu2->a.'<br>';
	echo 'student::$b='.student::$b;
	?>
</body>
</html>