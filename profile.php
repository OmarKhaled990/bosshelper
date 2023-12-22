<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/profile.css">
  <title>Profile</title>
</head>

<body>
  <!--Profile page Start  -->

  <!--Navbar Start  -->
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">Boss Helper</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class=" collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto me-5 mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link  " aria-current="page" href="profile.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tasks.html">Daily Tasks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="employees.html">Employees Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="testemonials.html">Customers Reviews</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <a href="signIn.html" class=" nav-btn rounded-2" type="submit">Logout</a>
        </form>
      </div>
    </div>
  </nav>
  <!--Navbar End  -->
  <!--==================================================================-->
  <!-- Dashboard Container -->
  <div class="dashboard-container d-flex justify-content-center align-items-center py-5">

    <div class="row w-75 g-3 ">
      <!-- Daily Tasks Card -->
      <div class="dashboard-card offset-md-2 col-md-8">
        <div id="home-content" class="home-content ">
          <h2 class="home-title mb-4">Welcome, Boss !</h2>
          <p class="fs-5"><span class="fw-bold"> Name : </span>
            <?php

            echo $_SESSION['username'];
            
            ?>
          </p>
          <p class="fs-5"><span class="fw-bold"> Email : </span>
            <?php

              echo $_SESSION['email'];
            
            ?>
          </p>
          
        </div>
      </div>
      <div class="dashboard-card offset-md-2 me-3  col-md-4 ">
        <h2>Daily Tasks</h2>
        <p>Manage your daily tasks efficiently.</p>
      </div>

      <!-- Employee Data Card -->
      <div class="dashboard-card col-md-4">
        <h2>Employee Data</h2>
        <p>Explore detailed information about your employees.</p>
      </div>

      <!-- Customer Reviews Card -->
      <div class="dashboard-card offset-md-2 col-md-8">
        <h2>Customer Reviews</h2>
        <p>Check what your customers are saying.</p>
      </div>

    </div>
  </div>
  <!--==================================================================-->
  <!-- Footer Start -->
  <footer class="bg-dark text-light py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h4>Personal Info</h4>
          <p>Email: info@bosshelper.com</p>
          <p>Phone: +201090164367</p>
        </div>
        <div class="col-md-4">
          <h4>Quick Links</h4>
          <ul class="list-unstyled">
            <a class="nav-link" href="tasks.html">Daily Tasks</a>

            <a class="nav-link" href="employees.html">Employees Data</a>

            <a class="nav-link" href="testemonials.html">Customers Reviews</a>
          </ul>
        </div>
        <div class="col-md-4 icons">
          <h4 class="mb-3">My Social Media</h4>
          <a href="#" class=" mx-3"><i class="fab fa-facebook fa-xl"></i></a>
          <a href="#" class=" me-3"><i class="fab fa-twitter fa-xl"></i></a>
          <a href="#" class=" me-3"><i class="fab fa-instagram fa-xl"></i></a>
        </div>

      </div>
      <hr class="my-3">
      <div class="row">
        <div class="col-md-6">
          <p>&copy; 2023 Boss Helper | Copyright by <span class="fw-bold">Omar</span> </p>
        </div>
        <div class="col-md-6 text-end">
          <p><a href="#">Terms of Service</a> | <a href="#">Privacy Policy</a></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer End -->
  <!--==================================================================-->
  <!--Profile page End  -->
  <!--==================================================================-->
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- <script src="js/home.js"></script> -->
</body>

</html>