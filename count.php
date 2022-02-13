<?php 
$conn = new mysqli(172.23.0.2, "root", "root", "trucorp");
$query = "SELECT * FROM users";

$result = $conn->query($query);

while ($row = $result->fetch_assoc()){
$rows [] = $row;
}

$count = 0;

foreach($rows as $row):
$count = $count+1;
endforeach;

echo "Jumlah User: ".$count;


?>
