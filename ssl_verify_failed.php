<?php
	//include check_browser() and get_smartcard_user() functions
	include "./inc/functions.php";
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
    <link href="//eidtstapa.pmlp.gov.lv/assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="//eidtstapa.pmlp.gov.lv/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://eidtstapa.pmlp.gov.lv/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://eidtstapa.pmlp.gov.lv/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://eidtstapa.pmlp.gov.lv/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://eidtstapa.pmlp.gov.lv/assets/ico/apple-touch-icon-57-precomposed.png">
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
             

              
            </ul>
			</div>
			<div class="nav-collapse"style="float:right">
				<ul class="nav">
				 <li class="active">

				 <a href="/">LV</a>
				</li>
				 <li><a href="/en/ssl_verify_failed_en.php">EN</a></li>
				 </ul>
          </div><!--/.nav-collapse -->
        </div>
        </div>
   
      </div>

    <div class="container">
	<div style="padding-top:30px; padding-bottom:30px;" class="hero-unit">

	<img style="float:left; margin-top:-5px; margin-left:10px; margin-right:20px;" src='/assets/img/eID_logo_short.png'>
     
    
      <h1>eID pārbaudes vietne</h1>
      <p>Esi sveicināts eID pārbaudes vietnē!</p>
   
      </div>
      
       <div class="marketing">
	   <div style="text-align: center;" class="marketing">
	  <h2>Notiek pārbaude...</h2>
   
      <p>
      	    	 	
		<?php 
			//check browser
			$is_problematic_browser_error = check_browser();
			
			//if browser is ok, display users smarcard data
			if($is_problematic_browser_error == false) { 
		?>
		<div class="alert alert-error"><strong>Kļūda!</strong> Sertifikāta pārbaudes kļūda. Pārliecinieties vai viedkaršu lasītājs pievienots datoram, viedkarte ievietota un ir uzstādīta eID starpniekprogrammatūra.<br>Pārstartējiet pārlūku un mēģiniet vēlreiz</div>
		<br>
		<a href="http://eidtstapa.pmlp.gov.lv/" class="btn btn-primary btn-large">Veikt atkārtotu pārbaudi</a>
		<?php
			} else {
				
				//if browser ir not ok, show browser error
				echo $is_problematic_browser_error;	
			};
		?>	
      </p>
      
    </div>
      
		  
		 </div>  
    </div> <!-- /container -->
	
  </body>
</html>
