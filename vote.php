
<?php
if (isset($_POST['like'])) {
    $id = $_POST['id'];
    $email = $_POST['useremail'];

    $conn = mysqli_connect('localhost', 'root', '', 'civic_problems');
    $query = mysqli_query($conn, "select * from votes where problem_id='$id' and user_email='$email'");

    if (mysqli_num_rows($query) > 0) {
        mysqli_query($conn, "delete from votes where user_email='$email' and problem_id='$id'");
    } else {
        mysqli_query($conn, "insert into votes (user_email,problem_id) values ('$email', '$id')");
    }
}

?>