<?php

namespace Animals;

class Dogs{
    public $name = "";
    public $action = "Stay home";

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function introduce()
    {
        echo "My dog ". "( $this->name )" . " is " .$this->action;
    }

    public function test_megic_constant()
    {
        // echo __CLASS__; // Animals\Dogs
        // echo get_class($this); // Animals\Dogs
        // echo __DIR__; // D:\TAN-LAMPART\php-core\php_learn 
        // echo __FILE__; // D:\TAN-LAMPART\php-core\php_learn\namespace.php
        // echo __LINE__; // số dòng
        // echo __FUNCTION__; // test_megic_constant
    }
}

$myDog = new Dogs("Mi");
$myDog->test_megic_constant();
