<?php 
	include "../config.php";
	include "../library/functions.php";
	include "../library/image-creation.php";


	// No id, no go.
	if(!isset($_GET['id']))
	{
		header("Location: index.php");
	}
	if(isset($_POST['cancel']))
	{
		header("Location: index.php");
	}
	$property_id = mysqli_real_escape_string($link, $_GET['id']);
	$query = "SELECT * FROM tbl_property JOIN tbl_image ON p_id=i_p_id JOIN tbl_city ON p_c_id=c_id WHERE p_id=$property_id";
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_array($result);

	//Data to pass onto form
	$region = $row['c_id'];
	$title = $row['p_title'];
	$details = $row['p_address'];
	$price = $row['p_price'];
	$img_name = $row['i_name'];
	
	$listing_error = "";
	if(isset($_POST['submit']))
	{
		$region = $_POST['type'];
		$title = mysqli_real_escape_string($link, $_POST['listing-title']);
		$details = mysqli_real_escape_string($link, $_POST['details']);
		$price = mysqli_real_escape_string($link, $_POST['price']);
		//Check if any fields are empty, and that at least one photo is entered
		if($_POST['type'] == 0 or $_POST['listing-title'] == "" or $_POST['details'] == "" or $_POST['price'] == "")
		{
			$listing_error = "Please make sure to enter all fields";
		}
		else if(!is_numeric($_POST['price']))
		{
			$listing_error = "Please enter a number in the price field";
		}
		// All checks succeeded for editListing, lets add it
		else
		{

			// Add listing to properties
			$query = "UPDATE tbl_property SET p_title='$title', p_address='$details', p_c_id='$region', p_price='$price' WHERE p_id=$property_id";
			mysqli_query($link, $query); // execute!
			
			if($_FILES['photo']['tmp_name'] != "")
			{
				//Image file
				$imgName = $_FILES['photo']['name'];
				$tmpName = $_FILES['photo']['tmp_name'];
				$ext = strrchr($imgName, ".");
				$newName = md5(rand()*time()).$ext;
				$imgPath = IMG_DIR . $newName;
				createThumbnail($tmpName, $imgPath, THUMBNAIL_WIDTH);
				//Separate query for images due to different tables
				$query = "UPDATE tbl_image SET i_name='$newName' WHERE i_p_id=$property_id";
				mysqli_query($link, $query);
				
			}
			header("Location: index.php");
		}
	} // End of AddListing Check
	

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
		<legend>Edit a property</legend> 

		<div class="form-group">
			<label for="dwelling" class="control-label">Please Select</label>
			<select class="form-control" name="type" id="type1">
				<option value="0">Region ↓↓↓</option> 
				<?php
					$query = "SELECT * FROM tbl_city";
					$result = mysqli_query($link, $query);
					while ($row = mysqli_fetch_array($result))
					{
					if($region == $row['c_id'])
					{?>
				<option selected value="<?php echo $row['c_id'];?>"><?php echo $row['c_name'];?></option>
					<?php
					}
					else
					{
					?>
				<option value="<?php echo $row['c_id'];?>"><?php echo $row['c_name'];?></option>
					<?php
					}
					}
					mysqli_free_result($result);
					?>
			</select>
		</div>  

		<div class="form-group">
			<label for="listingtitle" class="control-label">Listing Title</label>
			<div class="input-group">
			  <input type="text" class="form-control" value="<?php echo $title; ?>" name="listing-title" id="listing-title" aria-describedby="basic-addon1">
			</div>  <br />
			<h5><strong>Details</strong></h5>
			<textarea rows="3" cols="25" name="details"><?php echo $details; ?></textarea> 
			<br /><br />
			<h5><strong>Asking Price</strong></h5>
			<input type="text" name="price" value="<?php echo $price; ?>">$
		</div>
		
		<h5><strong>Upload Photo</strong></h5>
		<ul>          
			<li><input type="file" name="photo"></li>
		</ul>
		<h5><strong>Current Photo</strong></h5>
		<img src="<?php echo ROOT_DIRECTORY; ?>img/<?php echo $img_name; ?>" style="width:100px;">
		<br>
		<span class="error-message"><?php echo $listing_error; ?></span>
		<br>
		<input name="cancel" type="submit" value="Cancel" /> <input name="submit" type="submit" value="Submit" />           
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