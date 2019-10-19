<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php
	$course=array(
			array("一","二","三","四","五"),
			array("语文","英语","数学","舞蹈","体育"),
			array("体育","语文","音乐","音乐","自习"),
			array("数学","美术","语文","自习","音乐")
			);
        ?>
		
<body>
<?php
	echo "<table width='300' border='1'>";
	for ($i=0;$i<count($course);$i++){
	echo"<tr>";
		for($j=0;$j<count($course[0]);$j++)
		{
			$str = $course[$i][$j];
			echo "<td align='center'>$str</td>";
		}
		echo "</tr>";
	}
		?>
        

</body>
</html>