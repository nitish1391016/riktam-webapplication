<?php
session_start();
if (isset($_SESSION['useremail'])) {
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
                                    <?php
                                    $id = $_GET['id'];
                                    $sql = mysqli_query($conn, "select * from problems where id= '$id'");
                                    while ($data = mysqli_fetch_array($sql)) {
                                    ?>
                                        <form method="POST" enctype="multipart/form-data">
                                            <h2 class=" text-center mb-5">Edit problem details</h2>
                                            <div class="form-outline mb-3">
                                                <input type="file" id="form3Example4" class="form-control" value="<?= $data['image'] ?>" name="image" />
                                                <label class="form-label" for="form3Example4">Upload Image</label>
                                            </div>
                                            <div class="form-outline mb-3">
                                                <input type="text" id="form3Example4" class="form-control" name="title" value="<?= $data['title'] ?>" />
                                                <label class="form-label" for="form3Example4">Problem Title</label>
                                            </div>
                                            <div class="form-outline mb-3">
                                                <textarea class="form-control" rows="3" placeholder="" name="description"><?= $data['description'] ?></textarea>
                                                <label class="form-label" for="form3Example4">Problem Description</label>
                                            </div>
                                            <div class="form-outline mb-3">
                                                <input type="text" id="form3Example4" class="form-control" value="<?= $data['location'] ?>" name="location" />
                                                <label class="form-label" for="form3Example4">Location</label>
                                            </div>
                                            <?php
                                            if ($_SESSION['useremail'] != "admin@admin.com") {
                                            ?>
                                                <!-- Submit button -->
                                                <button type="submit" name="submit" class="btn btn-primary btn-block mb-0">
                                                    Submit
                                                </button>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="form-outline mb-3">
                                                    <input type="text" id="form3Example4" class="form-control" value="<?= $data['status'] ?>" name="status" />
                                                    <label class="form-label" for="form3Example4">Status</label>
                                                </div>
                                                <button type="submit" name="admin_submit" class="btn btn-primary btn-block mb-0">
                                                    Submit
                                                </button>
                                            <?php
                                            }
                                            ?>

                                        </form>
                                    <?php
                                    }
                                    ?>
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
            $title = $_POST['title'];
            $desc = $_POST['description'];
            $location = $_POST['location'];

            $image = $_FILES['image']['name'];
            $temp_name = $_FILES['image']['tmp_name'];
            $folder = "images/" . $image;

            $email = $_SESSION['useremail'];
            $res = false;
            $mov = false;
            if (!empty($image)) {
                $res = mysqli_query($conn, "UPDATE problems set title = '$title', user_email = '$email', description = '$desc', location = '$location', image = '$image' ");
                $mov = move_uploaded_file($temp_name, $folder);
            } else
                $res = mysqli_query($conn, "UPDATE problems set title = '$title', user_email = '$email', description = '$desc', location = '$location' ");
            if ($res) {
                if ($mov) {
                    echo '<script>alert("Problem raised sucessfully");</script>';
                }
            } else
                echo '<script>alert("Unexpected error occured. Please try again!");</script>';
        } else if (isset($_POST['admin_submit'])) {
            $title = $_POST['title'];
            $desc = $_POST['description'];
            $location = $_POST['location'];
            $status = $_POST['status'];

            $image = $_FILES['image']['name'];
            $temp_name = $_FILES['image']['tmp_name'];
            $folder = "images/" . $image;

            $email = $_SESSION['useremail'];
            $res = false;
            $mov = false;
            if (!empty($image)) {
                $res = mysqli_query($conn, "UPDATE problems set title = '$title', user_email = '$email', description = '$desc', location = '$location', image = '$image', status = '$status' ");
                $mov = move_uploaded_file($temp_name, $folder);
            } else
                $res = mysqli_query($conn, "UPDATE problems set title = '$title', user_email = '$email', description = '$desc', location = '$location', status = '$status' ");
            if ($res) {
                if ($mov) {
                    echo '<script>alert("Problem raised sucessfully");</script>';
                }
            } else
                echo '<script>alert("Unexpected error occured. Please try again!");</script>';
        }

        ?>
    </body>

    </html>
<?php
} else {
    echo '<script>alert("Login to view");</script>';
    echo '<script>
        setTimeout(()=>
        window.location.href = "index.php",100 );
        </script>';
}
