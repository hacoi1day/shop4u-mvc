<?php
require_once 'config/url-base.php';
?>
<!doctype html>
<html lang="en">
<head>
    <?php require_once 'views/layouts/base/header.php'; ?>
    <title>Đăng ký - Book4U - Sách cho mọi người | Sửa sản phẩm</title>
    <link rel="stylesheet" href="<?php echo $urlBase; ?>/views/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $urlBase; ?>/views/assets/css/user.css">
</head>
<body>

<div class="block-1">
    <?php
    require_once 'views/layouts/base/navbar.php';
    ?>
</div>

<!--begin:edit-product-->
<div class="edit-product my-4">
    <div class="container">
        <div class="row">
            edit
        </div>
    </div>
</div>
<!--end:edit-product-->

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