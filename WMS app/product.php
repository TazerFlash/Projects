<?php 
 
include_once("../includes/db_connect.php"); 
include_once("../includes/functions.php"); 
if($_REQUEST[act]=="save_product") 
{ 
save_product(); 
exit; 
} 
if($_REQUEST[act]=="delete_product") 
{ 
delete_product(); 
exit; 
} 
###Code for save product##### 
function save_product() 
{ 
global $con; 
$R=$_REQUEST;: 
SEE 
Simage_name = $_FILES[product_image][name]; 
Slocation = $_FILES[product_image][tmp_name]; 
if(S$image_name!="") 
{ 
move_uploaded_file(Slocation,"../uploads/".Simage_name); 
 
} 
else 
{ 
Simage_name = $R[avail_image]: 
} 
if($R[product_id]) 
{ 
$statement = "UPDATE ‘product SET"; 
$Scond = "WHERE ‘product_id® = '$R[product_id]"": 
$msg = "Data Updated Successfully."; 
} 
else 
{ 
$statement = "INSERT INTO ‘product SET"; 
$cond = mm 
$msg="Data saved successfully."; 
} 
S$SQL= Sstatement." 
‘product_name’ = '$R[product_name]', 
‘product_warehouse_id’ = '$R[product_warehouse_id]’, 
‘product_image = 'Simage_name’, 
‘product_description’ = '$R[product_description]', 
‘product_stock’ = '$R[product_stock]', 
‘product_category_id = 
 
'$R[product_category_id]".
  $cond; 
$rs = mysqli_query($con,$SQL) or die(mysqli_error($con)); 
header("Location:../product-report.php?msg=$msqg"); 
} 
FHHHESHHHF unction for delete product#HHHHsHsess3 
function delete_product() 
{ 
global Scon; 
MiiiliDelete the record////////// 
$SQL="DELETE FROM product WHERE product_id = $ REQUEST[product_id]": 
mysqli_query(Scon,$SQL) or die(mysqli_error($con)): 
header("Location:../product-report.php?msg=Deleted Successfully."); 
} 
?> 
