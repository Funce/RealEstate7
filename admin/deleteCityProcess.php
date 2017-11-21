<?php 
	include "../config.php";
	include "../library/functions.php";



	// No id, no go.
	if(!isset($_GET['id']))
	{
		header("Location: index.php");
	}
	

	if(isset($_POST['cancel']))
	{
		header("Location: index.php");
	}

	if(isset($_POST['submit']))
	{
		$city_id = mysqli_real_escape_string($link, $_GET['id']);
		$query = "SELECT p_id, p_c_id FROM tbl_property WHERE p_c_id=$city_id";
		$result = mysqli_query($link, $query);
		while($row = mysqli_fetch_array($result))
		{
			$prop_id = $row['p_id'];
			$query = "DELETE FROM tbl_property WHERE p_c_id=$city_id";
			mysqli_query($link, $query);
			$query = "DELETE FROM tbl_image WHERE i_p_id=$prop_id";
			mysqli_query($link, $query);
		}
		$query = "DELETE from tbl_city WHERE c_id=$city_id";
		mysqli_query($link, $query);
		header("Location: index.php");
	}
	

// Basically we want to go back if they don't want to delete it
	
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
<title>Real Estate 7</title>

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap-social.css">
<!-- Font CSS -->
<link rel="stylesheet" type="text/css" media="screen" href="../css/font-awesome.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/font-awesome.min.css">
<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/tabs.css">

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KJGS4HC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<?php include "../navigation.php"; ?>
	<div class="container">
	<div class="row">
	  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-xs">
      </div>    
		</div>
  </div>
<section>
  <div class="container">
</section>
<hr>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12">
    <form class="well form-horizontal" method="post" enctype="multipart/form-data" action='#'>
	<fieldset>
		<!-- Form Start -->
		<legend>Are you sure you wish to delete this City?</legend> 
		<br>
		<input name="cancel" type="submit" value="No" /> <input name="submit" type="submit" value="Yes" />
		<?php
			$city_id = mysqli_real_escape_string($link, $_GET['id']);
			$query = "SELECT COUNT(*) AS 'num_properties' FROM tbl_property WHERE p_c_id = $city_id";
			$result = mysqli_query($link, $query);
			$row = mysqli_fetch_array($result);
		?>
		<span class="error-message">WARNING: This action will remove <?php echo $row['num_properties'] ?> propert(y)ies also!</span>
	</fieldset>
</form>
	</div> 
  </div>
</div>
    <!-- /.container -->
<hr>
<?php 
	include "../footer.php";
	disconnect();
?>
<!-- jQuery --> 
<script src="../js/jquery-1.11.3.min.js"></script> 
<!-- Bootstrap JS --> -> 
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- Custom JS -->
<script src="../js/style.js"></script>
<script src="../js/tabs.js"></script>
<script>
	//Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();
</script>
</body>
</html>