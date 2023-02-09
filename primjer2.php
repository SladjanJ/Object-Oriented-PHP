<?php

    class MyClass{
        private $name;
        private $age;

        function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }

        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }

        public function __get($property){
            if(property_exists($this, $property)){
                return $this->$property;
            }
        }
        public function __set($property, $element){
            if(property_exists($this, $property)){
                $this->$property = $element;
            }
            return $this;
        }
    }

    $korisnik1 = new MyClass("Marko", 23);
   
    //echo $korisnik1->name;

    //echo $korisnik1->setName('Filip');
    //echo $korisnik1->getName();

    $korisnik1->__set('age',41);
    echo $korisnik1->__get('age');
?>