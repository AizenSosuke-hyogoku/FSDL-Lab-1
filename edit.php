<?php
include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

<h2>Update Student</h2>

<form action="update.php" method="post">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

First Name:
<input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"><br><br>

Last Name:
<input type="text" name="lastname" value="<?php echo $row['lastname']; ?>"><br><br>

Roll No:
<input type="text" name="rollno" value="<?php echo $row['rollno']; ?>"><br><br>

Contact:
<input type="text" name="contact" value="<?php echo $row['contact']; ?>"><br><br>

<input type="submit" value="Update">

</form>