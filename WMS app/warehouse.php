<?php 
include_once("../includes/db_connect.php"); 
include_once("../includes/functions.php"); 
if($_REQUEST[act]=="save_warehouse") 
{ 
save_warehouse(); 
exit; 
} 
 
if($_REQUEST[act]=="delete_warehouse") 
{
  delete_warehouse(); 
exit: 
###Code for save warehouse####4 
function save_warehouse() 
{ 
global $con; 
$R=$_REQUEST; 
TTL 
Simage_name = $_FILES[warehouse_image][name]; 
Slocation = $_FILES[warehouse_image][tmp_name]; 
if(S$image_name!="") 
{ 
move_uploaded_file(Slocation,"../uploads/".Simage_name); 
} 
else 
{ 
Simage_name = $R[avail_image]: 
} 
if($R[warehouse_id]) 
{ 
 
$statement = "UPDATE warehouse SET": 
$cond = "WHERE ‘warehouse_id = '$R[warehouse_id]""; 
$msg = "Data Updated Successfully”; 
} 
else 
{ 
S$statement = "INSERT INTO ‘warehouse’ SET"; 
Scond = ""; 
$msg="Data saved successfully."; 
} 
$SQL= $statement." 
‘warehouse_name = '$R[warehouse_name]', 
‘warehouse_contact = 
'$R[warehouse_contact]', 
‘warehouse_image = 'Simage_name’, 
‘warehouse_description’ = 
'$R[warehouse_description]', 
‘warehouse_email = '$R[warehouse_email]’, 
‘warehouse_category_id = 
'$R[warehouse_category_id]"". 
$cond; 
$rs = mysqli_query($con,$SQL) or die(mysqli_error($con)); 
header("Location:../warehouse-report.php?msg=$msg"): 
HHHHHSHHHF unction for delete warehouse#4F##HFFF#3 
 
function delete_warehouse() 
global $con; 
MisiDelete the record/////MH/// 
$SQL="DELETE FROM warehouse WHERE warehouse_id = 
$_REQUEST{[warehouse_id]"; 
mysqli_query(Scon,$SQL) or die(mysqli_error($con)): 
header("Location:../warehouse-report.php?msg=Deleted 
Successfully."); 
} 
?> 
