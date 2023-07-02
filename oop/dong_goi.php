<?php
// Tính đóng gói: giới hạn khả năng truy cập
// (lấy, gán giá trị cho các thuộc tính hoặc gọi phương thức) của chính nó hoặc của cha

// tầm vực của thuộc tính/phương thức, thay thế cho var
// public: cha và con đều có thể tương tác được
// protected: cha và con -> nhưng là trong 2 class đang định nghĩa, chứ không phải là khi đã khởi tạo
// private: chỉ có cha được thao tác (chỉ chính class đó)

class Cha
{
    private $tien = 10000000;
    protected $taisan = 500000;


    // phương thức này có thể gọi bên ngoài class
    // phương thức này thường dùng để lôi thông tin từ các thuộc tính ....
    public function xemTien(){
        return $this->tien;
    }
}
class Con extends Cha
{
    public function xemTaiSanProtected(){
        return "Xem tài sản protected: $this->taisan";
    }

public function themTaiSanProtected($so_tien){
    $this->taisan += $so_tien;
}

    public function xemTienPrivate(){
        return "Xem tài sản private: $this->tien";
    }
}
$nghiem = new Con();
// var_dump($nghiem->tien);
var_dump($nghiem->xemTien());
// var_dump($nghiem->taisan);