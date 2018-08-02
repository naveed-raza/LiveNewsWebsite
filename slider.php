<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
<title>Geo News</title>

<style type="text/css">

.relative{position:relative; width:500px;}
.absolute-text{position:absolute; bottom:0; font-size:24px; font-family:"arial"; color:white; font-weight:bold;
 width:100%; text-align:center;}
.absolute-text a{font-size:10px; color:#b92b27;}

.hr_color {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid blue;
    margin: 1em 0;
    padding: 0; 
}

	
	  


</style>

</head>

<body >


<?php
/*
include('includes/database.php');

$category="Business";

$query = "select * from posts where post_category='$category' LIMIT 2,4";

$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
$image = $row['post_image'];
	
?>				
             
        <img src='admin/images/<?php echo $image; ?> '  width='70px' height='80px'  align='left'>				 
        <a href='extended_post.php?id=<?php echo $id;?> '><p style="font-color:black; font-size:15px; margin-left:7px; align:right;"><?php echo $title; ?></p></a> 
				 
     	<hr>
				 
				
<?php
}
*/
?>	

<?php
/*
include('includes/database.php');
$query = "SELECT * FROM posts";
$result = mysqli_query($mysqli,$query);
foreach ($result as $image) { ?>
<img  src='admin/images/<?php echo $image; ?> '  width='70px' height='80px' />
<?php } */ ?>

<?php 
include('includes/database.php');
$query = "SELECT * FROM posts";
$result = mysqli_query($mysqli,$query);

$images = array();
while ($row = mysqli_fetch_assoc($result)) {
  $images[] = $row['post_image'];
}

foreach ($images as $image) {
  echo '<img src="data:admin/images/jpeg;base64,'. base64_encode($image) .'" />';
}

?>



   <!-- Slider -->
	<section id="banner">	
        <div id="main-slider" class="flexslider" height='400px'>
            <ul class="slides">
              <li class="relative">
                <img src="iranian.jpg" alt="" style='height:300px;' />
				<a href="#"><p class="absolute-text">Hey I am text on an Image.</p></a> 
                <div class="flex-caption">
                     
					 
                </div>
              
			  
			  </li>
              <li class="relative">
                <img src="download.png" alt="" style='height:300px;' />
				<a href="#"><p class="absolute-text">Hey I am text on an Image.</p></a> 
                <div class="flex-caption">
                    
					 
                </div>
              </li>
            </ul>
        </div>
	</section>	
	<!-- end slider -->
	
<br>



















<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script>  
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script> 
<script type="text/javascript" src="js/jquery.devrama.slider.min-0.9.4.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
			$('.slider-banner').DrSlider({
				'transition': 'fade',
				showNavigation: false,
				progressColor: "#000000"
			});
		});
	</script> 	  



     
</body>
</html>
