<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<input type="text" name="score" id="score" />
<input type="submit" name="button" id="button" value="提交" />
</form>
<?php
if(isset($_POST['button']))
{
	$score=$_POST['score'];
	if($score>=90) $grade='A';
	elseif($score>=80) $grade='B';
	elseif($score>=70) $grade='C';
	elseif($score>=60) $grade='D';
	else $grade='E';
	echo"成绩等级为".$grade;
}
?>
</body>
</html>