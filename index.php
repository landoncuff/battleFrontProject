<?php
    require 'getdata.php';


    //<?php print_r($all_data[3]["school"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Data</title>
    <style>
    h1 {
        text-align: center;
        font-size: 70px;
    }
    img{
        margin-right: 30px;
    }

    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
    margin-left: 10%;
    margin-top: 50px;
  }
  .playerImage{
    margin-left: 10%;
    margin-top: 50px; 
    
  }
  
  td, th {
    /* border: 1px solid #dddddd; */
    text-align: left;
    padding: 8px;
  }
  
  tr:nth-child(even) {
    /* background-color: #dddddd; */
  }

  .headMain{
      width: 50%;
      height: 20%;
      text-align: center;
      color: white;
      background-color: grey;
      font-size: 35px;
  }
  .infoTable{
    margin-left: 0%;
      /* margin-left: 20%; */
    width: 71%;

  }
  .playerHead{
      border-top: 1px solid black;
      border-left: 1px solid black;
      border-right: 1px solid black;
      font-size: 18px;
  }
  .playerInfo{
      border-bottom: 1px solid black;
      border-left: 1px solid black;
      border-right: 1px solid black;
      font-size: 26px;
  }
  div{
    display: flex;
  }
    </style>
</head>
<body>
    
    <h1><img src="img/byu-cougars.png" alt="BYU Logo"><?php print_r($all_data[$rand_keys[0]]["fullName"]); ?> (<?php print_r($all_data[$rand_keys[0]]["position"])?>)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php print_r($all_data[$rand_keys[0]]["gradYear"])?></h1>
    <!-- Contact Information -->
    <div>
    <table class="infoTable"><img class="playerImage" src="img/player.jpg" alt="Player Image">
            <tr>
                <th class="headMain" colspan="3">CONTACT INFORMATION</th>
            </tr>
            <tr>
                <th class="playerHead">Athlete Name</th>
                <th class="playerHead">Cell Phone</th>
                <th class="playerHead">Email</th>
            </tr>
            <tr>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["fullName"]); ?></td>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["athleteCellPhone"]); ?></td>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["athleteEmail"]); ?></td>
            </tr>
            <tr>
                <th class="playerHead">Parent 1</th>
                <th class="playerHead">Parent 1 Phone</th>
                <th class="playerHead">Parent 1 email</th>
            </tr>
            <tr>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["parentName"]); ?></td>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["parentPhone"]); ?></td>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["parentEmail"]); ?></td>
            </tr>
            <tr>
                <th class="playerHead" colspan="3">Address Information</th>
            </tr>
            <tr>
                <td class="playerInfo" colspan="3"><?php print_r($all_data[$rand_keys[0]]["athleteAddress"]); ?>, <?php print_r($all_data[$rand_keys[0]]["athleteCity"]); ?>, <?php print_r($all_data[$rand_keys[0]]["athleteState"]); ?>, <?php print_r($all_data[$rand_keys[0]]["athleteZipCode"]); ?></td>
            </tr>
    </table>
    </div>
    <!-- Personal Information -->
    <table>
        <tr>
            <th class="headMain" colspan="4">Personal Information</th>
        </tr>
        <tr>
            <th class="playerHead" colspan="4">High School Name</th>
        </tr>
        <tr>
            <td class="playerInfo" colspan="4"><?php print_r($all_data[$rand_keys[0]]["school"]); ?></td>
        </tr>
        <tr>
            <th class="playerHead">Head Coach Name</th>
            <th class="playerHead">Head Coach Phone</th>
            <th class="playerHead" colspan="2">Head Coach Email</th>
        </tr>
        <tr>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["coachName"]); ?></td>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["coachCellPhone"]); ?></td>
                <td class="playerInfo" colspan="2"><?php print_r($all_data[$rand_keys[0]]["coachEmail"]); ?></td>
        </tr>
        <tr>
            <th class="playerHead">Ethnicity</th>
            <th class="playerHead">Hobbies</th>
            <th class="playerHead">College Preference</th>
            <th class="playerHead">Previous Injuries</th>
        </tr>
        <tr>
                <td class="playerInfo"></td>
                <td class="playerInfo"></td>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["commitedTo"]); ?></td>
                <td class="playerInfo"></td>
        </tr>
        <tr>
            <th class="playerHead">Facebook</th>
            <th class="playerHead">Twitter</th>
            <th class="playerHead">Instagram Preference</th>
            <th class="playerHead">Snapchat</th>
        </tr>
        <tr>
                <td class="playerInfo"></td>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["twitter"]); ?></td>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["instagram"]); ?></td>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["snapchat"]); ?></td>
        </tr>
