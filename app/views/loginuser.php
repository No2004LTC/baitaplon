<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="public/css/Login.css" />
    <script src="public/Login.js"></script>
    <title>Đăng Ký</title>
  </head>
  <body>
      <div class="circle"></div>
      <div class="card">
        <div class="logo">
          <i class="bx bx-bitcoin"></i>
        </div>
        <h2>Đăng nhập người dùng</h2>
        <form class="form" action="" method="post">
          <input 
            type="text" 
            name="username" 
            placeholder="Tên" 
            id="username" 
            required 
            />
          <input
            type="password"
            name="password"
            id="password"
            placeholder="Mật Khẩu"
            required
          />
          <button type="submit">Đăng nhập</button>
        </form>
        <footer>
        Đăng nhập với quyền admin
        <a href="<?=_WEB_HOST?>/login">Tại Đây</a>
      </div>
  </body>
</html>