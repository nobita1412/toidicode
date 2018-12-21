<?php
	class ParentClass
	{
		function getClass()
		{
			return 'ParentClass';
		}
	}

	class ChildClass extends ParentClass
	{
		var $nam = 'ChildClass';

		function getClass()
		{
			return 'ChildClass';
		}

		function getMethod()
		{
			echo 'Đây là phương thức ăn của lớp ' . $this->getClass();
		}

		function getMethodParent()
		{
			echo 'Đây là phương thức ăn của lớp ' . parent::getClass();
		}
	}

	$class = new ChildClass();
	$class->getMethod();
	$class->getMethodParent();
?>