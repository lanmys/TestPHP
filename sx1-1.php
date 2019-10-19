<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人信息填写表</title>
</head>

<body>
<p align="center">个人信息填写表
</p>
<p align="center">&nbsp;</p>
<form id="form1" name="form1" method="post" action="">
  <label for="xingming"></label>
  <p align="center">姓名
    <input type="text" name="xingming" id="xingming" />
  </p>
  <label for="nianling">  </label>
  <p align="center">年龄
    <input type="text" name="nianling" id="nianling" />
  </p>
  <p align="center">
    爱好
    <input type="text" name="aihao" id="aihao" />
  </p>
  <p align="center">
    <input type="submit" name="确定" id="确定" value="提交" />
  </p>
</form>
<?php
	if(isset($_POST['确定']))
	{
	$xingming=$_POST['xingming'];
	$nianling=$_POST['nianling'];
	$aihao=$_POST['aihao'];
	echo '姓名:'."$xingming"."<br>";
	echo '年龄:'."$nianling"."<br>";
	echo '爱好:'."$aihao"."<br>";
	}
	?>
 </body>
</html>