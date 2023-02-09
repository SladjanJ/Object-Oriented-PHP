<?php

    class MyClass{
        public $name;
        public $age;

        function __construct($name, $age){
            //echo "PHP & MVC";
            $this->name = $name;
            $this->age = $age;
        }
        function podaci(){
            return $this -> name . ' kaze zdravo';
        }
    }

    $korisnik1 = new MyClass("Marko", 26);
    echo $korisnik1->name . " ima " . $korisnik1->age . " godina <br>";
    echo $korisnik1->podaci();
    echo "<br>";

    $korisnik2 = new MyClass("Filip", 22);
    echo $korisnik2->name . " ima " . $korisnik2->age . " godina <br>";
    echo $korisnik2->podaci();


?>