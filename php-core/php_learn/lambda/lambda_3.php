<?php

// binding $this

class Animals
{
    public $listAnimals = ["Hổ", "Voi", "Sư tử"];
    public $action = "run";

    public function testing()
    {
        return function() {
            var_dump($this);
        };
    }
}

$object = new Animals;
$function = $object->testing();
$function(); // in ra các thuộc tính hiện có của class