<?php
include_once (dirname(__FILE__) . '/../AbstractClass/Animal.php');
include_once (dirname(__FILE__). '/../InterfaceClass/Edible.php');
class Tiger extends Animal implements Edible
{
    public function makeSound()
    {
       return 'Tiger: raorrrrrr! ';// TODO: Implement makeSound() method.
    }
    public function howToEat()
    {
       return 'Eat row' ; // TODO: Implement howToEat() method.
    }
}