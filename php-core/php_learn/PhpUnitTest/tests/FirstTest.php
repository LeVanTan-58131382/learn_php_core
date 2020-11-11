<?php

namespace Tests;
use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase{
    public function Add2Number(){
        $sum = 3 + 2;
        $this->assertEquals(5, $sum);
    }
}