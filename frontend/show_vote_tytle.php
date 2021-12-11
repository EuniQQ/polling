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
        .circle{
            width:150px;
            height:150px;
            border-radius: 50%;
            font-size:30px;
            font-family: 'Noto Serif TC', serif;
            text-align:center;
            line-height:40px;
            padding-top:30px;

    
        }
    </style>
</head>
<body>
    <div class="container  ">
        <!-- <div class="row"> -->
            <div class="col-2 circle  " style="background-color:rgb(253, 255, 246)">
                <a href=" "></a>重啟<br>核四
            </div>
            <div class="col-2 circle text-center" style="background-color:rgb(209, 137, 1)">
                <a href=" "></a>進口<br>萊豬
            </div>
            <div class="col-2 circle text-center" style="background-color:rgb(240, 228, 125)">
                <a href=" "></a>大選<br>公投
            </div>
            <div class="col-2 circle text-center" style="background-color:rgb(255, 255, 255)">
                <a href=" "></a>保護<br>藻礁
            </div>
        <!-- </div> -->
    </div>

</body>
</html>


<?php
$subjects=all('topics');
echo "<ol class='list-group'>";
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
echo "</ol>";

?>