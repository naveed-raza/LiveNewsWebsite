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



<table width='500' align='center' border='3'>

    <tr>
	    <td align='center' bgcolor='lightblue' colspan='9'><h2>View all Users</h2></td>
	</tr>
	
	<tr>
	    <td align='center' style='font-weight:bold;'> User Name</td>
		<td align='center' style='font-weight:bold;'> User Password</td>
	    
	</tr>
	
<?php

include("includes/database.php");

//if(isset($_GET['view'])){
	
	$query = "select * from admin_login order by 1 DESC";
	$run = mysqli_query($mysqli,$query);
	
	while($row=mysqli_fetch_array($run)){
	
    $name = $row['user_name'];	
	$password = $row['user_password'];
	

?>
	
	
	
	<tr>
	    <td align='center'> <?php echo $name; ?></td>
		<td align='center'> <?php echo $password; ?></td>
      
	</tr>


<?php 	
}


?>

</table>


</body>
</html>