<?php 

// 2 magic method __set() và __get()
// __set(): tự động set dữ liệu chưa khai báo trong class => điểm lợi là ta có thể validate dữ liệu lun
// __get(): tự động get dữ liệu (thuộc tính)

class kids
{
    protected $height;
    protected $weight;

    public function getHeight()
    {
        return $this->height;
    }

    public function useInvoke()
    {
        echo "Sử dụng Đối tượng như một hàm, khi đó __invoke() sẽ được gọi";
    }

    // ví dụ ta set chiều cao của một đứa bé, chiều cao phải > 30 inch, cân nặng phải trên 15
    public function __set($property, $value)
    {
        switch($property){
            case "height":
                // set chiều cao
                if ($value > 30)
                {
                    $this->height= $value;
                } else throw new Exception("Chiều cao phải lớn hơn 30!");
                break;
            case "weight":
                // set cân nặng
                if($value > 15)
                {
                    $this->weight= $value;
                } else throw new Exception("Cân nặng phải lớn hơn 15!");
                break;
            default:
                throw new Exception("Property $property does not exist OR Value invalid.");
        }
    }

    public function __get($property)
    {
        switch($property){
            case "height":
                return "The child's height is " . $this->height . " inches tall";
                break;
            case "weight":
                return "The child's weight is " . $this->weight . " kg";
                break;
            default:
                throw new Exception("Property $property does not exist");
        }
    }

    public function __sleep()
    {
        //phương thức __sleep() luôn trả về giá trị là một mảng.
        //Phương thức __sleep() sẽ được gọi khi chúng ta thực hiện serialize() đối tượng.
        return array('height', 'weight');
    }

    public function __wakeup() 
    {
        // -Phương thức __wakeup() sẽ được gọi khi chúng ta unserialize() đối tượng.
        // -Chúng thường được sử dụng để thực thi một hoặc nhiều hành động nào đó khi đối tượng được unserialize().
        echo $this->getHeight();
    }

    public function __invoke()
    {
        // Phương thức __invoke() sẽ được gọi khi chúng ta sử đối tượng như một hàm
        $this->useInvoke(); // "Sử dụng Đối tượng như một hàm, khi đó __invoke() sẽ được gọi";
    }
}

$kid1= new kids;

$kid1->height= 35;
$kid1->weight= 18;

echo $kid1->height;
echo $kid1->weight;

// sử dụng __sleep()
echo serialize($kid1); // O:4:"kids":2:{s:9:"*height";i:35;s:9:"*weight";i:18;}

// sử dụng __wakeup()
unserialize(serialize($kid1)); // 35

// sử dụng __invoke()
$kid = new kids();
$kid();


// Another Example

class Example {
    private $data = [];

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    public function __get($name) {
        if (!array_key_exists($name, $this->data)) {
            return null;
        }

        return $this->data[$name];
    }

    public function __isset($name) {
        return isset($this->data[$name]);
    }

    public function __unset($name) {
        unset($this->data[$name]);
    }
}

$example = new Example();

// Stores 'a' in the $data array with value 15
$example->a = 15;

// Retrieves array key 'a' from the $data array
echo $example->a; // prints 15

// Attempt to retrieve non-existent key from the array returns null
echo $example->b; // prints nothing

// If __isset('a') returns true, then call __unset('a')
if (isset($example->a)) {
    unset($example->a);
}

?>