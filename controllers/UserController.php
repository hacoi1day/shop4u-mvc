<?php

require_once 'models/User.php';
class UserController extends User {
    public function index() {
        $s = parent::getString();
        include 'views/layouts/user/index.php';
    }
}