<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>login</title>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

<?php
    include 'assets/navbar.php';
    ?>

    <div class="row row-cols-lg-2 row-cols-1 d-flex justify-content-center main_div m-5">
        <div class="col-9 content_left">
            <img src="images/demo.jpeg" width="100%" alt="" class="img-fluid img-thumbnail mb-3" >
            <h2 class=" ">Title Lorem ipsum dolor sit amet.</h2>
            <hr>
            <p class=" my-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora minima, animi provident minus officiis laboriosam sint quas dolorum vel culpa corrupti cupiditate pariatur ut facere veritatis alias voluptatem, totam iste. Debitis quas, facere consectetur odio corrupti tempore voluptatibus recusandae eligendi quaerat, maiores aliquam veniam sint architecto odit ut quo consequuntur esse ad? Beatae, laudantium repellendus harum, assumenda molestiae <br> nobis eligendi sequi consequuntur nulla rem dicta aut minus cumque facere quisquam est illo. Ut ipsa, deleniti minima, similique corrupti tempora ducimus officia voluptas vero pariatur quasi explicabo assumenda itaque? Et cupiditate nemo sapiente saepe dolor ad autem tenetur ut culpa nisi inventore atque corrupti, quae quidem enim laborum veritatis nesciunt, explicabo, vel nostrum? Quisquam eaque iure quo. Similique exercitationem tempora delectus, nemo id, possimus quam qui adipisci a eveniet fuga quidem quos impedit alias? Excepturi iste dolore explicabo autem officia dignissimos voluptatem recusandae delectus magni labore, perferendis, assumenda eius laborum molestias ex! Suscipit adipisci voluptatem omnis voluptas tenetur asperiores nisi accusantium animi quibusdam vitae fuga, iure perferendis facilis maiores tempora, consequatur, voluptatum voluptate ad expedita ipsam corrupti odio commodi quis. Quis temporibus officiis error. Id deleniti quidem architecto quisquam quas quibusdam modi vitae sint asperiores, praesentium perspiciatis quaerat eius odit reiciendis.</p>
            <a href="edit_form.html" type="button" class="btn btn-primary">Edit</a>
        </div>
        <div class="col-3 content_right py-5 border h-50 d-flex flex-column justify-content-center">
            <div class=" fs-2 d-flex justify-content-start align-items-center text-primary mb-3">
                <i class="fa fa-thumbs-o-up"></i>&nbsp;100
            </div>
            <p>Location: <i>Medchal</i></p>
            <p>Status: <b class=" text-warning">Open</b></p>
            <p>Date : <i>20-01-2022</i></p>
            <p>Time : <i>10:10:10 AM</i></p>
        </div>
    </div>
</body>

</html>