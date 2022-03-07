<?php
require 'getdata.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Landon</h1>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
        </thead>
    <tbody>
        <?php 
        $i = 0;
        while($rows){$i++
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $rows[3]; ?></td>
            <td><?php echo $rows[2]; ?></td>
            <td><?php echo $rows[5]; ?></td>
        </tr>
        <?php 
        }
        ?>
    </tbody>
    </table>  
</body>
</html>