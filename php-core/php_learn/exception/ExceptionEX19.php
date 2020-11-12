<?php
// Use error

function handleError($errno, $errstr,$error_file,$error_line) {
    echo "<b>Error:</b> [$errno] $errstr - $error_file:$error_line";
    echo "<br />";
    
    die();
}

function customError($errno, $errstr) {
    echo "<b>Error:</b> [$errno] $errstr";
}

set_error_handler("handleError");

// Use a undefined variable
echo($test);

// if(file_exists("mytestfile.txt")) {
//   $file = fopen("mytestfile.txt", "r");
// } else {
//   die("Error: The file does not exist.");
// }

?>