<?php

/**
 * Class DataBase
 * @package Shop4U
 * @author havt
 */
class DataBase {
    private static $dbc;
    private static $host = 'localhost';
    private static $username = 'root';
    private static $password = '';
    private static $database = 'book4u';

    /**
     * Kết nối đến Cơ sở dữ liệu
     * @author havt
     */
    public static function connect()
    {
        self::$dbc = mysqli_connect(DataBase::$host, DataBase::$username, DataBase::$password, DataBase::$database);

        if(!self::$dbc) {
            echo 'Không thể kết nối Database';
        } else {
            mysqli_set_charset(self::$dbc, 'utf-8');
            date_default_timezone_set('Asia/Ho_Chi_Minh');
        }
    }

    /**
     * Tạo bảng dữ liệu
     * @author havt
     */
    public function createTable() {

    }

    /**
     * Ngắt kết nối với Cơ sở dữ liệu
     * @author havt
     */
    public static function disconnect()
    {

    }
}