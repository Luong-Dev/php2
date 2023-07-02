<!-- đối tượng có constructor 
hàm dạng magic function, chạy khi khởi tạo 1 đối tượng mới bằng cú pháp new - ->

-->

<?php
class GiaoVien
{
    var $ten;
    var $tuoi;
    function __construct($ten, $tuoi)
    {
        // thường dùng để gán giá trị cho lần đầu
        var_dump("constructor giáo viên");
        $this->ten = $ten;
        $this->tuoi = $tuoi;

        if ($tuoi <= 30) {
            die;
        }
    }
    function LayThongTin()
    {
        return "Tên giáo viên: $this->ten , Tuổi: $this->tuoi";
    }
};

// $giaovien = new GiaoVien;
$giaovien = new GiaoVien("Mai Mai", 31);
echo $giaovien->LayThongTin();

// giáo viên trên 30 tuổi mới lấy đk thông tin