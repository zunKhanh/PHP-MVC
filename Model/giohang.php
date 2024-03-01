
<?php
    class giohang{
        // phương thức thêm thông tin vào trong gio hàng
        function addCart($mahh,$mausac,$size,$soluong)
        {
            // thiếu hình,thiếu tên, thiếu đơn giá.Từ id truy vấn ngược lại
            $sp=new Shopcacanh();
            $idsp=$sp->getcthh($mahh);
            // $hinh=$sp->getHangHoaIdCZ($mahh,$size,$mausac);
            $tensp=$idsp['tensp'];
            $dongia=$idsp['dongia'];
            $img=$idsp['hinh'];
            $mau=$idsp['mauca'];
            $total=$soluong*$dongia;
            $flag=false;
            foreach ($_SESSION['cart'] as $key =>$item){
                if($item['mahh']==$mahh && $item['mau']==$mausac && $item['size']==$size ){
                    // $index = $key;
                    $flag = true;
                    $soluong+=$_SESSION['cart'][$key]['qty'];
                    $this->update($key,$soluong);
                }
            }
            if($flag ==false){
                $item=array(
                    'mahh'=>$mahh,
                    'hinh'=>$img,
                    'name'=>$tensp,
                    'mau'=>$mausac,
                    'size'=>$size,
                    'cost'=>$dongia,
                    'qty'=>$soluong,
                    'total'=>$total,
                );
                // đem tối tượng đưa vào giỏ hàng a[]
                $_SESSION['cart'][]=$item;
            }
        }
        function sub_Total()
        {
            $subtotal=0;
            foreach ($_SESSION['cart'] as $item)
            {
                $subtotal+=$item['total'];
            }
            $subtotal=number_format($subtotal,2);
            return $subtotal;
        }
        // phuong thuc update
        function update($index,$soluong)
        {
            if($soluong<=0){
                unset($_SESSION['cart'][$index]);
            }else {
                //update tuc la phep gan
                $_SESSION['cart'][$index]['qty']=$soluong;
                //thanh tien thay doi
                $total_new = $_SESSION['cart'][$index]['qty']*$_SESSION['cart'][$index]['cost'];
                $_SESSION['cart'][$index]['total']=$total_new;
            }
        }
    }
?>