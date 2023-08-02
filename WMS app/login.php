<?php 
session_start(); 
include_once("../includes/db_connect.php"); 
if($_REQUEST[act]=="check_login") 
{ 
check_login(): 
} 
if($_REQUEST[act]=="logout") 
{ 
logout(): 
} 
if($_REQUEST{[act] == "change_password") 
{ 
change_password(): 
 
} 
####Function check user####44# 
function check_login() 
{ 
global $con; 
Suser_user=$_REQUEST[user_user]; 
Suser_password=$_REQUEST{[user_password]; 
$SQL="SELECT * FROM user WHERE user_username = 
‘Suser_user' AND user_password = 'Suser_password": 
$rs = mysqli_query(Scon,$SQL) or die(mysqli_error($con)): 
if(mysqli_num_rows($rs)) 
{ 
$_SESSION[login]=1; 
$_SESSIONI'user_details'] = mysqli_fetch_assoc($rs); 
header("Location:../login-home.php"); 
} 
else 
{ 
header("Location:../login.php?msg=lInvalid User and 
Password."): 
} 
} 
### unction logout#### 
function logout() 
{ 
 
$ SESSION[login]=0: 
$_SESSION['user_details'] = 0; 
header("Location:../login.php?msg=Logout Successfullly."); 
} 
####4 Function for changing the password #### 
function change_password() { 
global Scon; 
SR = $_REQUEST; 
if($R['user_confirm_password'] != $R['user_new_password') { 
header("Location:../change-password.php?msg=Your new 
passsword and confirm password does not match!!!"); 
exit: 
} 
$SQL = "UPDATE ‘user SET user_password = 
'$R[user_new_password]' WHERE ‘user_id = 
".$_SESSION['user_details'][user_id']; 
Srs = mysqli_query($con,$SQL) or die(mysqli_error($con)): 
header("Location:../change-password.php?msg=Your Password 
Changed Successfully !!!"); 
print $SQL; 
die; 
} 
?> 
