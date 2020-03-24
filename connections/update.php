<?php
include ("connect.php");
include ("mysqlRandom.php");
$sql = "UPDATE coders_list SET status='Dead' WHERE id='$id' ";
$result= $connect->query($sql);

