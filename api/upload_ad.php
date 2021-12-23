<?php include_once "db.php";
/* echo "tmp_name=>".$_FILES['name']['tmp_name']."<br>";
echo "filename=>".$_FILES['name']['name']."<br>";
echo "intro=>".$_POST['intro']."<br>"; */

//先判斷是否有檔案上傳成功的動作
if(!empty($_FILES['name']['tmp_name'])){

    //取得上傳檔案的原始檔名
    $filename=$_FILES['name']['name'];

    //將檔案從暫存路徑搬移至指定路徑
    move_uploaded_file($_FILES['name']['tmp_name'],'../image/'.$filename);

    //使用insert自訂函式來完成新增廣告圖片的動作
    insert('topics',['name'=>$filename]);

}

//新增完畢，導回新增表單頁
to("../backend/index.php?do=add_subject_form");





?>