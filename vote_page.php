

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
        <link rel="stylesheet" href="./css/vote_page_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <style>
            *{
                box-sizing:border-box;
                margin:0px;
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
<div class="container-fruid footer "> 
    <div class="row ">
        <div class="col-12 ">
        
                <form action="./api/save_vote.php" method="post">
                <?php
                foreach ($options as $key => $opt) {
                    echo "<label >";
                    echo "<input type='button' id='{$opt['id']}' name='opt' value='{$opt['opt']}' class='btn btn-warning button mt-5 mx-3 font-weight-bold'>";
                    echo "</label>";                 
                    }
                ?>
                <input type='submit' name='opt' value='送出投票' class='btn  btn-light  button  mt-5 mx-3 font-weight-bold'>
             
                </form>
         
                <div class="clearfix">
                    <div class="text-white mx-5 d-box-inline float-right " style="font-size:30px ">
                    <i class="fas fa-home "><a href="index.php" style="color:white">回首頁</a></i>
                    </div>    
                </div>

      </div>
   </div>  
</div>        







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