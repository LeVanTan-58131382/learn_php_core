<?php
class MainException extends Exception {}
class SubException extends MainException {}

try {
    throw $e = new SubException("SubException thrown");
} 
catch (Exception|SubException|MainException $e) {
    switch($e){
        case ($e instanceof SubException):
            {
                echo "SubException thrown:" . $e->getMessage();
            }
        break;
        case ($e instanceof MainException):
            {
                echo "MainException thrown:" . $e->getMessage();
            }
        break;
        case ($e instanceof Exception):
            {
                echo "Exception thrown:" . $e->getMessage();
            }
        break;
    }    
}
