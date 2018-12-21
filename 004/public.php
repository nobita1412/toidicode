<?php
    class Person
    {
        public $name;

        function setName($name)
        {
            $this->name = $name;
        }

        function getName()
        {
            return $this->name;
        }
    }

    $person = new Person();
    $person->name = 'A';
    $person->setName('B');
    echo $person->getName();
?>