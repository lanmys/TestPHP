<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<p>下列哪些属于省会城市</p>
<form name="form1" method="post" action="">
	<input type="checkbox" name="answer[]" value="A">广州<br/>
    <input type="checkbox" name="answer[]" value="B">成都<br/>
    <input type="checkbox" name="answer[]" value="C">北京<br/>
    <input type="submit" name="submit" id="submit" value="提交">
</form>
<?php
		if (isset($_POST['subimt']))
		{	
			$answer = $_POST['answer'];
		 	$chioce = "";
		 	for($i=0;$i<count($answer);$i++)
				$chioce.=$answer[$i];
			if($chioce=='AB')
				show('恭喜你，答对了');
			else
				show('不对哦');
		}
		function show($message)
		{
			echo"<script>alert('$message')</script>";
		}
		?>
</body>
</html>