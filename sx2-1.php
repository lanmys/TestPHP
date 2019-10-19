<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>性格测试</title>
</head>

<body>
<p>你的爱好是：</p>
<form name="form1" method="post" action="">
<table border="1" ><td>
	<input type="checkbox" name="ans[]" value="A"  />打球
    <input type="checkbox" name="ans[]" value="B" />下棋
    <input type="checkbox" name="ans[]" value="C" />唱歌
    <input type="checkbox" name="ans[]" value="D"/>跑步
    <input type="checkbox" name="ans[]" value="E"/>阅读<br />
    <input type="submit" name="sumbit" id="sumbit" value="确定"/></td></table>  </form>
    <?php
	if(isset($_POST['sumbit'])){
		$chioce='';
		$ans=$_POST['ans'];
		for($i=0;$i<count($ans);$i++)
			$chioce.=$ans[$i];
		if($chioce=='ACD')
			show('你是个运动型');
		elseif($chioce=='BE')
	 		show('你是个文静型');
		else
			show('动静皆宜');
	}
	function show($message)
	{
		echo "<script>alert('$message')</script>";
	}
	?>
</body>
</html>