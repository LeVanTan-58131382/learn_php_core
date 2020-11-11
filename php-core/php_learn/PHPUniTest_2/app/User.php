<?php
namespace App;

// other use 
use App\getNewString;

class User{
    const MIN_PASSWORD_LENGTH = 4;
    public $infoUser = array();

    public function __construct(array $infoUser){
        $this->infoUser = $infoUser;
    }

    public function getInfoUser(){
        return $this->infoUser;
    }

    // public function getPassword(){
    //     return $this->password;
    // }

    public function setPassword($password)
    {
        if(strlen($password) < self::MIN_PASSWORD_LENGTH){
            return false;
        }
        $this->infoUser["password"] = $this->cryptPassword($password);
        return true;
    }

    private function cryptPassword($password){
        return md5($password);
    }

    // function example
    // private function setUserName($userName)
    // {
    //     // thay đổi các khoảng trắng trong userName = "-";
    //     $changeString = new getNewString();
    //     $stringResult = $changeString->sluggify($userName);
    //     // set UserName
    //     $this->infoUser["userName"] = $stringResult;
    //     return $this;
    // }
    private function makeEmail($userName)
    {
        // thay đổi các khoảng trắng trong userName = "_";
        $changeString = new getNewString();
        $stringResult = $changeString->sluggify($userName);

        $email = $stringResult . "@lampart-vn.com";
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return TRUE;
        }
        return FALSE;
    }
}