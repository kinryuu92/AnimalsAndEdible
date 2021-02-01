<?php
include_once (dirname(__FILE__) . '/../AbstractClass/Animal.php');
include_once (dirname(__FILE__) . '/../InterfaceClass/Edible.php');

class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
       return 'Chicken: cluk-cluk! ';// TODO: Implement makeSound() method.
    }
    public function howToEat()
    {
       return "Could be fried " ; // TODO: Implement howToEat() method.
    }

}