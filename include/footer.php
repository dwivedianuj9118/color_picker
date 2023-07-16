<?php $urlpage= basename($_SERVER['PHP_SELF']);
$active='';

?>
<div class="appBottomMenu">
  <div class="item <?php if($urlpage=='index.php'){echo'active';}?>"> <a href="index.php">
    <!--<p> <i class="icon ion-md-home"></i> <span>Home</span> </p>-->
    <p> <img class="img-circle img-bordered-lg" src="img/icon/basics_cur.png" width-25px height=25px> <span style="color:grey">Home</span> </p>
    </a> </div>
  <div class="item <?php if($urlpage=='search.php'){echo'active';}?>"> <a href="search.php">
    <!--<p> <i class="icon ion-ios-search"></i> <span>Search</span> </p>-->
    <p> <img class="img-circle img-bordered-lg" src="img/icon/Vector-Search-PNG-Image.png" width-25px height=25px> <span style="color:grey">Search</span> </p>
    </a> </div>
   <?php if(isset($_SESSION['frontuserid'])){?>
    <div class="item <?php if($urlpage=='gamedashboard.php'){echo'active';}?>"> <a href="gamedashboard.php">
    <!--<p> <i class="icon ion-md-trophy"></i> <span>Win</span> </p>-->
    <p><img class="img-circle img-bordered-lg" src="img/icon/winner-golden-trophy-illustration-free-vector-removebg-preview (1).png" width-25px height=25px> <span style="color:grey">Win</span> </p>
    </a> </div>
    
     
    
    
    <div class="item <?php if($urlpage=='login.php' || $urlpage=='signup.php' || $urlpage=='forgot-password.php' || $urlpage=='myaccount.php' || $urlpage=='recharge.php' || $urlpage=='transactions.php'){echo'active';}?>"> <a href="myaccount.php" class="icon toggleSidebar">
    <!--<p> <i class="icon ion-md-person"></i> <span>my </span> </p>-->
    <p> <img class="img-circle img-bordered-lg" src="img/icon/personcenter_cur.png" width-25px height=25px> <span style="color:grey">My </span> </p>
    </a> </div>
    <?php }else{?>
  <div class="item <?php if($urlpage=='login.php' || $urlpage=='signup.php' || $urlpage=='forgot-password.php'){echo'active';}?>"> <a href="login.php" class="icon toggleSidebar">
    <!--<p> <i class="icon ion-md-person"></i> <span>My </span> </p>-->
    <p> <img class="img-circle img-bordered-lg" src="img/icon/personcenter_cur.png" width-25px height=25px> <span style="color:grey">my </span> </p>
    </a> </div>
    <?php }?>
</div>