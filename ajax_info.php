<html>
<head>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>


<br>
<table width='500' align='center' border='3'>

    <tr>
	    <td align='center' bgcolor='lightblue' colspan='3'><h4>DETAILS</h4></td>
	</tr>
	
	<tr>
	    <td align='center' style='font-weight:bold;'> Category</td>
		<td align='center' style='font-weight:bold;'> Date</td>
		<td align='center' style='font-weight:bold;'> Author</td>
	    
	</tr>
	
<?php

include("includes/database.php");

//if(isset($_GET['view'])){
$id = intval($_GET['id']);	
$query = "select * from posts where post_id='$id'";
$run = mysqli_query($mysqli,$query);

while($row=mysqli_fetch_array($run))
{
	$title = $row['post_title'];
	$category = $row['post_category'];
	$date = $row['post_date'];
	$author = $row['post_author'];
	$image = $row['post_image'];
	$content =$row['post_content'];
	

?>	
	
	
	
	<tr>
	
         <td align='center'> <?php echo $category; ?></td>
	    <td align='center'> <?php echo $date; ?></td>
		<td align='center'> <?php echo $author; ?></td>
      
	</tr>


<?php 	
}
echo $id;
?>

</table>


</body>
</html>