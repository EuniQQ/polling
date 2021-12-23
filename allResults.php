<?php 
include_once "./api/db.php";
// echo "<h1>";
// echo "<a  class='btn btn-primary rounded btn-sm' href='?do=add_subject_form'>回首頁</a>";
// echo "</h1>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <link rel="stylesheet" href="./css/vote_page_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>Document</title>
    <style>
        body{
            background:url(./image/index_img-1.png);
            width:100vw;
            height:100vh;
        }

        main{
            /* border:1px solid red; */
            width:1000px;
           /*  height:600px; */
           display:flex;
           flex-wrap:wrap;
           
        }
        .card{
            padding:10px;
            margin:10px
        }

        
    </style>
</head>
<body>

<div class="clearfix">
                    <div class="text-white mx-5 my-5 float-left  btn btn-primary" style="font-size:20px ">
                        <i class="fas fa-home"></i><a href="index.php" style="color:white"> 回首頁</a>
                    </div> 
                    
                    
</div> 

                
<main class="ml-5">
      
    <?php
        $subjects=all('topics');

        // echo "<ol class='list-group'>";
           foreach ($subjects as $key => $value) {
            echo "<div class='card bg-light mx-auto' style='width:300px;height:550px;'>";
                //選項圖片
                echo "<img src='./image/{$value['img_src']}' class='card-img-top'  alt=''>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title' style='height:110px'> {$value['topic']} </h5>";
                echo "</div>";
           
               //選項票數
               $oopt=q("SELECT `count` as '票數' FROM `options` WHERE `topic_id`='{$value['id']}'"); 
               echo "<ul class='list-group list-group-flush'>";
               echo "<li class='list-group-item text-center'> 同意&nbsp {$oopt[0]['票數']} &nbsp票 </li>";
               echo "<li class='list-group-item text-center'> 不同意&nbsp {$oopt[1]['票數']} &nbsp票 </li>";
                       
               //總投票數顯示
               $count=q("SELECT sum(`count`) as '總計' FROM `options` WHERE `topic_id`='{$value['id']}'");        
               echo "<li class='list-group-item text-center font-weight-bold text-primary'>總計&nbsp {$count[0]['總計']} &nbsp票 </li>";  
               echo "</ul>";
           
          
        echo "</div>";    

           }          
    ?>

</main>
</body>
</html>



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