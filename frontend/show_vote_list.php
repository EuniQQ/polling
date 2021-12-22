<!-- 投票列表 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div class="container ">
    <div class="row ">
<?php
$subjects = all('topics',['sh' => 1]);
echo "<ol class='list-group'>";
foreach ($subjects as $key => $value) {
    if(rows('options',['topic_id'=>$value['id']]) > 0){
    echo "<li class='list-group-item'>";
    //題目
    //有登入的會員才能使用投票功能
    if(isset($_SESSION['user'])){
        echo "<a class='d-inline-block col-md-6' href='vote_page.php?id={$value['id']}'>";
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

    //隱藏鍵
//     if($_SESSION['user']=='admin'){
//     echo "<form action='../api/change_status.php'>" ;   
//     echo "<span class='form-check d-inline-block col-md-2 text-center' >";
//     echo "<input class='form-check-input' type='checkbox' value='hidden' id='{$value['id']}'>";
//     echo "<label class='form-check-label' for='defaultCheck1'>隱藏</label>";
//     echo "</span>";
//     echo "<input type='submit' value='確認更改' class='btn btn-warning '>";
//     echo "</form>";
    
// }
    echo "</li>";
}
}
echo "</ol>";
?>

</div>

</div>


</body>
</html>