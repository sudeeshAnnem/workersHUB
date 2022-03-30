<?php
$conn=new mysqli("localhost","root","root","workershub");
if (!$conn){
    die("Database Connection Failed" . mysqli_error($conn));
}
?>