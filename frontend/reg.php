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
            height: 60px;
            border-radius: 50px;
            width:400px;
            color: lightslategray;
            border-color: rgb(26, 25, 25);
        }

        .label {
            margin: 10px;
            font-size: 30px;
            color:white;

        }

        .btn {
            font-size: 28px;
        }

        .form-check-input {
            height: 30px;
            width: 30px;
        }

    
        
    </style>
</head>

<body>

    
    <div class="container-fruid">
        <!-- <h3 class="text-center font-weight-bold mx-auto text-white">- 註 冊 會 員 -</h3> -->
        <!-- <h3 class="text-center font-weight-bold  mx-auto"> Register</h3>       -->
          
        <form action="./api/reg.php" method="post" id="regForm">
      

            <div class="row ">
                <!-- 左半邊欄位 -->
                <div class="form-group col-12 text-center mt-5">
                    <!-- 帳號 -->
                    <label for="account" class="label col-form-label">帳號： 
                    <input type="text" class="col form-cotrol " id="account" name="account" value="" placeholder="請輸入帳號"><br>
                    </label><br>
                    <!-- 密碼 -->
                    <label for="password" class="label  col-form-label ">密碼：
                    <input type="password" class="col form-cotrol " id="password" name="password" value="" placeholder="請輸入4-8碼中英文"><br>
                    </label><br>
                    <!-- 姓名 -->
                    <label for="fname" class="label col-form-label ">姓名：
                    <input type="text" class="col form-cotrol " id="name" name="name" value=""><br>
                    </label><br>
                    <!-- 生日 -->
                    <label for="birthday" class="label  col-form-label ">生日：
                    <input type="date" class="col form-cotrol" id="birthday" name="birthday" value=""><br>
                    </label><br>
                    <!-- mail -->
                    <label for="mail" class="label col-form-label ">電郵：
                    <input type="email" class="col form-cotrol " id="email" name="email" value=""><br>
                    </label><br>
                    

                    <!-- 性別 -->
                    <label for="gender" class="label  col-form-label">性別：&nbsp;  &nbsp; &nbsp;  
                        
                        <!-- 性別-男 -->
                        <div class=" form-check-inline d-inline">
                            <label for="male" class="label form-check-label">
                                <input type="radio" class="radio form-check-input" id="gender" name="gender" value="1">男
                                male
                            </label>
                        </div>
                        <!-- 性別-女 -->
                        <div class=" form-check-inline d-inline">
                            <label for="female" class="label form-check-label ">
                                <input type="radio" class="radio  form-check-input ml-3" id="gender" name="gender" value="2">女
                                female
                            </label>
                        </div>
                    </label>
                </div>
            </div>
        
   
                <!-- 送出表單 -->
                <div class="form-group text-center">
                <button type="reset" class="btn btn-outline-info mr-5 btn-lg">重新填寫</button>
                <button type="submit" class="btn btn-warning btn-lg submit-btn"><a href="./frontend/show_vote_list.php"></a>註冊會員</button>
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

</form>