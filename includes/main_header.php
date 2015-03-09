<?
function getScriptName($url){
$name = ""; //default name
$pattern = "/\/[a-zA-Z0-9\_\-]+\.php/"; //finds file name based on extension
preg_match($pattern ,$url, $matches);

if(is_array($matches) && !empty($matches[0])){
$name = $matches[0]; //gets script name
}
$name = str_replace("/", "", $name); //replaces first slash
$name = str_replace(".php", "", $name); // removes PHP file extension

$name = ucwords($name); 

return $name; //returns name of script
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	
	<!-- meta data -->
	<title><? echo getScriptName($_SERVER['PHP_SELF']); ?> - Unami Lodge, One. - Order of the Arrow</title>
	<meta name="keywords" content="Unami,Lodge,unami,lodge,order,arrow,Order,Arrow,E. Urner Goodman,Treasure Island,treasure island,boy scouts,Boy Scouts,Resica Falls,resica falls,Delmont,delmont,Hart,hart">
	<meta name="description" content="Unami Lodge One, Order of the Arrow, Cradle of Liberty Council, Philadelphia, Pennsylvania">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico?">
	
	<!-- css includes -->
	<link rel="stylesheet" type="text/css" title="normal" href="../includes/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" title="normal" href="../includes/bootstrap/css/bootstrap-responsive.css" />
	<link rel="stylesheet" type="text/css" title="normal" href="../includes/lightbox/css/lightbox.css"/>
	<link rel="stylesheet" type="text/css" title="normal" href="../includes/unami.css" />
	
	<link href="/calendar/theme/default/esstyle.css" rel="stylesheet" type="text/css" /><link href="/calendar/theme/default/annual.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
	<!--
	.s21 {background-color: #00ccff;}
	.s23 {background-color: #CCFF00;}
	.s24 {background-color: #A4CAE6;}
	.s25 {background-color: #669999;}
	.s26 {background-color: #FBF484;}
	.s27 {background-color: #be23f1;}
	.s28 {background-color: #F2BFBF;}
	.s2multi {background-color: #FFC18A;}
	-->
	</style>
	
	<!-- js includes -->
	<script src="../includes/jquery-1.8.3.min.js"></script>
	<script src="../includes/bootstrap/js/bootstrap.js"></script>
	<script src="../includes/lightbox/js/lightbox.js"></script>
	
	<!-- page analytics -->
	
	<!-- Pingdom RUM -->
	<script type="application/javascript">var _prum={id:"516746dce6e53dc832000001"};var PRUM_EPISODES=PRUM_EPISODES||{};PRUM_EPISODES.q=[];PRUM_EPISODES.mark=function(b,a){PRUM_EPISODES.q.push(["mark",b,a||new Date().getTime()])};PRUM_EPISODES.measure=function(b,a,b){PRUM_EPISODES.q.push(["measure",b,a,b||new Date().getTime()])};PRUM_EPISODES.done=function(a){PRUM_EPISODES.q.push(["done",a])};PRUM_EPISODES.mark("firstbyte");(function(){var b=document.getElementsByTagName("script")[0];var a=document.createElement("script");a.type="text/javascript";a.async=true;a.charset="UTF-8";a.src="//rum-static.pingdom.net/prum.min.js";b.parentNode.insertBefore(a,b)})();</script>
	<!-- END Pingdom RUM -->
	
	<!--Google Analytics Tracking Module-->
		<script type="text/javascript">
		var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-19513253-4']);
		  _gaq.push(['_trackPageview']);
	
  		(function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	<!--END Google Analytics Tracking Module, Must remain directly above above the </head> tag.-->
</head>
<body>

<div class="main-container-fluid">

		<!-- banner -->
		<div class="row-fluid hidden-print">
			<div class="span12">	
				<img src="../images/Banner775.jpg" width="775" height="277" alt="Unami Banner" />
			</div>
		</div>
		<div class="row-fluid hidden-screen">
			<div class="span12">	
				<img src="../images/LodgeLogo.png" alt="Lodge Logo" align="left"/>
				<h2>Unami Lodge One, Founding Lodge of the Order of the Arrow</h2>
			</div>
		</div>

		<div class="body-wrapper">
		
		<!-- NAVBAR -->
		<div class="row-fluid hidden-print">
			<div class="span12">		
				<div class="navbar center">
					<div class="navbar-inner">
						<div class="container">
				
							<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
							<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>
				
							<!-- Everything you want hidden at 940px or less, place within here -->
							<div class="nav-collapse collapse">
								<ul class="nav">
													
									<!-- Home -->
									<li><a href="http://unamilodge.org"> Home</a></li>
									<!-- END Home -->
									
									<!-- FAQ -->
									<li><a href="../faq"> FAQ</a></li>
									<!-- END FAQ -->
									
									<!-- LEC -->
									<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> LEC <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="../lec-officers">Officers</a></li>
											<li><a href="../lec-minutes">Meeting Minutes</a></li>
											<li><a href="../lec-contacts">Contact List</a></li>
		
										</ul>
									</li>
									<!-- END LEC -->
									
									<!-- Chapters -->
									<li><a href="../chapters"> Chapters</a></li>
									<!-- END Chapters -->
									
									<!-- Calendar -->
									<li><a href="../calendar/unami7.php"> Calendar</a></li>
									<!-- END Calendar -->
									
									<!-- Communications -->
									<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Communications <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="../communications-unamiupdate">Unami Update</a></li>
											<li><a href="../communications-spirit">The Spirit</a></li>
											<li><a href="../communications-serviceupdate">Service Projects Update</a></li>
								
											<li class="dropdown-submenu">
											<a tabindex="-1" href="#">Unami Lodge Social Media</a>
												<ul class="dropdown-menu">
			    									<li><a href="http://twitter.com/#!/unamilodge" target="_blank">Twitter</a></li>
			    									<li><a href="http://www.youtube.com/user/UNAMILODGE" target="_blank">YouTube</a></li>
												<li><a href="http://www.facebook.com/unamione" target="_blank">Facebook</a></li>
			    									</ul>
			    								</li>
			    							</ul>
									</li>
									<!-- END Communications -->
									
									<!-- History -->								
									<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> History <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li class="dropdown-submenu">
			    								<a tabindex="-1" href="#">Past Lodge Chiefs</a>
			    									<ul class="dropdown-menu">
			    									<li><a href="../history-unamichiefs">Unami Lodge Chiefs</a></li>
			    									<li><a href="../history-delmontchiefs">Delmont Lodge Chiefs</a></li>
			    									</ul>
											</li>
											<li><a href="../history-unami">Unami Lodge History</a></li>
											<li><a href="../history-delmont">Delmont Lodge History</a></li>
											<li><a href="../history-flaps">Flap History</a></li>
											<li class="dropdown-submenu">
			    								<a tabindex="-1" href="history-awards">Awards</a>
			    									<ul class="dropdown-menu">
			    									<li><a href="../history-richardsaward">Tom Richards Outstanding Service Award</a></li>
			    									<li><a href="../history-benshetleraward">Chuck Benshetler Spirit of Camp Award</a></li>
												<li><a href="../history-fortunatoaward">David Fortunato Outstanding Service Award</a></li>
												<li><a href="../history-foundersaward">Founders Award</a></li>
			    									</ul>
											</li>
										</ul>
									</li>
									<!-- END History -->
									
									<!-- Forms -->
									<li><a href="../forms"> Forms</a></li>
									<!-- END Forms -->
									
									<!-- Links -->
									<li><a href="../link"> Links</a></li>
									<!-- END Links -->
									
								</ul> <!-- nav ul -->
							</div> <!-- nav collapse div -->	
						</div> <!-- container div -->
					</div> <!-- navbar inner div -->
				</div> <!-- navbar center div -->
			</div> <!-- span12 div -->
		</div> <!-- row fluid div -->
		<!-- END NAVBAR -->

