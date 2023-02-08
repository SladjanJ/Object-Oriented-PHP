<?php

    #DEFINISANJE KLASE
    class MyClass{
        public $name;

        function name(){
            return $this->name . " kaze zdravo";
        }
    }

    //Objekat
    $user1 = new MyClass();
    $user1 ->  name = "Marko";
    echo $user1 -> name;

    echo "<br>";

    echo $user1->name();

    echo "<br>";

    //Kreiranje novog korisnika
    $user2 = new MyClass();
    $user2 -> name = "Filip";
    echo $user2 -> name;
    echo "<br>";
    echo $user2->name();