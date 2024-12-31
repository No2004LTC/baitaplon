<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

        <title>Thêm nhân viên</title>
    </head>
    <body>
    <form action="" method="post">
    <a 
        href="<?=_WEB_HOST?>/HSnhansu" 
        class="btn btn-danger"
        style="
                position: absolute;
                border: none;
                background-color: transparent;
                color: black;
            "
    >
        Quay lại
    </a>
        <div
            class="coat"
            style="
                display: flex;
                align-items: center;
                width: 100vw;
                height: 100vh;
                padding: 0 400px;
                background-color: #e8e8e8;
            "
        >
            <div
                class="container-fluid"
                style="
                        height: 97%;
                        padding: 30px;
                        background-color: white;
                        box-shadow: 0px 0px 10px rgba(128, 128, 128, 0.508);
                    "
            >
                <div
                    class="desc"
                    style="
                        text-align: center;
                        width: 100%;
                        font-size: 2rem;
                        font-weight: 600;
                    "
                >
                    Form thêm
                </div>
                <div class="form-group mt-3">
                    <label for="Manv"> Mã nhân viên</label>
                    <input
                        type="text"
                        name="Manv"
                        id="Manv"
                        class="form-control"
                        placeholder="Nhập mã nhân viên"
                      oninput="checkInput()"
                    />
                </div>
                <div class="form-group mt-3">
                    <label for="Tennv">Tên nhân viên</label>
                    <input
                        type="text"
                        name="Tennv"
                        id="Tennv"
                        class="form-control"
                        placeholder="Nhập tên nhân viên"
                      oninput="checkInput()"
                    />
                </div>
                <div class="form-group mt-3">
                    <label for="Sodt">Điện thoại</label>
                    <input
                        type="text"
                        name="Sodt"
                        id="Sodt"
                        class="form-control"
                        placeholder="Nhập số điện thoại"
                      oninput="checkInput()"
                    />
                </div>
                <div class="form-group mt-3">
                    <label for="Email">Email</label>
                    <input
                        type="text"
                        name="Email"
                        id="Email"
                        class="form-control"
                        placeholder="Nhập Email"
                      oninput="checkInput()"
                    />
                </div>
                <div class="form-group mt-3">
                    <label for="Diachi">Địa chỉ</label>
                    <input
                        type="text"
                        name="Diachi"
                        id="Diachi"
                        class="form-control"
                        placeholder="Nhập dia chi"
                      oninput="checkInput()"
                    />
        
                </div>

                <div class="form-group mt-3">
                    <label for="Chucvu">Chức vụ</label>
                    <input
                        type="text"
                        name="Chucvu"
                        id="Chucvu"
                        class="form-control"
                        placeholder="Nhập Chức vụ"
                      oninput="checkInput()"
                    />       
                </div>

                <div class="form-group mt-3">
                    <label for="Hocvi">Học vị</label>
                    <input
                        type="text"
                        name="Hocvi"
                        id="Hocvi"
                        class="form-control"
                        placeholder="Nhập Học Vị"
                      oninput="checkInput()"
                    />       
                </div>
                <div class="mt-5 d-flex align-items-center">
                    <button
                        type="submit"
                        id="btnThem"
                        class="btn btn-success mx-auto"
                        style="width: 100vw"
                    >
                        Xác nhận thêm
                    </button>
                </div>
            </div>
            </div>
        </form>
         <!-- <script src="<?=_WEB_HOST?>/public/script.js"></script> -->
    </body>
</html>
