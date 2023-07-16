<?php 
ob_start();
session_start();
?>



<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Trading Company</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="description" content="Bitter Mobile Template">
  <meta name="keywords" content="bootstrap, mobile template, bootstrap 4, mobile, html, responsive" />
  <style>
.appHeader1 {
	background-color: #f44336 !important;
	border-color: #f44336 !important;
}
.card {
	border-radius:0px;
	padding:10px !important;
}
h3 {
	font-weight:normal;
	font-size:18px;
}
.razorpay-payment-button {
	padding: 10px 50px;
	color: #fff;
	background: #ff2e17;
	font-weight: 600;
	font-size: 14px;
	border: 1px solid #ff2e17;
	text-transform:uppercase;
}
.razorpay-payment-button:hover {
	color: #fff;
	background-color: #f33076;
	border-color: #f2246e;
	cursor:pointer;
}

.btn{ background-color: blue;
}
</style>
  
  </head>

  <body>
  <?php include("include/connection.php");?>
  

  <!-- App Header -->
  <div class="appHeader1">
    <div class="left"> <a href="#" onClick="goBack()" class="icon goBack"> <i class="icon ion-md-arrow-back"></i> </a>
      <div class="pageTitle">Pay Now</div>
    </div>
  </div>

    <?php include'head.php' ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <br>
    <div class="conntainer-fluid col-md-12 d-flex justify-content-center">
	<div class="card col-md-9 shadow">
	<div id="appCapsule">
    <div class="appContent">
      <div class="sectionTitle3"> 
        
        <!-- post list -->
        <div class="">
          <div class="row"> 
            <!-- item -->
            <div class="col-12 pright">
              <div class="vcard card mt-5">
                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th colspan="2" style="text-align:center; font-size:18px; border-top:none;">Payment Detail</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Name </td>
                      <td><?php echo $_SESSION['name'];?></td>
                    </tr>
                    <tr>
                      <td>Mobile </td>
                      <td><?php echo $_SESSION['mobile'];?></td>
                    </tr>
                    <tr>
                      <td>Email Id</td>
                      <td><?php echo $_SESSION['email'];?></td>
                    </tr>
                    <tr>
                      <td>Payable Amount </td>
                      <td>₹ <?php echo number_format($_SESSION['finalamount'],2);?></td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
	
		<div>
			
		</div>
			
		  <div class="form-group">
			 <!--<input class="form-control bg-danger text-light" tyle="text-align: center; font-size: 70px;" type="button" value="Pay Now ₹ <?php echo number_format($_SESSION['finalamount'],2);?>" onclick="pay_now();" />-->
			<button type="button" class="form-control bg-danger text-light" tyle="text-align: center; font-size: 70px;" id="rzp-button1" onclick="pay_now()">Pay Now</button>
			</div> 

		
	</div> 
	  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
	<?php
$orderId = getToken(10);
function getToken($length)
{
    $token = "order_";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet.= "0123456789";
    $max = strlen($codeAlphabet); // edited

    for ($i=0; $i < $length; $i++) {

        $token .= $codeAlphabet[rand(0, $max-1)];
    }

    return $token;
}
?>

<script>
 function pay_now(){
          //get the input from the form
          var id = '<?php echo $_SESSION['frontuserid'];?>';
          var mobile = '<?php echo $_SESSION['mobile'];?>';
          var amount = '<?php echo number_format($_SESSION['finalamount'],2, '.', '');?>';
          var actual_amount = amount*100;
          var name = '<?php echo $_SESSION['name'];?>';
          var email = '<?php echo $_SESSION['email'];?>';
          
          //var actual_amount = amount;
          var options = {
            "key": "rzp_test_OMdtvhZungbjX0",
            
             "name": "Mall",
            "description": "Add Wallet Amount",
            "image": "https://papaya-coders.b-cdn.net/wp-content/uploads/2023/06/papayacoders-logo-e1686920327207.png",
            "callback_url": "https://colorpicker.sourcecodescript.in/razorpay_payment.php",
            "prefill":
            {
              "name":name,
              "email": email,
              "contact": mobile,
            },
             "notes": {
                "billing_name": name,
                "evt_id":'<?= $orderId;?>'
            },
            "theme": {
                "color": "#3399cc"},
            "amount": actual_amount, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "mobile": mobile,
            "user_id":id,
            "image": "razorpay.png",
            "handler": function (response){
                console.log(response);
                $.ajax({
 
                    url: 'razorpay_payment.php',
                    'type': 'POST',
                    'data': {'payment_id':response.razorpay_payment_id,'amount':amount,'mobile':mobile,'user_id':id},
                    success:function(data){
                      
                      Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Payment success',
  showConfirmButton: false,
  timer: 1500
});
window.location.href = 'myaccount.php';
                    }
 
                });
           
            },
             
        };
        var rzp1 = new Razorpay(options);
        rzp1.on('payment.failed', function (response){
          $.ajax({
 
 url: 'razorpay_payment.php',
 'type': 'POST',
 'data': {'payment_id_failed':response.error.metadata.payment_id,'amount':amount,'mobile':mobile,'id':id,'reason':response.error.reason},
 success:function(data){
//   alert(data);
   Swal.fire({
  position: 'top-end',
  icon: 'danger',
  title: 'Payment Failed',
  showConfirmButton: false,
  timer: 1500
});
// console.log(data);
window.location.href = 'myaccount.php';
 }

});
});
        document.getElementById('rzp-button1').onclick = function(e){
            rzp1.open();
            e.preventDefault();
        }
    }
 
	$(document).ready(function() {
	
// 	$("#payButton").click(function(e) {
		
// 		var getAmount = $("#amount").val();
// 		var product_id =  '<?php echo $_SESSION['frontuserid']; ?>';
// 		var useremail =  '<?php echo $_SESSION['email'];?>';
// 		var usermobile ='<?php echo $_SESSION['mobile'];?>';
// 		var amount = '<?php echo number_format($_SESSION['finalamount'],2);?>';
// 		var totalAmount = getAmount * 100;
// 		var name ='<?php echo $_SESSION['name'];?>';
		
// 		var options = {
// 					"key": "rzp_live_TojpT244bJLV1t", // your Razorpay Key Id
// 					"amount": totalAmount,
// 					"name": name,
// 					"image": "https://www.codefixup.com/wp-content/uploads/2016/03/logo.png",
// 					"prefill":
//                     {
//                       "name":name,
//                       "email": useremail,
//                       "contact": usermobile,
//                     },
// 					"handler": function (response){
// 					$.ajax({
// 							url: 'razorpay_payment.php',
// 							type: 'post',
// 							dataType: 'json',
// 							data: {
// 									razorpay_payment_id: response.razorpay_payment_id , amount : totalAmount,product_id : product_id ,mobile : mobile,
// 								  }, 
// 							success: function (data) 
// 							{
// 							     Swal.fire({
//                                   position: 'top-end',
//                                   icon: 'success',
//                                   title: 'Payment success',
//                                   showConfirmButton: false,
//                                   timer: 1500
//                                 });
// 								window.location.href = 'myaccount.php';
								
// 							}
// 					     });
// 					},
// 					"theme": {
// 					"color": "#528FF0"
// 							}
// 					};
 
// 		var rzp1 = new Razorpay(options);
// 		rzp1.open();
// 		e.preventDefault();
// });
 
});
</script>
 
</body>
</html>