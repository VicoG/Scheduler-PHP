<?php ob_start() ?>
<!DOCTYPE html>

<html>
<head>

  <!-- Meta, title, CSS, favicons, etc. -->

  <meta charset="utf-8">
  <title>Seating Chart</title>
  <meta name="Steve DiStefano" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Font CSS (Via CDN) -->
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
	
	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.min.css">
	<!-- Tooltip CSS file -->
	<link type="text/css" rel="stylesheet" href="assets/css/jquery.qtip.css" />
	
	<link rel="stylesheet" type="text/css" href="assets/css/modsSC.css">
	<!-- Data Tables -->
	 <link href="assets/css/datatables.min.css" rel="stylesheet" type="text/css">
	 <!--<link href="vendor/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
	 <link href="vendor/plugins/datatables/media/css/dataTables.plugins.css" rel="stylesheet" type="text/css">-->
	
	
<style>
.qtip-tipped .qtip-content{
	font-size: 1.2em;
	color: black;
	font-weight: bold; 
}
</style>

</head>
 <header class="navbar navbar-fixed-top navbar-shadow">

  <div class="navbar-branding">

	<a class="navbar-brand" href="home.php">
	  <b class="text-success">SEATING</b> Chart <sub> v3.1 </sub>
	</a>
	<span id="toggle_sidemenu_l" class="ad ad-lines"></span>
  </div>
	  
<ul class="nav navbar-nav navbar-right">
	<li class="dropdown menu-merge">
		<a href="#" class="dropdown-toggle fw600 p15" id="dropdownMenu1" data-toggle="dropdown">
		<span class="text-system ">  Welcome Guest</span>
		<span class="caret caret-tp hidden-xs"></span>
		</a>
		<ul class="dropdown-menu list-group dropdown-persist w250" role="menu" aria-labelledby="dropdownMenu1">
			<li class="list-group-item">
				<a href=""><span class="fa fa-tachometer text-system pl20" ></span><span class="sidebar-title text-system pl10"> Administrator MENU </span></a>
			</li>
			<li class="dropdown-footer">
				<a href="">
				<span class="fa fa-power-off pr5"></span> Logout 
				</a>
			</li>
		</ul>
	</li>
  </ul>
</header>