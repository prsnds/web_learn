<?php 
 include "db/connection.php";
     // $output1='<option>--- Select ---</option>';
    //   $output1='';

    $output1='<select name="ps" id="ps">';
    $output1.='<option>--- Select ---</option>';

      $sql1 = "select * from `tbl_ps` where `district_id` = ".$_POST['disid'];
      $result1 = mysqli_query($conn, $sql1);
      while ($row1 = mysqli_fetch_array($result1)) {
          $output1.='<option value="'.$row1['ps_id'].'">'.$row1['ps_name'].'</option>';
      }

      $output1.='</select>';

      echo $output1;
?>
