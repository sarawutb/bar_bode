<?php
$naem = $_GET["name"];
$price = $_GET["price"];
$amount = $_GET["amount"]/10;
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
<style>
table, th, td {
  border:1px solid black;
}
body {
    /* height: 842px;
    width: 895px; */
    /* to centre page on screen*/
    /* margin-left: auto;
    margin-right: auto; */
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 60px
}
.text-cente{
  text-align: center;
  margin-bottom: -3px;
  font-size: 8px;
}
</style>
<body>
  <table style="width:100%">
    <?php for ($x=0; $x < $amount; $x++) { ?>
      <tr>
        <?php for ($i=0; $i < 10; $i++) { ?>
        <th>
          <p class="text-cente"><b><?=$naem?></b></p>
          <p class="text-cente"><b>ราคา <?=$price?> บาท</b></p>
          <img class="center" src="images/mylogo.jpg" alt="">
        </th>
        <?php } ?>
      </tr>
  <?php } ?>
</table>
  <div class="row">
    <?php for ($i=0; $i < $amount; $i++) { ?>
    <!-- <div class="col-xs-2" style="border:1px solid black;margin:1px 1px">
      <p class="text-cente"><b><?=$naem?></b></p>
      <p class="text-cente"><b>ราคา <?=$price?> บาท</b></p>
      <img class="center" src="images/mylogo.jpg" alt="">
    </div> -->
  <?php } ?>
  <!-- </div> -->
  </body>
</html>
