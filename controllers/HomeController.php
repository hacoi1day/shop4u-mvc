<?php

include_once 'models/Category.php';
include_once 'models/Product.php';
class HomeController {
    public function index()
    {
        $categories = new Category();
        $categories = $categories->getAll();

        $productsAll = [];

        foreach ($categories as $category)
        {
//            echo '<pre>';
//            print_r($category);
//            echo '</pre>';
            $product = new Product();
            $products = $product->getProductsByCategoryId($category['id']);
//            array_push($productsAll, $products);
            $productsAll[] = [
                'category_id' => $category['id'],
                'category_name' => $category['name'],
                'products' => $products
            ];
        }


//        echo '<pre>';
//        print_r($productsAll);
//        echo '</pre>';
//        die();
        include 'views/layouts/home/index.php';
    }
}