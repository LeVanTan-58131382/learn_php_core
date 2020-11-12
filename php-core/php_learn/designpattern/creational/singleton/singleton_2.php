<?php

namespace designpattern\creational\singleton;

class ConNguoi
{
    
    private static $instances = [];

    protected function __construct() { }

    protected function __clone() { }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    // Hàm getInstance giống như một hàm tạo
    public static function getInstance(): ConNguoi
    {
        $cls = static::class; // ConNguoi
        // Nếu chưa có instance nào thì tạo mới
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
            // new static ở đây đề cập đến tên lớp nơi phương thức đã được gọi
        }

        return self::$instances[$cls];
    }

    public function someBusinessLogic()
    {
        // ...
    }
}

class ThanhNien extends ConNguoi{
    // Vì trong hàm getInstance có new static(), nên khi gọi hàm getInstance
    // ở lớp ThanhNien thì new static() = new ThanhNien();
}

/**
 * The client code.
 */
function test()
{
    $object_1 = ConNguoi::getInstance();
    $object_2 = ThanhNien::getInstance();
    if ($object_1 === $object_2) {
        echo "Singleton works, both variables contain the same instance.";
    } else {
        echo "Singleton failed, variables contain different instances.";
    }
}

test(); // Singleton failed, variables contain different instances. => Vì đây là 2 đối tượng khác nhau
