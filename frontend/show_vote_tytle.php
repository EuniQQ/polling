<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投票標題列表</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@900&display=swap" rel="stylesheet">
    <style>
        *{
            margin:0;
            box-sizing:border-box;
            overflow:hidden;
        }
        .circle{
            width:160px;
            height: 150px;px;
            border-radius: 50%;
            font-size:40px;
            font-family: 'Noto Serif TC', serif;
            text-align:center;
            line-height:50px;
            padding-top:25px;
        }

        .voteDate{
            font-family: 'Noto Serif TC', serif;
            letter-spacing: 10px;
            font-size:25px;
        }

        .voteTytle{
            margin-top:300px;
            
        }

        .voteTytle:hover{
            text-decoration:none;
            
        }
    </style>
</head>
<body>
   


<div class="container-fruid ">
<div class="voteTytle d-flex justify-content-center ">
    <div class="box col-md-1 circle text-center mx-4 d-box-inline " style="background-color:rgb(253, 255, 246)">
        <a href="vote_page.php?id=8" style="color:rgb(73, 60, 3)">重啟<br>核四</a>
        </div>
    <div class="box col-md-1 circle text-center mx-4 d-box-inline" style="background-color:rgb(209, 137, 1)">
        <a href="vote_page.php?id=9" style="color:rgb(247, 247, 246)">進口<br>萊豬</a>
    </div>
    <div class="box col-md-1 circle text-center mx-4 d-box-inline" style="background-color:rgb(240, 228, 125)">
        <a href="vote_page.php?id=10" style="color:rgb(121, 59, 2)">大選<br>公投</a>
    </div>
    <div class="box col-md-1 circle text-center mx-4 d-box-inline" style="background-color:rgb(255, 255, 255)">
        <a href="vote_page.php?id=11" style="color:rgb(44, 65, 1)">保護<br>藻礁</a>
    </div>
</div>

<h3 class="voteDate text-white text-center mt-5"> 2021.12.01 - 2021.12.24</h3>



</div>
<!-- <?php
foreach ($subjects as $key => $value) {
    if(rows('options',['topic_id'=>$value['id']]) > 0){
    echo "<li class='list-group-item'>";
    //題目
    //有登入的會員才能使用投票功能
    if(isset($_SESSION['user'])){
        echo "<a class='d-inline-block col-md-8' href='index.php?do=vote&id={$value['id']}'>";
        echo $value['topic'];
        echo "</a>";
    }else{
        
        echo "<span class='d-inline-block col-md-8'>".$value['topic']."</span>";
    }
    
    //總投票數顯示
    $count=q("select sum(`count`) as '總計' from `options` where `topic_id`='{$value['id']}'");
    echo "<span class='d-inline-block col-md-2 text-center'>";
    echo $count[0]['總計'];
    echo "</span>";
    
    //看結果按鈕
    echo "<a href='?do=vote_result&id={$value['id']}' class='d-inline-block col-md-2 text-center'>";
    echo "<button class='btn btn-primary'>觀看結果</button>";
    echo "</a>";

    echo "</li>";
}
}
echo "</div>";

?> -->

</body>
</html>