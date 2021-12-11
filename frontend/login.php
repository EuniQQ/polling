<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入表單</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: rgb(197, 232, 235);
        }

        .col {
            height: 80px;
            border-radius: 50px;
            font-size: larger;
            color: lightslategray;
            border-color: rgb(26, 25, 25);
        }

        .label {
            margin: 10px;
            font-size: 30px;

        }

        .radio {
            height: 60px;
            width: 60px;
            font-size: 30px;
            border-color: rgb(26, 25, 25);
        }

        #text {
            border-radius: 20px;
            border-color: rgb(26, 25, 25);
            font-size: larger;
        }

        .btn {
            font-size: 28px;
        }

        .form-check-input {
            height: 30px;
            width: 30px;
        }

        .jumbotron {
            /* background-color: rgb(143, 195, 251); */
            height: 180px;
            width:1065px;
            
        }
    </style>
</head>

<body>

    <!-- 頁首 -->
    <div class="container row text-center">     
    <!-- <div class="jumbotron container row text-center">      -->
        <h1 class="text-center font-weight-bold mx-auto text-white">- 會員登入 -</h1>
        <!-- <h3 class="text-center font-weight-bold  mx-auto"> Register</h3>       -->
    
    <form action="./api/check_login.php" method="post" id="loginForm">
   

            <div class="row">
                <div class="form-inline col-xl-6 text-center mx-auto mt-4">

                    <!-- 帳號 -->
                    <label for="account" class="label  col-form-label text-white">帳號：
                    <input type="text" class="col form-cotrol " id="account" name="account" value="" ></label>

                    <!-- 密碼 -->
                    <label for="password" class="label col-form-label mt-5 text-white">密碼：
                    <input type="password" class="col form-cotrol " id="password" name="password" value="" ></label>
 
                </div>
            </div>
   
                <!-- 送出表單 -->
                <div class="form-group text-center mt-5">
                    <!-- <button class="submit-btn" type="submit"><i class="far fa-paper-plane"></i> 送出表單</button> -->
                    <button type="reset" class="btn btn-outline-light mr-5 btn-lg"><i class="far fa-paper-plane"></i>
                    忘記密碼</button>
                    <button type="submit" class="btn btn-warning btn-lg"><a href="./login.php"></a>會員登入</button>
                </div>
  
        </form>
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
</body>

</html>

