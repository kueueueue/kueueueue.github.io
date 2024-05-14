<!doctype html>
<?php include 'connect.php'; ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <title>DCISM</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">DCISM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row" style="margin: 10px">
    <div class="col-8">

    <div class="card">
        <div class="card-header">
            Student Roster
        </div>
        <div class="card-body">


        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID Number</th>
                <th scope="col">Name</th>
                <th scope="col">Course</th>
                <th scope="col">&nbsp</th>
                </tr>
            </thead>
            <tbody>

            <?php ?>

                <tr>
                <th>201354</th>
                <td>Eric Manatad</td>
                <td>BSIT</td>
                <td>
                  <button type="button" class="btn btn-primary btn-sm">Edit</button>
                  <button type="button" class="btn btn-danger btn-sm" >Delete</button>
                </td>
                </tr>
                <tr>
                <th>201344</th>
                <td>Jacob Nerida</td>
                <td>BSIS</td>
                <td>
                  <button type="button" class="btn btn-primary btn-sm">Edit</button>
                  <button type="button" class="btn btn-danger btn-sm" >Delete</button>
                </td>
                </tr>
                <tr>
                <th>201372</th>
                <td>Angel Garrito</td>
                <td>BSCS</td>
                <td>
                  <button type="button" class="btn btn-primary btn-sm">Edit</button>
                  <button type="button" class="btn btn-danger btn-sm" >Delete</button>
                </td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </div>
    <div class="col-4">  
        <div class="card">
            <div class="card-header">
                Add student
            </div>
            <div class="card-body">
            <form method="POST" action="insert.php">
            <div class="row mb-3">
                    <div class="col-sm">
                    <input type="number" name="st_idnum" placeholder="ID Number" class="form-control" id="inputid">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm">
                    <input type="text" name="st_name" placeholder="Name" class="form-control" id="inutname">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm">
                    <select name="st_course" class="form-select" aria-label="Default select example">
                        <option value="">Course</option>
                        <option value="BSIT">BSIT</option>
                        <option value="BSCS">BSCS</option>
                        <option value="BSIS">BSIS</option>
                    </select>
                    </div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>

        
    </div>
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap/js/0bootstrap.js" ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>