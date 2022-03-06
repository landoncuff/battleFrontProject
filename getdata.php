<?php
$file = fopen("randySampleData1.csv", "r");

$i = 0;

while($rows = fgetcsv($file, 30)){
    $i++;


    echo $rows[2];
    echo $rows[4];

}


?>