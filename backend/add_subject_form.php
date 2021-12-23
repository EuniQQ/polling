<!-- 增加主題 -->
<!-- <?php include_once "../api/db.php";?>


    <!-- <input type="file" name="topc_img" value="topc_img"  > -->

<<<<<<< HEAD
<!DOCTYPE html>
=======
    <!DOCTYPE html>
>>>>>>> 799a53c6751bc1f663ac8e44ca4838bd5ce2ddc9
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <style>
        <style>* {
            margin: 0;
            box-sizing: border-box;
            overflow: hidden;
        }

        body {
            width: 100vw;
        }

        .btn-circle {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            font-size: 40px;
            font-family: 'Noto Serif TC', serif;
            text-align: center;
            /* line-height: 60px; */
            padding-top: 10px;

        }

        .row {
            margin-top: 200px;
            display:flex;
            flex-flow:row nowrap;
        }

        .circle:hover {
            position: relative;
            /* 當滑鼠經過超連結時，超連結往右下位移1像素 */
            top: 3px;
            left: 3px;
        }

        .container{
            border: 1px solid red;
            
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">

            <!-- modal-1 設定主題 -->
            <div class="col-2">
                <button type="button" class="btn btn-circle text-light" data-toggle="modal" data-target="#Modal_1"
                        class="circle text-center mx-3"  style="background-color:rgb(187,177,147);">
                    設定<br>主題
                </button>
                <form action="../api/new_subject.php" method='post'>
                    <!-- The Modal -->
                    <div class="modal" id="Modal_1">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">新增問卷主題：</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body bg-light">
                                    <label>問卷主題: <input type="text" name="subject"></label>
                                    <div><input type="submit" value="送出"></div>

                                </div>
                            </div>
                        </div>
                </form>
            </div>

            <!-- modal-1 end -->


            <div class="col-1">
                <i class="fas fa-caret-right fa-3x mt-5 text-secondary"></i>
            </div>

            <!-- modal-2 增加照片 -->
            <div class="col-2">
                <button type="button" class="btn btn-circle text-light" data-toggle="modal" data-target="#Modal_2"
                    class=" circle text-center mx-3 " style="background-color:rgb(194, 148, 138);">
                    選擇<br>照片
                </button>
                <form action="../api/upload_ad.php" method='post' class='col-6 m-auto'>
                    <!-- The Modal -->
                    <div class="modal" id="Modal_2">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">新增主題照片：</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body bg-light">
                                    <div class='custom-file mx-auto d-block mb-2'>
                                        <label for="upload" class='custom-file-label'>選擇檔案：</label>
                                        <input class="custom-file-input" type="file" name="name" id="upload">
                                        <div><input type="submit" value="上傳"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
                <!-- modal-2 end -->

            <div class="col-1">
                <i class="fas fa-caret-right fa-3x mt-5 text-secondary"></i>
            </div>



                <!-- modal-3 增加選項 -->
                <div class="col-2">
                    <button type="button" class="btn btn-circle text-light" data-toggle="modal" data-target="#myModal1"
                        class="col-2 circle text-center mx-3 " style="background-color:rgb(201, 189, 78);">
                        新增<br>選項
                    </button>

                    <!-- The Modal -->
                <!-- 新增選項內容 -->
                </div>
                    <!-- modal-3 end -->

                <div class="col-1">
                    <i class="fas fa-caret-right fa-3x mt-5 text-secondary"></i>
                </div>

                <!-- modal-4 回到後台 -->
                    <div class="col-2">
                        <button type="button" class="btn btn-circle text-light" data-toggle="modal"
                            data-target="#myModal1" class="col-2 circle text-center mx-3 "
                            style="background-color:rgb(126, 168, 190);">
                            回到<br>後台
                        </button>
                    </div>
                <!-- modal-4 end -->

            

        </div>





        <!-- <a class="btn btn-outline-warning  " href="index.php?do=show_vote_list">所有投票選單</a> </h3> -->

    </div>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>