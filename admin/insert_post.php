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

<form method='post' action='insert_post.php' enctype='multipart/form-data'>

 <table align='center' border='10px' width='600'>
 
    <tr>
	    <td align='center' colspan='6' bgcolor='lightblue'><h2> Insert new post here. </h2></td>
	</tr>
	
	<tr>
	    <td align='right'>Post Tilte : </td>
		<td><input type='text' name='title'></td>
	</tr>
	
	<tr>
	    <td align='right'>Post Category : </td>
		<td><input type='text' name='category'></td>
	</tr>
	
	<tr>
	    <td align='right'>Post Date : </td>
		<td><input type='text' name='date'></td>
	</tr> 
	
	<tr>
	    <td align='right'>Post Author : </td>
		<td><input type='text' name='author'></td>
	</tr>
	
	<tr>
	    <td align='right'>Post image : </td>
		<td><input type='file' name='image'></td>
	</tr>
	
	<tr>
	    <td align='right'>Post Content : </td>
		<td><textarea name='content' cols='35' rows='20'></textarea></td>
	</tr>
	
	<tr>
	    <td align='center' colspan='6'> <input type='submit' name='submit' value='Post Now'></td>
	</tr>
 
 

 
</table>
</form>
</body>
</html>

<?php

include("includes/database.php");

if(isset($_POST['submit'])){
	
	$title = $_POST['title'];
	$category = $_POST['category'];
	$date  = date('Y/m/d');
	$author = $_POST['author'];
    $image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp = $_FILES['image']['tmp_name'];
	$content = $_POST['content'];
	
	if($title == '' or $author == '' or $content == '' or $category == '')
	{
		echo "<script>alert('Any field is empty, please fill all entries.')</script>";
		exit();
	}	
	
	if($image_type == 'image/jpeg' or $image_type == 'image/png' or $image_type == 'image/gif')
	{
		if($image_size < 100000)
		{
			move_uploaded_file($image_tmp,"images/$image_name");
		}
		else 
		{
			echo "<script>alert('Sorry the image selected is larger then 75kb.')</script>";
		}	
		
	}
	
	else
	{
		echo "<script>alert('Sorry the image selected is of invalid type.')</script>";
	}
	
	$query = "insert into posts (post_title, post_category, post_date, post_author, post_image, post_content) values ('$title', '$category','$date','$author','$image_name','$content')";
	  $error = mysqli_error($mysqli);
		echo $error;	
	if(mysqli_query($mysqli,$query))
	{
	   echo "<script>window.open('index.php?post_added=Post has been sucessfully added.','_self')</script>";	
	}
	  $error1 = mysqli_error($mysqli);
		echo $error1;
}



?>