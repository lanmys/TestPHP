<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php 
$str="PHPis so easy";
//模式定界符后面的i表示不区分大小写的搜索
$a=preg_match('/php/i',$str);
$b=preg_match('/^php$/i',$str);
echo $a;
echo $b;
?>
</body>
</html>