<?php
session_start();
$arr = $_SESSION['sanpham'][$_GET['id']];
$arr['soluong'] = $arr['soluong'] + 1;
$arr['thanhtien'] = $arr['soluong'] * $arr["dg"];
date_default_timezone_set('Asia/Ho_Chi_Minh');
$arr['thoigian'] = date('Y-m-d H:i:s');
$_SESSION['sanpham'][$_GET['id']] = $arr;
header('Location: giohang.php');
?>