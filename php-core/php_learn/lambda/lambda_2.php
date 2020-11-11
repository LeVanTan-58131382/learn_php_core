<?php
// A basic shopping cart which contains a list of added products
// and the quantity of each product. Includes a method which
// calculates the total price of the items in the cart using a
// closure as a callback.
class Cart
{
    const GIA_BANHMI  = 1.00;
    const GIA_SUA    = 3.00;
    const GIA_TRUNG    = 6.95;

    protected $listSanPham = array();
    
    public function them($sanPham, $soLuong)
    {
        $this->listSanPham[$sanPham] = $soLuong;
    }
    
    public function laySoLuong($sanPham)
    {
        return isset($this->listSanPham[$sanPham]) ? $this->listSanPham[$sanPham] :
               FALSE;
    }
    
    public function tinhTong($tax)
    {
        $tong = 0.00;
        
        $callback =
            function ($soLuong, $sanPham) use ($tax, &$tong)
            {
                $giaMoiSanPham = constant(__CLASS__ . "::GIA_" .
                    strtoupper($sanPham));
                $tong += ($giaMoiSanPham * $soLuong) * ($tax + 1.0);
            };
        
        array_walk($this->listSanPham, $callback);
        return round($tong, 2);
    }
}

$my_cart = new Cart;

// Add some items to the cart
$my_cart->them('banhmi', 1);
$my_cart->them('sua', 3);
$my_cart->them('trung', 6);

// Print the total with a 5% sales tax.
print $my_cart->tinhTong(0.05) . "\n";
// The result is 54.29

//echo Cart::GIA_SUA; // 3
?>