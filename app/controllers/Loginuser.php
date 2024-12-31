<?php

class Loginuser extends Controller
{
    private $data, $model, $kt;


    function __construct()
    {
        $this->model = $this->model('Database');
    }

    public function list() {    
        $this->view('Loginuser',[]);  
        // Kiểm tra xem người dùng đã gửi form chưa
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
    
        // Nếu form chưa được điền đầy đủ
        if (empty($username) || empty($password)) {
            // echo "Vui lòng điền đầy đủ thông tin!";
            return;  // Dừng hàm nếu thông tin không đầy đủ
        }
    
        // Gọi model để kiểm tra đăng nhập
        $user = $this->model->checkLogin($username, $password);
    
        // Nếu đăng nhập thành công, chuyển hướng đến trang chủ
        if ($user) {
             // Trang chủ người dùng sau khi đăng nhập thành công
             session_start();
             $_SESSION['username'] = $username;
             $_SESSION['password'] = $password;
            header("Location: Homeuser");  
            exit();  
        } else {
            echo "Tên đăng nhập hoặc mật khẩu không đúng!";
        }
    }


}

   

