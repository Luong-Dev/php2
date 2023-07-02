<?php



class TenDoiTuong
{
    // thuộc tính var $ten_thuoc_tinh
    // phương thức function ten_phuong_thuc(){}
}


class Tour
{
    // thuọc tính
    var $ten_tour;
    var $diem_bat_dau;
    var $diem_ket_thuc;
    var $thoi_gian;


    // phương thức
    function layThongTinTour()
    {
        // trả về các thông tin mong muốn
        return $this->ten_tour . ' - ' . $this->thoi_gian . ' Ngày';
    }

    function nghiNgoi($so_ngay_nghi)
    {
        // tăng thời gian diễn ra tour để nghỉ
        $this->thoi_gian += $so_ngay_nghi;
    }
}

// dựa vào hình thái đối tượng tours bên trên,, định nghĩa ra đối tượng mới
$tourHNQN = new tour;
// gán giá tri cho các thuộc tính của đối tượng mới
$tourHNQN->ten_tour = "Tour Hà Nội - Quảng ninh";
$tourHNQN->diem_bat_dau = "Hà nội";
$tourHNQN->diem_ket_thuc = "Quảng ninh";
$tourHNQN->thoi_gian = 5;
echo "<pre>";
var_dump($tourHNQN);
var_dump($tourHNQN->ten_tour);
var_dump($tourHNQN->layThongTinTour());
echo "</pre>";

$tourHNQN->nghiNgoi(5);
var_dump($tourHNQN->thoi_gian);


// ví dụ đối tượng sinh viên
class SinhVien
{
    var $ten;
    var $tuoi;
    var $ma_sv;
    var $dia_chi;
    var $diem_tb;
    var $tong_so_mon_da_hoc;


    function LayThongTin()
    {
        return "SV học $this->tong_so_mon_da_hoc môn, điểm tb:  $this->diem_tb";
    }

    function quaMon($diem_qua_mon)
    {
        // tính lại điểm trung bình cho sinh viên
        $tm = $this->tong_so_mon_da_hoc;
        $this->diem_tb = ($this->diem_tb * $tm + $diem_qua_mon) / ($tm + 1);
        $this->tong_so_mon_da_hoc++;
    }
}

$sinhVien123 = new SinhVien;
$sinhVien123->ten = "Nguyễn Văn Hoàng";
$sinhVien123->tuoi = 20;
$sinhVien123->ma_sv = "PH1233";
$sinhVien123->dia_chi = "Hà nội";
$sinhVien123->diem_tb = 6;
$sinhVien123->tong_so_mon_da_hoc = 8;
$sinhVien123->quaMon(4.9);
echo "<br>";
var_dump($sinhVien123->LayThongTin());

$sinhVien124 = new SinhVien;
$sinhVien124->ten = "Nguyễn Văn Hoàng ABS";
$sinhVien124->tuoi = 24;
$sinhVien124->ma_sv = "PH123223";
$sinhVien124->dia_chi = "Hà nam";
$sinhVien124->diem_tb = 8;
$sinhVien124->tong_so_mon_da_hoc = 9;
$sinhVien124->quaMon(8.9);
echo "<br>";
var_dump($sinhVien124->LayThongTin());

$sinhVien125 = new SinhVien;
$sinhVien125->ten = "Nguyễn Minh Thuận";
$sinhVien125->tuoi = 22;
$sinhVien125->ma_sv = "PH1233";
$sinhVien125->dia_chi = "Hà nội";
$sinhVien125->diem_tb = 2;
$sinhVien125->tong_so_mon_da_hoc = 20;
$sinhVien125->quaMon(4.9);
echo "<br>";
var_dump($sinhVien125->LayThongTin());