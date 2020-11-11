<?php

class CustomException extends Exception{
    public static function emailException($email)
    {
        $errorMessage = "$email is an invalid email" . "<br>";
        return $errorMessage;
    }

    public static function userNameException($userName)
    {
        $errorMessage = "$userName is an invalid userName" . "<br>";
        return $errorMessage;
    }
}

class User {
    protected $userName;
    protected $emai;

    public function __construct($userName, $email)
    {
        $this->userName = $userName;
        $this->email = $email;
        $this->validUserName($this->userName);
        $this->validEmail($this->email);
    }

    public function validUserName($userName)
    {
        try{
            if (!preg_match("/^[a-zA-Z-' ]*$/",$userName))
            {
                throw new CustomException($userName);
            }
            else {
                echo "$userName is a valid userName" . "<br>";
            }
        } catch(CustomException $e)
        {
            echo $e->userNameException($userName);
        }

    }

    public function validEmail($email)
    {
        try {
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
                throw new CustomException($email);
            }
            else {
                echo "$email is an valid email" . "<br>";
            }
        }
        
        catch (CustomException $e) {
            echo $e->emailException($email);
        }
    }
}

new User("Lara", "lara@gmail.com");