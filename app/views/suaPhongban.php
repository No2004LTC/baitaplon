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

        <title>Sửa sản phẩm</title>
    </head>
    <body>
        <form action="" method="post">
        <a 
            href="<?=_WEB_HOST?>/Sanpham" 
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
                    Form sửa
                </div>    

                <div class="form-group mt-3">
                    <label for="mapb">Mã sản phẩm</label>
                    <input type="text" name='mapb' id="mapb" class="form-control" value="<?php echo $table[0]['mapb'] ?>" readonly>
                </div>
                <div class="form-group mt-3">
                    <label for="tenpb">Tên sản phẩm</label>
                    <input type="text" name='tenpb' id="tenpb" class="form-control" value="<?php echo $table[0]['tenpb'] ?>" required>
                </div>
                
                <div class="mt-5 d-flex align-items-center">
                    <button
                        type="submit"
                        id="btnSua"
                        class="btn btn-success mx-auto"
                        style="width: 100vw"
                    >
                        Xác nhận sửa
                    </button>
                </div>
            
        </div>
        </div>
        </form>
        <!-- <script src="<?=_WEB_HOST?>/public/script.js"></script> -->
    </body>
</html>
