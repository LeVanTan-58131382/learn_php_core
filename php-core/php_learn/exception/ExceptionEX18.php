<?php
// Một số trường hợp dùng exception
// Khi bạn muốn tạo ra một kiểu ngoại lệ mới mà không tồn tại trong các lớp con của Exception.

class MyException extends Exception{
    public function printError()
    {
        echo "That is a invalid email, please rewrite!";
    }
}

class NameException extends Exception{
    public function nameTooShort()
    {
        echo "The name too short";
    }

    public function nameTooLong()
    {
        echo "The name too long";
    }
}

function test($email)
{
    try{
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            throw new MyException();
        }

        $email_2 = explode("@", $email);

        try{
            if(strlen($email_2[0]) < 8)
            {
                throw new NameException();
            }
        } catch(NameException $e)
        {
            $e->nameTooShort();
        }
        
    } catch(MyException $e)
    {
        echo $e->printError();
    }
}

test("lampart@gmail.com");
?>