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
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Real Estate 7</title>

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-theme.min.css">
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
					<li class="current"><a href="index.php">Main</a></li>
					<li><a href="buy.php">Buying</a></li>
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
      <div class="well">
        <h3 class="text-center">Find Your Home</h3>
        <form class="form-horizontal">
          <div class="form-group">
            <label for="location1" class="control-label">Location</label>
            <select class="form-control" name="" id="location1">
              <option selected="selected" value="100">All regions</option>
	<option value="1">Northland</option>
	<option value="2">Auckland</option>
	<option value="3">Waikato</option>
	<option value="4">Bay of Plenty</option>
	<option value="5">Gisborne</option>
	<option value="6">Hawke&#39;s Bay</option>
	<option value="7">Taranaki</option>
	<option value="8">Wanganui</option>
	<option value="9">Manawatu</option>
	<option value="11">Wairarapa</option>
	<option value="12">Wellington</option>
	<option value="13">Nelson Bays</option>
	<option value="14">Marlborough</option>
	<option value="15">West Coast</option>
	<option value="16">Canterbury</option>
	<option value="17">Timaru - Oamaru</option>
	<option value="18">Otago</option>
	<option value="19">Southland</option>
	<option value="20">Other</option>
	<option value="50">North Island</option>
	<option value="60">South Island</option>
            </select>
          </div>
          <div class="form-group">
            <label for="type1" class="control-label">Type</label>
            <select class="form-control" name="" id="type1">
              <option selected="selected" value="101">All</option>
              <option value="1">For Sale</option>
              <option value="2">For Rent</option>
              <option value="3">For Lease</option>
            </select>
          </div>
          <div class="form-group">
            <label for="pricefrom" class="control-label">Price From</label>
            <div class="input-group">
              <div class="input-group-addon" id="basic-addon1">$</div>
              <input type="text" class="form-control" id="pricefrom" aria-describedby="basic-addon1">
            </div>
          </div>
          <div class="form-group">
            <label for="priceto" class="control-label">Price To</label>
            <div class="input-group">
              <div class="input-group-addon" id="basic-addon2">$</div>
              <input type="text" class="form-control" id="priceto" aria-describedby="basic-addon1">
            </div>
          </div>
          <p class="text-center"><a href="#" class="btn btn-danger" role="button">Search </a></p>
        </form>
      </div>
      <hr>
      <h3 class="text-center">Agents</h3>
      <div class="media-object-default">
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object img-rounded" src="img/64X64.gif" alt="placeholder image"> </a> </div>
          <div class="media-body">
            <h4 class="media-heading">Clayton</h4>
            <abbr title="Phone">P:</abbr> (123) 456-7890 <a href="mailto:#">clayton@realeastate7.co.nz</a> </div>
        </div>
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object img-rounded" src="img/64X64.gif" alt="placeholder image"> </a> </div>
          <div class="media-body">
            <h4 class="media-heading">Elliot</h4>
            <abbr title="Phone">P:</abbr> (123) 456-7890 <a href="mailto:#">Elliot@realeastate7.co.nz</a> </div>
        </div>
      </div>
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
         <p class="text-center"><a href="#" class="btn btn-info" role="button">Read More</a></p>
          </div>
          <div class="tab-pane fade" id="pane2">
            <p class="text-center"><img src="img/rental.jpg" alt=""></p>
            <p>The question on whether to Rent or Buy a property is one that people often ponder. The answer is very dependent on your financial situation, lifestyle and attitude. Renting is a particularly good option if you enjoy the freedom to move around or if your personal circumstances are likely to change. It easily allows you to give notice and move on with little delay and the financial and legal considerations of having to put your home on the market and sell it.</p>
            <p class="text-center"><a href="#" class="btn btn-info" role="button">Read More</a></p>
          </div>
          <div class="tab-pane fade" id="pane3">
            <p class="text-center"><img src="img/selling.jpg" alt=""></p>
            <p>Statistics suggest that 50% of people consider selling privately.
30 % actually attempt it, yet in NZ, only 10% of homes are privately sold.
That’s a big gap.</p>
         <p class="text-center"><a href="#" class="btn btn-info" role="button">Read More</a></p>            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<hr>
<div class="container well">
  <div class="row">
<div class="col-xs-6 col-sm-6 col-lg-4 col-md-4"> <span class="text-right">
      </span>
  <h3>About Us</h3>
  <hr>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, consequatur neque exercitationem distinctio esse! Cupiditate doloribus a consequatur iusto illum eos facere vel iste iure maxime. Velit, rem, sunt obcaecati eveniet id nemo molestiae. In.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, consequatur neque exercitationem distinctio esse! Cupiditate doloribus a consequatur iusto illum eos facere vel iste iure maxime. Velit, rem, sunt obcaecati eveniet id nemo molestiae. In.</p>
</div>
<div class="col-xs-6 col-sm-6 col-lg-4 col-md-4 hidden-sm hidden-xs"> <span class="text-right"> </span>
  <h3>Latest News</h3>
  <hr>
  <div class="media-object-default">
  <div class="media">
  <div class="media-body">
        <h4 class="media-heading">Heading 1</h4>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, quod temporibus veniam deserunt deleniti accusamus voluptatibus at illo sunt quisquam. </div>
      <div class="media-right"> <a href="#"> <img class="media-object" src="img/75X.gif" alt="placeholder image"></a></div>
</div>
<div class="media">
  <div class="media-body">
    <h4 class="media-heading">Heading 2</h4>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, iure nemo earum quae aliquid animi eligendi rerum rem porro facilis.</div>
  <div class="media-right"> <a href="#"> <img class="media-object" src="img/75X.gif" alt="placeholder image"></a></div>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-lg-4 col-md-4"> <span class="text-right"> </span>
  <h3>Contact Us</h3>
  <hr>
  <address>
  <strong>RealEstate 7</strong><br>
50 Hazeldead Ave<br>
Addington<br>
  </address>
  <address>
        <strong>Contact</strong><br>
        <a href="mailto:#">sales@berclay.co.nz</a>
      </address>
</div>
  </div>
</div>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p><strong>Copyright © Clayton & Elliot. All rights reserved.</strong></p>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Bootstrap JS --> -> 
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom JS -->
<script src="js/style.js"></script>
</body>
</html>