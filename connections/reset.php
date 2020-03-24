<?php
use App\Connection;
include ("connect.php");

$sql = " UPDATE coders_list SET status = 'Alive' WHERE status = ALL(SELECT status FROM coders_list WHERE status = 'Dead')";
$result = $connection->query($sql);


?>