<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/jquery-3.2.1.js"> </script>
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
<title>Bold News</title>

<meta property="og:url"                content="<?php echo $actual_link; ?>" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?php echo $title; ?>" />
<meta property="og:description"        content="<?php echo $content; ?>" />
<meta property="og:image"              content="<?php echo $image; ?>" />


<script>
$(document).ready(function(){
	
	$("#panel").hide();
	
	$("#head").on("click",function(){
        $(this).hide();
		$("#panel").show();
    });

});

function loadDoc(x) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
	  this.responseText;
      //this.getAllResponseHeaders();
    }
  };
  //xhttp.open("GET", "ajax_info.txt", true);
  xhttp.open("GET", "ajax_info.php?id="+x,true);
  xhttp.send();
}
</script>


</script>

</head>

<body>


<!-- navigation bar -->

 <section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.php">Bold News</a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
		                    
							<li ><a href="index.php#latest">Latest</a></li>
							<li ><a href="index.php#pakistan">Pakistan</a></li>
							<li ><a href="index.php#world">World</a></li>
							<li ><a href="index.php#sports">Sports</a></li>
							<li ><a href="index.php#entertainment">Entertainment</a></li>
							<li ><a href="index.php#business">Business</a></li>
							<li ><a href="index.php#health">Health</a></li>
							<li ><a href="index.php#amazing">Amazing</a></li>
							<li ><a href="admin/sign_up.php">Admin Panel</a></li> 
							  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                      Assignment<span class="caret"></span></a>

                                    <ul class="dropdown-menu" style="background-color:grey;">
                                        <li><a href="model1.html">Use Case Diagram</a></li>
                                        <li><a href="model2.html">Activity Diagram</a></li>
					       			    <li><a href="model3.html">UML Class Diagram</a></li>
			 						     <li><a href="model4.html">Hypertext structure model</a></li>
                                                       
                                     </ul>
		 
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  
  </section>
							  
          
<!-- /navigation bar -->


<div class='container' style='margin-top:160px;'>

    <div class='row'>
  
        <div class='col-sm-3'>
		

		
<?php

include("includes/database.php");

$page_id = $_GET['id'];
$query = "select * from posts where post_id='$page_id'";
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
			
		
		    <h3 style="font-weight:bold;" align='center'> <?php echo $category; ?></h3>
			<hr>
		    <h4 style="font-weight:bold;" align='center'> <?php echo $date; ?></h4>
			<hr>
			<h4 style="font-weight:bold;" align='center'> <?php echo $author; ?></h4>

<?php
}
?>	
			<br><br><br>
			
			<div class="panel panel-success">

                <div class="panel-heading">
			
                     More :
                                
		        </div> 

					
<?php 



$query = "select * from posts order by rand() LIMIT 0,6";
$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
$image = $row['post_image'];
	
?>

	        <div class="panel-body bg-success">
 
             <a href='extended_post.php?id=<?php echo $id;?> '>
			  <p style="font-color:black; font-size:13px;">
            <img src='admin/images/<?php echo $image; ?> 'class="img-responsive img-thumbnail "  width="70px" height='60px' align="left" vspace="3" hspace="3">
			 <?php echo $title; ?> </p></a>
                
     	    </div>

<?php
}

?>	
				
				
  			</div>

		
		    	  
        </div>

        <div class='col-sm-6'>	
		
<?php

include("includes/database.php");

$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$page_id = $_GET['id'];
$query = "select * from posts where post_id='$page_id'";
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
		
		    <h2 style="font-weight:bold;"><?php echo $title; ?></h2>
			
			<img src='admin/images/<?php echo $image; ?> ' height='400px' width='540px' style='margin-top:25px;'>
			
			<p style='margin-top:25px; size:50;'>
             <?php echo $content; ?>
			 
            </p>
			
		
			
			
			
			
			<a class="btn" target="_blank" href="http://www.facebook.com/sharer.php?s=100&amp;p[title]=
								<?php echo $title;?>&amp;p[summary]=<?php echo $content; ?>
								&amp;p[url]=<?php echo $actual_link; ?>&amp;p[images][0]=<?php echo $image;
								?>">share on facebook</a>
								
	<!-- AJAX getting post details -->	

        <div id='demo'>	
			<a class="btn" style='text-align:right;' 
			onclick="loadDoc(<?php echo $page_id; ?>)" > Details </a>					
		</div>	
			<h2> Comments </h2>
			
