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
        <?php if (!isset($_POST['submit'])) { ?>
            <hr>
            <form action="add_process.php" method="POST" role="form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Mã Sinh Viên</label>
                    <input type="text" class="form-control" id="" placeholder="" name="msv" required pattern="\S+">
                </div>
                <div class="form-group">
                    <label for="">Họ Và Tên</label>
                    <input type="text" class="form-control" id="" placeholder="" name="name" required pattern="\S+.*">
                </div>
                <div class="form-group">
                    <label for="">Số Điện Thoại</label>
                    <input type="text" class="form-control" id="" placeholder="" name="phone" required pattern="\S+">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" id="" placeholder="" name="email" required pattern="\S+">
                </div>
                <div class="form-group">
                    <label for="">Giới Tính</label><br>
                    <input type="radio" name="gender" value="Male" checked> Male
                    <input type="radio" name="gender" value="Female"> Female
                    <input type="radio" name="gender" value="Other"> Other
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" class="form-control" id="" placeholder="" name="address" required pattern="\S+.*">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Create</button>
            </form>
    </div>
<?php  } ?>
</body>

</html>