<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form name="form1" id="form1" action="" method="post">
<table align="center" border="1" >
<td>
	盒子的长<input type="text" name="chuang" /><br />
    盒子的宽<input type="text" name="kuan" /><br />
    盒子的高<input type="text" name="gao" /><br /></td></table>
    <table align="center">
    <td>
    <input align="middle"" type="submit" name="button" value="求体积" />
    </td>
    </table>
    </form>
    <?php
		class box
		{
			public $chuang,$kuan,$gao;
			function construct($c,$k,$g)
			{
				$this->chuang=$c;
				$this->kuan=$k;
				$this->gao=$g;
			}
			function showbox()
			{
				echo "盒子的体积是：".$this->chuang*$this->kuan*$this->gao7;
			}
		}
			if (isset($_POST['button']))
			{
				$c=$_REQUEST['chuang'];
				$k=$_REQUEST['kuan'];
				$g=$_REQUEST['gao'];
				$box=new box($c,$k,$g);
				$box->showbox();
			}
	?>
</body>
</html>