<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    </head>
<body>




<div class="container bg-light">
    <div class="row">
        <div class="modal hide fade" id="myModal">
            <div class="modal-header text-center">
               
                <?php
                    $sql="select * 
                      from `topics`,
                           `options` 
                      where `topics`.`id`=`options`.`topic_id` AND 
                            `topics`.`id`='{$_GET['id']}'";
                
                //任意查詢函式
                $rows=q($sql);
                ?>

                <h2 class="text-warning bg-dark p-3 " style="border-radius:15px"> 投票<br>結果<br></h2>
                <h2 class="text-white float-left"><?=$rows[0]['topic'];?></h2>
                 
            </div>
            <div class="modal-body">
                
                
                
                <ol class="list-group col-md-4 my-4 mx-auto" style="font-size:1.2rem">
                <?php
                    foreach($rows as $row){
                        echo "<li class='list-group-item'>";
                        echo "<span>{$row['opt']}</span>";
                        echo "<span class='badge badge-info float-right'>{$row['count']}</span>";
                        echo "</li>";
                    }
                ?>
                </ol>
            </div>
                <div class="modal-footer ">
                  <a href="#" class="btn">Close</a>
                  <a href="index.php" class="btn btn-primary">HOME</a>
                  <a href="?do=show_vote_list" class="btn btn-primary">其他選舉結果</a>
                </div>
    </div>
</div>





    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>

<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>
</body>
</html>

