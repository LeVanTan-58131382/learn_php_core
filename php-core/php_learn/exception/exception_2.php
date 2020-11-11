<?php

// Viết hàm xuất lỗi tùy chỉnh

class MyException extends Exception{
    public function printError()
    {
        $errorMessage = "You have an error, at the line " . $this->getLine();
        return $errorMessage;
    }
}

$age = 17;
$name = "Dora";

try{
    if($age < 18)
    {
        throw new MyException();
    }
}catch(MyException $e)
{
    echo $e->printError();
}

class Tinh extends Error {
    private $n = 10;

    public function phepTinh()
    {
        try{
            $value = $this->n / 0; 
        } catch (Error $err)
        {
            return $err->getMessage();
        }
    }
}

$tinh = new Tinh();
echo $tinh->phepTinh();
// Warning: Division by zero in D:\TAN-LAMPART\php-core\php_learn\exception\exception_2.php on line 32