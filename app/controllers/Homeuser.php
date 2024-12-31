<?php

class Homeuser extends Controller {
    private $data, $model;

    public function __construct() {
        $this->data = [];
        $this->model = $this->model('Database');
    }

    public function list() {
        // Bắt đầu session nếu chưa được bắt đầu
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Kiểm tra session và lấy thông tin đăng nhập
        if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
            $username = $_SESSION['username'];
            $password = $_SESSION['password'];

            // Gọi model để lấy thông tin
            $this->data['user'] = $this->model->getNhanSuByTaiKhoan($username, $password);

            // Gọi view và truyền dữ liệu
            $this->view('Homeuser', $this->data);
        } else {
            // Nếu không có thông tin đăng nhập, chuyển hướng về trang login
            header("Location: index.php?action=loginuser");
            exit;
        }
    }

    public function edit_lop($manhanvien = '')
    {
        $this->data['table'] = $this->model->select([], 'hsnhansu', "where Manv = '$manhanvien'"); 
        $this->view('suaHSnhansu_user', $this->data); 

        if (isPost()) {
            // Lấy dữ liệu từ form
            $data = $_POST;

            // Cập nhật dữ liệu trong cơ sở dữ liệu
            $this->model->update('hsnhansu', $data, "where Manv = '$manhanvien'");

            // Hiển thị thông báo thành công và chuyển hướng
            echo "<script>alert('Sửa nhân viên thành công')</script>";
            echo "<script>window.location.href = '" . _WEB_HOST . "/Homeuser'</script>"; 
        }
    }
}
