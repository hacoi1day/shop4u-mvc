<?php

/**
 * @package MVC
 * @author havt
 */

ob_start();
session_start();

// gọi kết nối CSDL
require_once 'config/database.php';
DataBase::connect();

// nhận đường dẫn từ URL
$url = isset($_GET['url']) ? $_GET['url'] : null;
$url = rtrim($url, '/\\');

// xử lý đường dẫn thành Controller, Action
$arr_url = explode('/', $url);
$controller = !empty($arr_url[0]) ? $arr_url[0] : "home";
$action = isset($arr_url[1]) ? $arr_url[1] : "index";
$param = isset($arr_url[2]) ? $arr_url[2] : null;

// trỏ tời file controller và thực hiện điều hướng
$fileName = 'controllers/' .ucfirst($controller). 'Controller.php';

if(file_exists($fileName)) {
    include $fileName;

    $className = ucfirst($controller) . 'Controller';

    $object = new $className;

    if(!method_exists($object, $action)) {
        echo 'Lồi không tồn tại phương thức';
    } else {
        if(!empty($param)) {
            $object->$action($param);
        } else {
            $object->$action();
        }
    }
} else {
    echo 'Lỗi không tồn tại thư mục';
}
