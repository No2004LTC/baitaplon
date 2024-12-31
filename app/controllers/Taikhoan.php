<?php
class Taikhoan extends Controller
{
    

    private $data, $model;


    function __construct()
    {
        $this->model = $this->model('Database');
    }

  
    function list()
    {    
        // if (isGet()) {
            
        //     if (!empty($_GET['search-ma'])) $ma = $_GET['search-ma']; else $ma='';        
        //     // if (!empty($_GET['search-ten'])) $ten = $_GET['search-ten']; else $ten='';
        //     $conditon = "where masp like '%$ma%' ";
        //     // and tenlop like '%$ten%'
          
        // } else $conditon = ''; 
        $this->data['table'] = $this->model->select([], 'taikhoan' ,'');    
        $this->view('Taikhoan', $this->data); 
            
    }

    
    public function delete_lop($Manv = '')
    {
       
        if ($this->model->delete('taikhoan', "where Manv = '$Manv'")) {
            echo "<script>alert('Xóa thành công')</script>";
            echo "<script>window.location.href = '" . _WEB_HOST . "/Taikhoan'</script>";
          
        }
    }

    public function add()
    {
        $this->data['hsnhansu'] = $this->model->select([], 'hsnhansu', '');
        $this->view('themTaikhoan', $this->data);
        if (isPost()) {
            // var_dump($this->model);
            $check = $this->model->isDuplicate('taikhoan', 'manv', $_POST['manv']);
            if ($check == 0) {
                $this->model->insert('taikhoan', $_POST);
                echo "<script>alert('Thêm sản phẩm thành công!')</script>";
                echo "<script>window.location.href = '" . _WEB_HOST . "/Taikhoan'</script>";
            } else 
            {
                echo "<script>alert('Thêm sản phẩm thất bại, trùng sản phẩm')</script>";
            }
        }
        
    }

    public function edit_lop($Manv = '')
    {
        // $this->data['hsnhansu'] = $this->model->select([], 'hsnhansu', '');
        $this->data['table'] = $this->model->select([], 'taikhoan', "where Manv = '$Manv'");
    
        $this->view('suaTaikhoan', $this->data);
        if (isPost()) {
         
            $this->model->update('Taikhoan', $_POST, "where Manv = '$Manv'");
            echo "<script>alert('Sửa sản phẩm thành công')</script>";
            echo "<script>window.location.href = '" . _WEB_HOST . "/Taikhoan'</script>";
        }
    }
}