<style>
    /* Common styles */
    h3.mb-5.font-weight-bold:hover::after {
        width: 70px;
    }

    .product-container {
        font-family: 'Times New Roman', Times, serif;
        position: relative;
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
        background-color: #fff;
        border-radius: 6px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 0px;
        margin-bottom: 20px;
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
        text-align: center;
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
        position: absolute;
        bottom: 0;
        width: 100%;
        background-color: rgba(255, 255, 255, 0.9);
        padding: 10px;
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

    /* Pagination Styles */
    .pagination {
        display: flex;
        list-style: none;
        padding: 0;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination li {
        margin: 0 5px;
    }

    .pagination a {
        display: block;
        padding: 10px 15px;
        text-decoration: none;
        color: #fff;
        background-color: #dc3545;
        border-radius: 5px;
        transition: background-color 0.3s ease-in-out;
    }

    .pagination a:hover {
        background-color: #bd2130;
    }

    .pagination .active a {
        background-color: #bd2130;
    }

    .pagination span {
        display: block;
        padding: 10px 15px;
        background-color: #dc3545;
        color: #fff;
        border-radius: 5px;
    }
    .containeer{
      background-color: white;
      border-radius: 10px;
      margin-left: 15px;
      margin-right: 15px;
    }
</style>

<?php
$hh = new Shopcacanh();
$count = $hh->gethanghoaall()->rowCount();
$limit = 4;
$trang = new page();
$page = $trang->findpage($count, $limit);
$start = $trang->findstart($limit);
$current_page = isset($_GET['page']) ? ($_GET['page']) : 1;
?>
<?php
$ac = 1;
if (isset($_GET['action'])) {
  if (($_GET['action'] == 'sanpham')) {
    if (isset($_GET['act']) && $_GET['act'] == 'sanphamcachuot') {
      $ac = 4;
    }
    if (isset($_GET['act']) && $_GET['act'] == 'sanphamcadia') {
      $ac = 3;
    }
    if (isset($_GET['act']) && $_GET['act'] == 'sanphamkhuyenmai') {
      $ac = 2;
    }
    // else{
    //     $ac =1;
    // }
  }
}
?>
<div class="containeer">
<section id="examples" class="text-center">
  <div class="row">
    <div class="col-lg-8 text-right">
      <?php
      if ($ac == 1) {
        echo '<h3 class="mb-5 font-weight-bold" style="color: red;">Tất cả sản phẩm</h3>';
      }
      if ($ac == 2) {
        echo '<h3 class="mb-5 font-weight-bold" style="color: red;">Tất cả sản phẩm khuyến mãi</h3>';
      }
      ?>
    </div>
  </div>
  <div class="row">
    <?php
    $hh = new Shopcacanh();
    if ($ac == 1) {
      $result = $hh->gethanghoaallpage($start, $limit);
    }
    if ($ac == 2) {
      $result = $hh->gethanghoaallsale();
    }
    if ($ac == 3) {
      $result = $hh->getsanphamcadia();
    }
    if ($ac == 4) {
      $result = $hh->getsanphamcachuot();
    }
    while ($set = $result->fetch()) {
      ?>
      <div class="col-lg-3 col-md-4 mb-3 text-left">
        <div class="product-container">
          <img src="Content/imagetourdien/<?php echo $set['hinh']; ?>" class="product-image" alt="">
          <div class="product-details">
            <h4><?php echo $set['tensp']; ?></h4>
            <?php
            if ($ac == 1) {
              echo '<h5 class="my-4 product-price" style="color : red">' . number_format($set['dongia']) . '<sup><u>đ</u></sup></h5>';
            }
            if ($ac == 2) {
              echo '<h5 class="my-4 product-price">
                    <font color="red"><sup><u>' . number_format($set['dongia']) . 'đ</u></sup></font>
                    <strike class="discount-price">' . number_format($set['giamgia']) . '</strike><sup><u>đ</u></sup>';
            }
            ?>
            </h5>
            <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['masp']; ?>">
              <span><?php echo $set['tensp']; ?></span><br>
            </a>
            <button class="btn btn-danger" id="may4" value="lap 4">New</button>
          </div>
        </div>
      </div>
      <?php
    }
    ?>
  </div>
</section>
<div class="col-md-6 div col-md-offset-3">
  <ul class="pagination">
    <?php
    for ($i = 1; $i <= $page; $i++):
      ?>
      <li><a href="./index.php?action=sanpham&page=<?php echo $i; ?>">
          <?php echo $i; ?>
        </a></li>
    <?php endfor; ?>
  </ul>
</div>
</div>

