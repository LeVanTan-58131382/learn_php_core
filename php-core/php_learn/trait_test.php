<?php

class Animal{
    function eat()
    {
        echo "It can eat meat or grass";
    }
}


trait AnimalEatMeat
{
    function eat()
    {
        parent::eat();
        echo "It can eat meat";
    }
}

trait AnimalEatGrass
{
    function eat()
    {
        parent::eat();
        echo "It can eat grass";
    }
}

class MyAnimal extends Animal{
    use AnimalEatMeat, AnimalEatGrass{
        AnimalEatMeat::eat insteadof AnimalEatGrass; // use function eat() of AnimalEatMeat

        AnimalEatGrass::eat as eatGrass; // set alias for function eat() of AnimalEatGrass
    }

    // function eat()
    // {
    //     echo "It can eat one cow";
    // }
}

$myPet = new MyAnimal();
$myPet->eat();
$myPet->eatGrass();
