<?php 
include "db/connection.php";
$output='<select name="district" id="district">';
$output.='<option>--- Select ---</option>';
    $sql = "select * from tbl_districts where division_id= ".$_POST['divid']."";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            $output.='<option value="'.$row['district_id'].'">'.$row['district_name'].'</option>';
         }


         $output.='</select>';
         echo $output;
?>
