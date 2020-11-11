<?php

$myClosure = function() {
    echo $this->property;
};

class MyClass
{
    public $property;

    public function __construct($propertyValue)
    {
        $this->property = $propertyValue;
    }
}

$myInstance = new MyClass('Hello world!');
$myBoundClosure = $myClosure->bindTo($myInstance); // ràng buộc đến một đối tượng cụ thể

$myBoundClosure(); // Shows "Hello world!"

/// Other example

$timHoTen = function(){
    echo $this->hoTen;
};

class User{
    public $hoTen;

    public function __construct($hoTen)
    {
        $this->hoTen = $hoTen;
    }
}

$user = new User("Trần Đình Trọng");
$timHoTenUser = $timHoTen->bindTo($user);

$timHoTenUser(); // Trần Đình Trọng

/// Kể từ PHP7, có thể ràng buộc một bao đóng chỉ cho một lần gọi, nhờ vào phương thức gọi. Ví dụ:

class DongVat
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

$timTenDongVat = function() {
    echo $this->name;
};

$dongvat = new DongVat('Vua Sư Tử!');

$timTenDongVat->call($dongvat); // Shows "Vua Sư Tử!"