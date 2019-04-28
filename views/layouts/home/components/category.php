<!--begin:category-->
<div class="category">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex bd-highlight">
                    <?php foreach ($categories as $category) { ?>
                    <div class="p-2 flex-fill">
                        <div class="_1category text-center">
                            <img src="<?php echo $urlBase; ?>/views/assets/images/category/book.png" alt="logo-category">
                            <a href=""><h6 class="title-category"><?php echo $category['name'] ?></h6></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end:category-->