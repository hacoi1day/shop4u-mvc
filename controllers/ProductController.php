<?php

include_once 'models/Product.php';
include_once 'controllers/CategoryController.php';
class ProductController extends Product {

    public function show()
    {
        $count = $this->countProduct();
        $pages = ceil($count/10);
        if(!isset($_GET['page']))
            $page = 1;
        else
            $page = $_GET['page'];
        // get all categories
        $category = new Category();
        $categories = $category->getAll();
        // get products
        $products = $this->getProduct($page);
        include_once 'views/layouts/product/list.php';
    }

    public function add()
    {
        $category = new Category();
        $categories = $category->getAll();
//        echo '<pre>';
//        print_r($categories);
//        echo '</pre>';
        include_once 'views/layouts/product/add.php';
    }

    public function store()
    {
//        echo '<pre>';
//        print_r($_POST);
//        echo '</pre>';
        echo '<pre>';
        print_r($_FILES);
        echo '</pre>';
//        die();
        $name = $_POST['name'];
        $price = $_POST['price'];
        $category_id = $_POST['category_id'];
        $image = '';
        if(isset($_FILES['image']))
        {
            if($_FILES['image']['error'] == 0 && $_FILES['image']['type'] == 'image/jpeg')
            {
                move_uploaded_file($_FILES['image']['tmp_name'], 'data/images-new/' . $_FILES['image']['name']);
                $image = 'data/images-new/' . $_FILES['image']['name'];
            }
            else
            {
                echo 'File bị lỗi hoặc không đúng định dạng';
            }
        }
        else
        {
            echo 'Bạn chưa upload file';
        }
        // insert record vào database
        if($this->insertProduct($name, $price, $category_id, $image))
        {
            $url = 'http://' . $_SERVER['HTTP_HOST'] . '/mvc-test/product/show';
            header('Location: '. $url);
        }
        else
        {
            echo 'Fail';
        }

    }

    public function edit($id)
    {
        echo $id;
    }


}