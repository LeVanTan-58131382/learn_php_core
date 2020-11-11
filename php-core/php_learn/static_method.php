<?php

class MyClass{
    public static function welcome()
    {
        echo "Hello";
    }

    public function __construct()
    {
        self::welcome();
    }

}

new MyClass();

echo "<br>";

class Animals{
    public static function getIntroduce()
    {
        return "This is an Animal";
    }

}

class Dog extends Animals{
    public $introduce;

    public function __construct()
    {
        $this->introduce = parent::getIntroduce();
    }
}

$myDog = new Dog();
echo $myDog->introduce;

