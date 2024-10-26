<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <form action="signup.php" method="POST">
        <div class="signup-container">
            <h2>Sign Up</h2>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="unm" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="pass" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact Number</label>
                <input type="tel" id="contact" name="contact" required>
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <select id="country" style="color:#F08080;" name="country" required>
                    <option value="">Select Country</option>
                    <option value="USA">USA</option>
                    <option value="Canada">Canada</option>
                    <option value="UK">UK</option>
                    <option value="India">India</option>
                    <option value="japan">Japan</option>
                    <option value="australia">Australia</option>
                    <option value="UK">UK</option>
                    <option value="UK">UK</option> 
                    <!-- Add more countries as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <select id="state" style="color:#F08080;" name="state" required>
                    <option value="">Select State</option>
                    <option value="California">California</option>
                    <option value="Texas">Texas</option>
                    <option value="New York">New York</option>
                    <option value="New York">New York</option>
                    <!-- Add more states as needed -->
                </select>
            </div>
            <button type="submit" name="submit">Sign Up</button>
            <p class="login-link">Already have an account? <a href="login.php">Login</a></p>
        </div>
    </form>
</body>
</html>

<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $unm = $_POST['unm'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $country = $_POST['country'];
    $state = $_POST['state'];

    // Insert the user data into the database
    $sql = "INSERT INTO `login` VALUES ('$unm', '$pass',  '$email', '$contact', '$country', '$state')";
    $res = mysqli_query($db, $sql);

    if ($res) {
        header("Location: login.php");
    } else {
        echo "Error: " . mysqli_error($db);
    }
}
?>