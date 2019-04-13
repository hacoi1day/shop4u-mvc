<?php

require_once 'models/User.php';
class UserController extends User {
    public function index()
    {
        $s = parent::getString();
        include 'views/layouts/user/index.php';
    }

    public function register()
    {
        include 'views/layouts/user/register.php';
    }

    public function doRegister()
    {
        session_destroy();
        // lấy dữ liệu gửi lên từ Form
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordAgain = $_POST['passwordAgain'];

        $err = array();
        // kiểm tra mật khẩu nhập lại
        if($password != $passwordAgain) {
            array_push($err,'Mật khẩu nhập lại không chính xác');
        }
        // kiểm tra email
//        if(true) {
//            array_push($err, 'Email đã tồn tại');
//        }
        if(count($err) > 0) {
            $_SESSION['errors'] = $err;
        }


//        echo '<pre>';
//        print_r($_SESSION['errors']);
//        echo '</pre>';

//        var_dump(count($_SESSION['errors']));

        // đã xong
        if(!isset($_SERVER['errors'])) {
            // thêm dữ liệu vào cơ sở dữ liệu
            // gọi model
            echo parent::getEmail();
            echo "Done";
        } else {
            echo "No done";
            // redirect về trang chủ
            $url = 'http://' . $_SERVER['HTTP_HOST'] . '/mvc-test/user/login';
            echo $url;
            header('Location: '. $url);
        }



    }

    public function login()
    {
        include 'views/layouts/user/login.php';
    }

    public function doLogin()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo $email . ' - ' . $password;
    }
}