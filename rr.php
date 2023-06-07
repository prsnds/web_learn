<?php

include "db/connection.php";

if ($_POST['submit']) {
    $j=$_POST['country'];
    $query3="select * from tbl_countries where ";
    $result_1=mysqli_query($conn,$query3);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="main">


    </div>

</body>

</html>