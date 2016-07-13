<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'ATM';
//connect with the database
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $db->query("SELECT * FROM Users WHERE FName LIKE '%".$searchTerm."%' ORDER BY FName ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['FName'];
}
//return json data
echo json_encode($data);
?>