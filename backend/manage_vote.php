<?php 
include_once "../api/db.php";
echo "<h1>";
echo "<a  class='btn btn-primary rounded btn-sm' href='?do=add_subject_form'>新增問卷</a>";
echo "</h1>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>

        main{
            /* border:1px solid red; */
            width:1000px;
           /*  height:600px; */
           display:flex;
           flex-wrap:wrap;
        }
        .card{
            padding:5px;
            margin:10px
        }
    </style>
</head>
<body>
    
<main>
    <?php
        $subjects=all('topics');

        // echo "<ol class='list-group'>";
           foreach ($subjects as $key => $value) {
            echo "<div class='card' style='width:300px;height:620px;'>";
                //選項圖片
                echo "<img src='../image/{$value['img_src']}' class='card-img-top'  alt=''>";
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
               echo "<li class='list-group-item text-center'>總計&nbsp {$count[0]['總計']} &nbsp票 </li>";  
               echo "</ul>";
           
               //card-body 
               //管理按鈕
            echo "<div class='card-body mx-auto'>";
               echo "<a href='?do=edit_subject&id={$value['id']}' class='card-link '>";
               echo "<button class='btn btn-primary'>管理</button>";
               echo "</a>";

               //刪除題目   
               echo "<a href='?do=del_topic&id={$value['id']}'  class='card-link text-center'>";
               echo "<button class='btn btn-danger'>刪除</button>";
               echo "</a>";
               
               // 投票題目是否顯示
               echo "<div class='col-1'>";
               echo "<a href='../api/change_status.php?id={$value['id']}'>";
               
               if ($value['sh'] == 1 ){
                   echo "<button class='btn btn-info'>投票中</button>";
                }else{
                    echo "<button class='btn btn-danger'>已截止</button>";
                }
                echo "</a>";
                echo "</div>";  
                
            echo "</div>";
           
        echo "</div>";    

           }          
    ?>

</main>



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