<?php   
    class Bar
    {
        public function __construct()
        {
            echo 'Class Bar được khởi tạo';
        }

        public function __destruct()
        {
            echo 'Class Bar được hủy';
        }
    }

    class Foo extends Bar
    {
        public function __construct()
        {
            //parent::__construct();
            echo 'Class Foo được khởi tạo';
        }

        public function __destruct()
        {
            //parent::__destruct();
            echo 'Class Foo được hủy';
        }
    }

    $foo = new Foo();
?>