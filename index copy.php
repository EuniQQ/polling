<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問卷首頁</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
*{
    box-sizing:border-box;
    overflow:hidden;
    margin:0;

}

body{
    width:1920px;
    height:1080px;
    background:url(./index_img-1.png);
    background-size: cover;
    
}
    </style>
</head>
<body>
 
<div class="container">
<?php

//判斷是否有任何的錯誤訊息存在，有則顯示
if(isset($_SESSION['error'])){
  echo "<span class='text-danger'>".$_SESSION['error']."</span>";
}

//判斷是否有登入的紀錄，根據登入狀況，顯示不同的功能按鈕
if(isset($_SESSION['user'])){
  echo "<span class='pr-5'>歡迎！{$_SESSION['user']}</span>";
?>
<div>
  <a class="btn btn-lg btn-primary mx-1" href="logout.php">登出</a>
</div>

<?php

}else{
?>
<div class="clearfix">
  <a class="btn btn-lg btn-warning ml-3 my-3 float-left" href="?do=login">會員登入</a>
  <a class="btn btn-lg btn-info ml-2 my-3 float-left" href="?do=reg">註冊新會員</a>
  <!-- <a class="btn btn-lg btn-info ml-2 my-3" href="./frontend/reg.php">註冊新會員</a> -->
</span>
<?php
}
?>
</nav>

<div class="container">
<?php

//根據網址帶的do參數內容來決定要include那一個檔案內容
$do=(isset($_GET['do']))?$_GET['do']:'show_vote_list';

//建立要引入的檔案路徑
$file="./frontend/".$do.".php";
if(file_exists($file)){
    include $file;
}else{
    include "./frontend/show_vote_list.php";
}
?>


</div>

<!-- <div class="p-3 text-center text-light bg-primary fix-bottom" style="height:100px;">mack版權所有、歡迎盜用</div> -->
</div>












<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>