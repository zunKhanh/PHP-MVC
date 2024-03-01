<style>
    .navber {
        padding-top: 30px;
    }

    .top-banner img {
        display: block;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 99;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }

    .nav-item {
        cursor: pointer;
        transition: color 0.3s;
    }

    .nav-item:hover {
        color: #3e8e41;
        /* Màu khi di chuột qua */
    }

    .dropdown-content {
        transition: opacity 0.3s;
    }

    .dropdown:hover .dropdown-content {
        opacity: 1;
    }

    .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: white;
        padding: 10px;
    }

    .logo {
        display: flex;
        align-items: center;
    }

    .logo img {
        width: 50px;
        height: 50px;
    }

    .logo p {
        font-size: 20px;
        font-weight: bold;
        color: #00a0e9;
        margin-left: 10px;
    }

    .search {
        display: flex;
        align-items: center;
        border: 1px solid #00a0e9;
        border-radius: 5px;
        width: 300px;
    }

    .search input {
        width: 80%;
        padding: 5px;
        border: none;
        outline: none;
    }

    .search button {
        width: 20%;
        padding: 5px;
        border: none;
        background-color: #00a0e9;
        color: white;
        cursor: pointer;
    }

    .menu {
        display: flex;
        align-items: center;
    }

    .menu a {
        display: flex;
        align-items: center;
        color: #00a0e9;
        text-decoration: none;
        margin-right: 10px;
    }

    .menu a i {
        margin-right: 5px;
    }

    .username:hover {
        color: blue;
        /* Change the color to your desired hover color */
        cursor: pointer;
    }

    .nav-bar1 {
        padding-left: 100px;
        width: 100%;
        height: 80px;
        background-color: white;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        
    }

    .menu1 {
        width: 80%;
        height: 100%;
        display: flex;
        align-items: center;
    }

    .menu1 ul {
        list-style: none;
        display: flex;
        margin: 0;
        padding: 0;
    }

    .menu1 li {
        margin-right: 20px;
    }

    .menu1 a {
        display: block;
        color: black;
        text-decoration: none;
        font-size: 16px;
        font-weight: bold;
        padding: 10px;
    }

    .menu1 a:hover {
        color: red;
    }

    .dropdown1 {
        position: relative;

    }

    .dropdown-content1 {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: white;
        width: 200px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        z-index: 1;
        margin-top: 5px
    }

    .dropdown-content1 a {
        display: block;
        padding: 10px;
        color: black;
        font-size: 14px;
        font-weight: normal;
    }

    .dropdown-content1 a:hover {
        background-color: #f0f0f0;
        
    }

    .dropbtn1:hover+.dropdown-content1 {
        display: block;
        
    }

    .shopee1 {
        margin-left: auto;
        margin-right: 20px;
    }

    .shopee1 img {
        width: 40px;
        height: 40px;
        object-fit: contain;
    }
</style>

<header class="row no-gutters">
    <!-- nav san pham -->
    <section class="col-12" style="height:40px;">
        <div class="col-12">
            <div class="row">
                <!-- test -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top scrolling-navbar"
                    style="margin-bottom: 0px;">
                    <img class="img-fluid"
                        src="//bizweb.dktcdn.net/100/441/675/themes/925183/assets/top_banner.jpg?1704812507086"
                        alt="top-banner">
                    <div class="collapse navbar-collapse" id="basicExampleNav">

                        <!-- Links -->
                        <ul class="navbar-nav mr-auto smooth-scroll">

                        </ul>
                    </div>
                </nav>
                <!-- end test -->
            </div>
        </div>
    </section>
    <div class="navbar">
        <div class="logo">
            <img src="./Content/imagetourdien/logo.webp" alt="fish icon">
            <p>THIEN DUC AQUARIUM</p>
        </div>
        <div class="search">
            <input type="text" placeholder="thức ăn cá">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
        <div class="menu">
            <a href="#"><i class="fa fa-phone"></i> Hỗ Trợ Khách Hàng</a> <br>
            <a href="#"><i class="fa fa-phone"></i> 0562134100</a>

            <?php if (isset($_SESSION['makh'])): ?>
                <span>
                    <i class="fa fa-user"></i>
                    <span class="username" style="color: red; margin-top: 20px; margin-left: 0px;">
                        <?php echo $_SESSION['tenkh']; ?>
                    </span>
                    <a href="index.php?action=dangnhap&act=dangxuat" class="nav-item">Đăng Xuất</a>
                </span>
                <a href="index.php?action=giohang"><i class="fa fa-shopping-cart"></i> Giỏ Hàng 0</a>
            <?php else: ?>
                <a href="index.php?action=dangnhap"><i class="fa fa-user"></i> Đăng Nhập</a>
                <a href="#"><i class="fa fa-shopping-cart"></i> Giỏ Hàng 0</a>
            <?php endif; ?>
        </div>

    </div>
    <!-- dang ky -->
    <section class="col-12">
        <div class="col-12">
            <div class="row">
                <div class="nav-bar1">
                    <div class="menu1">
                        <ul>
                            <li><a href="http://localhost/PHP2/DoAnCuoiKy/">TRANG CHỦ</a></li>
                            <li class="dropdown1">
                                <a href="#" class="dropbtn1">DANH SÁCH SẢN PHẨM</a>
                                <div class="dropdown-content1">
                                    <a href="index.php?action=sanpham&act=sanphamcadia">Cá Neon</a>
                                    <a href="index.php?action=sanpham&act=sanphamcadia">Cá Đĩa</a>
                                    <a href="index.php?action=sanpham&act=sanphamcachuot">Cá Chuột</a>
                                    <a href="#">Cá Thần Tiên</a>
                                </div>
                            </li>
                            <li><a href="#">VIDEO</a></li>
                            <li><a href="#">MẪU HỒ CHƠI CÁ</a></li>
                            <li><a href="#">KIẾN THỨC NUÔI CÁ</a></li>
                            <li><a href="#">GIỚI THIỆU</a></li>
                            <li class="shopee1"><a href="#"><img src="shopee.png" alt="Mua tai Shopee"></a></li>
                        </ul>
                    </div>
                </div>

                <!-- <nav class="navbar navbar-expand-lg n navbar-light bg-light" style="margin-bottom: 0px; ">
                    <div class="row">
                        <div class="dropdown">
                            <button class="dropbtn">DANH SÁCH SẢN PHẨM</button>
                            <div class="dropdown-content">
                                <a href="index.php?action=sanpham&act=sanphamcadia">Cá Neon</a>
                                <a href="index.php?action=sanpham&act=sanphamcadia">Cá Đĩa</a>
                                <a href="index.php?action=sanpham&act=sanphamcachuot">Cá Chuột</a>
                                <a href="#">Cá Thần Tiên</a>
                            </div>
                        </div>
                    </div>
                </nav> -->
            </div>
        </div>

    </section>
    <div class="header">

    </div>

</header>
<!-- dang ky -->

<!-- hinh dộng -->
<!-- <div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="2"></li>

                    </ol>
                    <div class="carousel-inner z-depth-1-half" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="./Content/imagetourdien/slider_1.webp"
                                style="height: 400px;" alt=" First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./Content/imagetourdien/slider_1.webp"
                                style="height: 400px;" alt="Second slide">
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./Content/imagetourdien/slider_1.webp" alt="Third slide"
                                style="height: 400px;">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div> -->