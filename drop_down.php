<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="main">



        <form action="drop_down.php" method="post">

            <?php

            $countries = array("bangladesh", "italy", "usa", "malasiya", "russia");
            $code = array("880", "895", "654", "564", "135");

            echo "<select name='country'>";
            for ($i = 0; $i < count($countries); $i++) {
                echo "<option value=$i>" . "$countries[$i]" . "</option>";
            }
            echo "</select>";

            ?>
            <input type="submit" value="submit">
            <?php 
            if ($_POST["submit"]) {
                var_dump($_POST['country']);
            }

            ?>
        </form>



    </div>
</body>

</html>