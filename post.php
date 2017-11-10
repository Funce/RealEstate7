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
</section>
<hr>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12">

    <form class="well form-horizontal" action="sales@berclay.co.nz">
<fieldset>

<!-- Form Start -->
<legend>List your property</legend>

    <div class="form-group">
            <label for="category" class="control-label">Please Select</label>
            <select class="form-control" name="type" id="type1">
              <option selected="selected" value="0">Category ↓↓↓</option>
              <option value="1">For Sale</option>
              <option value="2">For Rent</option>
              <option value="3">For Lease</option>
            </select>
          </div>
          
      <div class="form-group">
            <label for="dwelling" class="control-label">Please Select</label>
            <select class="form-control" name="type" id="type1">
              <option selected="selected" value="0">Type of Dwelling ↓↓↓</option>
              <option value="1">Apartment</option>
              <option value="2">House</option>
              <option value="3">Unit</option>
              <option value="3">Section</option>
            </select>
          </div>     

       <div class="form-group">
            <label for="dwelling" class="control-label">Please Select</label>
         <select class="form-control" name="type" id="type1">
              <option selected="selected" value="0">Region ↓↓↓</option>
              <option value="1">Christchurch</option>
              <option value="2">Dunedin</option>
              <option value="3">Auckland</option>
              <option value="3">Hamilton</option>
            </select>
</div>  
          
            <div class="form-group">
            <label for="listingtitle" class="control-label">Listing Title</label>
            <div class="input-group">
              <input type="text" class="form-control" name="listing-title" id="listing-title" aria-describedby="basic-addon1">
            </div>  <br>
            <h5><strong>Details</strong></h5>
            <textarea rows="8" cols="25"></textarea> 
            <br><br>
            <h5><strong>Asking Price</strong></h5>
            <input type="text">$</div>
           
<h5><strong>Upload Photos</strong></h5>
            <ul>          
	        <li><input type="file"></li>
            <li><input type="file"></li>
            <li><input type="file"></li>
            </ul>
            <br>
            <input type="reset"> <input type="submit">           
            
	</div>      
	</div>
    </div>
    <!-- /.container -->
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