<style>
            .form-popup{
                background: rgba(0,0,0,0.3);
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                position: fixed;
                top: 0;
                left:0;
            }
            .content-popup {
               display: none;
                }
            .confirm{
                background: white;
                margin: 15% 31%;
                width:38%;
                
            }
            .khung{
          width: 350px;
          height:500px;
          background-color: white;
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
 <div class="content-popup" id="myForm2">
     <div class = "form-popup">
        <div class="khung">
        <div class = "cancel">
            <a href="#" onclick = "closeForm2()" style = "color: #835542;">
                <svg width = "25" height= "25" aria-hidden="true" focusable="false" data-prefix="far" data-icon="times-circle" class="svg-inline--fa fa-times-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm101.8-262.2L295.6 256l62.2 62.2c4.7 4.7 4.7 12.3 0 17l-22.6 22.6c-4.7 4.7-12.3 4.7-17 0L256 295.6l-62.2 62.2c-4.7 4.7-12.3 4.7-17 0l-22.6-22.6c-4.7-4.7-4.7-12.3 0-17l62.2-62.2-62.2-62.2c-4.7-4.7-4.7-12.3 0-17l22.6-22.6c4.7-4.7 12.3-4.7 17 0l62.2 62.2 62.2-62.2c4.7-4.7 12.3-4.7 17 0l22.6 22.6c4.7 4.7 4.7 12.3 0 17z"></path></svg>
            </a>
        </div>   
        <div class = "title">
            <h3 class = "titlee"><center>ĐẶT DỊCH VỤ</center></h3>
        </div> 
        <div class = "vao fw-bold">
            Loại dịch vụ:
            <div class = "pt-2">
                <select class  = "rounded pb-1 pt-1 ps-1" style = "background-color:#c49872b3;border:none;color:#2e1c09;width:263px;">
                    <option value="0">Chọn loại dịch vụ</option>    
 <?php       
        session_start();
        if(isset($_SESSION['loginUserOK'])){ 
            $ser_id = $_GET['id'];
            include '../config.php';
                    
                    $sql = "SELECT * FROM tb_services";
                    $result = mysqli_query($conn,$sql);

                    if($result == true){
                        while($row = mysqli_fetch_assoc($result)){
                           
    ?>  
            
                   <?php echo '<option value="'.$row['ser_ID'].'">'.$row['ser_name'].'</option>';}}}else {
            echo 'Có lỗi';
        }?>
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
            <a href="#" onclick = "runAlert()" class = "btn fw-bold" style = "font-size: 15px;">Đặt dịch vụ</a>
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
    function openAlertSuccess() {
        document.getElementById("AlertSuccess").style.display = "block";
    }

    function closeAlertSuccess() {
        document.getElementById("AlertSuccess").style.display = "none";
    }
    function runAlert() {
        closeForm2();
        openAlertSuccess();
    }
</script>
