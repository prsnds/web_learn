<?php 

include 'db/connection.php';
if ($_POST['register']){
    $first_name=$_POST['first_name'];
}
$sql="INSERT INTO `tbl_users` (`first_name`) VALUES ($first_name)";
mysqli_connect()

?>


$last_name=$_POST['last_name'];        
$gender=$_POST['gender'];         
$dob=$_POST['dob'];         
$marital_status=$_POST['marital_status'];         
$email_address=$_POST['email_address'];         
$password=$_POST['password'];         
$confirm_password=$_POST['confirm_password'];
$phone_no=$_POST['phone_no'];
$address_no=$_POST['address_no'];
$state=$_POST['state'];
$hobbies=$_POST['hobbies'];
$photo=$_POST['photo']; 
$declaretion=$_POST[]         
$created_at=$_POST[]         
