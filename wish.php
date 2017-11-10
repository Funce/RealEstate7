<?php
	include "config.php";
	include "library/functions.php";
	
	if (!isset($_SESSION['user'])) //Can't check a wishlist if not logged in
	{
		header("Location: login.php");
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
<title>Real Estate 7 - Dreamlist</title>

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
<?php include "navigation.php";?>
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
	<h3>Review your Dreamlist here<h3></div>
	<div class="container">
  <div class="row">
    <div class="col-lg-9 col-md-12">
		<div class="row">
       <?php
			$query = "SELECT * FROM tbl_property JOIN tbl_image ON p_id=i_p_id JOIN tbl_city ON p_c_id=c_id JOIN tbl_wishlist ON p_id=w_p_id WHERE w_m_id = ".$_SESSION['user']['id']." ORDER BY p_id ASC";
			$result = mysqli_query($link, $query);
			$counter = 0;
			while ($row = mysqli_fetch_array($result))
			{
				$counter++;
				$property_type = $row['p_type'];
		?>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
          <div class="thumbnail"> <img src="img/<?php echo $row['i_name']; ?>" alt="<?php echo $row['p_title']; ?>" class="img-responsive">
            <div class="caption">
              <h3><?php echo $row['p_title']; ?></h3>
              <p><?php echo $row['p_address']; ?><br />
              <?php echo $row['c_name'];?> </p>
              <hr>
              <p class="text-center"><a href="#" class="<?php echo button_class($property_type);?>" role="button"><?php echo button_text($property_type);?></a></p>
            </div>
          </div>
        </div>
        <?php }
			mysqli_free_result($result);
			?>
      </div>
    </div> 
    <div class="col-lg-3 col-md-6 col-md-offset-3 col-lg-offset-0">
      <?php include "sidebar.php";?>
    </div>
  </div>
</div><br />
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