<?php
$act  = "dangky";
if (isset($_GET['act']))
{
    $act = $_GET['act'];
}
switch ($act){
    case 'dangky':
        include_once "./View/registration.php";
        break;
    case 'dangky_action':
        // gui qua dangky nhung thong tin tren form(input,select)
        $tenkh = '';
        $dc='';
        $sdt ='';
        $user='';
        $pass ='';
        $email='';
        if(isset($_POST['submit']))
        {
            $tenkh = $_POST['txttenkh'];
            $dc=$_POST['txtdiachi'];
            $sodt =$_POST['txtsodt'];
            $user=$_POST['txtusername'];
            $pass =$_POST['txtpass'];
            $email=$_POST['txtemail'];
            $saltF="G4335#";
            $saltT="F5567#";
            $passnew = md5($saltF.$pass.$saltT);
            // controller yeu cau model phai insert vao database
            $kh=new user();
            $kq=$kh->insertKhachHang($tenkh,$user,$passnew,$email,$dc,$sodt);
            if($kq!==false)
            {
                echo '<script> alert ("DAng ky thanh cong!");</script>';
                include_once "./View/home.php";
            }else{
                echo '<script> alert ("DAng ky khong thanh cong!");</script>';
                include_once "./View/registration.php";
            }
        }
        break;
}

?>