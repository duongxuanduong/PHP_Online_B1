<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h3 align="center">Zent - Education And Technology Group</h3>
        <hr>
        <h4 style="text-align:center">Thông tin sinh viên</h4>
        <ul>
            <?php $arr = ($_SESSION['student'][$_GET['id']]); ?>
            <li><?= $arr['msv'] ?></li>
            <li><?= $arr['name'] ?></li>
            <li><?= $arr['phone'] ?></li>
            <li><?= $arr['email'] ?></li>
            <li><?= $arr['gender'] ?></li>
            <li><?= $arr['address'] ?></li>
        </ul>
</body>

</html>