<?php
include 'connection.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css"> 
</head>
<body>
    <form action="login.php" method="POST">
        <div class="login-container">
            <h2>Login</h2>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="unm" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="pass" required>
            </div>
            <button type="submit" name="sub">Login</button>
            <p class="signup-link">Don't have an account? <a href="signup.php">Sign up</a></p>
        </div>
    </form>
</body>
</html>
<?php

// $con=mysqli_connect("localhost:3307","root","","food_recipe");

if(isset($_POST['sub']))
{
$unm=$_POST['unm'];
$pass=$_POST['pass'];

$sql="SELECT * FROM `login` WHERE Username='$unm' AND Password='$pass'";
$res=mysqli_query($db,$sql);

$row=mysqli_fetch_row($res);
// echo $row[0].$row[1];

if($row)
{
    header("location:index.html");
    echo "done";
}

if($unm=='admin' && $pass='ad123')
{
    header("location:admin.php");
    echo "ok";
}
}
?>