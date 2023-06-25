<?php include 'db/connection.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration form</title>
    <link rel="stylesheet" href="regf_style.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
</head>

<body>

    <div class="container">

        <div class="main_title">
            <h4>appointment request</h1>
        </div>

        <form action="" method="post">
            <div class="row">

                <div class="col-6">
                    <label for="pfname">patient's first name</label>
                    <input type="text" name="pfname ">
                </div>

                <div class="col-6">
                    <label for="plname">patient's last name</label>
                    <input type="text" name="plname ">
                </div>

            </div>
            <div class="row">

                <div class="col-6">
                    <label for="pffname">father's first name</label>
                    <input type="text" name="pffname ">
                </div>

                <div class="col-6">
                    <label for="pflname">father's last name</label>
                    <input type="text" name="pflname ">
                </div>

            </div>
            <div class="row">
                <label for="dob">date of birth</label>
                <input type="date" name="dob" id="dob">
            </div>
            <div class="row">
                <label for="gender">gender</label>
                <input type="radio" name="gender" id="gender">
                <label for="male">male</label>
                <input type="radio" name="gender" id="gender">
                <label for="female">female</label>
            </div>

            <div class="row">
                <label for="marital_status">marital status</label>
                <input type="checkbox" name="marital_status" id="unmarried">
                <label for="unmarried">unmarried</label>
                <input type="checkbox" name="marital_status" id="married">
                <label for="married">married</label>
                <input type="checkbox" name="marital_status" id="single">
                <label for="single">single</label>
            </div>

            <div class="row">

                <label for="division">division</label>
                <select name="division" id="division">
                    <?php
                    echo "<option>" . "select division" . "</option>";
                    $sql = "select * from tbl_divisions order by division_id";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?= $row['division_id']; ?>"> <?= $row['division_name']; ?></option>
                    <?php } ?>
                </select>

                <label for="district">district</label>
                <select name="district" id="district"></select>
                <label for="ps">ps</label>
                <select name="ps" id="ps"></select>
                <div name="hsestrt">

                </div>

            </div>



        </form>
    </div>
    <script src="jq_min.js"></script>
    <script src="address.js"></script>
</body>

</html>