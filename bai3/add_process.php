<?php
session_start();
$arr = array();
if (isset($_SESSION['student'][$_POST['msv']])) {
    setcookie('msg', 'Đã tồn tại sinh viên', time() + 5);
    header('Location:add.php');
} else {
    $arr['msv'] = $_POST['msv'];
    $arr['name'] = $_POST['name'];
    $arr['phone'] = $_POST['phone'];
    $arr['email'] = $_POST['email'];
    $arr['gender'] = $_POST['gender'];
    $arr['address'] = $_POST['address'];
    $_SESSION['student'][$_POST['msv']] = $arr;
    setcookie('msg', 'Thêm mới thành công', time() + 5);
    header('Location: list.php');
}
?>
