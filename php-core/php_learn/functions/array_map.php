<?php

// array_map(myfunction, array1, array2, array3, ...)

function checkName($name)
{
    if($name == "Lan")
    {
        $name = "LAN";
    }
    elseif($name == "Quân")
    {
        $name = "QUÂN";
    }
    return $name;
}

$a = array("Nam", "Quân", "Tùng");
array_map("checkName", $a);

print_r(array_map("checkName", $a));