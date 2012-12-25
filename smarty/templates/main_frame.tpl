<html>
<head>
	<link href='../css/bootstrap.min.css' rel='stylesheet' type='text/css' />
	<title>{$title}</title>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="index.php">Company Name</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						{$navbarLinks}
					</ul>
				</div>
			</div>
		</div>
	</div>
	<br/>
	<div class="container-fluid">
				{$innerView}
		<hr/>
	</div>
	<footer>Copyright &#9400; 2012 Company Name</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	{$js}
</body>
</html>