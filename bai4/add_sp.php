<?php 
    session_start();
    $arr = array();
   
    if(isset($_SESSION['sanpham'][$_GET['id']])){
        $arr = $_SESSION['sanpham'][$_GET['id']];
        $arr['soluong'] = $arr['soluong']+1;
        $arr['thanhtien'] = $arr['soluong']*$arr["dg"];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $arr['thoigian'] = date('Y-m-d H:i:s');
        $_SESSION['sanpham'][$_GET['id']] = $arr;
    }else{
    $arr['id'] = $_GET['id'];
    $arr['tsp'] = $_GET['tsp'];
    $arr['dg'] = $_GET['dg'];
    $arr['thanhtien']= $_GET['dg'];
    $arr['soluong'] = 1;
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $arr['thoigian'] = date('Y-m-d H:i:s');
    $_SESSION['sanpham'][$_GET['id']] = $arr;
    }
    header('Location:giohang.php');
?>