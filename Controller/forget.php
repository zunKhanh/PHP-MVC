<?php
$act = 'forget';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'forget':
        include_once "./View/forgetpassword.php";
        break;

    case 'forget_action':
        if (isset($_POST['submit_email'])) {
            $email = $_POST['email'];
            $_SESSION['email'] = array();
            $kh = new user();
            $checkemail = $kh->checkemail($email)->rowCount();
            if ($checkemail > 0) {
                $code = random_int(10000, 1000000);
                $item = array(
                    'id' => $code,
                    'email' => $email,
                );
                $_SESSION['email'][] = $item;

                // tiến hành gửi mail
                $mail = new PHPMailer();
                $mail->CharSet = "utf-8";
                $mail->IsSMTP();
                // enable SMTP authentication
                $mail->SMTPAuth = true;
                // GMAIL username to:
                // $mail->Username = "php22023@gmail.com";//
                $mail->Username = "pponkyu@gmail.com"; // địa chỉ của trang web
                // GMAIL password
                // $mail->Password = "php22023ngoc";
                $mail->Password = "bakg fflv iaer awfg"; //mật khẩu ứng dụng
                $mail->SMTPSecure = "tls";  // ssl
                // sets GMAIL as the SMTP server
                $mail->Host = "smtp.gmail.com";
                // set the SMTP port for the GMAIL server
                $mail->Port = "587"; // 465
                $mail->From = 'pponkyu@gmail.com';
                $mail->FromName = 'Trung Khanh_501220713';
                // $getemail là địa chỉ mail mà người nhập vào địa chỉ của họ đã đăng ký trong trang web
                $mail->AddAddress($email, 'reciever_name');
                $mail->Subject = 'Reset Password';
                $mail->IsHTML(true);
                $mail->Body = 'Cấp lại mã code '. $code . '';
                if ($mail->Send()) {
                    echo '<script> alert("Check Your Email and Click on the
                link sent to your email");</script>';
                    include "./View/resetpw.php";
                } else {
                    echo "Mail Error - >" . $mail->ErrorInfo;
                    include "./View/forgetpassword.php";
                }
                // include "./View/resetpw.php";
            } else {
                echo '<script> alert("Địa chỉ mail ko tồn tại");</script>';
                include "./View/forgetpassword.php";
            }
        }
        break;
    }
//     case 'reser':
//         if(isset($_POST['submit_password']))
//         {
//             $pass=$_POST['password'];
//             foreach()
//         }
//         break;
// }
?>