<html>
<?php
     date_default_timezone_set('Asia/Shanghai');
?>

<head>
     <title>欢迎来到PHP主页</title>
</head>
<body>
<table align="center" border="">
   <tr>
   <td align="center" width="150"><?php echo date('Y');?>年<?php echo date('m') ?>月</td>
   </tr>
  		<tr><td align="center"><?php echo date('d'); ?>日 </td></tr>
  	 <tr><td align="center">星期<?php echo date('N');?></td></tr>
   </table>

</body>
</html>
