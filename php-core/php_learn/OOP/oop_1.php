<?php
// Từ khóa final có thể được sử dụng để ngăn kế thừa lớp hoặc ngăn ghi đè phương thức
// ví dụ: final class VEHICLE{}
class VEHICLE{
    protected $name;
    protected $type;
    protected $price;
    protected $color;

    private $producer = "";

    public function __construct($name, $type, $price, $color){
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->color = $color;

        return $this;
    }

    public function setProducer($producer)
    {
        $this->producer = $producer;
    }
    public function getProducer()
    {
        return $this->producer;
    }

    public function showInfo()
    {
        echo "Vehicle info: " . "<br>";
        echo "Name: ". $this->name . "<br>";
        echo "Type: ". $this->type . "<br>";
        echo "Price: ". $this->price . "<br>";
        echo "Color: ". $this->color . "<br>";
        echo "Producer: ". $this->getProducer() . "<br>";
        return $this;
    }

    // Bạn có thể sử dụng từ khóa instanceof để kiểm tra xem một đối tượng có thuộc một lớp cụ thể hay không = instanceof
    public function instanceofVehicle($vehicle)
    {
        if($vehicle instanceof VEHICLE)
        {
            echo "This is a Vehicle";
        } else echo "This is not a Vehicle";
        return $this;
    }

}

$myVehicle = new VEHICLE("HONDA", "MOTO", 10000, "WHITE");
$myVehicle->showInfo()->instanceofVehicle($myVehicle);

class CAR extends VEHICLE{

    private $sportCar = FALSE;

    public function __construct($name, $type, $price, $color, $sportCar)
    {
        parent::__construct($name, $type, $price, $color);
        $this->sportCar = $sportCar;
        return $this;
    }

    public function paintTheCar($color)
    {
        $this->color = $color;
        echo "The car affter paint $color: " . "<br>";
        $this->showInfo();
        return $this;
    }

    public function showInfo()
    {
        parent::showInfo();
        if($this->sportCar == TRUE) 
        {
            echo "This is SportCar" . "<br>"; 
        } else "This is not sportCar" . "<br>";
        return $this;
    }
}

$myCar = new CAR("TOYOTA 2020","CAR", 20000, "RED", TRUE);

// set producer, không thể truy cập thuộc tính private của lớp cha => set thông qua hàm setProducer();
$myCar->setProducer("TOYOTA");
$myCar->showInfo()->paintTheCar("GREEN");