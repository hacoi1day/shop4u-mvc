<!--begin:navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="<?php echo $urlBase; ?>">Book4U</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="#">Sách bán chạy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sách mới</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $urlBase; ?>/product/show">Danh sách toàn bộ sách</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $urlBase; ?>/product/add">Thêm sách</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $urlBase; ?>/category/show">Danh sách danh mục</a>
            </li>
        </ul>
        <ul class="navbar-nav float-right">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $urlBase; ?>/user/register">Đăng ký</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $urlBase; ?>/user/login">Đăng nhập</a>
            </li>
        </ul>
    </div>
</nav>
<!--end:navbar-->