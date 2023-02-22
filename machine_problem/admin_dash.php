<?php
session_start();
require "connection.php";
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $query = "SELECT * FROM students where id = '$id' ";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

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
  <h1>STUDENT GRADE</h1>
    <a href="admin_logout.php" class="btn btn-danger">Logout</a>
    <div class="contaier text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>First Semester</h1>
                        
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Math</th>
                                    <th>Science</th>
                                    <th>Filipino</th>
                                    <th>English</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM students";
                                $data = mysqli_query($conn, $query);

                                if(mysqli_num_rows($data) > 0){

                                    foreach($data as $student){
                                        ?>

                                            <tr>
                                                <td><?= $student["name"]; ?></td>
                                                <td><?= $student["math"]; ?></td>
                                                <td><?= $student["science"]; ?></td>
                                                <td><?= $student["filipino"]; ?></td>
                                                <td><?= $student["english"]; ?></td>
                                                <td>
                                                    <a href="fsemester_update.php?id=<?= $student['id'];?>" class="btn btn-primary">Update</a>
                                                    <a href="" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>

                                        <?php
                                    }

                                }else{
                                    echo "No record found!";
                                }
                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contaier text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Second Semester Grade</h1>
                        
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Math</th>
                                    <th>Science</th>
                                    <th>Filipino</th>
                                    <th>English</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM students";
                                $data = mysqli_query($conn, $query);

                                if(mysqli_num_rows($data) > 0){

                                    foreach($data as $student){
                                        ?>

                                            <tr>
                                                <td><?= $student["name"]; ?></td>
                                                <td><?= $student["Smath"]; ?></td>
                                                <td><?= $student["Sscience"]; ?></td>
                                                <td><?= $student["Sfilipino"]; ?></td>
                                                <td><?= $student["Senglish"]; ?></td>
                                                <td>
                                                <a href="ssemester_update.php?id=<?= $student['id'];?>" class="btn btn-primary">Update</a>
                                                    <a href="" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>

                                        <?php
                                    }

                                }else{
                                    echo "No record found!";
                                }
                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><div class="contaier text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Third Semester Grade</h1>
                        
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Math</th>
                                    <th>Science</th>
                                    <th>Filipino</th>
                                    <th>English</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM students";
                                $data = mysqli_query($conn, $query);

                                if(mysqli_num_rows($data) > 0){

                                    foreach($data as $student){
                                        ?>

                                            <tr>
                                                <td><?= $student["name"]; ?></td>
                                                <td><?= $student["Tmath"]; ?></td>
                                                <td><?= $student["Tscience"]; ?></td>
                                                <td><?= $student["Tfilipino"]; ?></td>
                                                <td><?= $student["Tenglish"]; ?></td>
                                                <td>
                                                <a href="tsemester_update.php?id=<?= $student['id'];?>" class="btn btn-primary">Update</a>
                                                    <a href="" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>

                                        <?php
                                    }

                                }else{
                                    echo "No record found!";
                                }
                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><div class="contaier text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Fourth Semester Grade</h1>
                        
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Math</th>
                                    <th>Science</th>
                                    <th>Filipino</th>
                                    <th>English</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM students";
                                $data = mysqli_query($conn, $query);

                                if(mysqli_num_rows($data) > 0){

                                    foreach($data as $student){
                                        ?>

                                            <tr>
                                                <td><?= $student["name"]; ?></td>
                                                <td><?= $student["Fmath"]; ?></td>
                                                <td><?= $student["Fscience"]; ?></td>
                                                <td><?= $student["Ffilipino"]; ?></td>
                                                <td><?= $student["Fenglish"]; ?></td>
                                                <td>
                                                    <a href="lsemester_update.php?id=<?= $student['id'];?>" class="btn btn-primary">Update</a>
                                                    <a href="" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>

                                        <?php
                                    }

                                }else{
                                    echo "No record found!";
                                }
                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>