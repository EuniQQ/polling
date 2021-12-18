<?php 
include_once "../api/db.php";


echo "<h1>";
echo "<a  class='btn btn-primary rounded btn-sm' href='?do=add_subject_form'>新增問卷</a>";
echo "</h1>";


$subjects=all('topics');
echo "<ol class='list-group'>";
    foreach ($subjects as $key => $value) {
    echo "<div class='card' style='width: 300px;'>";
    echo "<img src='{$value['img_src']}' class='card-img-top' alt=''>";
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'> {$value['topic']} </h5>";
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
    //看結果按鈕
    echo "<div class='card-body mx-auto'>";
        echo "<a href='../index.php?do=edit_subject&id=11' class='card-link'>";
        echo "<button class='btn btn-primary'>管理</button>";
        echo "</a>";
        //刪除題目   
        echo "<a href='../index.php?do=vote_result&id=08' class='card-link text-center'>";
        echo "<button class='btn btn-danger'>刪除</button>";
        echo "</a>";
        echo "</div>";
echo "</ol>";

echo "<br>";

    }
?>