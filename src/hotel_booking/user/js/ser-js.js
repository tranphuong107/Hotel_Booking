// $(document).ready(function(){
//     $('#confirm').click(function(){
//         var ser_id = $('#service-id').val();
//         var from_date = $('#from-date').val();
//         var to_date = $('#to-date').val();
//         var total = $('#total').val();
//         var demo = $('#demo').val();
//         $.ajax({
//             url :'process-order-service.php',
//             method: 'post',
//             data:{
//                 ser_id:ser_id,
//                 from_date:from_date,
//                 to_date:to_date,
//                 total:total,
//                 demo:demo
//             },
//         success:function(response){
//             alert ('Đặt dịch vụ thành công!');
//         }
//         })
//     })
// })