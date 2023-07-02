<?php 
// kế thừa là các thuộc tính và phương thức của 1 đối tượng cha sẽ đk đối tượng extends nó sử dụng

class Cha{
    var $tien_tiet_kiem = 100000000;

    function xemTienTietKiem(){
        return "Cha dang co so tien: $this->tien_tiet_kiem";
    }
}

class ConTrai extends Cha{
function tieuTien($so_tien_tieu){
    $this->tien_tiet_kiem -= $so_tien_tieu;
}
}

$contrai = new ConTrai;
var_dump( $contrai);

$contrai->tieuTien(200000);
var_dump($contrai);