<?php
// Lớp cha
abstract class Car {
    public $name;
    public $listOption = array();

    public function __construct($name) {
        $this->name = $name;
    }

    public function showOptions($listOption)
    {
        echo "List Option: " . "<br>";
        
        foreach($this->listOption as $option) {
            echo "___" . $option . "<br>";
        }

        return $this;
    }

    // Phương thức trừu tượng
    abstract public function intro();

    abstract public function addOption($option);
}

// Các lớp con
class Audi extends Car {
    
    public function intro() {
        echo "A product form Audi! I'm an $this->name!";
        return $this;
    }

    public function addOption($option, $suffix="Audi")
    {
        $this->listOption[] = "$option-$suffix";
        return $this;
    }
}

class Volvo extends Car {
    public function intro() {
        echo "A product form Volvo! I'm a $this->name!";
        return $this;
    }

    public function addOption($option, $suffix="Volvo")
    {
        $this->listOption[] = "$option-$suffix";
        return $this;
    }
}

class Toyota extends Car {
    public function intro() {
        echo "A product form Toyota! I'm a $this->name!";
        return $this;
    }

    public function addOption($option, $suffix="Toyota")
    {
        $this->listOption[] = "$option-$suffix";
        return $this;
    }
}

// Create objects from the child classes
$audi = new Audi("Audi");
$audi->intro()->addOption("Radio")->addOption("GPS")->showOptions($audi->listOption);
echo "<br>";

$volvo = new Volvo("Volvo");
$volvo->intro()->addOption("Radio")->addOption("GPS")->showOptions($volvo->listOption);
echo "<br>";

$toyota = new Toyota("Toyota");
$toyota->intro()->addOption("Radio")->addOption("GPS")->showOptions($toyota->listOption);
?>