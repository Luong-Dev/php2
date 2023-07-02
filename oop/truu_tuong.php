<!--  -->
<?php

// đối tượng khung để mở rộng ra các đối tượng khác

abstract class ConNguoi
{
    var $ten;
    var $tuoi;

    // khi định nghĩa phương thức dưới dạng abstract thì thằng con bắt buộc phải có
    abstract function LayThongTin();
}

// Đối tượng không phải khung cũng có thể dùng làm cha
class NguoiFPT
{
    var $ten;
    var $co_so;

    function LayTenCoSo()
    {
        return $this->co_so;
    }
}


// đối tượng kế thừa lại khung là ConNguoi
class SinhVien extends ConNguoi
{
    function __construct($ten, $tuoi)
    {
        $this->ten = $ten;
        $this->tuoi = $tuoi;
    }
    function LayThongTin()
    {
        // tên và tuổi đã có ở cha và thằng con sẽ kế thừa
        return "$this->ten , $this->tuoi";
    }
    function nhanDoiTuoi()
    {
        return $this->tuoi * 2;
    }
}
$tuan = new SinhVien("âsfà", 30);
echo $tuan->layThongTin();

// hành vi chung sẽ được định nghĩa trong 1 interface
interface TruyVan
{
    function where();
    function join();
}


class DB implements TruyVan
{
    function connect()
    {
        $connect = new PDO('mysql:host=127.0.0.1;dbname=qưdkllf;charset=utf8', 'root', '');
    }

    function __construct()
    {
        $this->connect();
    }
    function where()
    {
    }
    function andWhere()
    {
    }
    // nếu đã implements TruyVan thì phải có đủ cả function trong TruyVan
    function join()
    {
    }
    function get()
    {
    }
}

// Đối tượng này đại diện cho 1 bảng k đổi trong DB
class Product extends DB
{
    var $table = 'products';
}
class Category extends DB
{
    var $table = 'categories';
}


// exten chỉ cho 1, còn implements được nhiều
// implements dành cho hành vi