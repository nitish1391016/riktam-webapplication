<?php
session_start();
$id = $_POST['id'];
$conn = mysqli_connect('localhost', 'root', '', 'civic_problems');
$query2 = mysqli_query($conn, "select * from votes where problem_id='$id'");
$rows = mysqli_num_rows($query2);
echo $rows;
