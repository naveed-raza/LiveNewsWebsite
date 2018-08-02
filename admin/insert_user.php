<?php

session_start();

if(!isset($_SESSION['username'])){

 header("location:login.php");
} 

?>

<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/animate.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 


</head>

<body>

<form method='post' action='insert_user.php'>

 <table align='center' border='10px' width='600'>
 
    <tr>
	    <td align='center' colspan='6' bgcolor='lightblue'><h2> Insert new user here. </h2></td>
	</tr>
	
	<tr>
	    <td align='right'>User Name : </td>
		<td><input type='text' name='name'></td>
	</tr>
	
	<tr>
	    <td align='right'>User Password : </td>
		<td><input type='text' name='password'></td>
	</tr>
	
	
	<tr>
	    <td align='center' colspan='6'> <input type='submit' name='submit' value='Add Now'></td>
	</tr>
 
 

 
</table>
</form>



</body>
</html>

<?php

include("includes/database.php");

if(isset($_POST['submit'])){
	
	$name = $_POST['name'];
	$password = $_POST['password'];
	
	
	if($name == '' or $password == '' )
	{
		echo "<script>alert('Any field is empty, please fill all entries.')</script>";
		exit();
	}	
	
	
	
	$query = "insert into admin_login (user_name, user_password) values ('$name','$password')";
	  $error = mysqli_error($mysqli);
		echo $error;	
	if(mysqli_query($mysqli,$query))
	{
	   echo "<script>window.open('index.php?user_added=User has been sucessfully added.','_self')</script>";	
	}
	  $error1 = mysqli_error($mysqli);
		echo $error1;
}



?>
























