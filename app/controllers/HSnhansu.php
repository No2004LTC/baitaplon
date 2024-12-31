
<?php
class HSnhansu extends Controller
{
    private $data, $model;

    function __construct()
    {
        $this->data = []; // Khởi tạo $this->data
        $this->model = $this->model('Database');
    }

    function list()
    {
        $condition = '';
        if (isGet()) {
            if (!empty($_GET['search-ma'])) {
                $searchMa = htmlspecialchars($_GET['search-ma']); // Lọc dữ liệu đầu vào
                $condition = " WHERE Manv = '$searchMa'"; 
            }
        }
    
        $this->data['table'] = $this->model->select([], 'hsnhansu', $condition);
        $this->view('HSnhansu', $this->data);
    }

    public function add()
    {
        $this->view('themHSnhansu', $this->data);
        if (isPost()) {
            $check = $this->model->isDuplicate('hsnhansu', 'Manv', $_POST['Manv']);
            if ($check == 0) {
                $this->model->insert('hsnhansu', $_POST);
                echo "<script>alert('Thêm nhân viên thành công!')</script>";
                echo "<script>window.location.href = '" . _WEB_HOST . "/HSnhansu'</script>";
            } else {
                echo "<script>alert('Thêm nhân viên thất bại, trùng mã nhân viên!')</script>";
            }
        }
    }
    
    public function edit_lop($manhanvien = '')
    {
        $this->data['table'] = $this->model->select([], 'hsnhansu', "where Manv = '$manhanvien'"); 
        $this->view('suaHSnhansu', $this->data); 

        if (isPost()) {
            // Lấy dữ liệu từ form
            $data = $_POST;

            // Cập nhật dữ liệu trong cơ sở dữ liệu
            $this->model->update('hsnhansu', $data, "where Manv = '$manhanvien'");

            // Hiển thị thông báo thành công và chuyển hướng
            echo "<script>alert('Sửa nhân viên thành công')</script>";
            echo "<script>window.location.href = '" . _WEB_HOST . "/HSnhansu'</script>"; 
        }
    }
    public function delete_lop($manhanvien = '')
    {
        if ($this->model->delete('hsnhansu', "where Manv = '$manhanvien'")) {
            echo "<script>alert('Xóa nhân viên thành công')</script>";
            echo "<script>window.location.href = '" . _WEB_HOST . "/HSnhansu'</script>";
        } else {
            echo "<script>alert('Xóa nhân viên thất bại')</script>";
        }
    }
}


?>