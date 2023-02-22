<?php
session_start();
include("connection.php") ;


if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm_password"];

  if(empty($name) OR empty($email) OR empty($password) OR empty($confirm_password)){
    echo'<div class="alert alert-danger" role="alert">
    All fields are empty
          </div>';
  }

  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo'<div class="alert alert-danger" role="alert">
    Email is not valid!
          </div>';
  }

    // To confirm if the email is already exist
  $sql = "SELECT * FROM students WHERE email = '$email'";

  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);
  
  if($count > 0){
      echo '<div class="alert alert-danger" role="alert">
      Email is already use
            </div>';
  }else{
    if($password !== $confirm_password){
      echo'<div class="alert alert-danger" role="alert">
      Your Password and confirm password is not same.
            </div>';
    }else{
  
      // insert data from database
      $query = "INSERT INTO students(name, email, password, confirm_password) 
      VALUES ('$name','$email', '$password', '$confirm_password')";
  
      mysqli_query($conn, $query);
      echo'<div class="alert alert-success" role="alert">
      Youre are registered!
            </div>';
    }
    
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
              <h1>Student Registration Form</h1>
            </div>
            <div class="card-body">
              <form action="" method="POST">
              <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control">
                </div>
                
                <div class="mb-3">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="mb-3">
                    <a href="stud_login.php">Login</a>
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