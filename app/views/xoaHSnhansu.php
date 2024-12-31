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
  <title>Xác nhận xóa nhân sự</title>
</head>
<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        Xác nhận xóa nhân sự
      </div>
      <div class="card-body">
        <p class="card-text">Bạn có chắc chắn muốn xóa nhân sự <b><?php echo $tennv; ?></b> (Mã nhân viên: <?php echo $manv; ?>) không?</p>
        <div class="d-flex justify-content-center">
          <a href="<?= _WEB_HOST ?>/HSnhansu" class="btn btn-secondary me-2">Hủy</a>
          <a href="<?= _WEB_HOST ?>/HSnhansu/delete/<?= $manv ?>" class="btn btn-danger">Xóa</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>