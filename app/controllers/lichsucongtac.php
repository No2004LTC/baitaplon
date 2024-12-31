<?php
class Lichsucongtac extends Controller
{
    private $data, $model;

    function __construct()
    {
        $this->data = [];
        $this->model = $this->model('Database');
    }

    function list()
    {
        $condition = '';
        if (isGet()) {
            if (!empty($_GET['search-ma'])) {
                $searchMa = htmlspecialchars($_GET['search-ma']);
                $condition = " WHERE Manv = '$searchMa'";
            }
        }

        $this->data['lichSuCongTac'] = $this->model->select([], 'lichsucongtac', $condition);
        $this->view('lichsucongtac', $this->data); 
    }

    public function add()
    {
        $this->data['nhanvien'] = $this->model->select(['Manv', 'Hocvi'], 'hsnhansu', '');
        $this->view('themlichsucongtac', $this->data);
        if (isPost()) {
            $check = $this->model->isDuplicate('lichsucongtac', 'Manv', $_POST['Manv']);
            if ($check == 0) {
                $this->model->insert('lichsucongtac', $_POST);
                echo "<script>alert('Thêm nhân viên thành công!')</script>";
                echo "<script>window.location.href = '" . _WEB_HOST . "/lichsucongtac'</script>";
            } else {
                echo "<script>alert('Thêm nhân viên thất bại, trùng mã nhân viên!')</script>";
            }
        }
    }

    public function edit($Manv = '') 
    {
        $this->data['nhanvien'] = $this->model->select(['Manv', 'Hocvi'], 'hsnhansu', '');
        $this->data['table'] = $this->model->select([], 'lichsucongtac', "where Manv = '$Manv'"); 
        $this->view('sualichsucongtac', $this->data); // Sửa tên view
    
        if (isPost()) {
            // Lấy dữ liệu từ form
            $data = $_POST;

            // Cập nhật dữ liệu trong cơ sở dữ liệu
            $this->model->update('lichsucongtac', $data, "where Manv = '$Manv'");

            // Hiển thị thông báo thành công và chuyển hướng
            echo "<script>alert('Sửa nhân viên thành công')</script>";
            echo "<script>window.location.href = '" . _WEB_HOST . "/lichsucongtac'</script>";
        }
    }
    public function delete($Manv = '')
    {
        if ($this->model->delete('lichsucongtac', "where Manv = '$Manv'")) {
            echo "<script>alert('Xóa nhân viên thành công')</script>";
            echo "<script>window.location.href = '" . _WEB_HOST . "/lichsucongtac'</script>";
        } else {
            echo "<script>alert('Xóa nhân viên thất bại')</script>";
        }
    }
}
?>