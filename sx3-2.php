<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<p>输入你的留言</p>
<form id="form1" name="form1" method="post" action="">
<p>
	<textarea name="note" id="note" cols="45" rows="5">这是我的qq号123456789，身高175cm，体重60kg，年龄二十岁。</textarea>
    </p>
    <p>
    <input type="submit" name="submit" id="submit" value="提交"/>
    </p>
    </form>
</body>
<?php
if(isset($_POST['submit'])){
	$note=$_POST['note'];
	$pattern='/([0-9.]|一|二|三|四|五|六|七|八|九|十)+/';
	$note=preg_replace($pattern,"***",$note);
	echo"你的留言是:<br/>",$note;
	}
?>
</html>