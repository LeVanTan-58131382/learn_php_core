<?php

namespace Tests;
use PHPUnit\Framework\TestCase;
use App\getNewString;

class getNewStringTest extends TestCase
{
    public function testString()
    {
        $inputString = "This is test String";
        $expectString = "this_is_test_string";

        $changeString = new getNewString();
        $stringResult = $changeString->sluggify($inputString);

        $this->assertEquals($expectString, $stringResult);
    }

    public function testStringWithSpecialCharacter()
    {
        $inputString = "This is&& test#$&* String";
        $expectString = "this_is_test_string";

        $changeString = new getNewString();
        $stringResult = $changeString->sluggify($inputString);

        $this->assertEquals($expectString, $stringResult);
    }
}