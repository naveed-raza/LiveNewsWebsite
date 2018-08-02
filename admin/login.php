<?php

session_start();

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

      <title> Admin Login </title>
</head>

<body style='background-image: url("images/background1.jpg");' >


<form action='login.php' method='post'>

<table align='center'  border='4' height='200px' width='500' style='margin-top:200px; background-color:lightblue;'>

 <tr>
	     <td align='center' colspan='2' bgcolor='lightblue'><h2>Admin Login</h2></td>
     </tr>
	 
	 <tr>
	     <td align='right'>User Name:</td>
		 <td><input type='text' name='username'></td>
	 </tr>

	  <tr>
	     <td align='right'>User Password:</td>
		 <td><input type='password' name='password'></td>
	 </tr>
	 
	 <tr>
	     <td align='center' colspan='2'> <input type='submit' name='login' value='Login'></td>
	 </tr>



</table>
</form>

</body>
</html>


<?php

include("includes/database.php");
if(isset($_POST['login'])){
	

    $username = $_SESSION['username'] = mysqli_real_escape_string($mysqli,$_POST['username']);
	$password = mysqli_real_escape_string($mysqli,$_POST['password']);
	$encrypt = md5($password);
	
	
	
	$query = "select * from admin_login where user_name='$username' AND user_password='$password'";
	$run = mysqli_query($mysqli,$query);
	
	if(mysqli_num_rows($run) > 0){
		
		//echo "<script>alert('You are sucessfully logged in.');</script>";
		echo "<script>window.open('index.php','_self')</script>";
		
	}
	
	else
	{
		echo "<script>alert('Sorry wrong username or password');</script>";
	}
}




?>