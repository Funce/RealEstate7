<nav class="navbar navbar-inverse">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myInverseNavbar2" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="http://realestate7.serverup.xyz/?i=1"><img class="img-responsive" src="img/logo.jpg" alt="thumb"> </a> </div>
    <!-- Nav and Toggle -->   
    <div class="collapse navbar-collapse" id="myInverseNavbar2">
    <ul class="nav navbar-nav navbar-right">
     <?php
		if(!isset($_SESSION['user']))
		{?>
      	<li><a href="reg.php"><span class="glyphicon glyphicon-user"></span> <strong>Sign Up</strong></a></li>
      	<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> <strong>Login</strong></a></li>
      <?php
		}
		else 
		{?>
		<li><a href="wish.php" class="btn btn-warning btn-xs"><strong>Dreamlist</strong></a></li>
	 	<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span><strong>Logout</strong></a></li>
	  
     <?php 
		}?>
      <li class="visible-xs-inline"><a href="index.php">Home</a></li>
      <li class="visible-xs-inline"><a href="buy.php">Buying</a></li>
      <li class="visible-xs-inline"><a href="sell.php">Selling</a></li>
      <li class="visible-xs-inline"><a href="finance.php">Finance</a></li>
		<li class="visible-xs-inline"><a href="contact.php">Contact Us</a></li>
    </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>