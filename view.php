<?php
include 'db.php';

$sql = "SELECT * FROM students";
$result = mysqli_query($conn,$sql);

echo "<h2>Student Records</h2>";

echo "<table border=1>";

echo "<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Roll No</th>
<th>Contact</th>
<th>Edit</th>
<th>Delete</th>
</tr>";

while($row=mysqli_fetch_assoc($result))
{
echo "<tr>";

echo "<td>".$row['id']."</td>";
echo "<td>".$row['firstname']."</td>";
echo "<td>".$row['lastname']."</td>";
echo "<td>".$row['rollno']."</td>";
echo "<td>".$row['contact']."</td>";

echo "<td><a href='edit.php?id=".$row['id']."'>Edit</a></td>";
echo "<td><a href='delete.php?id=".$row['id']."'>Delete</a></td>";

echo "</tr>";
}

echo "</table>";

echo "<br><a href='index.php'>Add New Student</a>";
?>