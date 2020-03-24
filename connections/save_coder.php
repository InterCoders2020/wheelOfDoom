<?php
include("connect.php");

    $name= $_POST['name'];

    $query= "INSERT INTO coders_list(name,status) VALUES('$name','Alive')";
    $result= $connect->query($query);

    echo '<tr><td>' . $result['name'] . '</td></tr>' ;

    header("Location: http://localhost/docs/proyectos/wheelOfDoom/index.php"); die();

    $connect->close();
?>