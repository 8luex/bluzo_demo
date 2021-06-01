<?php
    error_reporting(E_ALL); //เปิดหมด
    //error_reporting(0); //ปิด error ในกรณีที่เราต้องการแสดง error ของเราเอง
    //เชื่อมต่อ Database
    $conn = new mysqli('localhost', 'root', '', 'web_demo');
    $conn->set_charset('utf8');
    if($conn->connect_errno) {
        echo "Connect Error : ".$conn->connect_error;
        exit();
    }
    $base_path_image = 'images/';
?>