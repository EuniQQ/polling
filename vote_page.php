<?php include_once "api/db.php";


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="./css/vote_page_style.css">

    <style>
        * {
            box-sizing: border-box;
            margin: 0px;
        }
    </style>
</head>

<?php

$id = $_GET['id'];
$subject = find('topics', $id);
$topicNum = $id - 7;
$options = all('options', ['topic_id' => $id]);


//頁面切換原則
if ($id == 8) {
    $prePage = 8;
    $nextPage = 9;
} else if ($id == 11) {
    $prePage = 10;
    $nextPage = 11;
} else {
    $nextPage = $id + 1;
    $prePage = $id - 1;
}

?>

<body>

    <!-- 上半段 -->
    <div class="section container-fruid   ">
        <div class="row  d-flex  justify-content-between  align-items-center text-center ">

            <!-- 上一頁連結 -->
            <div class="col-sm-1 float-left">
                <a href="vote_page.php?id=<?= $prePage; ?>" class="fas fa-angle-left fa-5x" style='color:gray' role="button"></a>
            </div>


            <!-- 標題 -->
            <div class="col-sm-5">
                <!-- 題數  -->
                <p class="text-center font-weight-bold" style="font-size:60px ;margin-top:140px"><?= $topicNum ?></p><br>
                <!-- 內文 -->
                <h2 class="font-weight-bold mx-auto" style="width:400px; size:40px; line-height:200%; margin-top:-40px;">
                    <?= $subject['topic']; ?></h2>
            </div>

            <!-- 下一頁連結 -->
            <div class="col-sm-1 float-right">
                <a href="vote_page.php?id=<?= $nextPage; ?>" class="fas fa-angle-right fa-5x" style='color:gray' role="button"></a>
            </div>

            <!-- 上半段結束 -->
        </div>
    </div>


    <!-- 下半段   -->
    <!-- 答案鍵 -->
    <div class="container-fruid footer  ">
        <div class="row ">
            <div class="col-md-12 ">

                <form action="./api/save_vote.php" method="post" id="voteForm">
                    <div class='form-check-inline d-flex justify-content-center'>

                        <div class="choice">
                            <?php
                            foreach ($options as $key => $opt) {
                                echo "<label class='form-check-label mr-5 mt-3 ' >";
                                // class qq 用於下方jq
                                echo "<input type='radio' id='{$opt['id']}' name='opt' value='{$opt['id']}' class='qq form-check-input mx-auto mt-3'>&nbsp{$opt['opt']}";
                                echo "</label>";
                            }
                            ?>
                        </div>
                        
                        <input type='button' value='送出投票' onclick='confirm()' class='btn  btn-warning  button  mt-5 mx-3 font-weight-bold'>
                            
                            
                        <div class="clearfix" style="float:right">
                            <div class="text-white mx-5 mt-5 float-right mr-0" style="font-size:30px ">
                                <i class="fas fa-home mr-5"><a href="index.php" style="color:white"> 回首頁</a></i>
                                <i class="fas fa-file-alt"><a href="index.php?do=show_vote_list" style="color:white"> 所有投票列表</a></i>

                            </div>
                        </div>


                    </div>
                </form>


                <!-- </div> -->
            </div>
        </div>
    </div>



        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
        <script>
        function confirm(){
           //用:checked可以用來選中被選中的項目
        let opt=$(".qq:checked").val();
          //如果都沒有選取的話,console.log會得到undefined的結果
        console.log(opt);
        
        if(opt==undefined){
            alert("請選擇投票項目")
            }else{
            alert("確定送出")
            //確定送出時讓jq針對表單做出submit的動作
            $("#voteForm").submit()
            }
    }
</script>
</body>

</html>