<!-- 用foreach的方式帶出資料(未完)未完) -->
    <a  class="btn btn-primary rounded btn-sm" href="?do=add_subject_form">
        新增問卷
    </a>
</h1>
<?php
$subjects=all('topics');
echo "<ol class='list-group'>";

    echo "<li class='list-group-item'>";
    
    


echo "</ol>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container-fruid">
    <div class="row">
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                    <?php
                    //縮圖
                    $alt=['核四','萊豬','公投','藻礁'];
                    // $src=['01.jpg','02.jpg','03.png','04.jpg'];
                    
                    for($src=1 ; $src<5 ; $src++){

                    foreach ($alt as $key => $value) {
                        echo "<pre>";
                        echo "<img src='../image/$src.jpg' class='card-img-top' alt='$alt'>";
                        echo "</pre>";
                          }
                       }
                    ?>
               
               
                <div class="card-body">
                    <h5 class="card-title">
                        
                    <?php
                    // 題目
                    foreach ($subjects as $key => $value) {
                    echo "<a class='d-inline-block col-md-8' href='index.php?do=vote&id={$value['id']}'>";
                    echo $value['topic'];
                    echo "</a>";
                    }
                    ?>
                    </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>

              <ul class="list-group list-group-flush">

                <!--第一行 票數總計 -->
                <li class="list-group-item"> 
                <?php  
                $count=q("select sum(`count`) as '總計' from `options` where `topic_id`='{$value['id']}'");
                echo $count[0]['總計'];?>
                </li>

                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
              </ul>
              <div class="card-body">
            <?php
              //管理題目
              echo "<a href='?do=edit_subject&id={$value['id']}' class='card-link text-center'>";
              echo "<button class='btn btn-info'>管理</button>";
              echo "</a>";

              //看結果按鈕
              echo "<a href='../index.php?do=vote_result&id={$value['id']}' class='card-link text-center'>";
              echo "<button class='btn btn-primary'>觀看結果</button>";
              echo "</a>";
            
              
            ?>
                <a href="#" class="card-link">Another link</a>
              </div>
              </div>
        </div>
    </div>
</div>




</body>
</html>