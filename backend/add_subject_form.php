<!-- 增加主題 -->
<?php include_once "../api/db.php";?>
<h1 class="text-center font-weight-bold">新增問卷</h1>
<form action="../api/new_subject.php" method='post' class='col-6 m-auto'>
    <label>問卷主題: <input type="text" name="subject"></label>


<input type="file" name="topc_img" value="topc_img"  >


<!-- 增加選項 -->
<?php

//執行新增空白選項紀錄，並紀錄此選項為主題$id的選項
insert('options',['opt'=>" ",'topic_id'=>$id]);

//新增空白選項紀錄完成後，導回管理問卷頁面，帶上主題的id才能在顯示時顯示原本的問題
to("./backend/?do=manage_vote");


?>




<?php
//取得圖片名稱
    // $filename=$_FILES['name']['name'];

    //搬移上傳的圖片檔至指定的目錄下
    // move_uploaded_file($_FILES['name']['tmp_name'],'../image/'.$filename);

    
    
    // insert('topics',$topic);



    // function insert($table,$array){
    //     global $pdo;
   
   
    //     $sql="INSERT into $table(`" . implode('`,`',array_keys($array)) . "`) 
    //                        value('" . implode("','",$array) ."')";
   
    //    echo $sql."<br>";
    //    return $pdo->exec($sql);
   
    // }
   



    // ?>
    <div><input type="submit" value="送出"></div>
</form>