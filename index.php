<?php
	include "config.php";
	include "library/functions.php";
	
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
<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
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
			$query = "SELECT * FROM tbl_property JOIN tbl_image ON p_id=i_p_id JOIN tbl_city ON p_c_id=c_id ORDER BY p_id ASC";
			$result = mysqli_query($link, $query);
			$counter = 0;
			while ($row = mysqli_fetch_array($result) and $counter < 6)
			{
				$counter++;
				$property_type = $row['p_type'];
		?>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
          <div class="thumbnail"> <img src="img/<?php echo $row['i_name']; ?>" alt="<?php echo $row['p_title']; ?>" class="img-responsive">
            <div class="caption">
              <h3><?php echo $row['p_title'];?></h3>
              <p><?php echo $row['p_address'];?><br />
              <?php echo $row['c_name'];?><br />
              $<?php echo $row['p_price'];?></p>
              
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
</div>
<hr>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h3>New Properties</h3>
        <hr>
        <div class="row">
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <img src="img/72X72.gif" alt="Thumbnail Image 1"> </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <img src="img/72X72.gif" alt="Thumbnail Image 1"></div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <img src="img/72X72.gif" alt="Thumbnail Image 1"></div>
          </div>      
        </div>
        <hr>
        <div class="row">
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <img src="img/72X72.gif" alt="Thumbnail Image 1"></div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <img src="img/72X72.gif" alt="Thumbnail Image 1"></div>
</div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <img src="img/72X72.gif" alt="Thumbnail Image 1"></div>
</div>
        </div>
        <hr>
        <div class="row">
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <img src="img/72X72.gif" alt="Thumbnail Image 1"></div>
</div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <img src="img/72X72.gif" alt="Thumbnail Image 1"></div>
</div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <img src="img/72X72.gif" alt="Thumbnail Image 1"></div>
</div>
        </div>
      </div>
      <div class="container services">
      <div class="col-lg-6">
        <h3>Our Services</h3>
        <hr>    
        <ul id="myTab1" class="nav nav-tabs">
          <li class="active"> <a href="#home1" data-toggle="tab"> <strong>Buying </strong></a> </li>
          <li><a href="#pane2" data-toggle="tab"><strong>Renting</strong></a></li>
          <li> <a href="#pane3" data-toggle="tab"><strong>Selling</strong></a> </li>
        </ul>
        <div id="myTabContent1" class="tab-content">
          <div class="tab-pane fade in active" id="home1">
            <p class="text-center"><img src="img/dreamhome.jpg" alt=""></p>
            <p>How you approach buying a home depends on your experience.
Is it your 1st home or is it your 20th?
Are you looking for an investment or a renovator?
Perhaps a “trade and flick” or a family home where the kids can grow up?</p>
          </div>
          <div class="tab-pane fade" id="pane2">
            <p class="text-center"><img src="img/rental.jpg" alt=""></p>
            <p>The question on whether to Rent or Buy a property is one that people often ponder. The answer is very dependent on your financial situation, lifestyle and attitude. Renting is a particularly good option if you enjoy the freedom to move around or if your personal circumstances are likely to change. It easily allows you to give notice and move on with little delay and the financial and legal considerations of having to put your home on the market and sell it.</p>
          </div>
          <div class="tab-pane fade" id="pane3">
            <p class="text-center"><img src="img/selling.jpg" alt=""></p>
            <p>Statistics suggest that 50% of people consider selling privately.
30 % actually attempt it, yet in NZ, only 10% of homes are privately sold.
That’s a big gap.</p>            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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