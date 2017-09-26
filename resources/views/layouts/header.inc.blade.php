<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>REST Sample</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<!-- Bootstrap core CSS     -->
	<link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

	<!-- Animation library for notifications   -->
	<link href="{{ url('assets/css/animate.min.css') }}" rel="stylesheet"/>

	<!--  Light Bootstrap Table core CSS    -->
	<link href="{{ url('assets/css/light-bootstrap-dashboard.css') }}" rel="stylesheet"/>

	<!--     Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link href="{{ url('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
</head>
<body>

	<div class="wrapper">
		<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

			<div class="sidebar-wrapper">
				<div class="logo" style="background-color: rgba(255,255,255,0.08)">
						<strong>REST</strong>Sample
				</div>

				<ul class="nav">
					<li>
						<a href="{{ url('/') }}">
							<i class="pe-7s-id"></i>
							<p>Kelola User</p>
						</a>
					</li>
					<li>
						<a href="{{ url('list') }}">
							<i class="pe-7s-id"></i>
							<p>List API</p>
						</a>
					</li>
				</ul>
			</div>
			
		</div>