<?php
$connection = new mysqli("127.0.0.1", "root", "", "coders");

    $sql = " UPDATE coders_list SET status = 'Alive' WHERE status = ALL(SELECT status FROM coders_list WHERE status = 'Dead')";
    $result = $connection->query($sql);

    header("Location: http://localhost/phpfactoriaf5/wheelOfDoom/index.php"); die();
    $connect->close();
?>

