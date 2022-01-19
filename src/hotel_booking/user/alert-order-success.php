<style>
    .alert-popup{
        display: block;
            }
    .alert-content-popup {
               background: rgba(0,0,0,0);
                width: 30%;
                height: 10%;
                display: flex;
                align-items: center;
                justify-content: center;
                position: fixed;
                top: 13%;
                left: 70%;
                }
</style>
<div class = "alert-popup" id = "AlertSuccess">
    <div class ="alert-content-popup">
        <div class="alert rounded p-1 m-5" role="alert" style = "background-color: #aee4c0;width: 250px;height: 90px;border:#75ba90 solid 2px ">
        <div style = "text-align:right" onclick = "closeAlertSuccess()">
        <a href = "" class="btn-close p-1 me-2" data-bs-dismiss="alert" aria-label="Close" style = "font-size: 10px; color:#75ba90 ;"></a>
        </div>
    <p class="alert-heading ps-4" >Bạn đã đặt thành công!</p>
    </div>
    </div>
</div>

