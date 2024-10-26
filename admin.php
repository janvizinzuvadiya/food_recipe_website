<?php
include_once('connection.php');

$que="SELECT * FROM `login`";
$result = mysqli_query($db, $que);
$que1="SELECT * FROM `feedback`";
$result1 = mysqli_query($db, $que1);
$que3="SELECT * FROM `chef`";
$result3 = mysqli_query($db, $que3);
$que2="SELECT * FROM `recipe`";
$result2 = mysqli_query($db, $que2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- for swiper slider  -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- fancy box  -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="css/admin.css">
    <!--darkmode-->
    <!--<link rel="stylesheet" href="light.css">-->
    <link rel="stylesheet" href="dark.css">
</head>

<body class="body-fixed">
    <!-- start of header  -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="index.html">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="main-navigation">
                        
                        <nav class="header-menu">
                            <ul class="menu food-nav-menu">
                                <li><a href="#user-div">Users</a></li>
                                <li><a href="#chef-div">Chef</a></li>
                                <li><a href="#feedback-div">Feedback</a></li>
                                <li><a href="#recipe-div">Recipe</a></li>
                                <li><a href="login.php">logout</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header ends  -->
	<br><br><br><br><br>
	<div class="user-div" id="#user-div">
        <!-- Section for displaying users -->
        <div class="show-users">
            <h2>Show Users</h2>
            <table border="1">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['username'] . "</td>";
                            echo "<td>" . $row['password'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>No users found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- Section for deleting a user -->
        <div class="delete-user">
            <h2>Change User Details</h2>
            <form method="POST" action="admin_op.php">
                
				<label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

				<div class="button-group">
                    <button type="submit" id="insuser" onclick='insuseralt()' name="insuser">Insert User</button>
                    <button type="submit" id="deluser" onclick='deluseralt()'  name="deluser">Delete User</button>
                </div>
			
				<script>
				var user = document.getElementById('username').value; 
                function insuseralt()
                {
                  alert('User '+ user +'Inserted Successfully');
                }
                function deluseralt()
                {
                    alert('User '+ user +'Deleted Successfully');
                }
				</script>
				
            </form>
        </div>
    </div>
	<br>
	<div class="chef-div" id="chef-div">
        <h2>Chef_Details</h2>
        <div class="table-container">
            <table class="chef-table">
                <thead>
                    <tr>
                        <th>Chef_Name</th>
                        <th>Signature_Dish</th>
                        <th>Year</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Loop through the feedback array to display the data
                    foreach ($result3 as $info) {
                        echo "<tr>";
                        echo "<td>{$info['chef_name']}</td>";
                        echo "<td>{$info['special_dish']}</td>";
                        echo "<td>{$info['year']}</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
			
			<div class="chef-div" id="addchef">
				<h2>Add Chef</h2>
				<form method="POST" action="admin_op.php">
					<label for="name">Chef Name:</label>
					<input type="text" id="chefnm" name="chefnm" required>

					<label for="signature_dish">Signature Dish:</label>
					<input type="text" id="chefds" name="chefds" required>

					<label for="years_of_experience">Years of Experience:</label>
					<input type="number" id="year" name="year" required min="0">

					<button type="submit" name="chefadd">Add Chef</button>
				</form>
			</div>
			<br>
			<div class="chef-div" id="delchef">
				<h2>Delete Chef</h2>
				<form method="POST" action="admin_op.php">
					<label for="delete_name">Chef Name:</label>
					<input type="text" id="chefnm" name="chefnm" required>

					<button type="submit" name="chefdel">Delete Chef Dettails</button>
				</form>
    		</div>
        </div>
    </div>
	<br>
	<div class="feedback-div" id="feedback-div">
        <h2>Feedback</h2>
        <div class="table-container">
            <table class="feedback-table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Feedback</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    // Loop through the feedback array to display the data
                    foreach ($result1 as $feedback) {
                        echo "<tr>";
                        echo "<td>{$feedback['username']}</td>";
                        echo "<td>{$feedback['email']}</td>";
                        echo "<td>{$feedback['feedback']}</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
	<br>
	<div class="recipe-div" id="recipe-div">
        <h2>Recipes</h2>
        <table class="recipe-table">
            <thead>
                <tr>
                    <th>Recipe Name</th>
                    <th>Ingredients</th>
                    <th>Method</th>
                </tr>
            </thead>
            <tbody>
                <?php

                // Loop through the recipes array to display data
                foreach ($result2 as $recipe) {
                    echo "<tr>";
                    echo "<td>{$recipe['name']}</td>";
                    echo "<td>{$recipe['ingrendient']}</td>";
                    echo "<td>{$recipe['method']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    <br>
    <div class="recipe-div" id="insrecipe">
        <h2>Insert Recipe</h2>
        <form method="POST" action="admin_op.php">
            <label for="recipe_name">Recipe Name:</label>
            <input type="text" id="recipe_name" name="recipenm" required>

            <label for="ingredients">Ingredients:</label>
            <textarea id="ingredients" name="recipeing" rows="4" required></textarea>

            <label for="method">Method:</label>
            <textarea id="method" name="method" rows="4" required></textarea>

            <button type="submit" name="addrecipe">Add Recipe</button>
        </form>
    </div>
    <br>
    <div class="recipe-div" id="delrecipe">
        <h2>Delete Recipe</h2>
        <form method="POST" action="admin_op.php">
            <label for="delete_name">Recipe Name:</label>
            <input type="text" id="recipenm" name="recipenm" required>

            <button type="submit" name="delrecipe">Delete Recipe</button>
        </form>
    </div>
    <br>
    <div class="recipe-div" id="updrecipe">
        <h2>Update Recipe</h2>
        <form method="POST" action="admin_op.php" >
            <label for="update_name">Recipe Name:</label>
            <input type="text" id="recipenm" name="recipenm" required>

			<h3>Enter Details to Change</h3>
            <label for="new_ingredients">New Ingredients:</label>
            <textarea id="recipeing" name="recipeing" rows="4"></textarea>

            <label for="new_method">New Method:</label>
            <textarea id="method" name="method" rows="4"></textarea>

            <button type="submit" name="updrecipe">Update Recipe</button>
        </form>
    </div>
	</div>
</body>
</html>
