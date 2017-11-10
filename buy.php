<?php
	include "config.php";
	include "library/functions.php";
	include "library/pagination.php";
	

	// Creating Modular Queries because why not
	$location_string = "";
	$pagination_location = "";
	if(isset($_GET['location']))
	{
		if($_GET['location'])
		{
			$location = $_GET['location'];
			$location_string = "WHERE (c_id=$location)";
			$pagination_location = "location=$location";
		}
	}

	$type_string = "";
	$pagination_type = "";
	if(isset($_GET['type']))
	{
		if($_GET['type'])
		{
			$type = $_GET['type'];
			if($location_string)
			{
				$type_string .= "AND ";
				$pagination_type .= "&";
			}
			else
			{
				$type_string .= "WHERE ";
			}
			$type_string .= "(p_type=$type)";
			$pagination_type .= "type=$type";
		}
	}

	$pricing_string = "";
	$pagination_pricefrom = "";
	$pagination_priceto = "";
	
	if(isset($_GET['pricefrom']) or isset($_GET['priceto']))
	{
		if($_GET['pricefrom'] != "" or $_GET['priceto'] != "")
		{
			if ($location_string or $type_string)
			{
				$pricing_string .= "AND ";
			}
			else
			{
				$pricing_string .= "WHERE ";
			}
		}
	}
	if(isset($_GET['pricefrom']) and isset($_GET['priceto']))
	{
		if($_GET['pricefrom'] != "" and $_GET['priceto'] != "")
		{
		$price_from = $_GET['pricefrom'];
		$price_to = $_GET['priceto'];
		$pricing_string .= "(p_price BETWEEN $price_from AND $price_to)";
		$pagination_pricefrom .= "&pricefrom=$price_from";
		$pagination_priceto .= "&priceto=$price_to";
		}
	}
	elseif(isset($_GET['pricefrom']))
	{
		if($_GET['pricefrom'] != "")
		{
			$price_from = $_GET['pricefrom'];
			$pricing_string .= "(p_price >= $price_from)";
			$pagination_pricefrom .= "&pricefrom=$price_from";
		}
	}
	elseif(isset($_GET['priceto']))
	{
		if($_GET['priceto'] != "")
		{
			$price_to = $GET['priceto'];
			$pricing_string .= "(p_price <= $price_to)";
			$pagination_priceto .= "&priceto=$price_to";
		}
	}
	if(isset($_SESSION['user']))
	{
		$dreamer_list = dream_list_get($_SESSION['user']['id']);
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
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[`0`],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KJGS4HC');</script>
<!-- End Google Tag Manager -->
<title>Real Estate 7</title>

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
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
        <div class="media-object-default">
          <div class="media">
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
        <div class="media">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 hidden-sm hidden-xs">
        <div class="media">
        </div>
      </div>
    </div>
  </div>
</section>
<hr>
<div class="container">
  <div class="row">
    <div class="col-lg-9 col-md-12">
	  <div class="row">
        <?php
		  	$rowsPerPage = 9;
			$query = "SELECT * from tbl_property JOIN tbl_image ON p_id=i_p_id JOIN tbl_city ON p_c_id=c_id ".$location_string.$type_string.$pricing_string." ORDER BY p_id DESC"; // Gets property all images and city name
			$pagingLink = getPagingLink($query, $rowsPerPage, "".$pagination_location.$pagination_type.$pagination_pricefrom.$pagination_priceto);
		  	$result = mysqli_query($link, getPagingQuery($query, $rowsPerPage));
		  	while ($row=mysqli_fetch_array($result))
			{
				$property_type = $row['p_type'];
	    ?>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
          <div class="thumbnail"> <img src="img/<?php echo $row['i_name'];?>" alt="<?php echo $row['p_title']; ?>" class="img-responsive">
            <div class="caption">
              <h3><?php echo $row['p_title'];?></h3>
              <p><?php echo $row['p_address'];?><br />
              <?php echo $row['c_name'];?></p>
              <?php if(isset($_SESSION['user']))
				{
					if(!in_array($row['p_id'], $dreamer_list))
					{
				?>
              	<p class="text-right"><a href="#" class="btn btn-success">Add to Dreamlist</a></p>
				<?php
					}
					else
					{?>
					<p class="text-right"><a href="#" class="btn btn-danger">Remove from Dreamlist</a></p>
					<?php		
					}
				}
				?>
              <hr>
              <p class="text-left"><a href="#" class="<?php echo button_class($property_type);?>" role="button"><?php echo button_text($property_type);?></a></p>
              
            </div>
          </div>
        </div>
        <?php
			}
		  ?>
      </div>
      <h3 style="text-align: center;">
      	<?php echo $pagingLink; //display the paging links because you need it ?>
      </h3>
    </div> 
    <div class="col-lg-3 col-md-6 col-md-offset-3 col-lg-offset-0">
      <?php include "sidebar.php";?>
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