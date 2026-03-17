<?php
include "database.php";

if(isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$course=$_POST['course'];

$conn->query("INSERT INTO students(name,email,course) VALUES('$name','$email','$course')");

header("Location:index.php");

}

?>

<form method="POST">

<h2>Add Student</h2>

<input type="text" name="name" placeholder="Name">

<input type="email" name="email" placeholder="Email">

<input type="text" name="course" placeholder="Course">

<button name="submit">Add</button>

</form>