<?php
include "database.php";
?>

<!DOCTYPE html>
<html>
<head>

<title>Student Management</title>
<link rel="stylesheet" href="style.css">

</head>

<body>

<h2>Student List</h2>

<a href="add_student.php">Add Student</a>

<table border="1">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Course</th>
<th>Action</th>
</tr>

<?php

$result=$conn->query("SELECT * FROM students");

while($row=$result->fetch_assoc()){

?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['course']; ?></td>

<td>

<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>

<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>