<?php
}
?>		


			
<!-- showing comments -->	

<?php

include("includes/database.php");
$comm_id = $_GET['id'];
$query = "select * from comments where comment_id='$comm_id' AND status = 'yes' ";
$run = mysqli_query($mysqli,$query);

while($row=mysqli_fetch_array($run))
{
	$name = $row['name'];
	$comment = $row['comment'];

	

?>

	
			
			
<div style="border : 1px solid black; margin-top:10px; -webkit-border-radius: 5px 5px 5px 5px;">

<p style='padding:5px;'>
<?php echo $comment; ?>
</p>
<p align='right' style='padding:5px;'>
<?php echo $name; ?>
</p>

</div>



<?php

}

?>

<div style="background-color:lightgrey; padding:5px; -webkit-border-radius: 5px 5px 5px 5px; margin-top:10px;" id='head'> 
			Add a public comment </div>

<div id='panel'>
			     <form method='post'>
				   
			        <input type='text' name='name' placeholder='name' size='60'><br><br>
                    <input type='email' name='email' placeholder='email' size='60'><br><br>
                     <textarea cols='60' rows='4' name='comment' placeholder='Add a comment here'></textarea><br>
                    <input type='submit' value='comment' name='submit' >
                 
				</form>	
			</div>


 </div>  
	
						
<!-- comment section taking response -->					
				
<?php



include("includes/database.php");

 $comment_id =$_GET['id'];
 $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(isset($_POST['submit'])){
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];
	
	$run = mysqli_query($mysqli,$query);
	
	if($name == '' or $email == '' or $comment == '' )
	{
		echo "<script>alert('Any field is empty, please fill all entries.')</script>";
		exit();
	}	
	
	$comment_query = "insert into comments (name, email, comment, status, comment_id) values ('$name', '$email', '$comment', 'yes', '$comment_id')";
	$run = mysqli_query($mysqli,$comment_query);
	
	if(mysqli_query($mysqli,$comment_query))
	{
		echo "<script>alert('Your comment is waiting for moderation')</script>";	
		echo "<script>window.open('$actual_link','_self')</script>";
	   
	}
	
	 // $error1 = mysqli_error($mysqli);
		//echo $error1;
}
?>





		
		
		<div class='col-sm-3'>
		
	<!-- advertisement -->
		
		    <img onmouseover="this.src='image1.jpg'" onmouseout="this.src='image.jpg'" src='image.jpg' height='300px' width='250px' style='margin-bottom:20px;'>

            <br><br>
            <div class="panel panel-primary">

                <div class="panel-heading">
			
                     Latest News
                                
		        </div> 
				
					
<?php 

$category = "Latest";

$query = "select * from posts where post_category='$category' LIMIT 0,4";
$run = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($run)){
	
$id = $row['post_id'];
$title = $row['post_title'];
$image = $row['post_image'];
	
?>

	        <div class="panel-body bg-info">
 
             <a href='extended_post.php?id=<?php echo $id;?> '>
			  <p style="font-color:black; font-size:13px;">
            <img src='admin/images/<?php echo $image; ?> 'class="img-responsive img-thumbnail "  width="70px" height='60px' align="left" vspace="3" hspace="3">
			 <?php echo $title; ?> </p></a>
                
     	    </div>

<?php
}

?>					      
  
  			</div>

      

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
                        <address>29c, Khayaban-e-Shahbaz<br>Phase 6, DHA, Karachi</address>
                        <div class="social-list">
                            <a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
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