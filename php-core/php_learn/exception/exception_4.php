<?php

class NhoHonException extends RuntimeException{
    public function printError()
    {
        $errorMessage = "Số đầu tiên nhỏ hơn số thứ 2!";
        return $errorMessage;
    }
}

class LonHonException extends RuntimeException{
    public function printError()
    {
        $errorMessage = "Số đầu tiên lớn hơn số thứ 2!";
        return $errorMessage;
    }
}

$num_1 = 9;
$num_2 = 7;

try{
    if($num_1 > $num_2)
    {
        throw new LonHonException();
    }
    elseif ($num_1 < $num_2)
    {
        throw new NhoHonException();
    }
    else {
        echo "Hai số bằng nhau";
    }
} 
catch( LonHonException $e_1)
{
    echo $e_1->printError();
}
catch( NhoHonException $e_2)
{
    echo $e_2->printError();
}
