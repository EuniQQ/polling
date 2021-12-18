<?php include_once "../api/db.php";

if(!isset($_SESSION['user'])){
  to("../index.php");
  exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問卷系統</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>
      .container{
        min-height: 544px;
      }

      body{
        /* background:url(../image/backend_img.png); */
        background:url(../image/backend_img.png);
      }
    </style>
</head>
<body>


<nav class='bg-light shadow py-3 px-2 d-flex justify-content-between mb-4'>

<div>
  <a class='px-2' href="?do=manage_vote">問卷管理</a>
  <a class='px-2' href="?do=member">會員管理</a>
  <!-- <a class='px-2' href="?do=ad">廣告管理</a>   -->
</div>


<?php 
if(isset($_SESSION['user'])){
echo "<span class='pr-5'>歡迎！{$_SESSION['user']}</span>";
?>


<div>
  <a class="btn btn-sm btn-primary mx-1" href="../logout.php">登出</a>
  <a class="btn btn-sm btn-warning mx-1" href="../index.php">回首頁</a>
</div>
<?php
}
?>

</nav>


<div class="container">
<?php

$do=(isset($_GET['do']))?$_GET['do']:'manage_vote';
$file=$do.".php";
if(file_exists($file)){
    include $file;
}else{
    include "manage_vote.php";
}
?>
</div> 


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>