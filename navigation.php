<nav class="navbar navbar-inverse">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myInverseNavbar2" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="http://realestate7.serverup.xyz/?i=1"><img class="img-responsive" src="<?php echo ROOT_DIRECTORY;?>img/logo.jpg" alt="thumb"> </a> </div>
    <!-- Nav and Toggle -->   
    <div class="collapse navbar-collapse" id="myInverseNavbar2">
    <ul class="nav navbar-nav navbar-right">
     <?php
		if(!isset($_SESSION['user']))
		{?>
      	<li><a href="<?php echo ROOT_DIRECTORY; ?>reg.php"><span class="glyphicon glyphicon-user"></span> <strong>Sign Up</strong></a></li>
      	<li><a href="<?php echo ROOT_DIRECTORY; ?>login.php"><span class="glyphicon glyphicon-log-in"></span> <strong>Login</strong></a></li>
      <?php
		}
		else 
		{
			if($_SESSION['user']['role'] == ADMIN_LEVEL)
			{?>
				<li><a href="<?php echo ROOT_DIRECTORY; ?>admin/index.php"><span class="glyphicon glyphicon-wrench"></span> <strong>Admin</strong></a></li>
				<?php
			}
		?>
		<li><a href="<?php echo ROOT_DIRECTORY; ?>wish.php" class="btn btn-warning btn-xs"><strong>Dreamlist</strong></a></li>
	 	<li><a href="<?php echo ROOT_DIRECTORY; ?>logout.php"><span class="glyphicon glyphicon-log-out"></span> <strong>Logout</strong></a></li>
	  
     <?php 
		}?>
      <li class="visible-xs-inline"><a href="<?php echo ROOT_DIRECTORY; ?>index.php">Home</a></li>
      <li class="visible-xs-inline"><a href="<?php echo ROOT_DIRECTORY; ?>buy.php">Browse</a></li>
      <li class="visible-xs-inline"><a href="<?php echo ROOT_DIRECTORY; ?>post.php">Post a Listing</a></li>
      <li class="visible-xs-inline"><a href="<?php echo ROOT_DIRECTORY; ?>finance.php">Finance</a></li>
		<li class="visible-xs-inline"><a href="<?php echo ROOT_DIRECTORY; ?>contact.php">Contact Us</a></li>
    </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>