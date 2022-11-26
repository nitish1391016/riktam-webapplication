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
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row">
                    <div class="col mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1" class="form-control" name="username" required/>
                        <label class="form-label" for="form3Example1">Name</label>
                      </div>
                    </div>
                  </div>

                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" id="form3Example3" class="form-control" name="useremail" required/>
                    <label class="form-label" for="form3Example3">Email address</label>
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4" class="form-control" name="userpassword" required/>
                    <label class="form-label" for="form3Example4">Password</label>
                  </div>

                  <!-- Submit button -->
                  <button name="submit" type="submit" class="btn btn-primary btn-block mb-4">
                    Sign up
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
  <!-- Section: Design Block -->
  <?php
  if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $email = $_POST['useremail'];
    $password = $_POST['userpassword'];
    if (mysqli_num_rows(mysqli_query($conn, "select * from users where email = '$email'")) == 0){
      mysqli_query($conn, " INSERT INTO users (name, email, password) values ('$name','$email','$password')");
      echo '<script>alert("SignUp Successfull");</script>';
      echo '<script>
      setTimeout(()=>
      window.location.href = "login.php",100 );
      </script>';    }
    else 
      echo '<script>alert("Email already exist!");</script>';
  }

  ?>



</body>

</html>