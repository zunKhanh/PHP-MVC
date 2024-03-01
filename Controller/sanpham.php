<?php
//controller dieu phoi den view ten la san pham
$act = "sanpham";
if (isset($_GET['act'])) {
    $act = $_GET['act']; //san pham khuyen mai
}
switch ($act) {
    case 'sanpham':
        include_once "./View/sanpham.php";
        break;
    case 'sanphamkhuyenmai':
        include_once "./View/sanpham.php";
        break;
    case 'sanphamchitiet':
        include_once "./View/sanphamchitiet.php";
        break;
    case 'sanphamcadia':
        include_once "./View/sanpham.php";
        break;

        case 'sanphamcachuot':
            include_once "./View/sanpham.php";
            break;
}
?>