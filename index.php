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
<?php 
    include "db/connection.php";

    $query="select * from tbl_users";
    $result = mysqli_query($conn,$query);
    ?>
<table>
    <tr>
        <th>userid</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
    </tr>
        <?php 
            while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                {
        
                    echo "<tr>";
                    echo "<td>".$row['user_id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['password']."</td>";
                    echo "</tr>";
                }
        ?>

</table>

</body>
</html>
