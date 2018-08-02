<!-- Cookies -->

<?php

$cookie_name = 'user';
$cookie_value = 'hello user';

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
//setcookie("name", "John Watkin", time()+3600, "/","", 0);
//setcookie("age", "36", time()+3600, "/", "",  0);


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Latest compiled and minified JavaScript -->


<script src="js/jquery-3.2.1.js"> </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>

<script src="js/scripts.js"></script>


<!-- JS FILES --> 

 
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


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">







<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />


<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/animate.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
<title>Bold News</title>

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

.pop-outer{
background-color: rgba(0,0,0,0.5);
position : fixed;
top: 0;
left: 0;
width:100%;
height:100%;
}

.pop-inner{
background-color : #fff;
width : 450px;
height : 350px;
padding : 25px;
margin : 14% auto;
}



</style>

<script>

/*
function bigImg(x) {
    x.style.height = "400px";
    x.style.width = "350px";
	
}

function normalImg(x) {
    x.style.height = "200px";
    x.style.width = "230px";
    
	}

*/
</script>


</head>

<body >

<!-- Cookies -->

<?php

if(!isset($_COOKIE[$cookie_name]) ) {
	
	echo "<script> alert( 'Cookie named   $cookie_name   is not set.') </script>";
}

else
{
	echo "<script> alert(' Cookie  $cookie_name  is set and cookie value is  $_COOKIE[$cookie_name]') </script>";
	//echo "Cookie  ". $cookie_name . "is set <br>";
	//echo "Cookie value is ". $_COOKIE[$cookie_name];
}



?>



<!-- navigation bar -->

 <section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.php">Bold News</a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
		                    
							<li ><a href="#latest">Latest</a></li>
							<li ><a href="#pakistan">Pakistan</a></li>
							<li ><a href="#world">World</a></li>
							<li ><a href="#sports">Sports</a></li>
							<li ><a href="#entertainment">Entertainment</a></li>
							<li ><a href="#business">Business</a></li>
							<li ><a href="#health">Health</a></li>
							<li ><a href="#amazing">Amazing</a></li>
							<li ><a href="admin/sign_up.php">Admin Panel</a></li> 
						<!--	  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                      Assignment<span class="caret"></span></a>

                                    <ul class="dropdown-menu" style="background-color:grey;">
                                        <li><a href="model1.html">Use Case Diagram</a></li>
                                        <li><a href="model2.html">Activity Diagram</a></li>
					       			    <li><a href="model3.html">UML Class Diagram</a></li>
			 						     <li><a href="model4.html">Hypertext structure model</a></li>
                                                       
                                     </ul>
									 
									 
									
									 
									 <select name="assignment" onchange="location = this.value;" width='10px'>
										<option value="model1.html">Use Case Diagram</option>
										<option value="model2.html">Activity Diagram</option>
										<option value="model3.html">UML Class Diagram</option>
										<option value="model4.html">Hypertext </option>
									</select>
-->

		 
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  
  </section>
							  
          
<!-- /navigation bar -->



<div class='container'  style='margin-top:200px;'>

<div class="row">
    <div class="col-sm-6">
	
	
<?php

include("includes/database.php");

$category="Latest";

$query = "select * from posts where post_category='$category' LIMIT 0,1";

$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
$image = $row['post_image'];
	
?>							 
       
	    <div class="relative">
            <img src='admin/images/<?php echo $image; ?> ' height="400" width='540px' style=' margin-bottom:10px;'>
            <a href='extended_post.php?id=<?php echo $id;?> '><p class="absolute-text" style='margin-top:30px;' ><?php echo $title; ?></p></a> 
         </div>

        <hr>
		
				 
				
<?php
}
?>				 
		
	
<?php


$category="Pakistan";

$query = "select * from posts where post_category='$category' LIMIT 0,1";

$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
$image = $row['post_image'];
	
