<?php include 'db/connection.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration form</title>
    <link rel="stylesheet" href="regf_style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        

        <div class="row d-flex justify-content-center">
            <div class="bg-dark text-white rounded mt-2 mb-3">
                <h4 id="main_title">student registration form</h1>
            </div>
        </div>

        <form action="" method="post">


            <div class="row">
                <div class="col-md-2 bg-dark text-white form-group rounded">
                    <label for="fname">first name</label>
                </div>
                <div class="col-10">
                    <input class="rounded" type="text" name="fname" placeholder="eg:jhon">
                </div>
            </div>


            <div class="row">
                <div class="col-md-2 bg-dark text-white form-group rounded">
                    <label for="lname">last name</label>
                </div>
                <div class="col-10">
                    <input class="rounded" type="text" name="lname" placeholder="eg:doe">
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 bg-dark text-white form-group rounded">
                    <label for="gender">gender</label>
                </div>
                <div class="col-10">
                    <input class="rounded" type="radio" name="gender" id="gender">
                    <label for="male">male</label>
                    <input class="rounded" type="radio" name="gender" id="gender">
                    <label for="female">female</label>
                </div>
            </div>


            <div class="row">
                <div class="col-md-2 bg-dark text-white form-group rounded">
                    <label for="dob">date of birth </label>
                </div>
                <div class="col-10">
                    <input class="rounded" type="date" name="dob">
                </div>
            </div>

            <div class="row" id="marital_status">
                <div class="col-md-2 bg-dark text-white form-group rounded">
                    <label for="marital_status">marital status</label>
                </div>
                <div class="col-10">
                    <input class="rounded" type="checkbox" name="marital_status" id="unmarried">
                    <label for="unmarried">unmarried</label>
                    <input class="rounded" type="checkbox" name="marital_status" id="married">
                    <label for="married">married</label>
                    <input class="rounded" type="checkbox" name="marital_status" id="single">
                    <label for="single">single</label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 bg-dark text-white form-group rounded">
                    <label for="email">email address</label>
                </div>
                <div class="col-10">
                    <input class="rounded" type="email" name="email" id="email">
                </div>
            </div>


            <div class="row">
                <div class="col-md-2 bg-dark text-white form-group rounded">
                    <label for="password">password</label>
                </div>
                <div class="col-10">
                    <input class="rounded" type="password" name="password" id="password">
                </div>
            </div>



            <div class="row">
                <div class="col-md-2 bg-dark text-white form-group rounded">
                    <label for="confirm_password">confirm password</label>
                </div>
                <div class="col-10">
                    <input class="rounded" type="password" name="confirm_password" id="confirm_password">
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 bg-dark text-white form-group rounded">
                    <label for="phone">phone</label>
                </div>
                <div class="col-10">
                    <input class="rounded" type="tel" name="phone" id="phone">
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 bg-dark text-white form-group rounded">
                    <label for="address">address</label>
                </div>
                <div class="col-10">
                    <input class="rounded" type="text" name="address" id="address">
                </div>
            </div>


            <div class="row">

                <div class="col-md-2 bg-dark text-white form-group rounded">
                    <label for="state">state</label>
                </div>
                <div class="col-10">
                    <select name="state" id="state" class="rounded">
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

            </div>
            <div class="row" id="hobbies">
                <div class="col-md-2 bg-dark text-white form-group rounded"><label for="hobbies">hobbies</label></div>
                <div class="col-10">
                    <input class="rounded" type="checkbox" name="music" id="music">
                    <label for="music">music</label>
                    <input class="rounded" type="checkbox" name="movies" id="movies">
                    <label for="movies">movies</label>
                    <input class="rounded" type="checkbox" name="sports" id="sports">
                    <label for="sports">sports</label>
                    <input class="rounded" type="checkbox" name="travel" id="travel">
                    <label for="travel">travel</label>
                </div>

            </div>

            <div class="row">
                <div class="col-md-2 bg-dark text-white form-group rounded">
                    <label for="upload_photos">photos</label>
                </div>
                <div class="col-10">
                    <input class="input-group-append" type="file" name="upload_photos" id="upload_photos">
                </div>
            </div>

            <div class="row">
                <div class="modal-footer">
                    <input class="rounded" type="checkbox" name="declaretion" id="declaretion">
                    <label for="declaretion">
                        i here by declare that the above information 
                        is provided is true and corrected
                    </label>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-6 text-center">
                    <input class="rounded" type="button" value="register" class="btn btn-outline-primary" name="register">
                </div>
                <div class="col-6 text-center">
                    <input class="rounded" type="button" value="reset" class="btn btn-outline-danger" name="reset">
                </div>
            </div>

        </form>
    </div>
    <script src="jq_min.js"></script>
    <script src="address.js"></script>
</body>

</html>