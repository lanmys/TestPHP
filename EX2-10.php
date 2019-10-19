<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
	<p>四则运算器</p>
    <form name="form1" method="post" action="">
    <input type="text" name="a" size="10">
	<select name="opr" id="opr">
    	<option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="text" name="b" size="10"  />
    <input type="submit" name="sub" id="sub" value="sure" />
    </form> <?php
	function calc($a,$opr,$b,&$c){
		switch($opr){
			case'+':
				$c=$a+$b;break;
			case'-':
				$c=$a-$b;break;
			default:
				$c="";}
	function show($message){
		echo"<script>alert('$message')</script>";
	}
	if(isset($_POST['submit'])){
		$a=$_POST['a'];
		$b=$_POST['b'];
		$opr=$_POST['opr'];
		$c="";
		calc($a,$opr,$b,$c);
		show("$a $opr $b = $c");
	}
	?>
</body>
</html>