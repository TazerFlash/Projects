<?php 
session_start(): 
include_once("../includes/db_connect.php"); 
include_once("../includes/functions.php"); 
if($_REQUEST[act]=="save_item") 
{ 
save_item(); 
exit; 
} 
if($_REQUEST[act]=="update_cart") 
{ 
update_cart(); 
exit; 
} 
if($_REQUEST[act]=="delete_cart") 
{ 
delete_cart(); 
exit; 
} 
function save_item() 
  {
    if(!$_SESSION['login'}) { 
header("Location:../login.php?msg=Login to buy 
products"); 
exit; 
} 
global $con; 
$R=$_REQUEST: 
if($_SESSION['order_id'] == "" || lisset($_SESSION[order_id])) { 
$R['order_date'] = date("d F,Y h:i:s A"): 
SSQL = "INSERT INTO ‘order (‘order_user_id , 
‘order_date , order_amount’, ‘order_status’) VALUES 
("".$_SESSION['user_details']['user_id'].", 'S$R[order_date]', '0', 'Pending')": 
$rs = mysqli_query($con,$SQL) or 
die(mysqli_error($con)): 
$_SESSION/'order_id'] = mysqli_insert_id($con); 
} 
FALL 
if($R[cart_id]) 
{ 
$statement = "UPDATE ‘cart SET": 
$Scond = "WHERE ‘cart_id’ = '$R[cart_id]" 
$msg = "Data Updated Successfully." 
$condQuery = "": 
} 
else 
{
  $statement = "INSERT INTO ‘order_item’ SET"; 
Scond = ""; 
$msg="Item Added to Cart Successfully."; 
} 
S$SQL= $statement." 
‘oi_order_id’ = ".$_SESSION[order_id'].”, 
‘oi_product_id’ = '$R[product_id]’, 
‘oi_price_per_unit = '$R[cost]', 
‘oi_cart_quantity ='1', 
‘oi_total’ = 'SR[cost]' 
$cond; 
$rs = mysqli_query($con,$SQL) or die(mysqli_error($con)); 
header("Location:../report-cart.php?msg=$msq"); 
} 
FHHtHH+e Update the cart 
function update_cart() { 
global $con; 
$R = $_REQUEST: 
SSQL="SELECT * FROM order_item’, product’ WHERE 
oi_product_id = product_id AND oi_order_id = ".$_SESSION['order_id']; 
$rs = mysqli_query($con,$SQL) or die(mysqli_error($con)); 
$i = 0; 
 
while(Sdata = mysqli_fetch_assoc($rs)) 
  { 
SSQL = "UPDATE order_item SET oi_cart_quantity = 
".$R[order_quantity][Si]." WHERE oi_id = ".$datal['oi_id']; 
$rs1 = mysqli_query($con,$SQL) or 
die(mysqli_error($con)): 
Si++; 
} 
Sorder_id = $_SESSION['order_id']; 
$_SESSION['order_id'] ="; 
//! Update Order //// 
SSQL = "UPDATE ‘order SET order_amount = 
".$R['total_cost_final'].", order_status = 'Confirmed' WHERE order_id = 
".$Sorder_id: 
$rs = mysqli_query($con,$SQL) or die(mysqli_error($con)); 
header("Location:../payment.php?order_id=Sorder_id"); 
} 
FHHHSS HEF unction for delete cart##F#EHSFFES 
function delete_cart() 
{ 
global $con; 
$SQL="DELETE FROM order_item WHERE oi_id = $ REQUESTIoi_id]": 
$rs=mysqli_query($con,$SQL); 
header("Location:../report-cart.php?msg=ltem Deleted 
Successfully."): 
} 
 
?> 
