<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form name="form1" method="post" action="">
学号:<input name="number" type="text" size="20" /><br />
姓名:<input name="name" type="text" size="20" /><br />
性别:<input name="sex" type="radio" value="男" />男
	<input name="sex" type="radio" value="女"  />女<br />
    <input name="button" type="submit" value="显示" />
    </form>
    <?php
	class student
	{
		private $number,$name,$sex;
		function construct($xh,$xm,$xb)
		{
			$this->number=$xh;
			$this->name=$xm;
			$thix->sex=$xb;
		}
		function show()
		{
			echo "学号:".this->number."<br>";
		 	echo "姓名:".this->name."<br>";
			echo "性别:".this->sex;
		}
	}
	if (isset($_POST['button']))
	{
		$xh=$_POST['number'];
		$xm=$_POST['name'];
		$xb=$_POST['sex'];
		$stu=new student($xh,$xm,$xb);
		$stu->show();
	}
	?>
</body>
</html>