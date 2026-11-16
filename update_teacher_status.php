<?php
include 'connection.php';

$login_id = $_GET['login_id'];
$status = $_GET['status'];

$qry = "UPDATE login SET status='$status' WHERE login_id='$login_id'";
mysqli_query($conn, $qry);

header("Location: view_teachers.php");
exit;
?>
