<?php
include_once "db.php";

/**
 * 資料表的欄位名稱=>資料內容
 */

//依據表單傳過來的問卷主題欄位subject建立一個資料陣列
$topic=['topic'=>$_POST['subject']];

//使用insert自訂函式來新增主題
insert('topics',$topic);


//新增完畢，導回新增表單頁
to("../backend/index.php?do=add_subject_form");

?>