<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
if (!isset($_REQUEST["button"]))
{
	session_set_cookie_params(60); //将超时期限修改为60秒
	session_start();
	date_default_timezone_set('Asia/Shanghai');
	$_SESSION["no"]=1;
	$_SESSION["name"]="张三";
}
?>
<form id="form1" name="form1" method="post" action="">
<table width="400" border="1" align="center" cellpadding="0">
  <tr>
    <td width="200" height="30" align="center">当前时间</td>
    <td height="30" align="center"><?php date_default_timezone_set('Asia/Shanghai');echo date('H:i:s')?></td>
  </tr>
  <tr>
    <td width="200" height="30" align="center">第1个会话变量的值</td>
    <td height="30" align="center"><?php echo @$_SESSION["no"] ?></td>
  </tr>
  <tr>
    <td width="200" height="30" align="center">第2个会话变量的值</td>
    <td height="30" align="center"><?php echo @$_SESSION["name"]?></td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center"><input type="submit" name="button" value="演示" /></td>
  </tr>
</table>s
</form>

</body>
</html>