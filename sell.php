<?php
	include "config.php";
	include "library/functions.php";
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
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
          <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
            <div class="caption">
              <h3>Heading</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <hr>
              <p class="text-center"><a href="#" class="btn btn-success" role="button">For Sale</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
          <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
            <div class="caption">
              <h3>Heading</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <hr>
              <p class="text-center"><a href="#" class="btn btn-info" role="button">For Rent</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 hidden-sm hidden-xs">
          <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
            <div class="caption">
              <h3>Heading</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <hr>
              <p class="text-center"><a href="#" class="btn btn-warning" role="button">For Lease</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
          <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
            <div class="caption">
              <h3>Heading</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <hr>
              <p class="text-center"><a href="#" class="btn btn-info" role="button">For Rent</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
          <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
            <div class="caption">
              <h3>Heading</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <hr>
              <p class="text-center"><a href="#" class="btn btn-primary btn-success" role="button">For Sale</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
          <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
            <div class="caption">
              <h3>Heading</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <hr>
              <p class="text-center"><a href="#" class="btn btn-warning" role="button">For Lease</a></p>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <div class="col-lg-3 col-md-6 col-md-offset-3 col-lg-offset-0">
      <?php include "sidebar.php"; ?>
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