<?php

abstract class Animal45
{
    protected $name;
    protected $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function makeSound()
    {
        echo "Generic animal sound";
    }
    abstract public function afficher();
}

class Dog extends Animal45
{

    function __construct($name, $age)
    {
        parent::__construct($name, $age);
    }
    public function makeSound()
    {
        echo "Woof!";
    }

    public function fetchStick()
    {
        echo "$this->name is fetching a stick!";
    }
    public function afficher()
    {
        echo  "i am dog and my name {$this->name} and age  {$this->age}  ";
    }
}

$dog = new Dog("Rex", 5);
$dog->makeSound();
$dog->fetchStick();
$dog->afficher();




