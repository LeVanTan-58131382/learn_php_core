<?php

// Dùng try catch lồng

$age = 8;
$name = "Dora";

try{
    try{
        if($age < 18)
            throw new Exception("Bạn chưa đủ 18 tuổi để đăng ký mua hàng");
        else{
            echo "Chúc mừng, bạn đã đủ tuổi";
        }

    } catch(Exception $e_1)
    {
        echo $e_1->getMessage();

        if($age < 10)
        {
            throw new Exception("Bạn quá nhỏ tuổi");
        }
    }
} catch(Exception $e_2)
{
    echo $e_2->getMessage();
}