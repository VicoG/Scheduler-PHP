<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Steve DiStefano">
	<title>JOB Scheduler</title>
	<link rel="icon" href="assets/images/calendar.png">
	
	<!-- FullCalendar CSS -->
	<link rel="stylesheet" href="assets/css/fullcalendar.css" />
	<link href="assets/css/fullcalendar.print.css" rel="stylesheet" media="print" />
    <!-- jQuery -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/fullcalendar.js"></script>
	
    <!-- Bootstrap Core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Bootstrap DatePicker CSS -->
	<link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="assets/css/clean-blog.min.css" rel="stylesheet">
    <!-- Modifications CSS -->
    <link href="assets/css/mods.css" rel="stylesheet">
    <!-- DataTables CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css"/>
 

    <!-- Custom Fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
<div class="container-fluid">
	<div class="row">
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container-fluid" style="background-color:rgb(65, 84, 114); border-bottom: 5px double #9eaec7;">            
					<div class="navbar-header"><!-- CollapseButton -->
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand" href="#" style="padding-top:1.7em;"><span style="font-size:1.5em; color:white;">JOB Scheduler</span></a>
					</div>
				 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
					<ul class="nav navbar-nav navbar-right" style="padding-bottom:1em;">
						<li  >
							<a href="index.php">Calendar View</a>
						</li>
						<li>
							<a href="project.php">Add Project</a>
						</li>
						<li>
							<a href="active.php">Active Projects</a>
						</li>
					</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav>
		</header>
	</div> <!-- end row -->
		