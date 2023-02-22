<?php
session_start();
require_once "connection.php";

if(isset($_SESSION["id"])){
  header("Location: student_dash.php");
}


if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = "SELECT * FROM students WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
      if($password == $row["password"]){
        $_SESSION["login"] = true;
        $_SESSION["id"] = $row["id"];
        header("Location: student_dash.php");
      }else{
        echo'<div class="alert alert-danger" role="alert">
        Wrong password
            </div>';
      }
    }else{
        echo'<div class="alert alert-danger" role="alert">
        Your email is not registered!
            </div>';
    }
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

  <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header text-center">
              <h1>Student Login Form</h1>
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <div class="mb-3">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                
                <div class="mb-3">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="mb-3">
                    <a class="text-decoration-none" href="stud_register.php">Student Register</a>
                    <a class="text-decoration-none" href="admin_register.php">Admin Register</a>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>