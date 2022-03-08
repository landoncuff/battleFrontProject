<?php
$file = fopen("data/randySampleData1.csv","r");

$i = 0;

while($rows = fgetcsv($file)){
        $i++;
        // echo $rows[0]."\t";
        //echo "<br/>";
        //echo $rows[1];

        $all_data[] = [
            "fullName"=>$rows[0], 
            "firstName"=>$rows[1], 
            "lastName"=>$rows[2], 
            "gradYear"=>$rows[3], 
            "position"=>$rows[4], 
            "school"=>$rows[5], 
            "height"=>$rows[6],
            "heightSource"=>$rows[7],
            "weight"=>$rows[8],
            "weightSource"=>$rows[9],
            "zcruitLabel"=>$rows[10],
            "zcruitNumber"=>$rows[11],
            "commitedTo"=>$rows[13],
            "commitDate"=>$rows[14],
            "offers"=>$rows[16],
            "visits"=>$rows[17],
            "athleteAddress"=>$rows[18],
            "athleteCity"=>$rows[19],
            "athleteState"=>$rows[20],
            "athleteZipCode"=>$rows[21],
            "athleteCellPhone"=>$rows[22],
            "athleteEmail"=>$rows[23],
            "athleteHomePhone"=>$rows[24],
            "parentName"=>$rows[27],
            "parentPhone"=>$rows[28],
            "parentEmail"=>$rows[29],
            "coachName"=>$rows[38],
            "coachCellPhone"=>$rows[39],
            "coachHomePhone"=>$rows[40],
            "coachEmail"=>$rows[41],
            "fortyYardDash"=>$rows[42],
            "shuttle"=>$rows[44],
            "verticalJump"=>$rows[46],
            "broadJump"=>$rows[48],
            "wingspan"=>$rows[52],
            "reach"=>$rows[54],
            "100M"=>$rows[62],
            "gpa"=>$rows[78],
            "act"=>$rows[79],
            "sat"=>$rows[80],
            "twitter"=>$rows[81],
            "instagram"=>$rows[82],
            "snapchat"=>$rows[83],
            "snapchat"=>$rows[83],
        ];
    
        // if($i == 10){
        //     break;
        // }
    }

//    print_r($all_data[3]["fullName"]);
  $rand_keys = array_rand($all_data,30);
?>


