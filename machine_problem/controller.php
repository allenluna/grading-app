<?php
session_start();
require_once "connection.php";


if(isset($_POST['update'])){
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $filipino = mysqli_real_escape_string($conn, $_POST["filipino"]);
    $math = mysqli_real_escape_string($conn, $_POST["math"]);
    $science = mysqli_real_escape_string($conn, $_POST["science"]);
    $english = mysqli_real_escape_string($conn, $_POST["english"]);

    $query = "UPDATE students SET name = '$name', filipino = '$filipino', math = '$math',
    science = '$science', english = '$english' WHERE id = '$id'";

    $result = mysqli_query($conn, $query);

    if($result){
        header("Location: admin_dash.php");
    }else{
        header("Location: admin_dash.php");
    }
}

if(isset($_POST['supdate'])){
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $Sfilipino = mysqli_real_escape_string($conn, $_POST["filipino"]);
    $Smath = mysqli_real_escape_string($conn, $_POST["math"]);
    $Sscience = mysqli_real_escape_string($conn, $_POST["science"]);
    $Senglish = mysqli_real_escape_string($conn, $_POST["english"]);

    $query = "UPDATE students SET name = '$name', Sfilipino = '$Sfilipino', Smath = '$Smath',
    Sscience = '$Sscience', Senglish = '$Senglish' WHERE id = '$id'";

    $result = mysqli_query($conn, $query);

    if($result){
        header("Location: admin_dash.php");
    }else{
        header("Location: admin_dash.php");
    }
}

if(isset($_POST['tupdate'])){
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $Tfilipino = mysqli_real_escape_string($conn, $_POST["filipino"]);
    $Tmath = mysqli_real_escape_string($conn, $_POST["math"]);
    $Tscience = mysqli_real_escape_string($conn, $_POST["science"]);
    $Tenglish = mysqli_real_escape_string($conn, $_POST["english"]);

    $query = "UPDATE students SET name = '$name', Tfilipino = '$Tfilipino', Tmath = '$Tmath',
    Tscience = '$Tscience', Tenglish = '$Tenglish' WHERE id = '$id'";

    $result = mysqli_query($conn, $query);

    if($result){
        header("Location: admin_dash.php");
    }else{
        header("Location: admin_dash.php");
    }
}

if(isset($_POST['lupdate'])){
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $Ffilipino = mysqli_real_escape_string($conn, $_POST["filipino"]);
    $Fmath = mysqli_real_escape_string($conn, $_POST["math"]);
    $Fscience = mysqli_real_escape_string($conn, $_POST["science"]);
    $Fenglish = mysqli_real_escape_string($conn, $_POST["english"]);

    $query = "UPDATE students SET name = '$name', Ffilipino = '$Ffilipino', Fmath = '$Fmath',
    Fscience = '$Fscience', Fenglish = '$Fenglish' WHERE id = '$id'";

    $result = mysqli_query($conn, $query);

    if($result){
        header("Location: admin_dash.php");
    }else{
        header("Location: admin_dash.php");
    }
}

?>