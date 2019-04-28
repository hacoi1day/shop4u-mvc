<div class="list-products">
    <div class="container">
        <?php foreach ($productsAll as $product) { ?>
        <div class="row">
            <div class="col-12">
                <h5 class="big-title"><?php echo $product['category_name']; ?></h5>
                <hr class="line">
            </div>
            <?php foreach ($product['products'] as $pro) { ?>
            <div class="col-3">
                <div class="_1product">
                    <img class="image" src="<?php echo $urlBase; ?>/<?php echo $pro['image'] ?>" alt="ảnh sản phẩm">
                    <h6 class="title">
                        <?php
                            if(strlen($pro['name']) > 35)
                            {
                                $name = substr($pro['name'], 0, 32);
                                $name = $name . '...';
                                echo $name;
                            } else {
                                echo $pro['name'];
                            }
                        ?>
                    </h6>
<!--                    <span class="author">Tác giả</span>-->
                    <span class="price"><?php echo $pro['price'] ?> VND</span>
<!--                    <div class="evaluate">-->
<!--                        <ul style="list-style-type: none;">-->
<!--                            <li><span><i class="fas fa-star"></i></span></li>-->
<!--                            <li><span><i class="fas fa-star"></i></span></li>-->
<!--                            <li><span><i class="fas fa-star"></i></span></li>-->
<!--                            <li><span><i class="fas fa-star"></i></span></li>-->
<!--                            <li><span><i class="fas fa-star"></i></span></li>-->
<!--                        </ul>-->
<!--                    </div>-->
                </div>
            </div>
            <?php } ?>
        </div>
        <?php } ?>

    </div>
</div>