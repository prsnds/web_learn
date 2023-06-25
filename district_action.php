<?php 
include "db/connection.php";
echo "<option>"."select district"."</option>";    
$sql1 = "select * from tbl_ps where district_id= ".$_POST['disid']."";
    $result1 = mysqli_query($conn, $sql1);
    while ($row1 = mysqli_fetch_array($result1)) {
?>
        <option value="<?= $row1['ps_id']; ?>"> <?= $row1['ps_name']; ?></option>
    
<?php } ?>
