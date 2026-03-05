<!DOCTYPE html>
<html>
<head>
<title>Student Registration</title>
</head>
<body>

<h2>Student Registration Form</h2>

<form action="insert.php" method="post">

First Name:
<input type="text" name="firstname" required><br><br>

Last Name:
<input type="text" name="lastname" required><br><br>

Roll No:
<input type="text" name="rollno" required><br><br>

Password:
<input type="password" name="password" required><br><br>

Contact Number:
<input type="text" name="contact" required><br><br>

<input type="submit" value="Register">

</form>

<br>

<a href="view.php">View Students</a>

</body>
</html>