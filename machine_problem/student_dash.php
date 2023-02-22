<?php
session_start();
require "connection.php";


if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $query = "SELECT * FROM students where id = '$id' ";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);

  // setting the gloval db row name for first semester
  $math = $row["math"];
  $filipino = $row["filipino"];
  $science = $row["science"];
  $english = $row["english"];

  // setting the gloval db row name for Seocnd semester
  $Smath = $row["Smath"];
  $Sfilipino = $row["Sfilipino"];
  $Sscience = $row["Sscience"];
  $Senglish = $row["Senglish"];

  // setting the gloval db row name for Third semester
  $Tmath = $row["Tmath"];
  $Tfilipino = $row["Tfilipino"];
  $Tscience = $row["Tscience"];
  $Tenglish = $row["Tenglish"];

  // setting the gloval db row name for Fourth semester
  $Fmath = $row["Tmath"];
  $Ffilipino = $row["Ffilipino"];
  $Fscience = $row["Fscience"];
  $Fenglish = $row["Fenglish"];
  
}else{
  header("Location: stud_login.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Grading System</title>
  </head>
  <body>

    <div class="container" style="text-align: center;">
      
    <h1>Your Grade</h1>
      <div class="row">
        
        <div class="mb-3">
          <a href="stud_logout.php" class="btn btn-danger float-end">Logout</a>
        </div>
      <table class="table">
        <h1 class="text-align-center">First Semester Grade</h1>
        <thead>
          <tr>
            <th scope="col">Math</th>
            <th scope="col">Science</th>
            <th scope="col">English</th>
            <th scope="col">Filipino</th>
          </tr>
        </thead>
        <tbody>
          <?php
            echo "<tr>" . "<td>" . $math . "</td>";
            echo "<td>" . $science . "</td>";
            echo "<td>" . $filipino . "</td>";
            echo "<td>" . $english . "</td>" . "<td>" ."</tr>";
          ?>
        </tbody>
      </table>
      <table class="table">
        <h1 class="text-align-center">Second Semester Grade</h1>
        <thead>
          <tr>
            <th scope="col">Math</th>
            <th scope="col">Science</th>
            <th scope="col">English</th>
            <th scope="col">Filipino</th>
          </tr>
        </thead>
        <tbody>
          <?php
            echo "<tr>" . "<td>" . $Smath . "</td>";
            echo "<td>" . $Sscience . "</td>";
            echo "<td>" . $Sfilipino . "</td>";
            echo "<td>" . $Senglish . "</td>" . "<td>" ."</tr>";
          ?>
        </tbody>
      </table>
      <table class="table">
        <h1 class="text-align-center">Third Semester Grade</h1>
        <thead>
          <tr>
            <th scope="col">Math</th>
            <th scope="col">Science</th>
            <th scope="col">English</th>
            <th scope="col">Filipino</th>
          </tr>
        </thead>
        <tbody>
          <?php
          echo "<tr>" . "<td>" . $Tmath . "</td>";
            echo "<td>" . $Tscience . "</td>";
            echo "<td>" . $Tfilipino . "</td>";
            echo "<td>" . $Tenglish . "</td>" . "<td>" ."</tr>";
          ?>
        </tbody>
      </table>
      <table class="table">
        <h1 class="text-align-center">Fourth Semester Grade</h1>
        <thead>
          <tr>
            <th scope="col">Math</th>
            <th scope="col">Science</th>
            <th scope="col">English</th>
            <th scope="col">Filipino</th>
          </tr>
        </thead>
        <tbody>
          <?php
            echo "<tr>" . "<td>" . $Fmath . "</td>";
            echo "<td>" . $Fscience . "</td>";
            echo "<td>" . $Ffilipino . "</td>";
            echo "<td>" . $Fenglish . "</td>" . "<td>" ."</tr>";
          ?>
        </tbody>
      </table>
      </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>