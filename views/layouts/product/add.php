<?php
require_once 'config/url-base.php';
?>
<!doctype html>
<html lang="en">
<head>
    <?php require_once 'views/layouts/base/header.php'; ?>
    <title>Đăng ký - Book4U - Sách cho mọi người | Thêm sản phẩm</title>
    <link rel="stylesheet" href="<?php echo $urlBase; ?>/views/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $urlBase; ?>/views/assets/css/user.css">
</head>
<body>

<div class="block-1">
    <?php
    require_once 'views/layouts/base/navbar.php';
    ?>
</div>

<!--begin:add-product-->
<div class="add-product my-4">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3>thêm sách</h3>
            </div>
            <div class="col-8 offset-2">
                <form action="<?php echo $urlBase; ?>/product/store" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" class="form-control" name="name" id="name"placeholder="name" required>
                    </div>
                    <div class="form-group">
                        <label for="price">price</label>
                        <input type="number" class="form-control" name="price" id="price"placeholder="price" required>
                    </div>
                    <div class="form-group">
                        <label for="image">image</label>
                        <input type="file" class="form-control-file" name="image" id="image">
                    </div>
                    <div class="form-group">
                        <label for="category">category</label>
                        <select class="form-control" id="category" name="category_id">
                            <option value="0">select category</option>
                            <?php foreach ($categories as $category) { ?>
                            <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">add</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--end:add-product-->

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