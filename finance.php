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
<div id="responsive">
<div class="container"><table>
  <tr><th>Enter Loan Data:</th>
    <td></td>
	<th>Loan Balance, Cumulative Equity, and Interest Payments</th></tr>
	<tr><td>Amount of the loan ($):</td>
	<td><input id="amount" onchange="calculate();"></td>
	<td rowspan=8>
	  <canvas id="graph" width="400" height="250"></canvas></td></tr>
	<tr><td>Interest rate (%):</td>
	  <td><input id="apr" onchange="calculate();"></td></tr>
	<tr><td>Repayment period (years):</td>
	  <td><input id="years" onchange="calculate();"></td>
	<tr><td>Postcode (to find lenders):</td>
	  <td><input id="zipcode" onchange="calculate();"></td>
	<tr><th>Approximate Payments:</th>
	  <td><button onclick="calculate();">Calculate</button></td></tr>
	<tr><td>Monthly payment:</td>
	  <td>$<span class="output" id="payment"></span></td></tr>
	<tr><td>Total payment:</td>
	  <td>$<span class="output" id="total"></span></td></tr>
	<tr><td>Total interest:</td>
	  <td>$<span class="output" id="totalinterest"></span></td></tr>
	<tr><th>Lenders:</th><td colspan=2>
	    <div id="lenders"></div></td></tr>
	</table></div></div>
<hr>
<section>
  <div class="container">
    <div class="row">
<div class="container services"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Realestate 7 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8860359254163464"
     data-ad-slot="5366042481"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script> </div>
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