<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	interface teacher
	{
		const name="";
		function getname($name);
	}
	interface  stu
	{
		function showname();
	}
	class cstu implements teacher,stu
	{
		var $name="";
		function getname($name)
		{
			$this->name=$name;
		}
		function showname()
		{
			echo $this->name;
		}
	}
	$obj=new cstu;
	$obj->getname("林雷");
	$obj->showname();
	?>
</body>
</html>