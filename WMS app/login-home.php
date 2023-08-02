<?php 
include_once("includes/header.php"); 
if($_REQUEST{[car_id]) 
{ 
$SQL="SELECT * FROM car WHERE car_id = $ REQUEST{car_id]": 
$rs=mysqli_query($con,$SQL) or die(mysqli_error($con)): 
$data=mysqli_fetch_assoc($rs): 
?> 
<div class="crumb"> 
</div> 
<div class="clear"></div> 
<div id="content_sec"> 
<div class="col1"> 
 
<div class="contact"> 
<h4 class="heading colr">Welcome to 
Warehouse Management System</h4> 
<ul class='login-home-listing'> 
<?php 
if($_SESSION['user_details']['user_level_id'] == 1) {?> 
<li><a 
href="./index.php">Home</a> 
<li><a 
href="./warehouse.php">Add Warehouse</a></li> 
<li><a href="./product.php">Add 
Product</a></li> 
<li><a href="./warehousereport.php">Warehouse Report</a></li> 
<li><a href="./productreport.php">Product Report</a></li> 
<li><a href="./productlisting.php">All Products</a></li> 
<li><a href="./warehouselisting.php">All Warehouse</a></li> 
<li><a href="./changepassword.php">Change Password</a></li> 
<li><a 
href="./lib/login.php?act=logout">Logout</a></li> 
<?php } ?> 
</ul> 
</div> 
</div> 
<div class="col2"> 
 
<?php include_once("includes/sidebar.php"); ?> 
  </div> 
</div> 
<?php include_once("includes/footer.php"); ?> 
