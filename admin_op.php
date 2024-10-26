<?php

$db=mysqli_connect('localhost:3307','root','','food_recipe');
if(isset($_POST['deluser']))
{
	$unm=$_REQUEST['username'];
	$pass=$_REQUEST['password'];

	$sql="DELETE FROM `login` WHERE username='$unm' and password='$pass'";
	$ans=mysqli_query($db,$sql);

	header('location:admin.php');
}

if(isset($_POST['insuser']))
{
	$unm=$_REQUEST['username'];
	$pass=$_REQUEST['password'];

	$sql="INSERT INTO `login` VALUES ('$unm','$pass')";
	$ans=mysqli_query($db,$sql);
	
	header('location:admin.php');
}

if(isset($_POST['chefadd']))
{
	$chefnm=$_REQUEST['chefnm'];
	$chefds=$_REQUEST['chefds'];
	$year=$_REQUEST['year'];

	$sql="INSERT INTO `chef` VALUES ('$chefnm','$chefds','$year')";
	$ans=mysqli_query($db,$sql);

	header('location:admin.php');
}

if(isset($_POST['chefdel']))
{
	$chefnm=$_REQUEST['chefnm'];

	$sql="DELETE FROM `chef` WHERE chef_name='$chefnm'";
	$ans=mysqli_query($db,$sql);

	header('location:admin.php');
}

if(isset($_POST['addrecipe']))
{
	$recipenm=$_REQUEST['recipenm'];
	$recipeing=$_REQUEST['recipeing'];
	$method=$_REQUEST['method'];

	$sql="INSERT INTO `recipe` VALUES ('$recipenm','$recipeing','$method')";
	$ans=mysqli_query($db,$sql);

	header('location:admin.php');
}

if(isset($_POST['delrecipe']))
{
	$recipenm=$_REQUEST['recipenm'];

	$sql="DELETE FROM `recipe` WHERE name='$recipenm'";
	$ans=mysqli_query($db,$sql);

	header('location:admin.php');
}

if(isset($_POST['updrecipe']))
{
	$recipenm=$_REQUEST['recipenm'];
	$recipeing=$_REQUEST['recipeing'];
	$method=$_REQUEST['method'];

	$sql="UPDATE `recipe` SET `ingrendient`='$recipeing',`method`='$method' WHERE name='$recipenm' ";
	$ans=mysqli_query($db,$sql);

	header('location:admin.php');
}


