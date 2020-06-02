<?php
session_start();
$arr = $_SESSION['student'][$_GET['id'] ];
unset($_SESSION['student'][$_GET['id'] ]);
$arr['msv'] = $_POST['msv'];
$arr['name'] = $_POST['name'];
$arr['phone'] = $_POST['phone'];
$arr['email'] = $_POST['email'];
$arr['gender'] = $_POST['gender'];
$arr['address'] = $_POST['address'];
$_SESSION['student'][$_GET['id']] = $arr;

if (isset($_SESSION['student'][$_GET['id']])) {
    setcookie('msg', 'update thành công', time() + 5);
    header('Location: list.php');
} else {
    setcookie('msg', 'update không thành công', time() + 5);
    header('Location:add.php?id='.$_GET['id']);
}
?>
