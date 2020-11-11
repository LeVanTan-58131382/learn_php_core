<?php
// Interface definition
interface DongVat {
  public function makeSound();
}

interface DongVatAnThit{
    public function eat();
    public function activity();
}

// Class definitions
class Meo implements DongVat {
    // bắt buộc phải thực thi tất cả các phương thức trong interface DongVat
    public function makeSound() {
        echo "Mèo kêu: Meo " . "<br>";
    }
}

class Cho implements DongVat {
    public function makeSound() {
        echo "Chó kêu: Gâu " . "<br>";
    }
}

class SuTu implements DongVat, DongVatAnThit {
    public function makeSound() {
        echo "Sư tử kêu: Gừ " . "<br>";
    }

    public function eat()
    {
        echo "Sư Tử Ăn Thịt" . "<br>";
    }

    public function activity()
    {
        echo "Sư Tử Đi Săn" . "<br>";
    }
}

// tạo danh sách DongVat
$meo = new Meo();
$cho = new Cho();
$sutu = new SuTu();
$dongvats = array($meo, $cho, $sutu);

// Tell the animals to make a sound
foreach($dongvats as $dongvat) {
    $dongvat->makeSound();
    
    if($dongvat instanceof DongVatAnThit)
    {
        $dongvat->eat();
        $dongvat->activity();
    }
}
?>