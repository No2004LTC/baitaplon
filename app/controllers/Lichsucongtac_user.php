<?php

class Lichsucongtac_user extends Controller {
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
            $this->data['user'] = $this->model->getLichsuByTaikhoan($username, $password);

            // Gọi view và truyền dữ liệu
            $this->view('Lichsucongtac_user', $this->data);
        } 
    }

}
