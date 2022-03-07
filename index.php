<?php
require 'getdata.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 80%;
          margin-left: 10%;
          margin-top: 50px;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          /* background-color: #dddddd; */
        }

        .head{
            width: 50%;
            height: 20%;
            text-align: center;
            color: white;
            background-color: grey;
        }
        .infoTable{
            margin-left: 20%;
        }
        </style>
</head>
<body>
    <h1>Students Name</h1>
    <table class="infoTable">
            <tr>
                <th class="head" colspan="3">CONTACT INFORMATION</th>
            </tr>
            <tr>
                <td>Athlete Name</td>
                
                <td>Cell Phone</td>
                <td>Email</td>
            </tr>
            <tr>
                <td>Parent 1</td>
                <td>Parent 1 Phone</td>
                <td>Parent 1 email</td>
            </tr>
            <tr>
                <td colspan="3">Address Information</td>
            </tr>
    </table>
    <table>
        <tr>
            <th class="head" colspan="4">Personal Information</th>
        </tr>
        <tr>
            <td colspan="4">High School Name</td>
        </tr>
        <tr>
            <td>Head Coach Name</td>
            <td>Head Coach Phone</td>
            <td colspan="2">Head Coach Email</td>
        </tr>
        <tr>
            <td>Ethnicity</td>
            <td>Hobbies</td>
            <td>College Preference</td>
            <td>Previous Injuries</td>
        </tr>
        <tr>
            <td>Facebook</td>
            <td>Twitter</td>
            <td>Instagram Preference</td>
            <td>Snapchat</td>
        </tr>
       
</table>
   
</body>
</html>