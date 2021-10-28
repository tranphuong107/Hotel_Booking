<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Hotel booking</title>
  </head>
  <style>
    .bg-re{
        background-image: url(../images/francesca-saraco-_dS27XGgRyQ-unsplash.jpg);
    }
    .my-btn{
        border: none;
        background-color: #16a085;
    }
    .my-form{
        background-color: white;
    }
  </style>
  <body>
  <main>
        <div class="container-fluid bg-re h-10">
            <div class="row">
                
                <div class="col-12">
                <form action ="process-register.php" method ="post" class=" m-3 p-5 mx-auto my-form rounded-3 " style ="width:40%; border-radius: 30px">
                <h2 class ="text-center pt-3 mb-3 text-uppercase">Đăng ký</h2>
                    <div class="mb-3">
                        <label for="txtUser" class="form-label">User name</label>
                        <input type="text" class="form-control rounded-pill" id="txtUser" name ="txtUser">  
                    </div>
                    <div class="mb-3">
                        <label for="txtMobile" class="form-label">User Mobile</label>
                        <input type="text" class="form-control rounded-pill" id="txtMobile" name ="txtMobile">
                    </div>
                    <div class="mb-3">
                        <label for="txtEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control rounded-pill" id="txtEmail" name ="txtEmail" aria-describedby="emailHelp">
                       
                    </div>
                    <div class="mb-3">
                        <label for="txtpass01" class="form-label">Password</label>
                        <input type="password" class="form-control rounded-pill" id="txtPass01" name ="txtPass01">
                    </div>
                    <div class="mb-3">
                        <label for="txtpass02" class="form-label">Retype Password</label>
                        <input type="password" class="form-control rounded-pill" id="txtPass02" name ="txtPass02">
                    </div>
                    <div  class=" d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary my-btn px-3 fs-5 " name ="btnRegister">Register</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </main>

    
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
  
