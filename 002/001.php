<?php
	class Person
	{
		public $name;
		public $mat;
		public $mui;
		const sochan = 2;

		public function an()
		{

		}

		public function noi($caunoi)
		{
			return $this->getSoChan();
		}

		public function di()
		{

		}

		public function getName()
		{
			return $this->name;
		}

		public function getSoChan()
		{
			return self::sochan;
		}
	}

	$connguoi = new Person();
	$connguoi->name = 'Nguyễn Phong';
	echo $connguoi->name;
	echo Person::sochan;
	echo $connguoi->noi('Nguyễn A');
?>