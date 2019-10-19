<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
if(isset($_POST["button"]))
{
	header("Location:5-3b.php?no=1&name=张三");
}
?>
<form name="form1" method="post" action="">
<table border="1" align="center" cellspacing="0">
    <tr>
    	<td height="30" colspan="2" align="center">将"no=1,name=张三"从5-3a.php传送到5-3a.php的方式</td>
        </tr>
        <tr>
        <td width="300" height="30">1.在php脚本中实现页面的跳转</td>
        <td width="150" height="30" align="center"><input type="submit" name="button" value="执行" /></td>
        </tr>
        <tr>
        <td width="300" height="30">2.文件超链接</td>
        <td width="150" height="30" align="center">
        <a href="EX5-3b.php?no=1&amp;name=张三">跳到5-3b.php</a></td></tr>
        <tr>
        <td width="300" height="30" >3.在javascript脚本中实现页面的跳转</td>
        <td width="150" height="30" align="center"><input type="button" name="button1" value="执行" onclick="window.location.replace('5-3b.php?no=1&name=张三')" />
        </td>
        </tr>
        </table>
        </form>
        
</body>
</html>