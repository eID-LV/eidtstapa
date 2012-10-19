<?php

	//check.php is only available by HTTPS
	//redirect user to main page if check.php is being accessed by HTTP
	if ($_SERVER['HTTPS'] != "on") {
	    header("Location: /en");
	    exit;
	}  

	//include check_browser() and get_smartcard_user() functions
	include "../inc/functions.php";

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>eID-LV | eID-LV test site</title>
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
          <a class="brand" href="http://eidtstapa.pmlp.gov.lv/en/check.php">eID</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="http://eidtstapa.pmlp.gov.lv/en">Home</a></li>


              
            </ul>
			</div>
			<div class="nav-collapse"style="float:right">
				<ul class="nav">

				 <li >
				 <a href="/">LV</a>
				</li>
				 <li class="active"><a href="/en">EN</a></li>
				 </ul>
          </div><!--/.nav-collapse -->
        </div>


      </div>

    </div>

    <div class="container">
	<div style="padding-top:30px; padding-bottom:30px;" class="hero-unit">

	<img style="float:left; margin-top:-5px; margin-left:10px; margin-right:20px;" src='/assets/img/eID_logo_short.png'>
      

      <h1>eID-LV test site</h1>
      <p>Welcome to Latvian eID test site!</p>
   
      </div>
      
             <div class="marketing">
	   <div style="text-align: center;" class="marketing">
	   
	
      <p>
      	
		<?php 
		
		    //check browser
			$is_problematic_browser_error = check_browser();
			if($is_problematic_browser_error == false) { 
				 
				//if browser is ok, display users smarcard data 
				//see inc/functions.php for smartcard_user array description
				$smartcard_user = get_smartcard_user();		
		?>
				<h1><?php echo $smartcard_user['fullname'];?>, Your eID-LV works correctly!</h1><br><br>
				We have read this information from authentication certificate included in Your eID-LV: <br>
				Name, surname: <?php echo $smartcard_user['fullname'];?><br>
				Personal number: <?php echo $smartcard_user['serial'];?> <br>
				Authentication certificate expiry date: <?php echo $_SERVER['SSL_CLIENT_V_END'];?><br/>

	<?php
				
			} else {
					
			    //if browser ir not ok, show browser error	
				echo $is_problematic_browser_error;	
			};
		?>	
      </p>
    </div>
      
      <hr/>
		  
		  	     <!-- Footer
      ================================================== -->
      <footer style="position:relative; top:100px"class="footer">
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
