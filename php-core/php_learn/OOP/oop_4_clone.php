<?php
class MyClass
{
    public $x;
    private $y;
    function __construct($x, $y)
    {
        $this->
        x = $x;
        $this->
        y = $y;
    }

    // Tạo bản sao của một đối tượng
    function __clone()
    {
        $this->x = "z";
    }
}
$a = new MyClass("w3resource", "com"); // create a new object
$b = clone $a; //clone of the object

var_dump($a);
// object(MyClass)[1]
//   public 'x' => string 'w3resource' (length=10)
//   private 'y' => string 'com' (length=3)
echo '<br>';
var_dump($b);
// object(MyClass)[2]
//   public 'x' => string 'z' (length=1)
//   private 'y' => string 'com' (length=3)
?>