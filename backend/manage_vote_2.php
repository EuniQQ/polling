<!-- 用寫死的方式列出 -->
<h1>
    <a  class="btn btn-primary rounded btn-sm" href="?do=add_subject_form">
        新增問卷
    </a>
</h1>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>後台投票主題照片</title>
</head>
<body>
<div class="card" style="width: 18rem;">
  <img src="../image/01.jpg" class="card-img-top" alt="核四">
  <div class="card-body">
    <h5 class="card-title">重啟核四</h5>
    <p class="card-text"><?=$topics[8]['topic']?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">同意<?=$options[0]['count']?>票</li>
    <li class="list-group-item">不同意<?=$options[1]['count']?>票</li>
    <?= $total=$options[0]['count'] + $options[1]['count'];?>
    <li class="list-group-item"> 總計 <?=$total?></li>
  </ul>
        <div class="card-body">

        <button class='btn btn-primary'>觀看結果
            <a href='../index.php?do=vote_result&id=08' class='card-link text-center'>";
        </button>
        <button class='btn btn-primary'>觀看結果
            <a href="../index.php?do=edit_subject&id=11" class="card-link">管理</a>
        </button>
         </div>
</div>
</body>
</html>

























<?php
$subjects=all('topics');
echo "<ol class='list-group'>";
foreach ($subjects as $key => $value) {
    
    echo "<li class='list-group-item'>";
    //題目
    echo "<a class='d-inline-block col-md-8' href='index.php?do=vote&id={$value['id']}'>";
    echo $value['topic'];
    echo "</a>";
    //總投票數顯示

    $count=q("select sum(`count`) as '總計' from `options` where `topic_id`='{$value['id']}'");
    echo "<span class='d-inline-block col-md-1 text-center'>";
    echo $count[0]['總計'];
    echo "</span>";
    
    //管理題目

    
    echo "<a href='?do=edit_subject&id={$value['id']}' class='d-inline-block col-md-1 text-center'>";
    echo "<button class='btn btn-info'>管理</button>";
    echo "</a>";
    
    //看結果按鈕
    echo "<a href='../index.php?do=vote_result&id={$value['id']}' class='d-inline-block col-md-2 text-center'>";
    echo "<button class='btn btn-primary'>觀看結果</button>";
    echo "</a>";

    echo "</li>";

}
echo "</ol>";

?>
