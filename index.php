<?php include_once "api/db.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>問卷首頁</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <style>
    * {
      box-sizing: border-box;

    }

    body {
      width: 1920px;
      height: 1080px;
      margin: 0;
      background: url(./image/index_img-4.png);
      background-size: cover;
      overflow: hidden;
      display: flex;
      flex-flow: row nowrap;
    }

    .left {
      flex-basis: 1800px;
      height: 1080px;
      border: 1px solid red;
    }

    .right {
      flex-basis: calc(100% - 1800px);
      height: 1080px;
    }
  </style>
</head>


<body>
  <!-- left -->

  <div class="left mx-auto">
    <?php
    //根據網址帶的do參數內容來決定要include那一個檔案內容
    $do=(isset($_GET['do']))?$_GET['do']:'show_vote_tytle';

    //建立要引入的檔案路徑
    $file="./frontend/".$do.".php";
    
    if(file_exists($file)){
    include $file;
    }else{
    include "./frontend/show_vote_tytle.php";
}
    ?>
  </div>
  <!-- left end -->




  <div class="right">

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
      <a class="btn active btn-primary mx-1" href="index.php?do=logout">登出</a>
    </div>
   


    <?php
}else{
  ?>

    <nav class=" right container d-flex flex-column  ">
      <a class="btn font-weight-bold" style="writing-mode:vertical-lr ;" href="?do=login">會 員 登 入 </a><br>
      <p>&nbsp&nbsp─────</p>
      <a class="btn font-weight-bold" style="writing-mode:vertical-lr ;" href="?do=reg">註 冊 會 員</a>
      <!-- writing-mode:vertical-lr = 水平改垂直書寫 -->
    </nav>



    <?php
}
?>
  </div>

  <!-- right end -->

















  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
    integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
    crossorigin="anonymous"></script>
</body>

</html>