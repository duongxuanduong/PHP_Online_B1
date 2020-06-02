<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Zent - Education And Technology Group</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

  <!-- Data table -->
  <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <!-- Optional theme -->
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</head>

<body>
  <div class="container">
    <h3 align="center">Zent - Education And Technology Group</h3>
    <h3 align="center">Authors List</h3>
    <a href="add.php" type="button" class="btn btn-primary">Thêm mới</a>
    <hr>
    <?php if (isset($_COOKIE['msg']))
      echo $_COOKIE['msg'];
    //session_destroy();
    ?>
    <table class="table" id="example">
      <thead>
        <tr>
          <th scope="col">MSV</th>
          <th scope="col">Name</th>
          <th scope="col">SĐT</th>
          <th scope="col">Email</th>
          <th scope="col">Address</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>

        <?php
        if (isset($_SESSION['student'] )) {
          foreach ($_SESSION['student'] as $student) { ?>
            <tr>
              <th scope="row"><?= $student['msv'] ?></th>
              <td><?= $student['name'] ?></td>
              <td><?= $student['phone'] ?></td>
              <td><?= $student['email'] ?></td>
              <td><?= $student['address'] ?></td>
              <td>
                <a href="detail.php?id=<?= $student['msv'] ?>" type="button" class="btn btn-default">Xem</a>
                <a href="update_form.php?id=<?= $student['msv'] ?>" type="button" class="btn btn-default">Cập nhật</a>
                <a href="delete.php?id=<?= $student['msv'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-warning">Xóa</a>
              </td>
            </tr>
        <?php }
        } ?>
      </tbody>
    </table>
    <script>
      $(document).ready(function() {
        $('#example').DataTable();
      });
    </script>
  </div>
</body>

</html>