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
    <form action="">
        <?php
        echo "<h3>" . "select your division" . "</h3>" . "<br>";
        $sql = "select * from tbl_divisions order by id";
        $result = mysqli_query($conn, $sql);
        echo "<select name=" . 'division' . " id=" . 'division' . ">";
        // echo "<select name=" . 'division' . " id=" . 'division' . ">" . "onselect=" . "'mySelect()'";
        while ($row = mysqli_fetch_array($result)) {
            echo "<option value=" . $row['id'] . ">" . $row['div_name'] . "</option>";
        }
        echo "</select>";
        ?>

        <?php
        // $sql1 = "select * from tbl_districts where division_id =' " . $_POST['division']. "' ";
        // $result1 = mysqli_query($conn, $sql1);
        // echo "<select name=" . 'district' . " id=" . 'district' . ">";
        // while ($row1 = mysqli_fetch_array($result1)) {
        //     echo "<option value=" . $row1['division_id'] . ">" . $row1['dis_name'] . "</option>";
        // }
        // echo "</select>";
        

        ?>
        <h1 name="district" id="district">hello</h1>
    </form>
    <script>
        const element = document.getElementById("division");
        element.addEventListener("select", function() {
        document.getElementById("district").innerHTML = "Hello World";
        });     

        // function mySelect() {
             
        //     document.getElementById('district').innerHTML= "ok";
    
        // }

    </script>
</body>

</html>