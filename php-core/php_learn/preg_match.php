<?php
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); // Outputs 1
// Trong ví dụ trên, / là dấu phân cách, w3schools là mẫu đang được tìm kiếm và i là một bổ ngữ giúp tìm kiếm không phân biệt chữ hoa chữ thường.

$str_2 = "Le Van Tan Va Le Van Tien Va Le Thanh Hoai";
$pattern_2 = "/Le/i";
echo preg_match($pattern_2, $str_2);

echo preg_match_all($pattern_2, $str_2);
// Hàm preg_match_all () sẽ cho bạn biết có bao nhiêu kết quả phù hợp được tìm thấy cho một mẫu trong một chuỗi
// 3

echo preg_replace($pattern_2, "Lê", $str_2);
// Lê Van Tan Va Lê Van Tien Va Lê Thanh Hoai

// i: tìm kiếm không phân biệt chữ hoa, chữ thường
// m: 
// u:
// https://www.w3schools.com/php/php_regex.asp

$str_3 = "Apples and banana";
$pattern_3 = "/ba(na){2}/i";
echo preg_match($pattern_3, $str_3);
// Sử dụng nhóm để tìm kiếm từ "banana" bằng cách tìm ba, theo sau là hai trường hợp na
// 1
?>