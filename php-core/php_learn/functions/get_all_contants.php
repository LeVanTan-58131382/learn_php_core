<?php


$constants = get_defined_constants();

define("HI", "hi"); 
define("HELLO", "hello"); 
define("WORLD", "world"); 

$new_constants = get_defined_constants();

$myconstants = array_diff_assoc($new_constants, $constants);
var_export($myconstants); 

// var_dump($new_constants);
   
/* 
Output:

array (
    'HI' => 'hi',
  'HELLO' => 'hello',
  'WORLD' => 'world',
) 
*/

// Class Contants

class Logger {
    const LEVEL_INFO = 1;
    const LEVEL_WARNING = 2;
    const LEVEL_ERROR = 3;

    // we can even assign the constant as a default value
    public function log($message, $level = self::LEVEL_INFO) {
        echo "Message level " . $level . ": " . $message;
    }
}

$logger = new Logger();
$logger->log("Info"); // Using default value
$logger->log("Warning", $logger::LEVEL_WARNING); // Dùng biến đối tượng
$logger->log("Error", Logger::LEVEL_ERROR); // Dùng Class