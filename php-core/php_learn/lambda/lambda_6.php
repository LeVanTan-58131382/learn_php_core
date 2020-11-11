<?php

class USERS {
    const LUONG_NHAN_VIEN = 1000;
    const LUONG_TRUONG_PHONG = 2000;
    const LUONG_GIAM_DOC = 3000;

    const TROCAP_NHAN_VIEN = 0.2;
    const TROCAP_TRUONG_PHONG = 0.3;

    protected $hoTen;
    protected $namSinh;
    protected $gioiTinh;
    protected $chucVu;
    protected $soNgayLam;

    public function __construct($hoTen, $namSinh, $gioiTinh, $chucVu, $soNgayLam)
    {
        $this->hoTen = $hoTen;
        $this->namSinh = $namSinh;
        $this->gioiTinh = $gioiTinh;
        $this->chucVu = $chucVu;
        $this->soNgayLam = $soNgayLam;
    }

    public function thongTin ()
    {
        $luong = function() {
            $luongMotThang = constant(__CLASS__."::LUONG_".str_replace(" ", "_", strtoupper($this->chucVu)));

            return $luongMotThang * $this->soNgayLam;
        };

        $troCap = function() use ($luong) {
            $troCapMotThang = constant(__CLASS__."::TROCAP_".str_replace(" ", "_", strtoupper($this->chucVu)));

            return $troCapMotThang * $luong();
        };

        echo "Lương: " . $luong() . " - Trợ cấp: ".$troCap();
    }
}

$user = new USERS("le anh kha", 1998, "nam", "nhan vien", 40);
echo $user->thongTin();