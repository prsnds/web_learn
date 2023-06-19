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

    <form action="" method="post">
        <select name="division" id="division">
            <?php
            echo "<option>"."select division"."</option>";
            $sql = "select * from tbl_divisions order by division_id";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <option value="<?= $row['division_id']; ?>"> <?= $row['division_name']; ?></option>
            <?php } ?>
        </select>


        <select name="district" id="district">

        </select>

        <select name="ps" id="ps">

        </select>

        <input type="button" value="submit" name="submit">
    </form>







    <script src="jq_min.js"></script>
    <script src="drop_down.js"></script>

</body>

</html>