?>				
             
        <img src='admin/images/<?php echo $image; ?> '  width='130px' height='80px'  align='left' style='margin-left:30px;'>				 
        <a href='extended_post.php?id=<?php echo $id;?> '><p style="font-color:black; font-size:15px; margin-left:7px; align:right;"><?php echo $title; ?></p></a> 
				 

				 
				
<?php
}
?>		
	         

	</div>
	
	
	<div class='col-sm-3'>
	
   <!-- Slider -->
	<section id="banner">	
        <div id="main-slider" class="flexslider" height='400px'>
            <ul class="slides">
              <li class="relative">
                <img src="slider1.jpg" alt="" style='height:300px;' />
				<!--<a href="#"><p class="absolute-text">Hey I am text on an Image.</p></a> -->
                <div class="flex-caption">
                     
					 
                </div>
              </li>
              <li class="relative">
                <img src="slider2.jpg" alt="" style='height:300px;' />
				<!--<a href="#"><p class="absolute-text">Hey I am text on an Image.</p></a> -->
                <div class="flex-caption">
                    
					 
                </div>
              </li>
			  
			    <li class="relative">
                <img src="slider3.jpg" alt="" style='height:300px;' />
				<!--<a href="#"><p class="absolute-text">Hey I am text on an Image.</p></a> -->
                <div class="flex-caption">
                    
					 
                </div>
              </li>
			  
			    <li class="relative">
                <img src="slider4.jpg" alt="" style='height:300px;' />
				<!-- <a href="#"><p class="absolute-text">Hey I am text on an Image.</p></a>  -->
                <div class="flex-caption">
                    
					 
                </div>
              </li>
            </ul>
        </div>
	</section>	
	<!-- end slider -->
	
<br>	




<?php

include("includes/database.php");

$category="World";

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
?>				 
				 	
	
	</div>
	
	
	<div class="col-sm-3">
	
		<!-- advertisement -->
	
	    <img onmouseover="this.src='image1.jpg'" onmouseout="this.src='image.jpg'" src='image.jpg' height='300px' width='250px' style='margin-bottom:20px;'> 
        <br> <br>

<?php


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
?>			
	
	
	    </div>
	</div>
 	
	
</div>	

<br><br>
<hr class='hr_color'>
<br>



<!-- Top stories -->

<div class='container'>

     <h4 style="font-weight:bold;"> TOP STORIES: </h4>

	<div class='row'>
	
<?php 



$query = "select * from posts order by rand() LIMIT 0,4";
$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
$image = $row['post_image'];
	
?>

	    <div class='col-sm-3'>
 
             <a href='extended_post.php?id=<?php echo $id;?> '>
            <img src='admin/images/<?php echo $image; ?> '  height="400" width='230px'>
			 <p style="font-color:black; font-size:20px; font-weight:bold; margin-top:6px;"><?php echo $title; ?> </p></a>
                
        </div>	

<?php
}

?>		
		
	  
	</div>  

</div>

<!-- /Top stories -->


<br><br>
<hr class='hr_color'>
<br>


<div class="container">

    <div class="row">  

        <div class="col-sm-3">   
  
            <h4 style="font-weight:bold;" id='latest'>Latest </h4>
			
<?php

$category="Latest";

$query = "select * from posts where post_category='$category' LIMIT 0,1";

$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
$image = $row['post_image'];
	
?>				
      


	  
        <img class='open'  src='admin/images/<?php echo $image; ?> '  height="200px" width='230px' >				 
        <a  href='extended_post.php?id=<?php echo $id;?> '><p style="font-color:black; font-size:15px;" ><?php echo $title; ?></p></a> 			 
     	<hr>
		
		 <div style="display:none;" class='pop-outer'>
        <div class='pop-inner'> 
	    <button class='close' style='align:right; ' > X </button>
             <img src='admin/images/<?php echo $image; ?> ' width='400px' height='300px'>		
    </div>
  </div>   
				 
				
<?php
}
?>				 
				 
<?php

$category="Latest";

$query = "select * from posts where post_category='$category' LIMIT 1,4";

$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
		
