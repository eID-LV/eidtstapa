<?php
	if ($_SERVER['HTTPS'] == "on") {
	    header("Location: /check.php");
	    exit;
	}  

	include "../inc/functions.php";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>eID | eID test site</title>
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
	<div class="hero-unit">
	<img style="float:left; margin:20px;" src='/assets/img/eID_logo.png'>
     
    
      <h1>eID Test site</h1>
      <p>Welcome to eID test site!</p>
   
      </div>
      
	 
      <div class="marketing">
	   <div style="text-align: center;" class="marketing">
	   eID jeb personas apliecība ir <a href="http://www.likumi.lv/doc.php?id=243484"> personu apliecinošs dokuments </a>, kas Tev ļauj apliecināt savu identitāti (autentificēties) elektroniskā vidē – internetā, <br>
	   kā arī elektroniski parakstīt dokumentus. <br>
	   Lai uzzinātu vairāk par, eID spied <a href="http://www.pmlp.gov.lv/lv/pakalpojumi/passes/eid.html">šeit</a>.<br><br>
	   Lai pilnvērtīgi izmantotu eID sniegtās iespējas, Tev nepieciešams:<br>
		
			1. dators ar interneta pieslēgumu;<br>
			2. datoram pievienots <a href="http://www.pmlp.gov.lv/lv/pakalpojumi/passes/eid_lasitaji.html"> viedkaršu lasītājs </a>;<br>
			3. uzinstalēta eID <a href="http://www.pmlp.gov.lv/lv/pakalpojumi/passes/eid_atbalsts.html"> starpprogrammatūra.</a><br><br>
	Spied šeit, lai pārliecinātos, ka esi pareizi sagatavojis savu datoru darbam ar eID, un Tavs eID darbojas korekti!<br><br>
	      <p>
      	
		<?php 
			$is_problematic_browser_error = check_browser();
			if($is_problematic_browser_error == false) { 
		?>
		 <a href="https://eidtstapa.pmlp.gov.lv/" class="btn btn-primary btn-large"><img style="float:left; width:60px; margin-right:5px" src='/assets/img/eID_logo.png'>Uzsākt pārbaudi</a>
		<?php
			} else {
				echo $is_problematic_browser_error;	
			};
		?>	
      </p>
	Šajā brīdī Tavam eID ir jābūt ievietotam viedkaršu lasītājā!<br>
	Lai pārbaudītu Tavu identitāti, programmatūra Tev lūgs izvēlēties autentifikācijas sertifikātu (ja šajā brīdi Tavam datoram ir pieslēgta tikai viena viedkarte – eID, vienkārši spied OK) <br>
	un ievadīt PIN1, kuru atradīsi kopā ar eID saņemtajā PIN aploksnē (ja neesi paguvis to nomainīt). <br>

      
      <hr/>
	  </div>
	  <div class="row">
	  <div class="span8">
       <h2>Developers</h2>
	   <p> Ja esi pakalpojumu sniedzējs, kas vēlas eID izmantot, lai savā pakalpojumu portālā internetā pārliecinātos par klientu identitāti, vai izstrādātājs, kam jānodrošina tehniskais risinājums klientu autentifikācijai internetā, spied šeit, 
	   lai iegūtu pamatinformāciju par dažādu web serveru konfigurēšanu darbam ar eID. Papildus informāciju pieprasi <a href="mailto:eID@pmp.gov.lv">šeit </a></p>
	   Citas eID pārbaudes vietnes izstrādātājiem:<br>
	   <a href="http://eidtstiis.pmlp.gov.lv">eID Autentifikācijas integrācijas piemērs izmantojot Microsoft IIS</a><br>
	   <a href="http://eidtsttom.pmlp.gov.lv">eID Autentifikācijas integrācijas piemērs izmantojot Apache Tomcat</a><br>
	      <p> Lejuplādēt eID logo šeit: <a href="/assets/img/eID_logo.jpg">JPG</a> or <a href="/assets/img/eID_logo.png">PNG transparent</a>
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
