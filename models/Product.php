<?php

include_once 'Model.php';
class Product extends Model {
    // properties
    protected $table = 'products';

    // methods
    public function getAllProduct()
    {
        $products = $this->database->select($this->table, [
            'id',
            'name',
            'price',
            'image',
            'category_id'
        ]);
        return $products;
    }

    public function getProductsByCategoryId($category_id, $count = null)
    {
        $products = $this->database->select($this->table, [
            'id',
            'name',
            'price',
            'image',
            'category_id'
        ], [
            'category_id' => $category_id,
            'LIMIT' => [0, 16]
        ]);
        return $products;
    }

    public function getProduct($page)
    {
        $step = 10;
        $products = $this->database->select($this->table, [
            'id',
            'name',
            'price',
            'image',
            'category_id'
        ], [
            'LIMIT' => [($page-1)*$step, $step]
        ]);
//        echo '<pre>';
//        print_r($products);
//        echo '</pre>';
        return $products;
    }

    public function countProduct()
    {
        $count = $this->database->count($this->table);
        return $count;
    }

    public function insertProduct($name, $price, $category_id, $image)
    {
        $productInsert = $this->database->insert($this->table, [
            'name' => $name,
            'price' => $price,
            'category_id' => $category_id,
            'image' => $image,
        ]);
        if($productInsert)
            return true;
        else
            return false;
    }

}