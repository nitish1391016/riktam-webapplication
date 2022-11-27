<?php
session_start();
$problems_id = $_GET['id'];
if (isset($_SESSION['useremail']))
    $email = $_SESSION['useremail']
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>login</title>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

    <?php
    include 'assets/navbar.php';
    $sql = mysqli_query($conn, "select * from problems where id = $problems_id");
    $votes = mysqli_num_rows(mysqli_query($conn, "select * from votes where problem_id = $problems_id"));
    while ($data = mysqli_fetch_array($sql)) {
    ?>
        <div class="row row-cols-lg-2 row-cols-1 d-flex justify-content-center main_div m-5">
            <div class="col-9 content_left">
                <img src="images/demo.jpeg" width="100%" alt="" class="img-fluid img-thumbnail mb-3">
                <h2 class=" "><?= $data['title'] ?></h2>
                <hr>
                <p class=" my-4"><?= $data['description'] ?></p>
                <a href="edit_form.php?id=<?= $problems_id ?>" type="button" class="btn btn-primary">Edit</a>
            </div>
            <div class="col-3 content_right py-5 border d-flex flex-column justify-content-center" style="height: fit-content;">
                <div class=" fs-2 d-flex justify-content-start align-items-center text-primary mb-3">
                    <?php
                    $query3 = mysqli_query($conn, "select * from  votes where problem_id ='$problems_id'");
                    if (isset($_SESSION['useremail'])) {
                        $query1 = mysqli_query($conn, "select * from votes where problem_id='$problems_id' and user_email='$email'");
                        if (mysqli_num_rows($query1) > 0) {
                    ?>
                            <i class="fa fa-thumbs-up" value="" style="cursor: pointer;"></i>&nbsp;
                            <span id="likes">
                                <?php
                                echo mysqli_num_rows($query3);
                                ?>
                            </span>
                        <?php
                        } else {
                        ?>
                            <i class="fa fa-thumbs-o-up" value="" style="cursor: pointer;"></i>&nbsp;
                            <span id="likes">
                                <?php
                                echo mysqli_num_rows($query3);
                                ?>
                            </span>
                        <?php
                        }
                    } else {
                        ?>
                        <i class="fa fa-thumbs-o-up" value="" style="cursor: not-allowed;"></i>&nbsp;
                        <span id="show_like">
                            <?php
                            echo mysqli_num_rows($query3);
                            ?>
                        </span>
                    <?php
                    } ?>
                </div>
                <p>Location: <i><?= $data['location'] ?></i></p>
                <p>Status: <i class=""><?= $data['status'] ?></i></p>
                <p>Date : <i><?= $data['date'] ?></i></p>
            </div>
        </div>
    <?php
    }
    ?>
<script>
    $(document).ready(function() {
        useremail ='<?= $email ?>';
        $(document).on('click', '.fa-thumbs-up', function() {
            $(this).toggleClass('fa-thumbs-up');
            if (!$(this).hasClass('fa-thumbs-up')) {
                $(this).addClass("fa-thumbs-o-up");
            }
            $.ajax({
                type: "POST",
                url: "vote.php",
                data: {
                    useremail: useremail,
                    id: <?= $problems_id ?>,
                    like: 1,
                },
                success: function(useremail, id) {
                    showLike(useremail, id);
                }
            });
        });

        $(document).on('click', '.fa-thumbs-o-up', function() {
            $(this).toggleClass('fa-thumbs-o-up');
            if (!$(this).hasClass('fa-thumbs-o-up')) {
                $(this).addClass("fa-thumbs-up");
            }
            $.ajax({
                type: "POST",
                url: "vote.php",
                data: {
                    useremail: useremail,
                    id: <?= $problems_id ?>,
                    like: 1,
                },
                success: function(useremail, id) {
                    showLike(useremail, id);
                }
            });
        });
    });
    
    function showLike(useremail) {
        $.ajax({
            url: 'show_like.php',
            type: 'POST',
            data: {
                useremail: useremail,
                id: <?= $problems_id ?>,
                showlike: 1
            },
            success: function(response) {
                $('#likes' + useremail).html(response);

            }
        });
    }
</script>
</body>

</html>