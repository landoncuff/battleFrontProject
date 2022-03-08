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
$all_data = [];

$i = 0;

while(!feof($file)){
    while($rows = fgetcsv($file, ",")){
        $i++;
        // echo $rows[0]."\t";
        //echo "<br/>";
        //echo $rows[1];

        $athlete = [["firstName"=>$rows[1]], ["lastName"=>"Cuff"]];
    
        if($i == 10){
            break;
        }

        // echo $athlete["firstName"];
    
    }

   echo $all_ath_data = array_push($all_data, $athlete);

   echo $all_ath_data[1]["firstName"];

    // foreach($all_ath_data as $key => $value){
    //     echo "Key:" . $key."Value:" . $value;
    // }
}


//echo $athlete["firstName"][1];

//$all_ath_data = array_push($all_data, $athlete);

?>