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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    * {
      box-sizing: border-box;

    }

    body {
      width:100vh;
      height: 1080px;
      margin: 0;
      background: url(./image/index_img-3.png);
      background-size: cover;
      overflow: hidden;
      display: flex;
      flex-flow: row nowrap;
    }

    .left {
      flex-basis: 1800px;
      height: 1080px;
     
    }

    .right {
      flex-basis: calc(100% - 1800px);
      height: 1080px;
    }

    .welcome{
      writing-mode:vertical-lr; 
      font-size:25px;
    }

    .rightBtns{
      position:absolute;
      top:750px;
    }

  </style>
</head>


<body>

  <!-- left -->

  <div class="left">
    <div class="container">
      
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
  </div>
  <!-- left end -->




  <nav class="right  ">
    <div class="container">

      <?php
      //判斷是否有任何的錯誤訊息存在，有則顯示
       if(isset($_SESSION['error'])){
       echo "<span class='text-danger'>".$_SESSION['error']."</span>";
       }
    
      //判斷是否有登入的紀錄，根據登入狀況，顯示不同的功能按鈕
      if(isset($_SESSION['user'])){
      echo "<span class=' welcome px-3 mt-5'>歡迎！{$_SESSION['user']}</span>";
      ?>
  
  
  <!-- 右下角按鈕 -->
  <div class="rightBtns">              
    <?php
           if($_SESSION['user']=='manager'){
             ?>
          <a class='btn btn-lg active btn-success mx-3 mt-3' href='backend/index.php'><i class='fas fa-wrench'></i><br>後台</a>
          
          <?php
          }
          ?>
          
          <a class="btn btn-lg active btn-warning mx-3 mt-3" href="index.php?do=logout">登出</a> 
          
        </div>
        <?php
            }else{
              ?>
  
        <!-- 右上登入連結 -->
          <div class=" right container d-flex flex-column  ">
            <a class="btn font-weight-bold" style="writing-mode:vertical-lr ; font-size:20px ;" href="?do=login">會 員 登 入 </a><br>
            <p>&nbsp&nbsp─────</p>
            <a class="btn font-weight-bold" style="writing-mode:vertical-lr ; font-size:20px ;" href="?do=reg">註 冊 會 員</a>
            <!-- writing-mode:vertical-lr = 水平改垂直書寫 -->
          </div>
        
        <?php
      }
      ?>

</div>
</nav>

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