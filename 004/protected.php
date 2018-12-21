<?php
	class Person
	{
		protected $name;
	}

	class Male extends Person
	{
		function setName($name)
		{
			$this->name = $name;
		}

		function getName()
		{
			return $this->name;
		}
	}

	$per = new Person();
	$per->name;

	$male = new Male();
	$male->setName("Nguyễn Phong");
	echo $male->getName();
?>