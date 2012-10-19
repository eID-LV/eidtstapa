<?php

	//if page is being accessed by HTTPS, then redirect user to check.php
	if ($_SERVER['HTTPS'] == "on") {
	    header("Location: /en/check.php");
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
          <a class="brand" href="http://eidtstapa.pmlp.gov.lv/en">eID</a>
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
	   <div class="row-fluid">
					 <div 
					   style=" 
					   box-shadow: 40px 0 0 #FBFBFC inset, 41px 0 0 #ECECF0 inset; 
					   background-color: #F7F7F9; 
					   border: 1px solid #E1E1E8;
					   padding: 8px;
					   border-radius: 4px 4px 4px 4px;
					   " 
					 class="span4">	
					   <i style="float:left; margin-left:5px;" class="icon-exclamation-sign"></i> 
					<p style="margin-left:40px; text-align: left;">
					eID-LV or identity card is the <a href="http://www.likumi.lv/doc.php?id=243484"> identity document </a>(issued in Latvia) providing You with possibility of proofing Your identity (authenticate) online – in Internet, as well as signing documents digitally.<br> 
					For more information about eID-LV press <a href="http://www.pmlp.gov.lv/lv/pakalpojumi/passes/eid.html">here</a>.<br><br>
						   </p>
						   </div>
					  <div 
					   style=" 
					   box-shadow: 40px 0 0 #FBFBFC inset, 41px 0 0 #ECECF0 inset; 
					   background-color: #F7F7F9; 
					   border: 1px solid #E1E1E8;
					   padding: 8px;
					   border-radius: 4px 4px 4px 4px;
					   " 
					  class="span4">	
						 <i style="float:left; margin-left:5px;" class="icon-exclamation-sign"></i>
						 <p style="margin-left:40px; text-align: left;">  
						 To get full value of the features provided by eID-LV, You have to have:<br>

								1. computer with internet access;<br>
								2. <a href="http://www.pmlp.gov.lv/lv/pakalpojumi/passes/eid_lasitaji.html"> smart card reader </a>connected to your computer;<br>
								3. eID-LV middleware installed <a href="http://www.pmlp.gov.lv/lv/pakalpojumi/passes/eid_atbalsts.html"> installed.</a><br><br>
						</p>
						</div>
					   <div 
					   style=" 
					   box-shadow: 40px 0 0 #FBFBFC inset, 41px 0 0 #ECECF0 inset; 
					   background-color: #F7F7F9; 
					   border: 1px solid #E1E1E8;
					   padding: 8px;
					   border-radius: 4px 4px 4px 4px;
					   " 
					   class="span4">
						  <i style="float:left; margin-left:5px;" class="icon-exclamation-sign"></i>
					   <p style="margin-left:40px; text-align: justify;">  
						To verify Your identity, software will ask You to select authentication certificate (if You have just one smart card – eID-LV connected to Your computer at this moment, just press – OK) 
						and enter PIN1, which you will find in <a href="http://www.pmlp.gov.lv/lv/pakalpojumi/passes/PIN_maina.html"> PIN envelope </a>received together with eID-LV if you have not changed that yet).<br>
						</p>
						</div>
	</div>
		     
      	<p>



		<?php 
			$is_problematic_browser_error = check_browser();
			if($is_problematic_browser_error == false) { 
		?>
		</p>
		   <div style="margin-top:15px" class="row-fluid">
		 <div 
					   style=" 
					  
					   background-color: #F7F7F9; 
					   border: 1px solid #E1E1E8;
					   padding: 8px;
					   border-radius: 4px 4px 4px 4px;
					   " 
					 class="span5">	
				<img style="float:right; margin-top:15px; margin-right:-35px;" src='/assets/img/arrow2.png'>
					<p style="margin-right:40px; text-align: right;">
					<br>Press here to make sure You have correctly set up of Your computer to work with eID-LV and Your eID-LV works correctly! 
						   </p>
						   </div>
					  <div 
					   style=" 
					   
					   padding: 8px;
					   border-radius: 4px 4px 4px 4px;
					   " 
					  class="span2">	
	
							 <a href="https://eidtstapa.pmlp.gov.lv/en" class="btn btn-block btn-large"><img style="float:left; width:120px; margin-right:5px" src='/assets/img/eID_logo.png'></a>
						</div>
					   <div 
					   style=" 
					   
					   background-color: #F7F7F9; 
					   border: 1px solid #E1E1E8;
					   padding: 8px;
					   border-radius: 4px 4px 4px 4px;
					   " 
					   class="span5">
					<img style="float:left; margin-top:15px; margin-left:-35px;" src='/assets/img/arrow1.png'>
					   <p style="margin-left:40px; text-align: justify;">  
				<br>	At this moment Your eID-LV must be inserted into smart card reader! <br><br>
					  	</p>
						</div>
		</div>
	
		
		
		
		
		<?php
			} else {
				echo $is_problematic_browser_error;	
			};
		?>	
     
	
	  </div>
	  <div style="margin-top:20px" class="row">
	  <div 
	   style=" 
   box-shadow: 40px 0 0 #FBFBFC inset, 41px 0 0 #ECECF0 inset; 
   background-color: #F7F7F9; 
   border: 1px solid #E1E1E8;
   padding: 8px;
   border-radius: 4px 4px 4px 4px;





   " 
	  class="span10 offset1">
	     <i style="float:left; margin-left:5px;" class="icon-bell"></i>
   <div style="margin-left:40px; text-align: justify;">  
       <h2>Developers</h2>





	   <p> If You are service provider who would like to use eID-LV for verifying your customer’s identity in Your online web site or developer who has to provide technical solution for client authentication in Internet, press here to get basic information about configuration of web servers to work with eID-LV. 
	   More information can be requested  <a href="mailto:eID@pmp.gov.lv">here </a>.</p>
	   Other eID-LV test sites for developers:<br>
	   <a href="http://eidtstiis.pmlp.gov.lv">eID-LV Authentication integration example on Microsoft IIS</a><br>
	   <a href="http://eidtsttom.pmlp.gov.lv">eID-LV Authentication integration example on Apache Tomcat</a><br><br>
	   Application source code available at GitHub repository here: <a href="https://github.com/eID-LV">https://github.com/eID-LV</a><br>
	   Documentation of eID-LV integration examples are available here: <br>
	   -  <a href="http://eidtstapa.pmlp.gov.lv/eID_Apache_en.pdf">Documentation of integration example on Apache webserver</a>;<br>
	   -  <a href="http://eidtstapa.pmlp.gov.lv/eID_IIS_en.pdf">Documentation of integration example on Microsoft IIS webserver</a>;<br>
	   -  <a href="http://eidtstapa.pmlp.gov.lv/eID_Tomcat_en.pdf">Documentation of integration example on Apache Tomcat webserver </a><br><br>
	      <p> Download eID logo here: <a href="/assets/img/eID_logo.jpg">JPG</a> or <a href="/assets/img/eID_logo.png">PNG transparent</a>
		</p>
		</div>
		</div>
		</div>
		</div> 
		  	     <!-- Footer
      ================================================== -->
      <footer style="position:relative;"class="footer">
	  <hr>
        
        <p>Test site is running on Red Hat Enterprise Linux Server 6.2 (Santiago) as virtual guest on Vmware 7. Apache 2.2 OpenSSL . All rights reserved <a href="http://www.pmlp.gov.lv" target="_blank">PMLP</a> 2012. 
	
		 	<a href="http://eidtstiis.pmlp.gov.lv" target="_blank">eidtstiis.pmlp.gov.lv</a>
	</p>
      </footer>
		  
		  
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