?>				 
				 
	<a  href='extended_post.php?id=<?php echo $id;?> '><p style="font-color:black; font-size:15px;"><?php echo $title; ?></p></a> 
				 
	<hr>
				
<?php
}
?>
				 
				 
        </div>
		
		
		<div class="col-sm-3">   
  
            <h4 style="font-weight:bold;" id='pakistan'>Pakistan </h4>
 
 <?php

$category="Pakistan";

$query = "select * from posts where post_category='$category' LIMIT 0,1";

$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
$image = $row['post_image'];
	
?>				
             
        <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src='admin/images/<?php echo $image; ?> '  height="200" width='230px'>				 
        <a href='extended_post.php?id=<?php echo $id;?> '><p style="font-color:black; font-size:15px;"><?php echo $title; ?></p></a> 
				 
     	<hr>
		
	
		
	 
				
<?php
}
?>				 
				 
<?php

$category="Pakistan";

$query = "select * from posts where post_category='$category' LIMIT 1,4";

$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
		
?>				 
				 
	<a href='extended_post.php?id=<?php echo $id;?> '><p style="font-color:black; font-size:15px;"><?php echo $title; ?></p></a> 
				 
	<hr>
				
<?php
}
?>
            	

        </div>

		
		<div class="col-sm-3">   
  
            <h4 style="font-weight:bold;" id='world'>World </h4>
             
 <?php

$category="World";

$query = "select * from posts where post_category='$category' LIMIT 0,1";

$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
$image = $row['post_image'];
	
?>				
             
        <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src='admin/images/<?php echo $image; ?> '  height="200" width='230px'>				 
        <a href='extended_post.php?id=<?php echo $id;?> '><p style="font-color:black; font-size:15px;"><?php echo $title; ?></p></a> 
				 
     	<hr>
		
		 
				
<?php
}
?>				 
				 
<?php

$category="World";

$query = "select * from posts where post_category='$category' LIMIT 1,4";

$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
		
?>				 
				 
	<a href='extended_post.php?id=<?php echo $id;?> '><p style="font-color:black; font-size:15px;"><?php echo $title; ?></p></a> 
				 
	<hr>
				
<?php
}
?>           	

        </div>

		
		<div class="col-sm-3">   
  
            <h4 style="font-weight:bold;" id='sports'>Sports </h4>
             
 <?php

$category="Sports";

$query = "select * from posts where post_category='$category' LIMIT 0,1";

$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
$image = $row['post_image'];
	
?>				
             
        <img  onmouseover="bigImg(this)" onmouseout="normalImg(this)" src='admin/images/<?php echo $image; ?> '  height="200" width='230px'>				 
        <a href='extended_post.php?id=<?php echo $id;?> '><p style="font-color:black; font-size:15px;"><?php echo $title; ?></p></a> 
				 
     	<hr>
				
			
<?php
}
?>				 
				 
<?php

$category="Sports";

$query = "select * from posts where post_category='$category' LIMIT 1,4";

$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
		
?>				 
				 
	<a href='extended_post.php?id=<?php echo $id;?> '><p style="font-color:black; font-size:15px;"><?php echo $title; ?></p></a> 
				 
	<hr>
				
<?php
}
?>           	 

        </div>
    
	</div>
	
</div>

<br><br>

<div class='container'>	
		
	<div class='row'>	
		
		<div class="col-sm-3">   
  
            <h4 style="font-weight:bold;" id='entertainment'>Entertainment </h4>
             
<?php

$category="Entertainment";

$query = "select * from posts where post_category='$category' LIMIT 0,1";

$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
$image = $row['post_image'];
	
?>				
             
        <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src='admin/images/<?php echo $image; ?> '  height="200" width='230px'>				 
        <a href='extended_post.php?id=<?php echo $id;?> '><p style="font-color:black; font-size:15px;"><?php echo $title; ?></p></a> 
				 
     	<hr>
				 
				
<?php
}
?>				 
				 
<?php

$category="Entertainment";

$query = "select * from posts where post_category='$category' LIMIT 1,4";

$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
		
