<?php

function customError($errno, $errstr) {
    echo "<b>Lỗi:</b> [$errno] $errstr";
}
set_error_handler("customError");

echo($test);

function printError($errno, $errstr)
{
    echo "<h3>Lỗi xảy ra: </h3>  [$errno] $errstr";
}
set_error_handler("printError");

echo 5/0;

