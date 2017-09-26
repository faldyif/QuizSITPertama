<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>REST Sample</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<!-- Bootstrap core CSS     -->
	<link href="{{ url('/assets/css/bootstrap.min.css') }}" rel="stylesheet" />

	<!-- Animation library for notifications   -->
	<link href="{{ url('/assets/css/animate.min.css')}}" rel="stylesheet"/>

	<!--  Light Bootstrap Table core CSS    -->
	<link href="{{ url('/assets/css/light-bootstrap-dashboard.css') }}" rel="stylesheet"/>

	<!--     Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link href="{{ url('/assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
</head>
<body>

	<div class="wrapper">
		<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

			<div class="sidebar-wrapper">
				<div class="logo" style="background-color: rgba(255,255,255,0.08)">
					<a href="./" class="simple-text">
						<strong>REST</strong>Sample
					</a>
				</div>

				<ul class="nav">
					<li>
						<a href="./">
							<i class="pe-7s-id"></i>
							<p>Kelola User</p>
						</a>
					</li>
					<li>
						<a href="./">
							<i class="pe-7s-id"></i>
							<p>List API</p>
						</a>
					</li>
				</ul>
			</div>
			
		</div>

		<div class="main-panel">
			<nav class="navbar navbar-default navbar-fixed">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">Kelola User</a>
					</div>
				</div>
			</nav>

			<div class="content">
            @yield('content')


            </div>

<footer class="footer">
	<div class="container-fluid">
		<p class="copyright text-center" style="font-size: 12px;">
			Copyright &copy; <?php echo Date("Y"); ?> D3 Komsi, UGM &middot; Light Bootstrap Dashboard Theme by <a href="https://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank">Creative Tim</a>.
		</p>
	</div>
</footer>

</div>
</div>


</body>

<!--   Core JS Files   -->
<script src="{{ url('/assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
<script src="{{ url('/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

<!--  Notifications Plugin    -->
<script src="{{ url('assets/js/bootstrap-notify.js') }}"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{{ url('assets/js/light-bootstrap-dashboard.js') }}"></script>

</html>

            