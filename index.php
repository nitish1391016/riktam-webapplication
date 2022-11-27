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
    <link rel="stylesheet" href="css/style.css">
    <title>login</title>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    include 'assets/navbar.php'
    ?>

    <h2 class="text-center my-4">Problems</h2>
    <!-- cards view -->
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 m-2 mb-5">
        <?php
        $sql = mysqli_query($conn, "select * from problems");
        while ($data = mysqli_fetch_array($sql)) {
            $id = $data['id'];
            $votes = mysqli_num_rows(mysqli_query($conn, "select * from votes where problem_id = $id"));
            include 'assets/cause.php';
        }
        ?>

    </div>

</body>

</html>