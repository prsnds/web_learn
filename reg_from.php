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
            <h4>student registration form</h1>
        </div>

        <form action="" method="post">
            <div class="row">
                    <label for="address">first name</label>
                    <input type="text" name="address" placeholder="eg:jhon">
            </div>
            <div class="row">
                    <label for="lname">last name</label>
                    <input type="text" name="lname" placeholder="eg:doe">
            </div>
            <div class="row">
                <label for="gender">gender</label>
                <input type="radio" name="gender" id="gender">
                <label for="male">male</label>
                <input type="radio" name="gender" id="gender">
                <label for="female">female</label>
            </div>
            
            <div class="row">
                <label for="dob">date of birth</label>
                <input type="date" name="dob" id="dob">
            </div>
            <div class="row">
                <label for="age">age</label>
                <input type="" name="age" id="age">
            </div>
            
            <div class="row" id="marital_status">
                <label for="marital_status">marital status</label>
                <input type="checkbox" name="marital_status" id="unmarried">
                <label for="unmarried">unmarried</label>
                <input type="checkbox" name="marital_status" id="married">
                <label for="married">married</label>
                <input type="checkbox" name="marital_status" id="single">
                <label for="single">single</label>
            </div>
            
            <div class="row">
                <label for="email">email address</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="row">
                <label for="password">password</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="row">
                <label for="confirm_password">confirm password</label>
                <input type="confirm_password" name="confirm_password" id="confirm_password">
            </div>
            <div class="row">
                <label for="phone_number">phone number</label>
                <input type="tel" name="phone_number" id="phone_number"
                pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                <small>Format: 123-45-678</small>
            </div>

            <div class="row">
                    <label for="address">address</label>
                    <input type="text" name="address">
            </div>
            
            <div class="row">

                <label for="state">state</label>
                <select name="state" id="state">
                    <?php
                    echo "<option>" . "select division" . "</option>";
                    $sql = "select * from tbl_divisions order by division_id";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?= $row['division_id']; ?>"> <?= $row['division_name']; ?></option>
                    <?php } ?>
                </select>

            </div>
            <div class="row">
                <label for="pin_code">pin code</label>
                <input type="text" name="pin_code">
            </div>
            <div class="row" id="hobbies">
                <label for="hobbies">hobbies</label>
                <input type="checkbox" name="music" id="music">
                <label for="music">music</label>
                <input type="checkbox" name="movies" id="movies">
                <label for="movies">movies</label>
                <input type="checkbox" name="sports" id="sports">
                <label for="sports">sports</label>
                <input type="checkbox" name="travel" id="travel">
                <label for="travel">travel</label>
                
            </div>
            
            <div class="row">
                <label for="upload_photos">upload photos</label>
                <input type="file" name="upload_photos" id="upload_photos">
            </div>
            <div class="row">
                <input type="checkbox" name="declaretion" id="declaretion">
                <label for="declaretion">
                    i here by declare that
                    the above information is provided is true
                    and corrected

                </label>
            </div>

            <div class="row">
                <div class="col-6"><input type="button" value="register" name="register"></div>
                <div class="col-6"><input type="button" value="reset" name="reset"></div>
            </div>

        </form>
    </div>
    <script src="jq_min.js"></script>
    <script src="address.js"></script>
</body>

</html>