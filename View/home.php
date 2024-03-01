<style>
    /* Hiệu ứng hover cho tiêu đề */
    h3.mb-5.font-weight-bold:hover::after {
        width: 70px;
        /* Chiều dài của đường gạch chân khi hover */
    }

    /* Hiệu ứng hover cho sản phẩm mới nhất */
    .product-container:hover {
        transform: scale(1.1);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    h3.mb-5.font-weight-bold {
        margin-top: 15px;
        color: #ff5733;
        /* Màu chữ */
        font-family: 'Arial', sans-serif;
        /* Font chữ */
        text-transform: uppercase;
        /* Chuyển đổi sang chữ in hoa */
        position: relative;
        display: inline-block;
        text-align: center;
    }

    h3.mb-5.font-weight-bold::after {
        content: '';
        display: block;
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    /* Hiệu ứng hover cho các sản phẩm */
    .product-container {
        font-family: 'Times New Roman', Times, serif;
        position: relative;
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
        background-color: #fff;
        /* Màu nền của sản phẩm */
        border-radius: 6px;
        /* Bo tròn góc sản phẩm */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Đổ bóng cho sản phẩm */
        margin: 0px;
    }

    .product-container:hover {
        transform: scale(1.05);
    }

    .product-image {
        width: 100%;
        height: 200px;
        transition: opacity 0.3s ease-in-out;
    }

    .product-container:hover .product-image {
        opacity: 0.7;
    }

    .product-details {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }

    .product-container:hover .product-details {
        opacity: 1;
    }

    .product-price {
        color: red;
        font-weight: bold;
    }

    .discount-price {
        text-decoration: line-through;
        color: #888;
    }

    .btn.btn-danger {
        background-color: #d9534f;
        color: white;
        border: none;
        padding: 8px 16px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    .btn.btn-danger:hover {
        background-color: #3e8e41;
    }

    /* Background cho trang web */
    body {
        background: #888 center center fixed;
        background-size: cover;
        margin: 0;
        padding: 0;
    }

    .row {
        background-color: white;
        border-radius: 5px;
    }

    .view-all-products a span:hover {
        color: #ff0000;
        /* Màu chữ đỏ khi hover */
    }

    .button1 {
        border-radius: 20px;
        font-size: 18px;
        font-family: 'Times New Roman', Times, serif;
        border-color: red;
        color: red;
        background-color: white;
        padding: 3px 10px 3px 10px;
        text-align: center;
    }

    .button1:hover {
        color: white;
        background-color: red;
    }

    .text-center {
        background-color: white;
    }

    .container {
        border-radius: 15px;
        margin-top: 5px;
    }
    .view-all-products {
        text-align: center;
    }
    .sanpham{
        margin-top: 10px;
    }
</style>
<!--Section: Examples-->
<section id="examples" class="sections">
    <div class="container">
        <div class="sanpham">
            <h3 class="mb-5 font-weight-bold">SẢN PHẨM MỚI NHẤT</h3>
        </div>
        </a>
        <div class="row">
            <?php
            $hh = new Shopcacanh();
            $result = $hh->getHangHoaNew();
            while ($set = $result->fetch()):
                ?>
                <!--Grid column-->
                <div class="col-lg-3 col-md-4 mb-3 text-left product-container">
                    <div class="view overlay z-depth-1-half">
                        <img src="Content/imagetourdien/<?php echo $set['hinh']; ?>" class="img-fluid product-image" alt="">
                        <div class="mask rgba-white-slight"></div>
                    </div>
                    <div class="product-details">
                        <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['masp']; ?>">
                            <span>
                                <?php echo $set['tensp']; ?></br></a>
                    </div>
                    <button class="btn btn-danger" id="may4" value="lap 4">New</button>
                </div>
                <?php
            endwhile;
            ?>

        </div>
        <!--Grid row-->
        <div class="view-all-products">
            <a href="index.php?action=sanpham">
                <button class="button1">Xem thêm </button>
            </a>
        </div>
    </div>
</section>
<!-- end sản phẩm mới nhất -->
<!-- sản phẩm khuyến mãi -->
<section id="examples" class="sections2">
    <div class="container">
        <div class="sanpham">
            <h3 class="mb-5 font-weight-bold" style="color: blue;">SẢN PHẨM KHUYẾN MÃI</h3>
        </div>
        <div class="row">
            <?php
            $result = $hh->getHangHoaSale();
            while ($set = $result->fetch()) {
                ?>
                <!--Grid column-->
                <div class="col-lg-3 col-md-4 mb-3 text-left product-container">

                    <div class="view overlay z-depth-1-half">
                        <img src="Content/imagetourdien/<?php echo $set['hinh']; ?>" class="img-fluid" alt="">
                        <div class="mask rgba-white-slight">
                            <?php echo $set['tensp']; ?>
                        </div>
                    </div>

                    <h5 class="my-4 font-weight-bold product-price">
                        <font color="red">
                            <?php echo $set['dongia']; ?><sup><u>đ</u></sup>
                        </font>
                        <strike class="discount-price">
                            <?php echo $set['giamgia']; ?>
                        </strike><sup><u>đ</u></sup>
                    </h5>
                    <button class="btn btn-danger" id="may4" value="lap 4">New</button>

                </div>
                <?php
            }
            ?>
        </div>
        <div class="view-all-products">
        <a href="index.php?action=sanpham&act=sanphamkhuyenmai">
            <button class="button1">Xem thêm </button>
        </a>
    </div>
    </div>
</section>