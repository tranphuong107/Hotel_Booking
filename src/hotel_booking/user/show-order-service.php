<?php
    include 'header.php';
?>
<div>
<?php
                   //bảo vệ tk user
 
        if(isset($_SESSION['loginUserOK'])){ 
            $ser_id = $_GET['id'];
            include '../config.php';
                    
                    $sql = "SELECT * FROM tb_services WHERE ser_ID = $ser_id";
                    $result = mysqli_query($conn,$sql);

                    if($result == true){
                        while($row = mysqli_fetch_assoc($result)){
                            $ser_id = $row['ser_ID'];
                            $ser_name = $row['ser_name'];
                            $ser_room_size = $row['ser_room_size'];
                            $ser_description = $row['ser_description'];
                            $ser_price = $row['ser_price'];
                            $ser_image = $row['ser_image']; 
?>
        
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
            .khung{
          width: 350px;
          height:500px;
          background-color: #c9af911c;
      }
      .title{     
        color: #835542;
      }
      .title:after{
        content: ""; /* This is necessary for the pseudo element to work. */ 
        display: block; /* This will put the pseudo element on its own line. */
        margin: 0 auto; /* This will center the border. */
        width: 35%; /* Change this to whatever width you want. */
        padding-top: 5px; /* This creates some space between the element and the border. */
        border-bottom: 2px solid #835542; /* This creates the border. Replace black with whatever color you want. */
      }
      .vao{
          color: #835542;
          padding-top: 10px;
          padding-left:45px;
      }
      .btn{
          background-color:#c49872b3;
          width: 110px;
          height: 40px;
          margin-top: 40px;
          margin-left: 70px;
          float: middle;
      }
      .btn:hover{
        background-color:#835542;
        color: white;
      }
      .rounded{
          padding-left: 3px;
      }
      .button{
          text-align: center;
      }
      .cancel{
        text-align: right;
        font-size: 1.7rem;
        padding-right: 20px;
        padding-top: 10px;
    
      }
            </style>
    <div class = "ser-ord">
    <div class = "khung">
        <div class = "cancel">
            <a href="service.php" style = "color: #835542;"><i class="far fa-times-circle"></i></a>
        </div>
        <div class = "title">
            <h3 class = "titlee"><center>ĐẶT DỊCH VỤ</center></h3>
        </div>
        <div class = "vao fw-bold">
            Loại dịch vụ:
            <div class = "pt-2">
                <select class  = "rounded pb-1 pt-1 ps-1" style = "background-color:#c49872b3;border:none;color:#2e1c09;width:263px;">
                    <option value="0">Chọn loại dịch vụ</option>
                    <option value="1">Massage</option>
                    <option value="2"></option>
                </select>
            </div>
        </div>
        <div class = "vao fw-bold">
            Số người:
            <div class = "pt-2"><input type="number" class = "rounded pb-1 pt-1 ps-1" min = "1" style = "background-color:#c49872b3;border:none;color:#2e1c09;width:263px"></div> 
            
        </div>
        <div class = "vao">
            <div class = " fw-bold">Thời gian:</div>
             
            <div class = "pt-2" style = "">
                <input type="date" class = "rounded pb-1 pt-1 ps-1" style = "background-color:#c49872b3;border:none;color:#2e1c09;width:263px;"> 
                <div class = "pt-1 pb-1" style = "float:right; padding-right:50px;">(Tháng/Ngày/Năm)</div>
                <div class = "pt-2">
                    <input type="time" class = "rounded pb-1 pt-1 ps-1" style = "background-color:#c49872b3;border:none;color:#2e1c09;width:263px">
                    <div class = "pt-1 pb-1" style = "float:right; padding-right:50px;"> (Giờ)</div>
                </div>
            </div>
        </div>
        <div class = "button">
            <a href="" class = "btn fw-bold" style = "font-size: 15px;">Đặt dịch vụ</a>
        </div>
    </div>
                           
                    
            <?php
                }}}else{
                    header ('Location: login.php');
                    }
                ?>       
          
           </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src = "js/ser-js.js"></script>

<?php             
    include 'footer.php';

