<?php include "db/connection.php"; 
$query3="select * from tbl_countries order by code";

$result_1=mysqli_query($conn,$query3);
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
        <form action="dropdown_index.php" method="post">

            <?php
            echo "<select name='country' >";
            while ($row=mysqli_fetch_array($result_1,MYSQLI_ASSOC)){
                echo "<option value=>" .$row['country']. "</option>";
            }
            ?>
            

        <input type="submit" value="submit">
        </form>
        <?php 
        
        
        
        
        
        
        
        ?>


    </div>

</body>

</html>