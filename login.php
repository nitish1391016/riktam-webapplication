<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>login</title>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
  <?php
  include 'assets/navbar.php'
  ?>

  <!-- Section: Design Block -->
  <section class="">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <h1 class="my-5 display-3 fw-bold ls-tight">
              The best offer <br />
              <span class="text-primary">for your business</span>
            </h1>
            <p style="color: hsl(217, 10%, 50.8%)">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Eveniet, itaque accusantium odio, soluta, corrupti aliquam
              quibusdam tempora at cupiditate quis eum maiores libero
              veritatis? Dicta facilis sint aliquid ipsum atque?
            </p>
          </div>

          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
              <div class="card-body py-5 px-md-5">
                <form method="POST">
                  <h2 class=" text-center mb-5">Login Form</h2>
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" id="form3Example3" name="useremail" class="form-control" />
                    <label class="form-label" for="form3Example3">Email address</label>
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4" name="userpassword" class="form-control" />
                    <label class="form-label" for="form3Example4">Password</label>
                  </div>

                  <!-- Submit button -->
                  <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">
                    Log in
                  </button>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <script>
  </script>
  <!-- Section: Design Block -->

  <?php
  if (isset($_POST['submit'])) {
    $email = $_POST['useremail'];
    $password = $_POST['userpassword'];
    $conn = mysqli_connect('localhost', 'root', '', 'civic_problems');
    if (mysqli_num_rows(mysqli_query($conn, "select * from users where email = '$email' and password = '$password'")) > 0) {
      echo '<script>alert("Login Successfull");</script>';
      $_SESSION['useremail'] = $email;
      echo '<script>
      setTimeout(()=>
      window.location.href = "index.php",100 );
      </script>';
    } else
      echo '<script>alert("Email/Password not found!");</script>';
  }
  ?>


</body>

</html>