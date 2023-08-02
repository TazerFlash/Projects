Coding for User.php 
<?php 
session_start(); 
include_once("../includes/db_connect.php"); 
include_once("../includes/functions.php"); 
if($_REQUEST[act]=="save_user") 
{ 
save_user(); 
 
exit: 
} 
if($_REQUEST[act]=="delete_user") 
{ 
delete_user(); 
exit; 
} 
if($_REQUEST[act]=="get_report") 
{ 
get_report(); 
exit; 
} 
###Code for save user###HH 
function save_user() 
{ 
global $con; 
$R=$_REQUEST: 
///Checking Username Exits or not //// 
$SQL="SELECT * FROM user WHERE user_username = 
'$_REQUEST[user_username]"; 
$rs=mysqli_query($con,$SQL); 
$data=mysqli_fetch_assoc($rs); 
if($data['user_username'] && $R['user_id'] != 
$_SESSION['user_details']['user_id']) { 
header("Location:../user.pbhp?msg=Username Already 
Exits. Kindly choose another...."); 
 
return; 
} 
MTT 
Simage_name = $_FILES[user_image][name]; 
Slocation = $_FILES[user_image][tmp_name]; 
if(S$image_name!="") 
{ 
move_uploaded_file(Slocation,"../uploads/".Simage_name); 
} 
else 
{ 
Simage_name = $R[avail_image]: 
} 
if($R[user_level_id] == "" || lisset($R[user_level_id])) 
{ 
$R[user_level_id] = 2; 
} 
if($R[user_id]) 
{ 
$statement = "UPDATE ‘user SET"; 
$cond = "WHERE ‘user_id® = '$R[user_id]'"; 
$msg = "Data Updated Successfully."; 
$ScondQuery = ""; 
} 
 
else 
{ 
$statement = "INSERT INTO ‘user SET": 
ScondQuery =" user_username = 'SR[user_username]', 
‘user_password’ = 
'$R[user_password]',": 
$Scond =""; 
$msg="Data saved successfully."; 
} 
$SQL= S$statement." 
‘user_level_id’ = '2', 
$condQuery 
‘user_name = '$R[user_name]’, 
‘user_add1° = '$R[user_add1]', 
‘user_add2° = '$R[user_add2]', 
‘user_city = 'SR[user_city]', 
‘user_state’ = '$R[user_state]’, 
‘user_country = '$R[user_country]', 
‘user_email = '$R[user_email]’, 
‘user_mobile’ = '$R[user_mobile]', 
‘user_gender = '$R[user_gender]', 
‘user_dob = '$R[user_dob]', 
‘user_image = 'Simage_name". 
 Srs = mysqli_query($con,$SQL) or die(mysqli_error($con)): 
if($_SESSIONT['login']!=1) 
{ 
header("Location:../login.pbhp?msg=You are registered 
successfully. Login with your credential !!!"); 
exit; 
} 
else if($_SESSION['user_details']['user_level_id'] == 2) { 
header("Location:../user.php?user_id=".$_SESSION['user_details']['user_id 
'}."&msg=Your account updated successfully !!!"); 
exit: 
} 
header("Location:../userreport.php?msg=Smsg&type=$R[user_level_id]"); 
} 
HeHHHSHSHF unction for delete users#4#FH#sHSHHHS 
function delete_user() 
{ 
global $con; 
S$SQL="SELECT * FROM user WHERE user_id = 
$_REQUEST[user_id]"; 
$rs=mysqli_query(Scon,SSQL); 
 
$data=mysqli_fetch_assoc($rs); 
Mil/Delete the record////////// 
$SQL="DELETE FROM user WHERE user_id = 
$_REQUEST{[user_id]"; 
mysqli_query(Scon,$SQL) or die(mysqli_error($con)): 
(//ii/Delete the imagel////////// 
if($data[user_image]) 
{ 
unlink("../uploads/".$data[user_image]): 
} 
header("Location:../user-report.php?msg=Deleted 
Successfully.&type=$data[user_level_id]"): 
} 
?> 
