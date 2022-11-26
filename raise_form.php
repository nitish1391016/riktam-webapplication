<?php
session_start();
if(isset($_SESSION['useremail'])){
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
    include 'assets/navbar.php';
    ?>

    <!-- Section: Design Block -->
    <section class="">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
            <div class="container">
                <div class="row gx-lg-5 align-items-center justify-content-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card">
                            <div class="card-body py-5 px-md-5">
                                <form>
                                    <h2 class=" text-center mb-5">Raise a problem</h2>
                                    <div class="form-outline mb-3">
                                        <input type="file" id="form3Example4" class="form-control" />
                                        <label class="form-label" for="form3Example4">Upload Image</label>
                                    </div>
                                    <div class="form-outline mb-3">
                                        <input type="password" id="form3Example4" class="form-control" />
                                        <label class="form-label" for="form3Example4">Problem Title</label>
                                    </div>
                                    <div class="form-outline mb-3">
                                        <textarea class="form-control" rows="3" placeholder=""></textarea>
                                        <label class="form-label" for="form3Example4">Problem Description</label>
                                    </div>
                                    <div class="form-outline mb-3">
                                        <input type="password" id="form3Example4" class="form-control" />
                                        <label class="form-label" for="form3Example4">Location</label>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block mb-4">
                                        Submit
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



</body>

</html>
<?php
}
echo '<script>alert("Login to view!")</script>';

echo '<script>
window.location.href = "index.php"
</script>';