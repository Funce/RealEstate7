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



<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KJGS4HC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myInverseNavbar2" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="http://realestate7.serverup.xyz/?i=1"><img class="img-responsive" src="img/logo.jpg" alt="thumb"> </a> </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="myInverseNavbar2">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> <strong>Sign Up</strong></a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> <strong>Login</strong></a></li>
      <li class="visible-xs-inline"><a href="index.php">Home</a></li>
      <li class="visible-xs-inline"><a href="buy.php">Buying</a></li>
      <li class="visible-xs-inline"><a href="sell.php">Selling</a></li>
      <li class="visible-xs-inline"><a href="rent.php">Renting</a></li>
      <li class="visible-xs-inline"><a href="finance.php">Finance</a></li>
      <li class="visible-xs-inline"><a href="contact.php">Contact Us</a></li>
    </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
	</nav>
	<div class="container">
	<div class="row">
	  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-xs">
		<div id="carousel-299058" class="carousel slide">		  
		  <div class="carousel-inner">
			<div class="item"> <img class="img-responsive" src="img/slider-1.jpg" alt="thumb">
			  <div class="carousel-299058-caption"> Buy your dream home today! </div>
			</div>
			<div class="item active"> <img class="img-responsive" src="img/slider-2.jpg" alt="thumb">
			  <div class="carousel-299058-caption"> Dreams may not be free but they are worth it! </div>
			</div>
			<div class="item"> <img class="img-responsive" src="img/slider-3.jpg" alt="thumb">
			  <div class="carousel-299058-caption"> Let us help you find your perfect home. </div>
			</div>
		  </div>
		  <a class="left carousel-control" href="#carousel-299058" data-slide="prev"><span class="icon-prev"></span></a> <a class="right carousel-control" href="#carousel-299058" data-slide="next"><span class="icon-next"></span></a></div>
		<nav>
			<div id="main_navigation">
				<ul class="menu">
					<li><a href="index.php">Main</a></li>
					<li class="current"><a href="buy.php">Buying</a></li>
					<li><a href="sell.php">Selling</a></li>
					<li><a href="rent.php">Renting</a></li>
					<li><a href="finance.php">Finance</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</div>
     	</nav>
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
          <div class="thumbnail"> <img src="img/<?php echo $row['i_name'];?>" alt="<?php echo $row['p_title'];?>" class="img-responsive">
            <div class="caption">
              <h3><?php echo $row['p_title'];?></h3>
              <p><?php echo $row['p_address'];?><br />
              <?php echo $row['c_name'];?></p>
              <hr>
              <p class="text-center"><a href="#" class="<?php echo button_class($property_type);?>" role="button"><?php echo button_text($property_type);?></a></p>
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
<?php include "footer.php"; ?>
<!-- jQuery --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Bootstrap JS --> -> 
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom JS -->
<script src="js/style.js"></script>
</body>
</html>