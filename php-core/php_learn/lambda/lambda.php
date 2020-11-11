<?php

// Hàm ẩn danh
// gán cho 1 biến
$hello = function()
{
    return "Hello world";
};

// gọi hàm ẩn danh
echo $hello();

// Other uses

function show($message)
{
    echo $message();
}

show(function(){
    return "Hi everyone";
});


// Other uses
$myPet = "rapid moon";

// Tạo một Closure
$showPet = function() use ($myPet)
{
    echo "Hello $myPet";
};

$showPet();


// Other uses
// Có thể truy cập các biến bên ngoài sử dụng use
$multiplier = 3;
$numbers = [1, 2, 3, 4];

array_walk($numbers, function($number) use ($multiplier){
    echo $number * $multiplier;
});
// 3 6 9 12
// Hàm array_walk() : Hàm này áp dụng một hàm do người dùng tạo tới mỗi thành viên của một mảng.
// Ý nghĩa dc dùng ở đây: Mỗi thành viên trong mảng numbers được xem là một tham số number cho function Closure bên trong, sau đó lấy từng số đó nhân với $multiplier

