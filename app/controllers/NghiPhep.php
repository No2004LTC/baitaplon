<?php
class NghiPhep extends Controller
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

        $this->data['nghiphep'] = $this->model->select([], 'nghiphep', $condition);
        $this->view('nghiphep', $this->data); 
    }
    public function add()
    {
        $this->data['nhanvien'] = $this->model->select(['Manv', 'Tennv'], 'hsnhansu', '');
        $this->view('themnghiphep', $this->data);

        if (isPost()) {
            $data = $_POST;

            try {
                if ($this->model->insert('nghiphep', $data)) {
                    echo "<script>alert('Thêm nghỉ phép thành công!')</script>";
                    echo "<script>window.location.href = '" . _WEB_HOST . "/nghiphep'</script>";
            
                
                } else {
                    echo "<script>alert('Thêm nghỉ phép thất bại!')</script>";
                   
                }
            } catch (PDOException $e) {
                echo "<script>alert('Lỗi: " . $e->getMessage() . "')</script>";
            }
        }
    }
    public function edit($Manv = '')
    {
        $this->data['nhanvien'] = $this->model->select(['Manv', 'Tennv'], 'hsnhansu', '');
        $this->data['nghiphep'] = $this->model->select([], 'NghiPhep', "WHERE Manv = '$Manv'");
        $this->view('suanghiphep', $this->data);
        
        if (isPost()) {
            $data = $_POST;
            if ($this->model->update('NghiPhep', $data, "where Manv = '$Manv'")) {
                echo "<script>alert('Xóa thành công')</script>";
                echo "<script>window.location.href = '" . _WEB_HOST . "/nghiphep'</script>";
    
            } else {
                echo "<script>alert('Sửa nghỉ phép thất bại')</script>";
            }
        }
    }
    public function delete($Manv = '')
    {
        try {
            if ($this->model->delete('nghiphep', "WHERE Manv = '$Manv'")) {
                echo "<script>alert('Xóa thành công')</script>";
            echo "<script>window.location.href = '" . _WEB_HOST . "/nghiphep'</script>";
          
             
            } else {
                echo "<script>alert('Xóa nghỉ phép thất bại!')</script>";
            }
        } catch (PDOException $e) {
            echo "<script>alert('Lỗi: " . $e->getMessage() . "')</script>";
        }
    }
}
?>