<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <style>
            .content-popup{
                background: rgba(0,0,0,0.4);
                width: 100%;
                height: 100%;
                position: fixed;
                top: 70px;
                left:-8px;
            }
            .form-popup {
               display:none;
             
                }
            .confirm{
                background: white;
                margin: 15% 31%;
                width:38%;
                
            }
            </style>

        <!--<a href ="#" class="text-center" ><i class="fas fa-window-close" style ="color:#eb2f06;"></i></i></a>-->
        <div class="form-popup" id="myForm2">
            <div class="content-popup ">
                <div class="confirm rounded">
                    <div class="row" style="margin-top:-80px">
                    <div class="text-end px-4 pt-3 pb-0" style="margin-bottom:-6%">
                        <button href="#" class="btn-close" style="margin-top:-90px padding-top:6%" onclick="closeForm2()" on data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-2 justify-content-start">
                        <i class="far fa-question-circle fa-3x ps-4 pt-4 fs-1" style ="width: 500px;color: #6ab04c;"></i>
                        </div>
                    <!--<i class="far fa-times-circle fa-3x text-center pt-4 fs-1" style ="width: 500px; heigh:300px;color: #e17055;"></i>-->
                        <div class="col">
                        <p class="text-start fs-6 " style ="padding-top:6% ; padding-right:15%; " >Bạn có chắc chắn thực hiện Hủy đơn không? Thao tác sau khi thực hiện sẽ không thể thay đổi.</p>
                        </div>
                        <!--<h1 class="text-center pb-4 pt-4 ps-4 fs-6" style ="color: #4b4b4b;">Thao tác sau khi thực hiện sẽ không thể thay đổi</h1>-->
                        
                        </div>
                    
                    <div class="row p-4 justify-content-end pb-4">
                        <div class="col-3 text-center" >
                           <?php echo'<a href ="room-show.php" style="background-color:#e17055; width: 90px; color: white;" class="py-2 btn btn-primary fs-6 border-0">Có</a>'?>
                           <!-- <input class="btn text-white px-3 fs-6 " value="Có" type="submit" style="width: 90px; background-color:#e17055;">-->
                        </div>
                        <div class="col-3" >
                            <input class="btn text-white  px-3 fs-6 " value="Không" type="submit" style="width: 90px; background-color: #6ab04c;"  onclick="closeForm2()" >
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>

                <script>
                function openForm2() {
                    document.getElementById("myForm2").style.display = "block";
                }

                function closeForm2() {
                    document.getElementById("myForm2").style.display = "none";
                }
                </script>
</body>
</html>