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
        
        <div class="main-title">
            <h4>appointment request</h1>
        </div>

        <div class="row">
            <form action="" method="post">        

                <div class="col-md-6">
                <label for="pfname">patient's first name</label>    
                <input type="text" name="pfname ">
                </div>
            
                <div class="col-md-6">
                <label for="plname">patient's last name</label>    
                <input type="text" name="plname ">
                </div>

            </form>
        </div>
    </div>
</body>

</html>