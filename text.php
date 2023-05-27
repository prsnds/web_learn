<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>
<?php 
    
    include "db/connection.php";
   //if(isset($_POST['submit'])){
        
        $user_id=$_POST['user_id'];
        $name=$_POST['user_id'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        
        
       var_dump($_POST);
  // $result = mysqli_query($conn,"INSERT INTO tbl_users  VALUES ('$user_id','$name','$email','$password')");
   

?>