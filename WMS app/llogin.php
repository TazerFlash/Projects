Coding for Login.php 
<?php 
include_once("includes/header.php"); 
if($_REQUEST{[car_id]) 
{ 
$SQL="SELECT * FROM car WHERE car_id = $ REQUEST{car_id]": 
$rs=mysqli_query($con,SSQL) or die(mysqli_error($con)); 
$data=mysqli_fetch_assoc($rs); 
?> 
<div class="crumb"> 
</div> 
<div class="clear"></div> 
<div id="content_sec"> 
 
<div class="col1"> 
<div class="contact"> 
<h4 class="heading colr">Login To Your 
Account</h4> 
<div 
class='msg'><?=$_REQUEST['msg']?></div> 
<form action="lib/login.php" method="post" 
name="frm_car"> 
<ul class="forms"> 
<li class="txt">Username</li> 
<li class="inputfield"><input 
name="user_user" type="text" class="bar" required /></li> 
</ul> 
<ul class="forms"> 
<li class="txt">Password</li> 
<li class="inputfield"><input 
name="user_password" type="password" class="bar" required /></li> 
</ul> 
<div class="clear"></div> 
<ul class="forms"> 
<li class="txt">&nbsp;</li> 
<li class="textfield"><input 
type="submit" value="Submit" class="simplebtn"></li> 
<li class="textfield"><input 
type="reset" value="Reset" class="resetbtn"></li> 
</ul> 
<input type="hidden" name="act" 
value="check_login"> 
 
</form> 
</div> 
</div> 
<div class="col2"> 
<?php include_once("includes/sidebar.php"); ?> 
</div> 
</div> 
<?php include_once("includes/footer.php"); ?> 
Coding for Login-Home.php 
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
Coding for Product.php 
<?php 
include_once("includes/header.php"); 
if($_REQUEST[product_id]) 
{ 
$SSQL="SELECT * FROM product WHERE product_id = 
$_REQUEST/{[product_id]"; 
$rs=mysqli_query(Scon,$SQL) or die(mysqli_error($con)): 
$data=mysqli_fetch_assoc($rs); 
?> 
<div class="crumb"> 
</div> 
<div class="clear"></div> 
<div id="content_sec"> 
<div class="col1"> 
<div class="contact"> 
<h4 class="heading colr"><?=$heading?>Add 
 
Product</h4> 
  <?php 
if($_REQUEST['msg']) { 
?> 
<div class="msg"><?=$_REQUEST['msg']?></div> 
<?php 
} 
?> 
<form action="lib/product.php" 
enctype="multipart/form-data" method="post" name="frm_product"> 
<ul class="forms"> 
<li class="txt">Product Name</li> 
<li class="inputfield"><input 
name="product_name" id="product_name" type="text" class="bar" required 
value="<?=$data[product_name]?>"/></li> 
</ul> 
<ul class="forms"> 
<li class="txt">Warehouse</li> 
<li class="inputfield"> 
<select 
name="product_warehouse_id" class="bar" required/> 
<?php echo 
get_new_optionlist("color","color_id","color_name",$data[product_warehou 
se_id]);?> 
</select> 
</li> 
</ul> 
 
<ul class="forms">
  <li class="txt">Product Category</li> 
<li class="inputfield"> 
<select 
name="product_category_id" class="bar" required/> 
<?php echo 
get_new_optionlist("category","category_id","category_name",Sdata[produc 
t_category_id]);?> 
</select> 
</li> 
</ul> 
<ul class="forms"> 
<li class="txt">Total Stock</li> 
<li class="inputfield"><input 
name="product_stock" id="product_stock" type="text" class="bar" required 
value="<?=$data[product_stock]?>"/></li> 
</ul> 
<ul class="forms"> 
<li class="txt">Product Description</li> 
<li class="textfield"><textarea 
name="product_description" cols="" rows="4" required style="Wwidth:300px; 
height:70px"><?=$data[product_description]?></textarea></li> 
</ul> 
<ul class="forms"> 
<li class="txt">Image</li> 
<li class="inputfield"><input 
name="product_image" type="file" class="bar"/></li> 
</ul> 
 
<div style="clear:both"></div> 
<ul class="forms"> 
<li class="txt">&nbsp;</li> 
<li class="textfield"><input 
type="submit" value="Submit" class="simplebtn"></li> 
<li class="textfield"><input type="reset" 
value="Reset" class="resetbtn"></li> 
</ul> 
<input type="hidden" name="act" 
value="save_product"> 
<input type="hidden" name="avail_image" 
value="<?=$data[product_image]?>"> 
<input type="hidden" name="product_id" 
value="<?=$data[product_id]?>"> 
</form> 
</div> 
</div> 
<div class="col2"> 
<?php include_once("includes/sidebar.php"); ?> 
</div> 
</div> 
<?php include_once("includes/footer.php"); ?> 
