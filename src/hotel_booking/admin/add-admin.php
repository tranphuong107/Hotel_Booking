<?php
    include('header.php');
    include('../config.php');
?>
<div class="content" >
<div class="container-fluid  h-10">
            <div class="row" >
                
                <div class="col-12" style="background-color:#f1f2f6;">
                <form action ="process-add-admin.php" method ="post" class=" m-3 mx-auto rounded-3 " style ="width:45%; border-radius: 30px">
                <h2 class ="text-center p-3 mb-3 ">Thêm tài khoản admin</h2>
                    <div class="mb-3">
                        <label for="txtAdmin" class="form-label">Tên tài khoản</label>
                        <input type="text" class="form-control rounded-pill" id="txtAdmin" name ="txtAdmin">  
                    </div>
                    <div class="mb-3">
                        <label for="txtMobile" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control rounded-pill" id="txtMobile" name ="txtMobile">
                    </div>
                    <div class="mb-3">
                        <label for="txtEmail" class="form-label">Địa chỉ Email</label>
                        <input type="email" class="form-control rounded-pill" id="txtEmail" name ="txtEmail" aria-describedby="emailHelp">
                       
                    </div>
                    <div class="mb-3">
                        <label for="txtpass01" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control rounded-pill" id="txtPass01" name ="txtPass01">
                    </div>
                    <div class="mb-3">
                        <label for="txtpass02" class="form-label">Nhập lại mật khẩu</label>
                        <input type="password" class="form-control rounded-pill" id="txtPass02" name ="txtPass02">
                    </div>
                    <div  class=" d-flex justify-content-center">
                    <button type="submit" class="btn text-white px-3 fs-5 " style="background-color:#6ab04c;" name ="btnadd">Thêm</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
</div>
<?php
    include('footer.php');
?>