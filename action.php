<?php 
include "db/connection.php";
    $output='' ;
    $sql = "select * from tbl_districts where division_id= ".$_POST['id']."";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            $output.='<option value="'.$row=['district_id'].'">'.$row['district_name'].'</option>';
         }
         echo $output;
?>