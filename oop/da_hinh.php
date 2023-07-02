<?php
// đa hình: khi class con kế thừa class cha
// nó có thể viết lại (overwrite) nội dung trong phương thức ...

class Cha
{

    function __construct($tien_dang_dau)
    {
        // vừa khai báo 1 thuộc tính cho class
        // vừa gán giá trị ngay lần đầu khởi tạo luôn
        $this->tien_dang_dau = $tien_dang_dau;
    }
    var $tien_tiet_kiem = 100000000;

    function xemTienTietKiem()
    {
        return "Cha dang co so tien: $this->tien_tiet_kiem";
    }
}

class ConTrai extends Cha
{
    function __construct($tien_dang_dau, $tk_ngan_hang)
    {
        $this->tien_dang_dau = $tien_dang_dau;
        $this->tk_ngan_hang = $tk_ngan_hang;
    }
    function xemTienTietKiem()
    {
        return "Con dang co so tien: $this->tien_tiet_kiem co stk $this->tk_ngan_hang";
    }

    function tieuTien($so_tien_tieu)
    {
        $this->tien_tiet_kiem -= $so_tien_tieu;
    }
}

class ConGai extends Cha{

}


$contrai = new ConTrai(200000, 12344);
var_dump($contrai);
echo "<br>";

$contrai->tieuTien(200000);
var_dump($contrai->xemTienTietKiem());
echo "<br>";
$congai = new ConGai(300000);
var_dump($congai->xemTienTietKiem());