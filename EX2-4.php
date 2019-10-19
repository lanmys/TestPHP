<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<input type="text" name="month" id="month" />
<input type="submit" name="button" id="button" value="提交" />
</form>
<?php
if(isset($_POST['button']))
{
	$month=$_POST['month'];
	switch($month)
	{
		case 1:
		case 3:
		case 5:
		case 7:
		case 8:
		case 10:
		case 12:$day=31;break;
		case 4:
		case 6:
		case 9:
		case 11: $day=30;break;
		case 2:$day=28;break;
		default:$day=0;
	}
	echo "$month月份的天数是$day";
}
?>
</body>
</html>