<?php 
include_once("../includes/db_connect.php"): 
include_once("../includes/functions.php"); 
if($_REQUEST[act]=="save_category") 
{ 
save_category(); 
exit; 
} 
if($_REQUEST[act]=="delete_category") 
{ 
delete_category(); 
exit; 
} 
###Code for save category##### 
function save_category() 
{ 
global $con; 
$R=$_REQUEST; 
PTTL 
Simage_name = $_FILES[category_image][name]; 
Slocation = $_FILES[category_image][tmp_name]: 
 
if(Simage_name!="") 
{ 
move_uploaded_file(Slocation,"../uploads/".Simage_name); 
} 
else 
{ 
Simage_name = $R[avail_image]; 
} 
if($R[category_id]) 
{ 
$statement = "UPDATE ‘category SET": 
$Scond = "WHERE ‘category_id = '$R[category_id]": 
$msg = "Data Updated Successfully."; 
} 
else 
{ 
$statement = "INSERT INTO ‘category SET": 
$cond = ""; 
$msg="Data saved successfully."; 
} 
$SQL= $statement." 
‘category_name = 'SR[category_name]', 
‘category_image = 'Simage_name’, 
‘category_description’ = 
 
'$R[category_description]' 
"
.
$cond; 
$rs = mysqli_query($con,$SQL) or die(mysqli_error($con)); 
header("Location:../category-report.php?msg=$msg"); 
} 
HHHHHsHHHF unction for delete category##HHHHHHSHS 
function delete_category() 
{ 
global $con; 
iiilliDelete the record////////i/ 
$SQL="DELETE FROM category WHERE category_id = 
$_REQUEST{category_id]": 
mysqli_query(Scon,$SQL) or die(mysqli_error($con)): 
header("Location:../category-report.php?msg=Deleted 
Successfully."); 
} 
?> 

