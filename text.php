<?php 
    
    include "db/connection.php";
    if(isset($_POST['submit'])){
        
        $user_id=isset($_REQUEST['user_id']);
        $name=isset($_REQUEST['user_id']);
        $email=isset($_REQUEST['email']);
        $password=isset($_REQUEST['password']);
        
        
         echo var_dump($_POST);
  // $result = mysqli_query($conn,"INSERT INTO tbl_users  VALUES ('$user_id','$name','$email','$password')");
   
}
?>