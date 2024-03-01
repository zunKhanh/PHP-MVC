<?php
class Shopcacanh
{
    // phương thức hiên thị sản phẩm new
    function getHangHoaNew()
    {
        //B1: kết nối đc với dữ liệu
        $db = new connect();
        // b2: cần lấy cái gì thì truy vấn cái đó
        $select = "select a.masp ,a.tensp , b.hinh, b.dongia, c.mauca from sanpham a,ctsanpham b, mauca c 
            WHERE a.masp=b.idsanpham and b.idmau=c.idmau ORDER by a.masp  DESC LIMIT 8";
        //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
        $result = $db->getList($select);
        return $result; // lấy được dữ liệu về
    }
    function getHangHoaSale()
    {
        //B1: kết nối đc với dữ liệu
        $db = new connect();
        // b2: cần lấy cái gì thì truy vấn cái đó
        $select = "select a.masp ,a.tensp ,b.hinh,b.dongia,b.giamgia,c.mauca from sanpham a,ctsanpham b, mauca c 
             WHERE a.masp =b.idsanpham and b.idmau=c.idmau and b.giamgia!=0 ORDER by a.masp  DESC LIMIT 4";
        //b3: ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt 
        $result = $db->getList($select);
        return $result; // lấy được dữ liệu về
    }
    function gethanghoaall()
    {
        $db = new connect();
        $select = "select a.masp ,a.tensp ,b.hinh,b.dongia,b.giamgia,c.mauca from sanpham a,ctsanpham b, mauca c 
            WHERE a.masp =b.idsanpham and b.idmau=c.idmau  ORDER by a.masp  DESC";
        $result = $db->getList($select);
        return $result;
    }
    function gethanghoaallsale()
    {
        $db = new connect();
        $select = "select a.masp ,a.tensp ,b.hinh,b.dongia,b.giamgia,c.mauca from sanpham a,ctsanpham b, mauca c 
            WHERE a.masp =b.idsanpham and b.idmau=c.idmau and b.giamgia!=0 ORDER by a.masp  DESC";
        $result = $db->getList($select);
        return $result;
    }
    //phan trang cho san pham
    function gethanghoaallpage($start, $limit)
    {
        $db = new connect();
        $select = "select a.masp ,a.tensp ,b.hinh,b.dongia,b.giamgia,c.mauca from sanpham a,ctsanpham b, mauca c 
            WHERE a.masp =b.idsanpham and b.idmau=c.idmau  ORDER by a.masp  DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }
    function gethanghoaid($id)
    {
        $db = new connect();
        $select = "select DISTINCT a.masp, a.tensp, a.mota, b.dongia from sanpham a, ctsanpham b where a.masp=b.idsanpham and a.masp=$id";
        $result = $db->getInstance($select);
        return $result;
    }
    function gethanghoahinh($id)
    {
        $db = new connect();
        $select = "select DISTINCT a.hinh from sanpham a where  a.masp=$id";
        $result = $db->getList($select);
        return $result;
    }
    function getsanphamcadia()
    {
        $db = new connect();
        $select = "select a.tensp,a.masp, a.hinh, a.maloai, b.dongia, b.giamgia, b.idsanpham, c.maloai from sanpham a, ctsanpham b, loai c where a.maloai = c.maloai and a.masp= b.idsanpham and a.maloai=1 ";
        $result = $db->getList($select);
        return $result;
    }
    function getsanphamcachuot()
    {
        $db = new connect();
        $select = "SELECT a.tensp,a.masp, a.hinh, a.maloai, b.dongia, b.giamgia, b.idsanpham, c.maloai from sanpham a, ctsanpham b, loai c where a.maloai = c.maloai and a.masp= b.idsanpham and a.maloai=2 ";
        $result = $db->getList($select);
        return $result;
    }
    function gethanghoamau($id)
    {
        $db = new connect();
        $select = "SELECT DISTINCT a.idmau, b.mauca from ctsanpham a, mauca b WHERE a.idmau=b.idmau and a.idsanpham=$id";
        $result = $db->getList($select);
        return $result;
    }
    function gethanghoasize($id)
    {
        $db = new connect();
        $select = "SELECT DISTINCT a.idsize, b.size from ctsanpham a, sizeca b WHERE a.idsize=b.idsize and a.idsanpham=$id";
        $result = $db->getList($select);
        return $result;
    }
    function getcthh($id)
    {
        $db = new connect();
        $select = "SELECT DISTINCT * from sanpham a, ctsanpham b where a.masp=$id and  a.masp=b.idsanpham";
        $_result = $db->getInstance($select);
        return $_result;
    }
}
?>