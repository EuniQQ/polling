<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員註冊表單</title>
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
            height: 35px;
            width: 35px;
        }

        .jumbotron {
            background-color: rgb(255, 239, 148);
            height: 200px;
            width:1065px;
        }
    </style>
</head>

<body>

    <!-- 頁首 -->
    <div class="jumbotron text-center md-0">
        <h1 class="text-center font-weight-bold">- 註冊會員 -</h1>
        <h3>Register</h3>
    </div>

    <form action="../api/reg.php" method="post" id="regForm">
        <div class="container">

            <div class="row">
                <!-- 左半邊欄位 -->
                <div class="form-group col-sm-6 mx-auto">

                    <label for="fname" class="label col-form-label ">姓名 Name：</label>
                    <input type="text" class="col form-cotrol " id="fname" name="fname" value="">

                    <!-- 生日 -->
                    <label for="birthday" class="label  col-form-label ">生日 Birthday：</label>
                    <input type="date" class="col form-cotrol" id="birthday" name="birthday" value="">

                    <!-- mail -->
                    <label for="mail" class="label col-form-label ">電郵 E-mail：</label>
                    <input type="email" class="col form-cotrol " id="mail" name="mail" value="">

                    

                    <!-- 性別 -->
                    <label for="gender" class="label  col-form-label font-weight-normal mt-4">性別 Gender：<br>
                        
                        <!-- 性別-男 -->
                        <div class=" form-check-inline ">
                            <label for="male" class="label form-check-label ">
                                <input type="radio" class="radio form-check-input mt-3" id="gender" name="gender" value="">男
                                male
                            </label>
                        </div>
                        <!-- 性別-女 -->
                        <div class=" form-check-inline ">
                            <label for="female" class="label form-check-label ">
                                <input type="radio" class="radio  form-check-input mt-3 ml-5" id="gender" name="gender" value="">女
                                female
                            </label>
                        </div>
                    </label>
                </div>
            </div>
        </div>
                <!-- 送出表單 -->
                <div class="form-group text-center">
                <!-- <button class="submit-btn" type="submit"><i class="far fa-paper-plane"></i></i> 送出表單</button> -->
                <button type="reset" class="btn btn-outline-secondary mr-5 btn-lg"><i class="far fa-paper-plane"></i>
                    重新填寫</button>
                <button type="submit" class="btn btn-secondary btn-lg">送出表單</button>
                <!-- <button type="submit" class="btn btn- btn-lg"><a href="./login.php"></a>會員登入</button> -->
                </div>
          

    </form>






   

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

</form>