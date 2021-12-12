<?php



$data=[
["id"=> "1"  , "background"=> "./image/Q_01.png" , "question" => "您是否同意核四啟封商轉發電？"  ],
["id"=> "2"  , "background"=> "./image/Q_02.png" , "question" => "您是否同意政府應全面禁止進口含有萊克多巴胺之乙型受體素豬隻之肉品、內臟及其相關產製品？"],
["id"=> "3"  , "background"=> "./image/Q_03.png" , "question" => "您是否同意公民投票案公告成立後半年內，若該期間內遇有全國性選舉時，在符合公民投票法規定之情形下，公民投票應與該選舉同日舉行？ " ],
["id"=> "4"  , "background"=> "./image/Q_04.png" , "question" => "您是否同意中油第三天然氣接收站遷離桃園大潭藻礁海岸及海域？(即北起觀音溪出海口，南至新屋溪出海口之海岸，即由上述海岸最低潮線往外平行延伸五公里之海域)"],

];  


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
                background:<?= $data[$i]['background']?>;
                display:flex;
                flex-flow:column nowrap;

            }

            .container{
                margin-top:100px;
                border:1px solid black;
            }

            .logo{
                width:20%;
                margin:auto;
                
            }

            .section{
                width:1920px;
                height:750px;
                border:1px solid red;
            }

            .footer{
                width:1920px;
                height:calc(100% - 750px);
            }
            
        </style>
</head>

<body>

<?php
 
 if(isset($_GET['page'])){
    $page=$_GET['page'];
    $i=$page-1;
}else{
    $page=1;
    $i= 1;
}

$lastPage=$page-1;
$nextPage=$page+1;


    if($page==1){
        $lastPage='vote_result.php'; 
    }else if ($page==5) {    
        $nextPage='index.php?do=vote_result'; 
    }
  




?>
        <!-- 上半段 -->
<div class="section container-fruid   ">
    <div class="row  d-flex  justify-content-between  align-items-center text-center " >
        <!-- 上一頁連結 -->
        <div class="col-sm-1 float-left">
            <a href="vote_page.php?page=<?=$lastPage;?>" class="fas fa-angle-left fa-5x" style='color:gray'  role="button"></a>
        </div>       
        
       
        <!-- 標題 -->
        <div class="col-sm-5">   
            
           <h1 class="text-center  font-weight-bold " style="font-size:60px"><?= $data[$i]['id'] ?></h1>
           <!-- 內文 -->
           <h2 class="font-weight-bold" style="width: 500px; size:40px "><?= $data[$i]['question']?></h2>
        </div>
       
        <!-- 下一頁連結 -->
          <div class="col-sm-1 float-right">
              <a href="vote_page.php?page=<?=$nextPage;?>" class="fas fa-angle-right fa-5x" style='color:gray' role="button"></a> 
          </div>       
      <!-- 上半段結束 -->
      </div>
          
        <!-- 下半段   -->
        <!-- 答案鍵 -->
    <div class="footer container">
        <div class="col-sm-5 d-flex justify-content-around">
            <div class="box">
                <button type="button" class="btn btn-secondary btn-lg d-inline px-3 mt-4 text-white" style="" ><a href="index.php?page=<?=$page;?>" style="color:white">同意</a></button>
            </div>

            <div class="box">
                <button type="button" class="btn btn-secondary btn-lg d-inline px-3 mt-4  text-white" style=""><a href="index.php?page=<?=$page;?>" style="color:white">不同意</a></button>
            </div>

            <div class="box">
                <button type="button" class="btn btn-secondary btn-lg d-inline px-3 mt-4  text-white" style=""><a href="index.php?page=<?=$page;?>" style="color:white">沒意見</a></button>
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