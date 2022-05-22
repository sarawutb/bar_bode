<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron text-center">
  <h1>ระบบ</h1>
  <p>สร้าง บาร์โค้ด</p>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
        <div class="form-group">
          <label>ชื่อสินค้า</label>
          <input type="text" class="form-control" id="name"  placeholder="ชื่อสินค้า" required>
        </div>
        <div class="form-group">
          <label>ราคา</label>
          <input type="number" class="form-control" id="price" placeholder="ราคา" required>
        </div>
        <div class="form-group">
          <label>จำนวนรูป</label>
          <input type="number" class="form-control" id="amount" placeholder="จำนวนรูป" required>
        </div>
        <center>
          <button type="submit" onclick="print()" class="btn btn-warning"><font color="black" size="10%">ปริ้น</button>
        </center>
    </div>
  </div>
</div>
</body>
</html>

<script type="text/javascript">
function print() {
  var name = document.getElementById('name').value;
  var price = document.getElementById('price').value;
  var amount = document.getElementById('amount').value;
  window.open("barcode.php?name="+name+"&price="+price+"&amount="+amount).print();
}
</script>
