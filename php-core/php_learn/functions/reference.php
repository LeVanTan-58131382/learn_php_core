<?php
// tham chiếu reference
function add_five(&$value) {
    $value += 5;
  }
  
  $num = 2;
  add_five($num);
  echo $num;

/// other example
function addSOrEs(&$word)
{
    if (substr($word, -1) == 'y') {
      $word = substr($word, 0, -1) . 'ies';
    } else {
      $word .= 's';
    }
}

$word = "Banana";
addSOrEs($word); // vì là tham chiếu nên biến $word sẽ thay đổi khi ta thực hiện hàm này lun

echo $word; // Bananas


/// other example

function addOneDay($date)
{
    $date->modify('+1 day');
}

$date = new DateTime('2014-02-28');
addOneDay($date);

print $date->format('Y-m-d');
  // 2014-03-01

/// other example
class Foo{}
function a(Foo &...$foos)
{
  $i = 0;
  foreach($a as &$foo){
    $foo = $i++;
  }
}
$a = new Foo;
$c = new Foo;
$b = & $c;
var_dump($a, $b, $c);