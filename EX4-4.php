<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php 
	class A{
		public $a;
		protected static $b="string2";
		private $c="string3";
		function construct()
		{
			$this->a="string1";
		}
		public function a_fun()
		{
			$this->a="string4";
		}
	}
	class B extends A {
		public $x;
		public function b_fun()
		{
			//parent::a_fun();
			$this->a_fun();
			echo $this->a;
			echo B::$b;
		}
	}
	$obj=new B;
	echo $obj->a;
	$obj->b_fun();
	?>
</body>
</html>