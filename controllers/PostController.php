<?php

require_once 'models/Post.php';
class PostController extends Post {

    public function index()
    {
        $s = parent::getPosts();
        include 'views/layouts/post/index.php';
    }

    public function show($id)
    {
        $s = parent::getPost($id);
        include 'views/layouts/post/show.php';
    }

    public function insert()
    {
        $s = 'thêm dữ liệu';
        include 'views/layouts/post/insert.php';
    }

    public function store()
    {
//        $s = parent::insertPost();
        echo $_POST['name'];
    }

    public function edit($id)
    {
        $s = parent::editPost($id);
        include 'views/layouts/post/edit.php';
    }

}