</table>
<!-- Measureable Information -->
<table>
        <tr>
            <th class="headMain" colspan="5">Measureable Information</th>
        </tr>
        <tr>
            <th class="playerHead">Height</th>
            <th class="playerHead">Weight</th>
            <th class="playerHead">Horizontal Length</th>
            <th class="playerHead">Horizontal Spread</th>
            <th class="playerHead">Wing</th>
        </tr>
        <tr>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["height"]); ?></td>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["weight"]); ?></td>
                <td class="playerInfo"></td>
                <td class="playerInfo"></td>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["wingspan"]); ?></td>
        </tr>
        <tr>
            <th class="playerHead">40 Yard Dash</th>
            <th class="playerHead">100m Time</th>
            <th class="playerHead">Vertical Jump</th>
            <th class="playerHead">Broad Jump</th>
            <th class="playerHead">Reach</th>
        </tr>
        <tr>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["fortyYardDash"]); ?></td>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["100M"]); ?></td>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["verticalJump"]); ?></td>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["broadJump"]); ?></td>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["reach"]); ?></td>
        </tr>
</table>
<!-- Academic Information -->
<table>
        <tr>
            <th class="headMain" colspan="4">Academic Information</th>
        </tr>
        <tr>
            <th class="playerHead">GPA</th>
            <th class="playerHead">Core GPA</th>
            <th class="playerHead">ACT</th>
            <th class="playerHead">SAT</th>
        </tr>
        <tr>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["gpa"]); ?></td>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["gpa"]); ?></td>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["act"]); ?></td>
                <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["sat"]); ?></td>
        </tr>
        <tr>
            <th class="playerHead">Transcript Requested</th>
            <th class="playerHead">Transcript Received</th>
            <th class="playerHead">Transcript Processed</th>
            <th class="playerHead">Desired Major</th>
        </tr>
        <tr>
                <td class="playerInfo"></td>
                <td class="playerInfo"></td>
                <td class="playerInfo"></td>
                <td class="playerInfo"></td>
        </tr>
</table>
<!-- Evaluation Information -->
<table>
        <tr>
            <th class="headMain" colspan="7">Evaluation Information</th>
        </tr>
        <tr>
            <th class="playerHead">247 Star Rank</th>
            <th class="playerHead">247 National Rank</th>
            <th class="playerHead">247 State Rank</th>
            <th class="playerHead">Composite Star Rank</th>
            <th class="playerHead">Composite National Rank</th>
            <th class="playerHead">Composite State Rank</th>
            <th class="playerHead">Composite Position Rank</th>
        </tr>
        <tr>
                <td class="playerInfo"></td>
                <td class="playerInfo"></td>
                <td class="playerInfo"></td>
                <td class="playerInfo"></td>
                <td class="playerInfo"></td>
                <td class="playerInfo"></td>
                <td class="playerInfo"></td>
        </tr>
        <tr>
            <th class="playerHead">Character Grade</th>
            <th class="playerHead">Medical Grade</th>
            <th class="playerHead">Grit Grade</th>
            <th class="playerHead">Stat Grade</th>
            <th class="playerHead">Scout Grade</th>
            <th class="playerHead">DPP Grade</th>
            <th class="playerHead">Staff Grade</th>
        </tr>
        <tr>
                <td class="playerInfo"></td>
                <td class="playerInfo"></td>
                <td class="playerInfo"></td>
                <td class="playerInfo"></td>
                <td class="playerInfo"></td>
                <td class="playerInfo"></td>
                <td class="playerInfo"></td>
        </tr>
</table>
<!-- Scholarship Offers -->
<table>
        <tr>
            <th class="headMain">Scholarship Offers</th>
        </tr>
        <tr>
            <td class="playerInfo"><?php print_r($all_data[$rand_keys[0]]["offers"]) ?></td>
        </tr>
</table>
</body>
</html>