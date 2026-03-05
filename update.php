<?php
include 'db.php';

$id = $_POST['id'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$roll = $_POST['rollno'];
$contact = $_POST['contact'];

$sql = "UPDATE students SET
firstname='$fname',
lastname='$lname',
rollno='$roll',
contact='$contact'
WHERE id=$id";

if(mysqli_query($conn,$sql)){
    echo "Record Updated Successfully";
}
else{
    echo "Error Updating Record";
}
?>