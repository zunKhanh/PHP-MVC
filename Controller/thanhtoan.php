<?php
    if(isset($_SESSION['makh']))
    {
        $makh=$_SESSION['makh'];
        $hd= new hoadon();
        $sohd=$hd->inserthoadon($makh);
        $total=0;
        foreach($_SESSION['cart'] as $key =>$item){
            $hd->insertcthoadon($sohd,$item['mahh'],$item['qty'],$item['mau'],$item['size'],$item['total']);
            $total+=$item['total'];
        }
        $hd->updatehoadon($sohd,$makh,$total);
        $_SESSION['masohd']=$sohd;
    }
    include_once "./View/order.php";
    unset($_SESSION['cart']);
?>