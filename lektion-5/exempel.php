<?php


interface MatingInterface{
    public function matingCall();

}

abstract class Animal implements MatingInterface{
 
    public function speak(){
        echo "$this->name says hello";
    }

    abstract  function eat();
    

}

class Cat extends Animal {
    protected $name;
    function __construct($name){
        $this->name = $name;
    }
    public function eat(){
        echo "$this->name starts to eat. ";
    }
    function matingCall(){
        echo "$this->name lets out a mating call";
    }

}

class Dog extends Animal {
    protected $name;
    function __construct($name){
     $this->name = $name;
    }
    public function eat(){
        echo "$this->name starts to eat. ";
    }
    function matingCall(){
        echo "$this->name lets out a mating call. ";
    }
}
class Android implements MatingInterface {
    protected $name;
    function __construct($name){
     $this->name = $name;
    }
    
    function matingCall(){
        echo "$this->name lets out a mating call..Beep boop beep. <br><br><br>";
    }
}

$new_android = new Android('R2D2');
$new_cat = new Cat('katt');
$new_dog = new Dog('hund');
$new_cat->eat();
$new_dog->matingCall();
$new_android->matingCall();


class Planet{
    public $name;
    public $orbitdays;

    function __construct($name, $orbitdays){
        $this->name = $name;
        $this->orbitdays = $orbitdays;
    }


    public function visit(){
        echo "Welcome to $this->name! A lap around the sun takes: $this->orbitdays";
    }

}

class Earth extends Planet{
    protected $population;


    function __construct($population){
        Parent::__construct('Earth',1);
        $this->population = $population;
    }
    public function visit(){
        Parent::visit();
        echo " and population is : $this->population <br>";
    }

}
class Mars extends Planet{
    protected $population;
    function __construct($population){
        Parent::__construct('Mars',24);    
        $this->population = $population;
    }
    
}

$planetOne = new Earth(80000000);
$planetTwo = new Mars(1);
$planetOne->visit();
$planetTwo->visit();


/* Implementera Vehicle-klassen från tidigare slides och dess subbklasser. 
Du ska ha klasserna Vehicle, Bicycle, Boat, Car, Motorboat och Sail. 
Vehicle ska ha en metod som heter goTo, som tar en parameter.
 Funktionen ska skriva ut "Färdas till [parametern]" med echo. 
 Skapa ett objekt av varje klass och anropa goTo med ditt favoritresmål. T.ex. "Färdas till Borås".
  Du ska alltså bara skapa funktionen goTo en gång. 
  Går det att skapa subklasser till Vehicle, går det t.ex. att gruppera vissa fordon efter gemensamma egenskaper?
 Vilka subklasser kan du komma på som man kan skapa? */
 
 class Vehicle {
     public function goTo($destination) {
       echo "<br>Åker till $destination <br>";

     }

  }
  class Car extends Vehicle {
      public function destination(){
          Parent::goTo('Borås');

      }
  }
  class Bicycle extends Vehicle{

  }
  class Boat extends Vehicle{

  }
  class Motorboat extends Vehicle{

  }
  class Sail extends Vehicle{

  }    
  
$new_car= new Car();
$new_car->destination();