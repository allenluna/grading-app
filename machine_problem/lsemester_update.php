<?php
session_start();
require "connection.php";

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
            <div class="card-header">
              <h1>Update Fourth Semester Grade
                <a href="admin_dash.php" class="btn btn-danger float-end">Back</a>
              </h1>
            </div>
            <div class="card-body">

            <?php

            if(isset($_GET["id"])){
                $id = mysqli_real_escape_string($conn, $_GET["id"]);
                $query = "SELECT * FROM students where id = '$id' ";
                $result = mysqli_query($conn, $query);

                if(mysqli_num_rows ($result) > 0){
                    $data = mysqli_fetch_array($result);
                ?>
                    
                    <form action="controller.php" method="POST">
                        <input type="text" name="id" value="<?= $data['id']; ?>">
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?= $data['name']; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Math</label>
                            <input type="text" name="math" class="form-control" value="<?= $data['Fmath']; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Science</label>
                            <input type="text" name="science" class="form-control" value="<?= $data['Fscience']; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Filipino</label>
                            <input type="text" name="filipino" class="form-control" value="<?= $data['Ffilipino']; ?>">
                        </div>
                        <div class="mb-3">
                            <label>English</label>
                            <input type="text" name="english" class="form-control" value="<?= $data['Fenglish']; ?>">
                        </div>
                        
                        <div class="mb-3">
                            <button type="submit" name="lupdate" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                
                <?php

                    }else{
                        echo "<h1>No ID Found</h1>";
                    }
                }

            ?>

            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>