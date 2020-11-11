<?php
namespace Tests;
use PHPUnit\Framework\TestCase;
use App\getNewString;

class DataProviderTest extends TestCase{

    // Đây là phần khai báo dataprovider
    /**
     * @param string $input
     * @param string $expected
     * 
     * @dataProvider providerTestSluggifyReturnsSluggifiedString
     */

    public function testSluggifyReturnsSluggifiedString($input, $expect)
    {
        $url = new getNewString();

        $result = $url->sluggify($input);

        $this->assertEquals($expect, $result);
    }

    public function providerTestSluggifyReturnsSluggifiedString()
    {
        return [
             ["This string will be sluggified", "this_string_will_be_sluggified"],
             ["THIS STRING WILL BE SLUGGIFIED", "this_string_will_be_sluggified"],
             ["This2 string2 will2 be2 sluggified2", "this2_string2_will2_be2_sluggified2"],
             ["This$%# string^&* will@# be &sluggified", "this_string_will_be_sluggified"],
        ];
    }

}