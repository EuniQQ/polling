<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投票標題列表</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@900&display=swap" rel="stylesheet">
    <style>
        *{
            margin:0;
            box-sizing:border-box;
            overflow:hidden;
        }
        .circle{
            width:160px;
            height: 180px;
            border-radius: 50%;
            font-size:40px;
            font-family: 'Noto Serif TC', serif;
            text-align:center;
            line-height:60px;
            padding-top:30px;
        }

        .voteDate{
            font-family: 'Noto Serif TC', serif;
            letter-spacing: 10px;
            font-size:25px;
        }

        .voteTytle{
            margin-top:300px;
            
        }

        
    </style>
</head>
<body>
   


<div class="container-fruid ">

    <div class="row voteTytle mx-auto justify-content-center">
        <div class="col-sm-2 circle text-center mx-4" style="background-color:rgb(253, 255, 246)">
            <a href="vote_page.php?id=8" style="color:rgb(73, 60, 3)">重啟<br>核四</a>
        </div>
        <div class="col-sm-2 circle text-center mx-4" style="background-color:rgb(209, 137, 1)">
            <a href="vote_page.php?id=9" style="color:rgb(247, 247, 246)">進口<br>萊豬</a>
        </div>
        <div class="col-sm-2 circle text-center mx-4" style="background-color:rgb(240, 228, 125)">
            <a href="vote_page.php?id=10" style="color:rgb(121, 59, 2)">大選<br>公投</a>
        </div>
        <div class="col-sm-2 circle text-center mx-4" style="background-color:rgb(255, 255, 255)">
            <a href="vote_page.php?id=11" style="color:rgb(44, 65, 1)">保護<br>藻礁</a>
        </div>
    </div>

    <h3 class="voteDate text-white text-center mt-5"> 2021.12.01 - 2021.12.24
         <a class="btn btn-outline-warning  " href="index.php?do=show_vote_list">所有投票選單</a> </h3>
   

</div>


</body>
</html>