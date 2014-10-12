<!DOCTYPE html>
<html>
	<head>
	<title>Lance Me | Settings</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="../images/favicon.ico">	

		<!-- Latest compiled and minified Bootstrap CSS -->		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

		<!-- settings.css import -->
		<link rel="stylesheet" type="text/css" href="css/main.css">

		<!-- settings.css import -->
		<link rel="stylesheet" type="text/css" href="css/settingspage.css">

		<!-- Animate.css -->
		<link rel="stylesheet" type="text/css" href="css/animate.css">

	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="index.html">Lance Me</a>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="profile.php">My Profile</a></li>
		        <li><a href="listings.php">Job Listings</a></li>
		      </ul>
		      <ul class="nav navbar-nav">
		        <li><a href="lancers.php">Lancers</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li class="active"><a href="settings.php">Settings</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<div 
			<div class="col-md-12">
					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title"> Settings </h3>
					  </div>
					  <div class="panel-body">
					  	<h5> Username </h5>
					    <div class="input-group">
					    	<form action="http://localhost/save.php/" method="post">
						  <input name = "firstName" type="text" class="form-control" placeholder="EpikWaffle">
						</div>
						<h5> Email </h5>
						<div id="password" class="input-group">
						  <input name = "email" type="text" class="form-control" placeholder="johnson.lin@example.com">
						</div>
						<h5> Password </h5>
						<div id="password" class="input-group">
						  <input type="text" class="form-control" placeholder="At least eight characters">
						</div>
						<h5> Confirm Password </h5>
						<div id="password" class="input-group">
						  <input name="password" type="text" class="form-control" placeholder="Same as above">
						</div>
						<input type="submit" onclick="alertconfirm()" value="Submit">
						</form>
						</div>
					  </div>
					</div>
				</div>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/main.js"></script>

	   	<!-- jQuery Version 1.11.0 -->
	    <script src="js/jquery-1.11.0.js"></script>

		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>
		
		<!-- Bootstrap Minified JS -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>