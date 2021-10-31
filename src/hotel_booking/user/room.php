<?php include('header.php'); ?>
<main>
    <div class="header-inner">
        <img src="../images/Bg_room2.jpg" class="d-block w-100 h-100" alt="">
    </div>


</main>
    <div class="container" >
        <div class="row">
            <div class="col-md-6 p-3">
                
                <div class="jumbotron">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item ">
                                <a href="#">
                                    <span class="text-dark">TRANG CHỦ</span>
                                </a></li>
                            <li class="breadcrumb-item active ">
                                <a href="#">
                                    <span class="text-dark">PHÒNG</span>
                                </a></li>
                        </ol>
                    </nav>
                    
                </div>
            </div>
            <div class="col-md-6 pt-2">
                <div class="container-fluid">
                    
                        <div class="input-group">
                            <input type="text" class="form-control " style="width:45%" placeholder="Bạn muốn phòng nào?" aria-label="Bạn muốn phòng nào?" >
                            <select class="form-select" id="inputGroupSelect02" style="width:20%; padding:0px">
                                <option selected>LOẠI PHÒNG</option>
                                <option value="1">Single Room</option>
                                <option value="2">Double Room</option>
                                <option value="3">Family Room</option>
                            </select>
  
                            <button class="btn btn-dark " type="button">SEARCH</button>
                        </div>
                </div>

            </div>
	    </div>
    	
 
    <div class="row row-cols-1 row-cols-md-3 g-5">
        <div class="col">
            <div class="card">
                <a href="#" class="card-img " >
                    <img src="../images/single_room.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Superior Single Room</h5>
                    <p class="card-text  ">Giá: 2,000,000₫</p>
                    <a href="#" class="btn btn-outline-dark">Chi tiết>></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="../images/double_room.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Deluxe Double Room</h5>
                    <p class="card-text">Giá: 2,500,000₫</p>
                    <a href="#" class="btn btn-outline-dark">Chi tiết>></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="../images/family_room.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Luxury Family Room Suite</h5>
                    <p class="card-text">Giá: 3,500,000₫</p>
                    <a href="#" class="btn btn-outline-dark">Chi tiết>></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="../images/single_room2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Luxury Single Room Art</h5>
                    <p class="card-text">Giá: 900,000₫</p>
                    <a href="#" class="btn btn-outline-dark">Chi tiết>></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="../images/single_room3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Prenium Deluxe Double Room</h5>
                    <p class="card-text">Giá: 3,000,000₫</p>
                    <a href="#" class="btn btn-outline-dark">Chi tiết>></a>
                </div>
            </div>
        </div>
        <!-- <div class="col">
            <div class="card">
            <img src="../images/single_room4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Prenium Double Room Suite</h5>
                <p class="card-text">Giá: 1,000,000₫</p>
                <a href="#" class="btn btn-outline-dark">Chi tiết>></a>
            </div>
            </div>
        </div> -->
    </div>
</div>
 

<?php include('footer.php'); ?>