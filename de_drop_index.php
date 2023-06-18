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

    <div id="address">
        <select name="division" id="division">
            <option>--- Select ---</option>
            <?php
            $sql = "select * from tbl_divisions order by division_id";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result)) {
                ?>
                <option value="<?= $row['division_id']; ?>"> <?= $row['division_name']; ?></option>
            <?php } ?>
        </select>
    </div>






    <script src="jq_min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var div=document.createElement('div');
            $('#division').change(function () {
                var divisionID = $(this).val();
                $.ajax({
                    url: "action.php",
                    method: "POST",
                    data: { divid: divisionID },
                    success: function (data) {
                        div.innerHTML=data;
                        document.getElementById('address').appendChild(div);
                    }
                })

            });

            $('#district').change(function () {
                var districtID = $(this).val();

                $.ajax({
                    url: "action1.php",
                    method: "POST",
                    data: { disid: districtID },
                    success: function (adata) {
                        div.innerHTML=adata;
                        document.getElementById('address').appendChild(div);
                    }
                })

            });
        });



    </script>

</body>

</html>