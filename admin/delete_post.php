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

<div class="row">

   <div class="col-sm-12">


<table  align='center' border='3'style='margin:50px;'>

    <tr>
	    <td align='center' bgcolor='lightblue' colspan='9'><h2>View all posts</h2></td>
	</tr>
	
	<tr>
	    <td align='center' style='font-weight:bold;'> Post no</td>
		<td align='center' style='font-weight:bold;'> Post title</td>
		<td align='center' style='font-weight:bold;'> Post content</td> 
	
	</tr>
	
<?php

include("includes/database.php");

//if(isset($_GET['view'])){
	
	$query = "select * from posts order by 1 DESC";
	$run = mysqli_query($mysqli,$query);
	
	while($row=mysqli_fetch_array($run)){
	
    $id = $row['post_id'];	
	$title = $row['post_title'];
	$content =substr($row['post_content'],0,100);

?>
	
	
	
	<tr>
	    <td align='center'> <?php echo $id; ?></td>
		<td align='center'> <?php echo $title; ?></td>
        <td align='center' style='margin-right:20px, padding-right:20px;'> <?php echo $content; ?></td>  
        <td align='center'><a href='delete.php?del=<?php echo $id; ?>'>Delete <br> <span class = "glyphicon glyphicon-trash" ><span></a></td>  		
	</tr>


<?php 	
}


?>

</table>

  </div>
  
</div>  


</body>
</html>