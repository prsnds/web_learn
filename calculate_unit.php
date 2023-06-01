<?php

$inputUnit=(int)100;

$unit_slab = array(50,100,100,250);
$unit_rate= array(3.50,4.00,5.20,6.50);

$sum=0;


for ($i=0;$i<count($unit_rate);$i++)
{
 if($inputUnit!=0){
    $amt= $unit_slab[$i]*$unit_rate[$i];
    $sum=$sum+$amt;
    $inputUnit=$inputUnit-$unit_slab[$i];

    }
}


echo $sum;

?>