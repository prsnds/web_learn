<?php 
 include "db/connection.php";
 require "fpdf185/fpdf.php";
 if(isset($_POST['submit'])){
        
          $user_id=$_POST['user_id'];
          $name=$_POST['user_id'];
          $email=$_POST['email'];
          $password=$_POST['password'];
  
     $query1 = "INSERT INTO tbl_users (`user_id`, `name`, `email`, `password`) VALUES ('$user_id','$name','$email','$password')";  
     $inserted = mysqli_query($conn,$query1);
    }
    
    
    class PDF extends FPDF {
     function Header() {
         // Header content goes here
     }
 
     function Footer() {
       // Footer content goes here
      }
    }
    
    $pdf = new PDF();
    $pdf->AddPage();
    
    $columnWidth = 40;
    $rowHeight = 10;
    
    // Table headers
 $pdf->SetFont('Arial', 'B', 12);
 $pdf->Cell($columnWidth, $rowHeight, 'Header 1', 1, 0, 'C');
 $pdf->Cell($columnWidth, $rowHeight, 'Header 2', 1, 0, 'C');
 $pdf->Cell($columnWidth, $rowHeight, 'Header 3', 1, 0, 'C');
 $pdf->Cell($columnWidth, $rowHeight, 'Header 4', 1, 0, 'C');
 
 $pdf->Ln(); 
 $pdf->SetFont('Arial', '', 10);
 
 // Table data
//  for ($i = 1; $i <= 8; $i++) {
//    $pdf->Cell($columnWidth, $rowHeight,$row['user_id'], 1, 0, 'C');
//    $pdf->Cell($columnWidth, $rowHeight,$row['name'], 1, 0, 'C');
//    $pdf->Cell($columnWidth, $rowHeight,$row['email'], 1, 0, 'C');
//    $pdf->Cell($columnWidth, $rowHeight,$row['password'], 1, 0, 'C');
//    $pdf->Ln(); 
//   }
  
  $query2="select * from tbl_users";
  $result = mysqli_query($conn,$query2);
 
  while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        
    $pdf->Cell($columnWidth, $rowHeight,$row['user_id'], 1, 0, 'C');
    $pdf->Cell($columnWidth, $rowHeight,$row['name'], 1, 0, 'C');
    $pdf->Cell($columnWidth, $rowHeight,$row['email'], 1, 0, 'C');
    $pdf->Cell($columnWidth, $rowHeight,$row['password'], 1, 0, 'C');
    $pdf->Ln(); 
    }
 $pdf->Output();
 
 

?>