

<?php include_once "api/db.php";

$id=$_GET['id'];
$topicNum=$id-7;
$subject=find('topics',$id);
$options=all('options',['topic_id'=>$id]);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <style>
            *{
                box-sizing:border-box;
                margin:0px;
            }
            
            body{
                width:1920px;
                height:1080px;
                background:url(./image/img_02.png);
                display:flex;
                flex-flow:column nowrap;

            }

            .container{
                margin-top:100px;
            }

            .section{
                flex-basis:750px;
               
            }

            .footer{
                flex-basis:calc(100% - 750px);
            }

            .btn {
                width: 25%; 
                transition:width 5s;
            }

            .btn:hover{
                box-shadow:0px 5px 5px rgb(107, 107, 107);
                width: 50%;
                transition:linear
            }

                    
        </style>
</head>

<?php
 
 
     if($id==8){
         $prePage=8; 
         $nextPage=9;
     }else if ($id==11) {  
         $prePage=10;   
         $nextPage=11; 
     }else{
        $nextPage=$id+1;
        $prePage=$id-1; 
     }
   
 ?>

<body>

        <!-- 上半段 -->
<div class="section container-fruid   ">
    <div class="row  d-flex  justify-content-between  align-items-center text-center " >
        <!-- 上一頁連結 -->
        
 
        <div class="col-sm-1 float-left">
            <a href="vote_page.php?id=<?=$prePage;?>" class="fas fa-angle-left fa-5x" style='color:gray'  role="button"></a>
        </div>       
        
       
        <!-- 標題 -->
        <div class="col-sm-5">   
           <!-- 題數  -->
           <p class="text-center font-weight-bold" style="font-size:60px ;margin-top:140px"><?= $topicNum ?></p><br>
           <!-- 內文 -->
           <h2 class="font-weight-bold mx-auto" style="width:400px; size:40px; line-height:200%; margin-top:-40px;">
           <?=$subject['topic'];?></h2>
        </div>
       
        <!-- 下一頁連結 -->
          <div class="col-sm-1 float-right">
              <a href="vote_page.php?id=<?=$nextPage;?>" class="fas fa-angle-right fa-5x" style='color:gray' role="button"></a> 
          </div>       
      <!-- 上半段結束 -->
    </div>
</div>  
      
      

        <!-- 下半段   -->
        <!-- 答案鍵 -->
       
        <ol class='list-group'>
        <form action="./api/save_vote.php" method="post">

<?php
foreach ($options as $key => $opt) {
    echo "<button type='submit' class='btn btn-warning btn-lg d-flex mx-auto mt-4 font-weight-bold' style='color:black' target='_self'>";
    echo "<input type='submit' name='opt' value='{$opt['id']}'>";
    echo $opt['opt'];
    echo "</button>";
}
?>

</ol>

</form>
       

        
        







<!-- <a href="" class="btn btn-custom-style-v" onclick="voting_send(4)"></a> -->

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