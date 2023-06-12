<?php include "db/connection.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select division</title>
</head>

<body>
        <form action="de_drop_index.php" method="post">
            <?php
            echo "select your division" . "<br>";
            $sql = "select * from tbl_divisions order by id";
            $result = mysqli_query($conn, $sql);
            echo "<select name=" . 'division' . " id=" . 'division' . ">" . "onselect=" . "'mySelect()'";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value=" . $row['id'] . ">" . $row['div_name'] . "</option>";
            }
            echo "</select>";
            ?>
        <button type="submit" name="submit">submit</button>
        </form>
  <?php  
        if(isset($_POST['submit'])){
            $sql1 = "select * from tbl_districts where division_id =' " . $_POST['division']. "' ";
            $result1 = mysqli_query($conn, $sql1);
            echo "<select name=" . 'district' . " id=" . 'district' . ">";
            while ($row1 = mysqli_fetch_array($result1)) {
                echo "<option value=" . $row1['division_id'] . ">" . $row1['dis_name'] . "</option>";
            }
            echo "</select>";
        }

        ?>
    <script>

    </script>
</body>

</html>