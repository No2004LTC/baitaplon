<?php
class Login extends Controller
{
    

    private $data, $model;


    function __construct()
    {
        $this->model = $this->model('Database');
    }

  
    function list()
    {    
        // $this->data['taikhoan'] = $this->model->select([], 'taikhoan', '');
        // if (isPost()) {
        //     if (!empty($_POST['username'])) $username = $_POST['username'];        
        //     if (!empty($_POST['password'])) $password = $_POST['password'];
        //     if ($username = )    
        // } else $conditon = '';        
        // // $this->data['table'] = $this->model->select([], 'donvitinh' ,$conditon);
        $this->view('Login',[]);
        

      
    }

    
//     public function delete_lop($madonvitinh = '')
//     {
       
//         if ($this->model->delete('donvitinh', "where madonvitinh = '$madonvitinh'")) {
//             echo "<script>alert('Xóa thành công')</script>";
//             echo "<script>window.location.href = '" . _WEB_HOST . "/donvitinh'</script>";
          
//         }
//     }

//     public function add()
//     {
//         $this->view('themdonvitinh', $this->data);
//         if (isPost()) {
//             var_dump($this->model);
//             $check = $this->model->isDuplicate('donvitinh', 'madonvitinh', $_POST['madonvitinh']);
//             if ($check == 0) {
//                 $this->model->insert('donvitinh', $_POST);
//                 echo "<script>alert('Thêm đơn vị tính thành công!')</script>";
//                 echo "<script>window.location.href = '" . _WEB_HOST . "/donvitinh'</script>";
        
//             } else 
//             {
//                 echo "<script>alert('Thêm đơn vị tính thất bại, trùng mã!')</script>";
//             }
//         }
        
//     }

//     public function edit_lop($madonvitinh = '')
//     {
//         $this->data['table'] = $this->model->select([], 'donvitinh', "where madonvitinh = '$madonvitinh'");
    
//         $this->view('suadonvitinh', $this->data);
//         if (isPost()) {
         
//             $this->model->update('donvitinh', $_POST, "where madonvitinh = '$madonvitinh'");
//             echo "<script>alert('Sửa đơn vị tính thành công')</script>";
//             echo "<script>window.location.href = '" . _WEB_HOST . "/donvitinh'</script>";
//         }
//     }
 }