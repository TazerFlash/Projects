Coding for Color.php 
<?php 
include_once("../includes/db_connect.php"): 
include_once("../includes/functions.php"); 
if($_REQUEST[act]=="save_color") 
{ 
 
save_color(); 
exit; 
} 
if($_REQUEST[act]=="delete_color") 
{ 
delete_color(); 
exit; 
} 
###Code for save color##### 
function save_color() 
{ 
global $con; 
$R=$_REQUEST;: 
TTY 
Simage_name = $_FILES[color_image][name]; 
Slocation = $_FILES[color_image][tmp_name];: 
if(S$image_name!="") 
{ 
move_uploaded_file(Slocation,"../uploads/".Simage_name); 
} 
else 
{ 
 
Simage_name = $R[avail_image]: 
if($R[color_id]) 
{ 
$statement = "UPDATE ‘color SET"; 
$cond = "WHERE ‘color_id® = '$R[color_id]"; 
$msg = "Data Updated Successfully."; 
} 
else 
{ 
$statement = "INSERT INTO ‘color SET": 
$cond = ""; 
$msg="Data saved successfully."; 
} 
$SQL= $statement." 
‘color_name’ = '$R[color_name]', 
‘color_image = 'Simage_name’, 
‘color_description’ = '$R[color_description] 
$cond; 
$rs = mysqli_query($con,$SQL) or die(mysqli_error($con)); 
header("Location:../color-report.php?msg=$msg"); 
} 
FHHHHSSHHF unction for delete color4+4sssserees 
function delete_color() 
{ 
 
global $con; 
MiiiiDelete the record/////ii/// 
SSQL="DELETE FROM color WHERE color_id = 
$_REQUEST{color_id]"; 
mysqli_query(Scon,$SQL) or die(mysqli_error($con)): 
header("Location:../color-report.php?msg=Deleted Successfully."); 
} 
?> 
