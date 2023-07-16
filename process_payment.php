<?php
include("include/connection.php");
//connect the database
ob_start();
session_start();
if($_SESSION['frontuserid']=="")
{header("location:login.php");exit();}
 
//get the payment details from payment page
 
if(isset($_POST['payment_id']) && isset($_POST['amount']) && isset($_SESSION['frontuserid']))
{
   @$array=$_POST;
@$userid=$_SESSION['frontuserid'];
@$transactionid=$_POST['razorpay_payment_id'];
@$amt=$_POST['getAmount'];
@$famt=$amt*minamountsetting($con,'rechargebonus')/100;
@$amount=$amt+$famt;

$chkorder=mysqli_query($con,"select * from `tbl_order` where `transactionid`='".$transactionid."'");
$chkorderRow=mysqli_num_rows($chkorder);
$today = date("Y-m-d H:i:s");
if($chkorderRow==''){
$sql= mysqli_query($con,"INSERT INTO `tbl_order`(`userid`,`transactionid`,`amount`,`status`) VALUES ('".$userid."','".$transactionid."','".$amt."','1')");
@$orderid=mysqli_insert_id($con);

$sql3= mysqli_query($con,"INSERT INTO `tbl_walletsummery`(`userid`,`orderid`,`amount`,`type`,`actiontype`,`createdate`) VALUES ('".$userid."','".$orderid."','".$amount."','credit','recharge','".$today."')");

$walletbalance=wallet($con,'amount',$userid);	
$finalbalanceCredit=$walletbalance+$amount;	
$sqlwallet= mysqli_query($con,"UPDATE `tbl_wallet` SET `amount` = '$finalbalanceCredit' WHERE `userid`= '$userid'");
 $refcode=user($con,'code',$userid);
invitebonus($con,$userid,$refcode);
unset($_SESSION["name"]);
unset($_SESSION["mobile"]);
unset($_SESSION["email"]);
unset($_SESSION["finalamount"]);
}
if(isset($_POST['reason']) && isset($_POST['payment_id_failed']) && isset($_POST['amount']) && isset($_POST['id'])){
    $paymentId = $_POST['payment_id_failed'];
    $amount = $_POST['amount'];
    $mobile = $_POST['mobile'];
    $advertisers_id = $_POST['id'];
    $reason = $_POST['reason'];
    //insert data into database
    if(!empty($reason)){
        $sql="INSERT INTO razorpay_payment(advertisers_id,mobile,amount,payment_status,payment_id,reason)VALUES('$advertisers_id','$mobile','$amount','failed','$paymentId','$reason')";
        $stmt=$con->prepare($sql);
        $stmt->execute();
    }else{
        $sql="INSERT INTO razorpay_payment(advertisers_id,mobile,amount,payment_status,payment_id)VALUES('$advertisers_id','$mobile','$amount','failed','$paymentId')";
        $stmt=$con->prepare($sql);
        $stmt->execute();
    }
}
}