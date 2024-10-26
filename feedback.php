<?php

$con = mysqli_connect('localhost:3307', 'root', '', 'food_recipe');

echo $name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$que="INSERT INTO `feedback` VALUES ('$name','$email','$feedback')";

$result = mysqli_query($con, $que);

if (isset($_POST['submit'])) {
	header('location:feedback.html');
}

?>