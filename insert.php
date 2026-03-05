<?php
include 'db.php';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$roll = $_POST['rollno'];
$pass = $_POST['password'];
$contact = $_POST['contact'];

$sql = "INSERT INTO students (firstname, lastname, rollno, password, contact)
VALUES ('$fname','$lname','$roll','$pass','$contact')";

if(mysqli_query($conn,$sql)){
    echo "Student inserted successfully";
}else{
    echo "Error: ".mysqli_error($conn);
}

?>