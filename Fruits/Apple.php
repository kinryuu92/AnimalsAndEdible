<?php
include_once (dirname(__FILE__) . '/../AbstractClass/fruit.php');

class Apple extends fruit
{
    public function howToEat()
    {
        return "Apple could be slided" .'<br/>'; // TODO: Implement howToEat() method.
    }
}