?>				 
				 
	<a href='extended_post.php?id=<?php echo $id;?> '><p style="font-color:black; font-size:15px;"><?php echo $title; ?></p></a> 
				 
	<hr>
				
<?php
}
?>            	
				
        </div>

		
		<div class="col-sm-3">   
  
            <h4 style="font-weight:bold;" id='business'>Business </h4>
             
 <?php

$category="Business";

$query = "select * from posts where post_category='$category' LIMIT 0,1";

$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
$image = $row['post_image'];
	
?>				
             
        <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src='admin/images/<?php echo $image; ?> '  height="200" width='230px'>				 
        <a href='extended_post.php?id=<?php echo $id;?> '><p style="font-color:black; font-size:15px;"><?php echo $title; ?></p></a> 
				 
     	<hr>
				 
				
<?php
}
?>				 
				 
<?php

$category="Business";

$query = "select * from posts where post_category='$category' LIMIT 1,4";

$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
		
?>				 
				 
	<a href='extended_post.php?id=<?php echo $id;?> '><p style="font-color:black; font-size:15px;"><?php echo $title; ?></p></a> 
				 
	<hr>
				
<?php
}
?>          	 

        </div>

		
		<div class="col-sm-3">   
  
            <h4 style="font-weight:bold;" id='health'>Health </h4>
             
<?php

$category="Health";

$query = "select * from posts where post_category='$category' LIMIT 0,1";

$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
$image = $row['post_image'];
	
?>				
             
        <img onmouseover="bigImg(this)" onmouseout="normalImg(this)"src='admin/images/<?php echo $image; ?> '  height="200" width='230px'>				 
        <a href='extended_post.php?id=<?php echo $id;?> '><p style="font-color:black; font-size:15px;"><?php echo $title; ?></p></a> 
				 
     	<hr>
				 
				
<?php
}
?>				 
				 
<?php

$category="Health";

$query = "select * from posts where post_category='$category' LIMIT 1,4";

$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
		
?>				 
				 
	<a href='extended_post.php?id=<?php echo $id;?> '><p style="font-color:black; font-size:15px;"><?php echo $title; ?></p></a> 
				 
	<hr>
				
<?php
}
?>

        </div>

		
		
		<div class="col-sm-3">   
  
           <h4 style="font-weight:bold;" id='amazing'>Amazing </h4>
             
<?php

$category="Amazing";

$query = "select * from posts where post_category='$category' LIMIT 0,1";

$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
$image = $row['post_image'];
	
?>				
             
        <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src='admin/images/<?php echo $image; ?> '  height="200" width='230px'>				 
        <a href='extended_post.php?id=<?php echo $id;?> '><p style="font-color:black; font-size:15px;"><?php echo $title; ?></p></a> 
				 
     	<hr>
				 
				
<?php
}
?>				 
				 
<?php

$category="Amazing";

$query = "select * from posts where post_category='$category' LIMIT 1,4";

$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
		
?>				 
				 
	<a href='extended_post.php?id=<?php echo $id;?> '><p style="font-color:black; font-size:15px;"><?php echo $title; ?></p></a> 
				 
	<hr>
				
<?php
}
?>            	 

        </div>

    </div>

</div>






<!-- footer -->

    <footer class="footer text-center" style="margin-top:50px;">
        <div class="footer-top">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 text-center">
                    <div class="widget">
                        <h4 class="widget-title">Bold News</h4>
                        <address >29c, Khayaban-e-Shahbaz<br>Phase 6, DHA, Karachi</address>
                        <div class="social-list">
                            <a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true" ></i></a>
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </div>
                        <p class="copyright clear-float">
                            © Techonologix Theme. All Rights Reserved
                            <div class="credits">
                                <!-- 
                                    All the links in the footer should remain intact. 
                                    You can delete the links only if you purchased the pro version.
                                    Licensing information: https://bootstrapmade.com/license/
                                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Delicious
                                -->
                                Designed by Naveed Enterprise</a>
								 
 
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>		
    </footer>
    <!-- / footer -->










     
</body>
</html>
