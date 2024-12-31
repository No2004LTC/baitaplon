<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous"
  />
  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"
  ></script>
  <title>Sửa nghỉ phép</title>
  <style>
    html,
    body {
      width: 100vw;
      height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .coat {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100vw;
      height: 100vh;
      background-color: #e8e8e8;
    }

    .container-fluid {
      width: 800px;
      height: 90%; 
      padding: 30px;
      background-color: white;
      box-shadow: 0px 0px 10px rgba(128, 128, 128, 0.508);
    }

    .desc {
      text-align: center;
      width: 100%;
      font-size: 2rem;
      font-weight: 600;
    }
  </style>
</head>

<body>
  <a href="<?= _WEB_HOST ?>/nghiphep" class="btn btn-danger" style="position: absolute; top: 20px; left: 20px;"> 
    Quay lại
  </a>

  <div class="coat">
    <div class="container-fluid">
      <div class="desc">
        Form Sửa Nghỉ Phép
      </div>

   
      <form action="" method="post">
        <div class="form-group mt-3">
          <label for="Manv">Mã nhân viên</label>
          <select name="Manv" id="Manv" class="form-control" required>
            <option value="">Chọn mã nhân viên</option>
            <?php foreach ($nhanvien as $nv): ?>
            <option value="<?php echo $nv['Manv']; ?>">
              <?php echo $nv['Manv'] . ' - ' . $nv['Tennv']; ?>
            </option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group mt-3">
          <label for="Tennv">Tên nhân viên</label> 
          <select name="Tennv" id="Tennv" class="form-control" required>
            <option value="">Chọn tên nhân viên</option>
            <?php foreach ($nhanvien as $nv): ?>
            <option value="<?php echo $nv['Tennv']; ?>"> 
              <?php echo $nv['Tennv']; ?> 
            </option>
            <?php endforeach; ?>
          </select>
        </div>
            

            <div class="form-group mt-3">
              <label for="Ngaybatdaunghi">Ngày bắt đầu nghỉ</label>
              <input type="date" name="Ngaybatdaunghi" id="Ngaybatdaunghi" class="form-control" value="<?php echo $row['Ngaybatdaunghi']; ?>">
            </div>

            <div class="form-group mt-3">
              <label for="Songaynghi">Số ngày nghỉ</label>
<input type="number" name="Songaynghi" id="Songaynghi" class="form-control" value="<?php echo $row['Songaynghi']; ?>">
            </div>

            <div class="mt-5 d-flex align-items-center">
              <button type="submit" id="btnSua" class="btn btn-success mx-auto">
                Xác nhận Sửa
              </button>
            </div>
         
        </form>
    
    </div>
  </div>
</body>
</html>