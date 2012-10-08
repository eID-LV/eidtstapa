<?php

	// ja success.php megina pieklut ne caur https
	if ($_SERVER['HTTPS'] != "on") {
	    header("Location: /");
	    exit;
	}  

	include "./inc/functions.php";
	
	//echo "$_SERVER:<br>";
	//echo "<pre>";
	//print_r($_SERVER);
	//echo "</pre>";
	//echo "$_SERVER BEIGAS:<br>";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>eID | eID pārbaudes vietne</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="http://eidtstapa.pmlp.gov.lv">eID</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="http://eidtstapa.pmlp.gov.lv">Home</a></li>
              <li><a href="http://www.pmlp.gov.lv/lv/pakalpojumi/passes/eid.html">What is eID</a></li>
              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
	<div class="hero-unit">
	<img style="float:left; margin:20px;" src='/assets/img/eID_logo.png'>
     
    
      <h1>eID pārbaudes vietne</h1>
      <p>Sveicināti eID identifikācijas kartes pārbaudes vietnē!</p>
   
      </div>
      
             <div class="marketing">
	   <div style="text-align: center;" class="marketing">
	   
	  <h1>Jūsu eID karte darbojas sekmīgi!</h1>

      <p>
      	
		<?php 
			$is_problematic_browser_error = check_browser();
			if($is_problematic_browser_error == false) { 
				 
				$smartcard_user = get_smartcard_user();
				
		?>
				Sveicināti, <?php echo $smartcard_user['fullname'].", ".$smartcard_user['serial'];?>!<br/>
				Jūsu kartes derīguma termiņš: <?php echo $_SERVER['SSL_CLIENT_V_END'];?><br/>
				Vairāk par pieejamajiem pakalpojumiem: spiediet šeit.
		<?php
				
			} else {
				echo $is_problematic_browser_error;	
			};
		?>	
      </p>
    </div>
      
      <hr/>
       <h2>Citas pārbaudes.</h2>
	  <p> <a href="http://195.122.14.141">IIS test site</a>
	  <p> <a href="https://195.122.14.142">IIS test Secure site</a>
	      <p> Download eID logo here: <a href="/assets/img/eID_logo.jpg">JPG</a> or <a href="/assets/img/eID_logo.png">PNG transparent</a>

		  
		  	     <!-- Footer
      ================================================== -->
      <footer style="position:relative; top:100px"class="footer">
	  <hr>
        <p  class="pull-right"><a href="#">Back to top</a></p>
        <p>Test site is running on Red Hat Enterprise Linux Server 6.2 (Santiago) as virtual guest on Vmware 7. Apache 2.2 OpenSSL . All rights reserved <a href="http://www.pmlp.gov.lv" target="_blank">PMLP</a> 2012. 
	
		 	<a href="http://eidtstiis.pmlp.gov.lv" target="_blank">eidtstiis.pmlp.gov.lv</a>
	</p>
      </footer>
		  
		  </div>
    </div> <!-- /container -->
	


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
