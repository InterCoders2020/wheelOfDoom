<?php
use App\Connection;
$connection = new mysqli("127.0.0.1", "root", "", "coders");

$sql = "SELECT COUNT(*) total FROM coders_list WHERE status='Alive'";
$result = $connection->query($sql);
$row = $result->fetch_assoc();
echo $row['total'];

?>