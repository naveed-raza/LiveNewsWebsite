<?php

include("includes/database.php");

$delete_id = $_GET['del'];

$query = "delete from posts where post_id='$delete_id'";

if(mysqli_query($mysqli,$query))
{
	echo "<script>window.open('index.php?delete_post=The post has been deleted.','_self')</script>";
}

?>

