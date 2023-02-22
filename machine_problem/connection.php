<?php
$conn = mysqli_connect("localhost", "root", "", "grades");


if(!$conn){
    die('Connection Failed'. mysqli_connect_error());
}

?>