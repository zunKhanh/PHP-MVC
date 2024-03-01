<?php
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$act = "giohang";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'giohang':
        include_once "./view/cart.php";
        break;

    case 'giohang_action':
        $id = 0;
        $mausac = "";
        $size = "";
        $soluong = 0;
        
        if (isset($_POST['mahh'])) {
            $id = $_POST['mahh'];
            $mausac = $_POST['mymausac'];
            $size = $_POST['size'];
            $soluong = $_POST['soluong'];
            $gh = new giohang();
            $gh->addCart($id,$mausac,$size,$soluong);
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
         }
         break;
}

?>
