<?php

namespace Tests;
use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase{

    public function testAdd2Number(){
        $sum = 3 + 2;
        $this->assertEquals(5, $sum);
    }

    public function testTrueIsTrue()
    {
        // $foo = true;
        // $this->assertTrue($foo);
        $sum = 3 + 2;
         $this->assertEquals(5, $sum);
    }
}