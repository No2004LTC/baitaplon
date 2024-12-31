<?php
class Phongban extends Controller
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
        
        $conditon = '';
        $this->data['table'] = $this->model->select([], 'phongban' ,$conditon);
        
        $this->view('Phongban', $this->data);
        

      
    }

    
    public function delete_lop($mapb = '')
    {
       
        if ($this->model->delete('phongban', "where mapb = '$mapb'")) {
            echo "<script>alert('Xóa thành công')</script>";
            echo "<script>window.location.href = '" . _WEB_HOST . "/Phongban'</script>";
          
        }
    }

    public function add()
    {
        $this->view('themPhongban', $this->data);
        if (isPost()) {
            // var_dump($this->model);
            $check = $this->model->isDuplicate('phongban', 'mapb', $_POST['mapb']);
            if ($check == 0) {
                $this->model->insert('phongban', $_POST);
                echo "<script>alert('Thêm sản phẩm thành công!')</script>";
                echo "<script>window.location.href = '" . _WEB_HOST . "/Phongban'</script>";
        
            } else 
            {
                echo "<script>alert('Thêm sản phẩm thất bại, trùng sản phẩm')</script>";
            }
        }
        
    }

    public function edit_lop($mapb = '')
    {
        $this->data['table'] = $this->model->select([], 'phongban', "where mapb = '$mapb'");
    
        $this->view('suaPhongban', $this->data);
        if (isPost()) {
         
            $this->model->update('phongban', $_POST, "where mapb = '$mapb'");
            echo "<script>alert('Sửa sản phẩm thành công')</script>";
            echo "<script>window.location.href = '" . _WEB_HOST . "/Phongban'</script>";
        }
    }
}