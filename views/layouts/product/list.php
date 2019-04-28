<?php
require_once 'config/url-base.php';
?>
<!doctype html>
<html lang="en">
<head>
    <?php require_once 'views/layouts/base/header.php'; ?>
    <title>Đăng ký - Book4U - Sách cho mọi người | Danh sách sản phẩm</title>
    <link rel="stylesheet" href="<?php echo $urlBase; ?>/views/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $urlBase; ?>/views/assets/css/user.css">
</head>
<body>

<div class="block-1">
    <?php
    require_once 'views/layouts/base/navbar.php';
    ?>
</div>

<!--begin:list-product-->
<div class="list-product my-4">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3>danh sách sản phẩm</h3>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">image</th>
                        <th scope="col">name</th>
                        <th scope="col">price</th>
                        <th scope="col">category</th>
                        <th scope="col">action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i = ($page-1)*10 + 1;
                        foreach ($products as $product) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td>
                            <img width="100%" src="<?php echo $url = 'http://' . $_SERVER['HTTP_HOST']. '/mvc-test/' . $product['image']; ?>" alt="image product">
                        </td>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['price']; ?></td>
                        <td><?php
                                foreach ($categories as $category)
                                {
                                    if($category['id'] == $product['category_id'])
                                    {
                                        echo $category['name'];
                                    }
                                }
                            ?>
                        </td>

                        <td>
                            <a href="<?php echo $url = 'http://' . $_SERVER['HTTP_HOST']; ?>/mvc-test/product/edit/<?php echo $product['id']; ?>">Edit</a>
                            <a href="">Delete</a>
                        </td>
                    </tr>
                    <?php
                            $i++;
                        }
                    ?>

                    </tbody>
                </table>
            </div>
            <div class="col-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item <?php echo ($page == 1) ? "disabled" : ""; ?>"><a class="page-link" href="?page=<?php echo $page-1; ?>">Previous</a></li>
                        <?php
                            for ($i = 1; $i <= $pages; $i++) {
                        ?>
                        <li class="page-item <?php echo ($page == $i) ? "active" : ""; ?>"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php
                            }
                        ?>
                        <li class="page-item <?php echo ($page == $pages) ? "disabled" : ""; ?>"><a class="page-link" href="?page=<?php echo $page+1; ?>">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--end:list-product-->

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