<?php
	include "config.php";
	include "library/functions.php";

	if (isset($_SESSION['user'])) //Can't login if already logged in
	{
		header("Location: index.php");
	}
	$error = "";
	// SO they're not logged in, verify they have submitted the form
	if(isset($_POST['email']))
	{
		// If they have set that, then we need to check if any fields are empty
		if($_POST['email'] == "" or $_POST['password'] == "")
		{
			$error = "You must complete all fields.";
		}
		
		// Now we attempt to login, the login function will check and create the session
		if (!login($_POST['email'], $_POST['password']))
		{
			$error = "Incorrect email and password combination";
		}
		else
		{
			header("Location: index.php");
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KJGS4HC');</script>
<!-- End Google Tag Manager -->
<title>Real Estate 7 - Login</title>

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-social.css">
<!-- Font CSS -->
<link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">
<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KJGS4HC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<?php include "navigation.php"; ?>
	<div class="container">
	<div class="row">
	  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-xs">
		<?php include "navigation_main.php"; ?>
      </div>    
    </div>
    <hr>
  </div>
<section>
	<div class="responsive"> 
  <div class="container">
</section>
<hr>
<div class="container">
					  
	<div class="row">
	<div class="col-lg-2"> </div>

	<div class="col-lg-6">
	<h3>Login</h3>
	<form method="post" action="#">
  <strong>Email:</strong></di><br>
  <input type="text" name="email" value=""><br>
  <strong>Password:</strong></di><br>
  <input type="text" name="password" value=""><br><br>
  <input type="submit" value="Login"><p class="error-message"><?php echo $error;?></p>
</form>
	</div>
  </div>
 </div>
</div>
<hr>
<?php 
	include "footer.php";
	disconnect();
?>
<!-- jQuery --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Bootstrap JS --> -> 
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom JS -->
<script src="js/style.js"></script>
</body>
</html>