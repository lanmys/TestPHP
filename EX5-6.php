<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<table width="200" border="1" align="center" cellpadding="0">
<tr>
<td height="30" align="center" >数字时钟</td>
</tr>
<tr>
<td height="30" align="center" id="w1"></td>
</tr>
<tr>
<td height="30" align="center" >
<input type="button" name="button" value="开始" onclick="begin()" />
<input name="button2" type="button" value="停止" onclick="stop()" /></td></tr>
</table>
<script language="javascript">
var id;
function begin()
{
	var today= new Date();
	var hour=today.getHours();
	var minute=today.getMinutes();
	var second=today.getSeconds();
	if(minute<10) minute="0"+minute;
	if(second<10) second="0"+second;
	w1.innerHTML=hour+":"+minute+":"+second;
	id=setTimeout("begin()",1000);
}
function stop()
{
	window.clearTimeout(id);
}
</script>

</body>
</html>