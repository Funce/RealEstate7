 <?php
	include "../config.php";
	include "../library/functions.php";
	include "../library/image-creation.php";
	// check if logged in
	if(!isset($_SESSION['user']))
	{
		header("Location: ../login.php");
	}
	else
	{
		if($_SESSION['user']['role'] != ADMIN_LEVEL)
		{
			header("Location: ../login.php");
		}
	}
	$listing_error = "";
	// Add Listing form
	if(isset($_POST['type']))
	{
		
		//Check if any fields are empty, and that at least one photo is entered
		
		if($_POST['type'] == 0 or $_POST['listing-title'] == "" or $_POST['details'] == "" or $_POST['price'] == "")
		{
			$listing_error = "Please make sure to enter all fields";
		}
		else if(isset($_FILES['photo']))
		{  
			$listing_error = "Please upload a photo";
		}
		if(!file_exists($_FILES['photo']['tmp_name']) || !is_uploaded_file($_FILES['photo']['tmp_name']))
		{

			$listing_error = "Please enter a number in the price field";
		}
		// All checks succeeded for addListing, lets add it
		else
		{
			$region = $_POST['type'];
			$title = mysqli_real_escape_string($link, $_POST['listing-title']);
			$details = mysqli_real_escape_string($link, $_POST['details']);
			$price = mysqli_real_escape_string($link, $_POST['price']);
			//Image file
			$imgName = $_FILES['photo']['name'];
			$tmpName = $_FILES['photo']['tmp_name'];
			$ext = strrchr($imgName, ".");
			$newName = md5(rand()*time()).$ext;
			$imgPath = IMG_DIR . $newName;
			createThumbnail($tmpName, $imgPath, THUMBNAIL_WIDTH);
			
			// Add listing to properties
			$query = "INSERT INTO tbl_property (p_title, p_address, p_c_id, p_price) VALUES ('$title', '$details', '$region', '$price')";
			mysqli_query($link, $query); // execute!
			$last_id = mysqli_insert_id($link);
			
			//Separate query for images due to different tables
			$query = "INSERT INTO tbl_image (i_name, i_p_id) VALUES ('$newName', '$last_id')";
			mysqli_query($link, $query);
			?>
			<form class="well form-horizontal" method="post" enctype="multipart/form-data" action='#'>
				<fieldset>
					<!-- Form Start -->
					<legend>Listing added Successfully</legend>     
				</fieldset>
			</form>
			<?php
		}
	} // End of AddListing Check
	// Add City Check
	$city_error = "";
	if(isset($_POST['city_name']))
	{
		//Validate it, check if empty
		if($_POST['city_name'] == "")
		{
			$city_error = "Please enter a city";
		}
		else
		{
			$city_name = mysqli_real_escape_string($link, $_POST['city_name']);
			$query = "INSERT INTO tbl_city (c_name) VALUES ('$city_name')";
			mysqli_query($link, $query);
			?>
			<form class="well form-horizontal" method="post" enctype="multipart/form-data" action='#'>
				<fieldset>
					<!-- Form Start -->
					<legend>City added Successfully</legend>     
				</fieldset>
			</form>
			<?php
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
		<div class="tab">
			<button id="defaultOpen" class="tablinks" onclick="openTab(event, 'addListing')">Add Listing</button>
			<button class="tablinks" onclick="openTab(event, 'editListing')">Edit/Remove Listings</button>
			<button class="tablinks" onclick="openTab(event, 'addCity')">Add City</button>
			<button class="tablinks" onclick="openTab(event, 'editCity')">Edit/Remove City</button>
		</div> <!--Tabs-->
		<div id="addListing" class="tabcontent">
			<?php include "addListing.php"; ?>
		</div> <!--Tab addListing-->
		<div id="editListing" class="tabcontent">
			<?php include "editListing.php"; ?>
		</div> <!--Tab editListing-->
		<div id="addCity" class="tabcontent">
			<?php include "addCity.php"; ?>
		</div><!--Tab addCity-->
		<div id="editCity" class="tabcontent">
			<?php include "editCity.php"; ?>
		</div><!--Tab editCity-->
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