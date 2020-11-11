<?php 
// use $this inside a static anonymous function
class HinhChuNhat
{
    public $chieuRong = 0;
    public $chieuCao = 0;

    public function __construct($chieuRong, $chieuCao)
    {
        $this->chieuRong = $chieuRong;
        $this->chieuCao = $chieuCao;

        $dienTich = function()
        {
            return $this->chieuRong * $this->chieuCao;
        };

        echo "Diện tích: " . $dienTich();
    }
    
}

new HinhChuNhat(5, 10);