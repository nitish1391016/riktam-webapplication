<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Nitish</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <?php
        if (!isset($_SESSION['useremail'])) {
        ?>
          <li class="nav-item">
            <a class="nav-link active" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="signup.php">Signup</a>
          </li>
        <?php
        } else {
        ?>
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="raise_form.php">Raise Problem</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="logout.php">Log out</a>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
<!-- nav ending -->
<?php
$conn = mysqli_connect('localhost', 'root', '', 'civic_problems');
?>