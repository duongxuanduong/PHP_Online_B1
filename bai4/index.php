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
    <h3 align="center">Danh sách sản phẩm</h3>
    <a href="giohang.php" type="button" class="btn btn-primary">Xem giỏ hàng</a>
    <hr>
    <table class="table" id="example">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Tên Sản Phẩm</th>
          <th scope="col">Đơn giá</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <th scope="row">SP1</th>
            <td>Iphone Dỏm</td>
            <td>300</td>
            <td>
              <a href="add_sp.php?id=SP1&tsp=Iphone Dỏm&dg=300" type="button" class="btn btn-default">Thêm vào giỏ hàng</a>

            </td>
          </tr>
          <tr>
            <th scope="row">SP2</th>
            <td>Iphone Xịn</td>
            <td>500</td>
            <td>
              <a href="add_sp.php?id=SP2&tsp=Iphone Xỉn&dg=500" type="button" class="btn btn-default">Thêm vào giỏ hàng</a>
            </td>
          </tr>
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