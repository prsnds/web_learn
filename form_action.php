<?php 

include 'db/connection.php';

$first_name=$last_name=$gender=$dob=$marital_status=$email_address=$pass_word=$confirm_password=$phone_no=$address_no=$states=$hobbies=$photo= $declaretion= '';

if (isset($_POST['submit'])){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];        
    $gender=$_POST['gender'];         
    $dob=$_POST['dob'];         
    $marital_status=$_POST['marital_status'];         
    $email_address=$_POST['email_address'];         
    $pass_word=$_POST['pass_word'];         
    $confirm_password=$_POST['confirm_password'];
    $phone_no=$_POST['phone_no'];
    $address_no=$_POST['address_no'];
    $states=$_POST['states'];
    $hobbies=$_POST['hobbies'];
    $photo=$_POST['photo']; 
    // $declaretion=$_POST['declaretion'];
    
}

$sql="INSERT INTO `tbl_users`(`first_name`, `last_name`, `gender`, `dob`, `marital_status`, `email_address`, `pass_word`, `confirm_password`, `phone_no`, `address_no`, `states`, `hobbies`, `photo`) VALUES ($first_name,$last_name,$gender,$dob,$marital_status,$email_address,$pass_word,$confirm_password,$phone_no,$address_no,$states,$hobbies,$photo)";


$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$value='';
foreach($result as $row){
    if($_POST['hobbies']) {    
        foreach($_POST['hobbies'] as $value){
            echo "hobbies are".$value.'<br/>';
        }
    }
    echo "here is ".$row['first_name'].$row['last_name'];
}

?>



