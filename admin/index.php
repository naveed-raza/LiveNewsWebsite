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

      <title> Admin Panel </title>
</head>

<body>


<!-- header section -->
<section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.php">Admin Panel</a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
		 <li><a href="index.php?insertPost=insertPost">Add Post</a></li>
          <li><a href="index.php?viewPost=viewPost">View Post</a></li> 
          <li><a href="index.php?deletePost=deletePost">Delete Post</a></li>
          <li><a href="index.php?viewUser=viewUser">View Users</a></li>
          <li><a href="index.php?insertUser=insertUser">Add User</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  
  </section>
<!-- header section --> 



<center style="margin-top:120px;"> 
  <h2>Welcome to the admin panel.</h2>
  <h2> You can manage your contents here .</h2>
  
  <br>
  <h2 style='color:red;'><?php echo @$_GET['user_added']; ?></h2>
  <h2 style='color:red;'><?php echo @$_GET['post_added']; ?></h2>
  <h2 style='color:red;'><?php echo @$_GET['delete_post']; ?></h2>
</center>   

<br><br>


<?php

include("includes/database.php");

if(isset($_GET['viewUser']))
{
	include('view_user.php');
}

?>


<?php

include("includes/database.php");

if(isset($_GET['insertUser']))
{
	include('insert_user.php');
}

?>

<?php

include("includes/database.php");

if(isset($_GET['insertPost']))
{
	include('insert_post.php');
}

?>

<?php

include("includes/database.php");

if(isset($_GET['viewPost']))
{
	include('view_post.php');
}

?>

<?php

include("includes/database.php");

if(isset($_GET['deletePost']))
{
	include('delete_post.php');
}

?>













<!-- footer -->
    <footer class="footer text-center" style="margin-top:150px;">
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