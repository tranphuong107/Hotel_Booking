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
        <div class="form-popup" id="myForm1">
            <div class="content-popup ">
                <div class="confirm rounded">
                    <div class="row" style="margin-top:-80px">
                    <div class="text-end px-4 pt-3 pb-0" style="margin-bottom:-6%">
                        <button href="#" class="btn-close" style="margin-top:-90px; padding-top:6%" onclick="closeForm1()" on data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-2 justify-content-start">
                        <i class="far fa-question-circle fa-3x ps-4 pt-4 fs-1" style ="width: 500px; color: #6ab04c;"></i>
                        </div>
                    <!--<i class="far fa-times-circle fa-3x text-center pt-4 fs-1" style ="width: 500px; heigh:300px;color: #e17055;"></i>-->
                        <div class="col">
                        <p class="text-start  fs-6 " style ="padding-top:6% ; padding-right:10%; " >Bạn có chắc chắn thực hiện Xác nhận đơn không? Thao tác sau khi thực hiện sẽ không thể thay đổi.</p>
                        </div>
                        <!--<h1 class="text-center pb-4 pt-4 ps-4 fs-6" style ="color: #4b4b4b;">Thao tác sau khi thực hiện sẽ không thể thay đổi</h1>-->
                        
                        </div>
                    
                    <div class="row p-4  justify-content-end">
                        <div class="col-3 text-center" >
                           <?php echo'<a href="confirm-order-room.php?id='.$row['ordroom_id'].'" style="background-color:#e17055; width: 90px; color: white;" class="py-2 btn btn-primary fs-6 border-0">Có</a>'?>
                           <!-- <input class="btn text-white px-3 fs-6 " value="Có" type="submit" style="width: 90px; background-color:#e17055;">-->
                        </div>
                        <div class="col-3" >
                            <input class="btn text-white  px-3 fs-6 " value="Không" type="submit" style="width: 90px; background-color: #6ab04c;"  onclick="closeForm1()" >
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>

                <script>
                function openForm1() {
                    document.getElementById("myForm1").style.display = "block";
                }

                function closeForm1() {
                    document.getElementById("myForm1").style.display = "none";
                }
                </script>