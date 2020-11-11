<?php
namespace Tests;

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase{

    /**
     * @param object &$object
     * @param string $methodName
     * @param array $parameters
     * 
     * @return mixed Method return
     * 
     */
    public function testSetPasswordReturnTrueWhenPasswordSuccessfull()
    {
        $details = array();
        $user = new User($details);

        $password = "fubar";
        $result = $user->setPassword($password);

        $this->assertTrue($result);
    }

    // phương thức giúp truy cập trực tiếp đến các phương thức private
    public function invokeMethod(&$object, $methodName, array $parameters = array())
    {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);

        return $method->invokeArgs($object, $parameters); 
        // Gọi hàm và chuyển các đối số của nó dưới dạng mảng.
    }

    public function testGetUserReturnUserWithExpectedValue()
    {
        // Không dùng các hàm như setpassword nữa, ta truy cập thằng vào hàm cryptPassword
        $details = array();
        $user = new User($details);
        $password = "fubar";
        //$user->setPassword($password); 
        $expectedPassword = "5185e8b8fd8a71fc80545e144f91faf2";
        //$currentUser = $user->getUser();
        //$this->assertEquals($expectedPassword, $currentUser["password"]);

        $newCryptPassword = $this->invokeMethod($user , "cryptPassword", array($password));
        $this->assertEquals($expectedPassword, $newCryptPassword);
    }

    // other test
    // test set email, return true when email is valid
    public function testSetUserNameAndMakeEmail()
    {
        $userName = "Tan Le";

        $infoUser = array();
        $user = new User($infoUser);

        //$user->setUserName($userName); if function above is public
        // if function above is private or protected

        // $this->invokeMethod($user , "setUserName", array($userName));

        // if($user->infoUser["userName"] == $userName) {
        //     $result = true;
        // }  else $result = false;
        // $this->assertTrue($result);

        // test make email valid
        $resultTestEmailValid = $this->invokeMethod($user , "makeEmail", array($userName));

        //$this->assertEquals($resultTestEmailValid, "tan_le@lampart-vn.com");

        $this->assertTrue($resultTestEmailValid); 
    }

    

}