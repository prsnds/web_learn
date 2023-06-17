<?php include "db/connection.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select division</title>
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#division').change(function () {
                        var divisionID = $(this).val();
                        $.ajax({
                            url: "action.php",
                            method: "POST",
                            data: { id: divisionID },
                            success: function (data) {
                                $('#district').html(data);
                            }
                        })
                    
                    });
                });
        
            </script>
</head>

<body>

    <form action="" method="post">
        <select name="division" id="division">
            <?php
            $sql = "select * from tbl_divisions order by division_id";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <option value="<?= $row['division_id']; ?>"> <?= $row['division_name']; ?></option>
            <?php } ?>
        </select>
        
        
        <select name="district" id="district">
        
        </select>
    
        <input type="button" name="submit" value="submit">
    
    </form>




</body>
</html>