<?php

    class MyClass{
        protected $name;
        protected $age;

        public function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }
    }

    class Prodavac extends MyClass{
        private $balans;

        public function __construct($name, $age, $balans){
            parent::__construct($name, $age);
            $this->balans = $balans;
        }
        public function racun($iznos){
            return $this->name . 'racun $ ' . $iznos;
        }
        
        public function getBalans(){
            return $this->balans;
        }
    }

    $prodavac1 = new Prodavac('Marko', 34, 400);

    echo $prodavac1->racun(100);

    echo $prodavac1->getBalans();
