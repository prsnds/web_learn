<?php 
include "db/connection.php";
    $sql = "select * from tbl_districts where division_id= ".$_POST['divid']."";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
    ?>
        <option value="<?= $row['district_id']; ?>"> <?= $row['district_name']; ?></option>
    <?php } ?>
