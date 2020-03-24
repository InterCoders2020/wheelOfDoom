<?php
use App\Connection;
$connection = new mysqli("127.0.0.1", "root", "", "coders");

$sql = "SELECT COUNT(*) total FROM coders_list WHERE status='Dead'";
$result = $connection->query($sql);
$fila = $result->fetch_assoc();

echo $fila['total'];
