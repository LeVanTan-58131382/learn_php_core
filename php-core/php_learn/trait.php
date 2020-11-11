<?php

trait message1 {
    public $title_1 = "message_1_title";
    public function msg1() {
      echo "This is message 1!"; 
    }
  }
  
  trait message2 {
    public $title_2 = "message_2_title";
    public function msg2() {
      echo "This is message 2!"; 
    }
  }
  
  class Welcome {
    use message1;
  }
  
  class Welcome2 {
    use message1, message2; // Vì ở đây thừa kế 2 message nên thuộc tính
                            // $title không được trùng tên nhau
  }
  
  $obj = new Welcome();
  $obj->msg1();
  echo $obj->title_1;
  echo "<br>";
  
  
  $obj2 = new Welcome2();
  $obj2->msg1();
  $obj2->msg2();