<?php
class user{
    function insertKhachHang($tenkh,$username,$matkhau,$email,$diachi,$sodt)
    {
        $db=new connect();
        $query = "INSERT INTO khachhang (makh,tenkh,username,matkhau,email,diachi,sodienthoai)
        VALUES(NULL,'$tenkh','$username','$matkhau','$email','$diachi','$sodt')";
        $result = $db->exec($query);
        return $result;   
    }
//kiem tra
    function checkKhachHang($user,$email){
        $db=new connect();
        $select = "select * from khachang where username='$user' or email='$email'";
        $result = $db->getInstance($select);
        return $result;
    }

    function logKhachHang($user,$pass){
        $db=new connect();
        $select = "select a.makh, a.tenkh, a.username from khachhang a WHERE a.username='$user' and a.matkhau='$pass'";
        $result = $db->getInstance($select);
        return $result;
    }
    function checkemail($email){
        $db=new connect();
        $select = "select * from khachhang where email='$email'";
        $result = $db->getlist($select);
        return $result;
    }
}
?>