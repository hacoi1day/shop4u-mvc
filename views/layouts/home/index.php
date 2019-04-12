<?php
    require_once 'config/url-base.php';
?>
<!doctype html>
<html lang="en">
<head>
    <?php require_once 'views/layouts/base/header.php'; ?>
    <title>Trang chủ - Book4U - Sách cho mọi người</title>
    <link rel="stylesheet" href="<?php echo $urlBase; ?>/views/assets/css/style.css">
</head>
<body>

    <div class="block-1">
        <?php
            require_once 'views/layouts/home/components/navbar.php';
        ?>
    </div>
<!--    end block-1-->

    <div class="block-2 my-3">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <?php
                        require_once 'views/layouts/home/components/slide.php';
                    ?>
                </div>
                <div class="col-3">
                    <?php
                        require_once 'views/layouts/home/components/two-product.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
<!--    end:block-2-->

    <div class="block-3 my-3">
        <?php
            require_once 'views/layouts/home/components/category.php';
        ?>
    </div>
<!--    end:block-3-->

    <div class="block-4 my-3">
        <?php
            require_once 'views/layouts/home/components/list-products.php';
        ?>
    </div>
<!--    end:block-4-->

    <div class="block-5">
        <?php
            require_once 'views/layouts/home/components/footer-1.php';
        ?>
    </div>
<!--    end:block-5-->

    <div class="block-6">
        <?php
            require_once 'views/layouts/home/components/footer-2.php';
        ?>
    </div>
<!--    end:block-6-->

</body>
</html>