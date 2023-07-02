<!-- tạo 2 đối tương: Cửa hàng và điện thoại -->
<!-- cửa hàng: tên, địa chỉ, tổng tiền -->
<!-- điện thoại:  tên, giá, cpu, dung lượng ram, bộ nhớ, tồn kho -->

<!-- khi bán điện thoại sẽ cộng tièn về cho cửa hàng -->
<!-- nếu hết kho thì ko bán -->

<?php

class CuaHang
{

    var $ten;
    var $dia_chi;
    var $tong_tien;
    function layThongTin()
    {
        return "Cửa hàng $this->ten, $this->dia_chi, tổng tiền: $this->tong_tien VND";
    }
    function nhanDauTu($so_tien_dau_tu)
    {
        $this->tong_tien += $so_tien_dau_tu;
    }
}


class DienThoai
{
    var $ten;
    var $gia;
    var $cpu;
    var $dung_luong_ram;
    var $bo_nho;
    var $ton_kho;
    function layThongTin()
    {
        return "Điện thoại: $this->ten, tồn kho: $this->ton_kho";
    }
    function banHang($so_dien_thoai_ban, $cua_hang)
    {
        if ($so_dien_thoai_ban > $this->ton_kho || $this->ton_kho <= 0) {
            echo 'Không đủ số lượng bán';
        } else {
            $tien_ban = $this->gia * $so_dien_thoai_ban;
            $this->ton_kho -= $so_dien_thoai_ban;
            $cua_hang->nhanDauTu($tien_ban);
            // echo  $cua_hang->nhanDauTu($tien_ban);
        }
    }
}


$cua_hang1 = new CuaHang;
$cua_hang1->ten = "Cửa hàng 1";
$cua_hang1->dia_chi = "Hà nội";
$cua_hang1->tong_tien = 0;

$dienThoai_1 = new DienThoai;
$dienThoai_1->ten = "Oppo";
$dienThoai_1->gia = 2000000;
$dienThoai_1->cpu = "Ép pồ 14 bai ô ních";
$dienThoai_1->bo_nho = "128G";
$dienThoai_1->ton_kho = 5;

// var_dump($dienThoai_1);
// echo "<br>";
// var_dump($cua_hang1);

echo "<br>";
// $dienThoai_1->banHang(4);
// echo $cua_hang1->tong_tien;
$cua_hang1->nhanDauTu(1000);
$dienThoai_1->banHang(4, $cua_hang1);
echo $cua_hang1->tong_tien;

