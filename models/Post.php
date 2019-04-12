<?php

class Post {

    public function getPosts()
    {
        return 'index in Post model';
    }

    public function getPost($id)
    {
        return 'Lấy dữ liệu bài viết ' . $id;
    }

    public function insertPost()
    {
        return 'insert in Post model';
    }

    public function editPost($id)
    {
        return 'Sửa bài viết ' . $id;
    }



}