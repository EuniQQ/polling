<?php include_once "db.php";

//取得URL傳送過來的題目id
$id=$_GET['id'];

//從資料庫中取得指定$id的顯示紀錄
$show=find('topics',$id);

//將紀錄中的顯示欄位(sh)值進行切換，在1(顯示),0(不顯示)之間切換
//因為只在1和0間切換所以使用計算方式來完成，如果切換的條件較複雜
//可以改用if..else或是switch...case
$show['sh']=($show['sh']+1)%2;

//將更新完的資料帶入update函式，完成更新
update('topics',['sh'=>$show['sh']],['id'=>$show['id']]);

//資料表更新完成，將頁面導回投票列表頁
to("../backend?do=manage_vote");

?> 