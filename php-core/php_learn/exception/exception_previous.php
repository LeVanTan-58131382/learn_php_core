<?php

// Syntax
// new Exception(message, code, previous)

try {

  try {
        throw new Exception("An error occurred", 1);
    } catch(Exception $e1) {
        throw new Exception("Another error occurred", 2, $e1);
    }

} catch (Exception $e2) {
  echo $previous = $e2->getPrevious(); // xuất ra một exception trước đó
  echo $previous->getMessage();
}

// Exception: An error occurred in D:\TAN-LAMPART\php-core\php_learn\exception\exception_previous.php:5 Stack trace: #0 {main}An error occurred

echo "<br>";

$test = FALSE;

try {
    
    try{
        if($test == TRUE)
        {
            throw new Exception("The Test is True");
        }
    }
    catch(Exception $e3){
        //echo $e3->getMessage();
        throw new Exception("The Test is False");
        echo $e3->getMessage();
    }

} catch(Exception $e4)
{
    throw new Exception("The Test is False");
    echo $e4->getMessage();
    // $previous = $e4->getPrevious();
    // echo $previous->getMessage(); // The Test Not True
}
?>