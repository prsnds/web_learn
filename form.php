<?php include "db/connection.php";?> 

<!-- ('user_id','name', 'email','password') -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
      border-collapse: collapse;
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
    }
  </style>
</head>

<body>
    <form action="text.php" method="post">
        <div class="id">
            id:<input type="text" name="user_id">
        </div>
        <div class="name">
            name:<input type="text" name="name">
        </div>    
        <div class="email">
            email:<input type="text" name="email">
        </div>
        <div class="password">
            password:<input type="text" name="password">
        </div>
        <input type="submit" value="Submit">
    </form>

</body>
</html>

<?php 
//     if(isset($_POST['submit'])){
        
//         $user_id=isset($_REQUEST['user_id']);
//         $name=isset($_REQUEST['user_id']);
//         $email=isset($_REQUEST['email']);
//         $password=isset($_REQUEST['password']);
//         echo var_dump($_POST);
//   // $result = mysqli_query($conn,"INSERT INTO tbl_users  VALUES ('$user_id','$name','$email','$password')");
   
// }
// echo "\n".$user_id."\n". $name."\n".$email."\n". $password."\n";
?>