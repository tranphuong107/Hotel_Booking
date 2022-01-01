<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hello, world!</title>
    <style>
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
  </head>
  <body>
    <div class = "khung">
        <div class = "cancel">
            <a href="#" style = "color: #835542;"><i class="far fa-times-circle"></i></a>
        </div>
        <div class = "title">
            <h3 class = "titlee"><center>ĐẶT DỊCH VỤ</center></h3>
        </div>
        <div class = "vao fw-bold">
            Loại dịch vụ:
            <div class = "pt-2">
                <select class  = "rounded pb-1 pt-1 ps-1" style = "background-color:#c49872b3;border:none;color:#2e1c09;width:263px;">
                    <option value="0">Chọn loại dịch vụ</option>
                    <option value="1">Phòng đơn</option>
                    <option value="2">Phòng đôi</option>
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
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>