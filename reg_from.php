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
        <div class="row justify-content-center">
            <div class="bg-info text-white rounded mt-2 mb-3">
                <h4 id="main_title">student registration form</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
        <form  class="form" action="form_action.php" method="post">


            <div class="form-row p-2">
                <div class="col-md-4 bg-primary text-white  rounded">
                    <label for="fname">first name</label>
                </div>
                <div class="col-md-8">
                    <input class="rounded bd-warning" type="text" name="first_name" placeholder="eg:jhon">
                </div>
            </div>


            <div class="form-row p-2">
                <div class="col-md-4 bg-primary text-white  rounded">
                    <label for="lname">last name</label>
                </div>
                <div class="col-md-8">
                    <input class="rounded bd-warning" type="text" name="last_name" placeholder="eg:doe">
                </div>
            </div>

            <div class="form-row p-2">
                <div class="col-md-4 bg-primary text-white  rounded">
                    <label for="gender">gender</label>
                </div>
                <div class="col-md-8 form-radio">
                    <input class="rounded bd-warning" type="radio" name="gender" value="male" id="gender">
                    <label for="male">male</label>
                    <input class="rounded bd-warning" type="radio" name="gender" value="female" id="gender">
                    <label for="female">female</label>
                </div>
            </div>


            <div class="form-row p-2">
                <div class="col-md-4 bg-primary text-white  rounded">
                    <label for="dob">date of birth </label>
                </div>
                <div class="col-md-8">
                    <input class="rounded w-50" type="date" name="dob">
                </div>
            </div>

            <div class="form-row p-2" id="marital_status">
                <div class="col-md-4 bg-primary text-white  rounded">
                    <label for="marital_status">marital status</label>
                </div>
                <div class="col-md-8 form-radio">
                    <input class="rounded bd-warning" type="radio" name="marital_status" value="unmarried" id="unmarried">
                    <label for="unmarried">unmarried</label>
                    <input class="rounded bd-warning" type="radio" name="marital_status" value="married" id="married">
                    <label for="married">married</label>
                    <input class="rounded bd-warning" type="radio" name="marital_status" value="single" id="single">
                    <label for="single">single</label>
                </div>
            </div>

            <div class="form-row p-2">
                <div class="col-md-4 bg-primary text-white  rounded">
                    <label for="email">email address</label>
                </div>
                <div class="col-md-8">
                    <input class="rounded bd-warning" type="email" name="email_address" id="email">
                </div>
            </div>


            <div class="form-row p-2">
                <div class="col-md-4 bg-primary text-white  rounded">
                    <label for="pass_word">password</label>
                </div>
                <div class="col-md-8">
                    <input class="rounded bd-warning" type="pass_word" name="pass_word" id="pass_word">
                </div>
            </div>



            <div class="form-row p-2">
                <div class="col-md-4 bg-primary text-white  rounded">
                    <label for="confirm_password">confirm password</label>
                </div>
                <div class="col-md-8">
                    <input class="rounded bd-warning" type="password" name="confirm_password" id="confirm_password">
                </div>
            </div>

            <div class="form-row p-2">
                <div class="col-md-4 bg-primary text-white  rounded">
                    <label for="phone">phone</label>
                </div>
                <div class="col-md-8">
                    <input class="rounded bd-warning" type="tel" name="phone_no" id="phone">
                </div>
            </div>

            <div class="form-row p-2">
                <div class="col-md-4 bg-primary text-white  rounded">
                    <label for="address">address</label>
                </div>
                <div class="col-md-8">
                    <input class="rounded bd-warning" type="text" name="address_no" id="address">
                </div>
            </div>


            <div class="form-row p-2">

                <div class="col-md-4 bg-primary text-white  rounded">
                    <label for="states">states</label>
                </div>
                <div class="col-md-8">
                    <select class="custome-select rounded w-50" name="states" id="states" class="rounded">
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
            <div class="form-row p-2" id="hobbies">
                <div class="col-md-4 bg-primary text-white  rounded"><label for="hobbies">hobbies</label></div>
                <div class="col-md-8 form-check">
                    <input class="rounded bd-warning" type="checkbox" name="hobbies" value="music" id="music">
                    <label for="music">music</label>
                    <input class="rounded bd-warning" type="checkbox" name="hobbies" value="movies" id="movies">
                    <label for="movies">movies</label>
                    <input class="rounded bd-warning" type="checkbox" name="hobbies" value="sports" id="sports">
                    <label for="sports">sports</label>
                    <input class="rounded bd-warning" type="checkbox" name="hobbies" value="travel" id="travel">
                    <label for="travel">travel</label>
                </div>

            </div>

            <div class="form-row p-2">
                <div class="col-md-4 bg-primary text-white  rounded">
                    <label for="upload_photos">photos</label>
                </div>
                <div class="col-md-8">
                    <input class="custom-file rounded-3" type="file" name="photo" id="upload_photos">
                </div>
            </div>

            <div class="form-row p-2">
                <div class="modal-footer">
                    <input class="rounded form-check " type="checkbox" name="declaretion" id="declaretion">
                    <label class="bg-info rounded p-2" for="declaretion">
                        i here by declare that the above information 
                        is provided is true and corrected
                    </label>
                </div>
            </div>
            
            
            <div class="form-row p-2">
                <div class="col-6 text-center">
                    <button type="button" class="btn btn-success"value="register" name="register" >register</button>
                    <button type="submit" class="btn btn-success"value="submit" name="submit" >register</button>
                </div>
                <!-- <div class="col-6 text-center" name="register">
                    <button type="submit">
                        submit
                    </button>
                </div> -->
            </div>

        </form>
        </div>
    </div>

    <script src="jq_min.js"></script>
    <script src="address.js"></script>
</body>

</html>