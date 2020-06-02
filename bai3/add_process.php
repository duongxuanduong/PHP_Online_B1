<?php
session_start();
$arr = array();
$arr['msv'] = $_POST['msv'];
$arr['name'] = $_POST['name'];
$arr['phone'] = $_POST['phone'];
$arr['email'] = $_POST['email'];
$arr['gender'] = $_POST['gender'];
$arr['address'] = $_POST['address'];
$_SESSION['student'][$_POST['msv']] = $arr;

if (isset($_SESSION['student'][$_POST['msv']])) {
    setcookie('msg', 'Thêm mới thành công', time() + 5);
    header('Location: list.php');
} else {
    setcookie('msg', 'Thêm vào không thành công', time() + 5);
    header('Location:add.php');
}
?>
