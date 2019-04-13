<?php
require_once 'config/url-base.php';
?>
<!doctype html>
<html lang="en">
<head>
    <?php require_once 'views/layouts/base/header.php'; ?>
    <title>Đăng ký - Book4U - Sách cho mọi người</title>
    <link rel="stylesheet" href="<?php echo $urlBase; ?>/views/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $urlBase; ?>/views/assets/css/user.css">

</head>
<body>

<div class="block-1">
    <?php
    require_once 'views/layouts/base/navbar.php';
    ?>
</div>

<!--begin:register-->
<div class="register my-3">
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <h4 class="title">Đăng ký</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php
                    if(isset($_SESSION['errors']) > 0) {
                        echo '<pre>';
                        print_r($_SESSION['errors']);
                        echo '<pre>';
                    }
                ?>
            </div>
            <div class="col-6 offset-3">
                <form action="<?php echo $urlBase; ?>/user/doRegister" method="post">
                    <div class="form-group">
                        <label for="name">Tên người dùng</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="tên người dùng" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
                        <small id="email" class="form-text text-muted">Thông tin email chưa chính xác</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="mật khẩu" required>
                    </div>
                    <div class="form-group">
                        <label for="passwordAgain">Password</label>
                        <input type="password" class="form-control" name="passwordAgain" id="passwordAgain" placeholder="nhập lại mật khẩu" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>

</div>
<!--end:register-->

<div class="block-5">
    <?php
    require_once 'views/layouts/base/footer-1.php';
    ?>
</div>
<!--    end:block-5-->

<div class="block-6">
    <?php
    require_once 'views/layouts/base/footer-2.php';
    ?>
</div>
<!--    end:block-6-->

</body>
</html>