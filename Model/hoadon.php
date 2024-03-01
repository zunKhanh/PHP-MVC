<?php

class HoaDon {

    public function insertHoaDon($makh) {
        $db = new Connect();
        $date = new DateTime('now');
        $ngay = $date->format('Y-m-d');
        $query = "INSERT INTO hoadon(masohd, makh, ngaydat, tongtien) VALUES (NULL, $makh, '$ngay', 0)";
        $db->exec($query);

        $select = "SELECT masohd FROM hoadon ORDER BY masohd DESC LIMIT 1";
        $sohd = $db->getInstance($select);
        return $sohd[0];
    }

    public function insertCTHoaDon($masohd, $mahh, $soluongmua, $mausac, $size, $tongtien) {
        $db = new Connect();
        $query = "INSERT INTO cthoadon (masohd, mahh, soluongmua, mausac, size, tongtien, tinhtrang) VALUES ($masohd, $mahh, $soluongmua, '$mausac', $size, $tongtien, 0)";
        $db->exec($query);
    }

    public function updateHoaDon($masohd, $makh, $tongtien) {
        $db = new Connect();
        $query = "UPDATE hoadon SET tongtien=$tongtien WHERE masohd=$masohd AND makh=$makh";
        $db->exec($query);
    }
    public function getkhachhanghd($masohd) {
        $db = new Connect();
        $select = "select  a.masohd, b.tenkh, b.diachi, b.sodienthoai, a.ngaydat from hoadon a, khachhang b where 
        a.makh=b.makh and a.masohd=$masohd";
        $result=$db->getInstance($select);
        return $result;
    }
    public function gethanghoahd($masohd) {
        $db = new Connect();
        $select = "select DISTINCT a.masohd, c.tensp, a.mausac, a.size, b.dongia, a.soluongmua from cthoadon a, ctsanpham b, sanpham c where 
        a.mahh=b.idsanpham and c.masp=b.idsanpham and a.masohd=$masohd";
        $result=$db->getlist($select);
        return $result;
    }
}

?>