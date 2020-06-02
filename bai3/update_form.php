<?php 
session_start();
$arr = $_SESSION['student'][$_GET['id']];
?>
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
            <form action="update.php" method="POST" role="form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Mã Sinh Viên</label>
                    <input type="text" class="form-control" value=<?=$arr['msv']?> placeholder="" name="msv" required pattern="\S+">
                </div>
                <div class="form-group">
                    <label for="">Họ Và Tên</label>
                    <input type="text" class="form-control" value=<?=$arr['name']?> placeholder="" name="name" required pattern="\S+.*">
                </div>
                <div class="form-group">
                    <label for="">Số Điện Thoại</label>
                    <input type="text" class="form-control" value=<?=$arr['phone']?> placeholder="" name="phone" required pattern="\S+">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" value=<?=$arr['email']?> placeholder="" name="email" required pattern="\S+">
                </div>
                <div class="form-group">
                    <label for="">Giới Tính</label><br>
                    <input type="radio" name="gender" value="Male" <?=$arr['gender']=='Male'?'checked':'';?>> Male
                    <input type="radio" name="gender" value="Female" <?=$arr['gender']=='Female'?'checked':'';?>> Female
                    <input type="radio" name="gender" value="Other" <?=$arr['gender']=='Other'?'checked':'';?>> Other
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" class="form-control" value=<?=$arr['address']?> placeholder="" name="address" required pattern="\S+.*">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Create</button>
            </form>
    </div>
</body>

</html>