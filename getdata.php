<?php
$file = fopen("randySampleData1.csv","r");

//$rows = fgetcsv($file, 30, ",");

// while(!feof($file)){
//     $content = fgetcsv($file);

//     $count = count($content);

//     for($i=0; $i<$count;$i++){
//         echo $content[1]."\t";
//     }
// echo "<br/>";
// }

$i = 0;
while(!feof($file)){
    while($rows = fgetcsv($file, ",")){
        $i++;
        echo $rows[2]."\t";
    
        if($i == 10){
            break;
        }
    
    }
}

?>