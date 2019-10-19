<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php 
	//定义抽象类teacher
	abstract class teacher
	{
		var $number ="101";
		var $project;
		abstract function shownumber();
		abstract function getproject($x);
		function showproject()
		{
			echo $this->project;
		}
	}
	//定义子类stu
	class stu extends teacher
	{
		function shownumber()
		{
			echo $this->number;
		}
		function getproject($x)
		{
			$this->project=$x;
		}
	}
	$obj=new stu;
	$obj->shownumber();
	$obj->getproject("计算机");
	$obj->showproject();
	?>
</body>
</html>