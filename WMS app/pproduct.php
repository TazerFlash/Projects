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
