<?php
    $conn = new mysqli("172.23.0.2","root","root","trucorp");
    $query = "SELECT * FROM users";

    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {
        $rows [] = $row;
    }


    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trucorp Web 2.0</title>
    <style>
        table {
            border: 1px solid black;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            text-align: left;
            padding: 8px;
        }

        
    </style>
</head>
<body>
<table>
    <tr>
        <th>ID</th> 
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jabatan</th>
    </tr>
    <?php foreach($rows as $row): ?>
    <tr>
        <td><?=$row['ID']?></td> 
        <td><?=$row['Nama']?></td>
        <td><?=$row['Alamat']?></td>
        <td><?=$row['Jabatan']?></td>
    </tr>
    <?php endforeach; ?>
    
</table>
    
</body>
</html>
