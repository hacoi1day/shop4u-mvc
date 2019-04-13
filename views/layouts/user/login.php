<?php
require_once 'config/url-base.php';
?>
<!doctype html>
<html lang="en">
<head>
    <?php require_once 'views/layouts/base/header.php'; ?>
    <title>Đăng nhập - Book4U - Sách cho mọi người</title>
    <link rel="stylesheet" href="<?php echo $urlBase; ?>/views/assets/css/style.css">
</head>
<body>

<div class="block-1">
    <?php
    require_once 'views/layouts/base/navbar.php';
    ?>
</div>

<!--begin:login-->
<div class="login">
    <form action="<?php echo $urlBase; ?>/user/doLogin" method="post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="email">
            <small id="email" class="form-text text-muted">Thông tin email chưa chính xác</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="mật khẩu">
        </div>
        <button type="submit" class="btn btn-primary">Đăng nhập</button>
    </form>
</div>
<!--end:login-->

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