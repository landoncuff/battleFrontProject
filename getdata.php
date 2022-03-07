<?php
$file = fopen("randySampleData1.csv", "r");

$rows = fgetcsv($file, 30, ",");

// $i = 0;

// while($rows = fgetcsv($file, 30, ",")){
//     $i++;
//     echo $rows[2];

// };
?>