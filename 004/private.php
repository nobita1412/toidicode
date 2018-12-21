<?php
	class Person
	{
		private $name;

		private function run()
		{
			return 'Đây là hàm run';
		}

		function setName($name)
		{
			$this->name = $name;
		}

		function getName()
		{
			return $this->name;
		}

		function getMethod()
		{
			return $this->run();
		}
	}

	$per = new Person();
	$per->setName('Nguyễn Phong');
	echo $per->getName();
	echo $per->getMethod();
?>