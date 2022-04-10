<?php

$stu_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM student WHERE sid = {$stu_id}";
$result = mysqli_query($conn,$sql) or die("Query unsuccessful.");
header("Location: http://localhost/html/CRUD/index.php");
    mysqli_close($conn);

?>