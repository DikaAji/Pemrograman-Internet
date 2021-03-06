<?php
require_once('libs/init.php');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome to AO CLOUD - #1 Document Cloud in Indonesia</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#">
			<i class="glyphicon glyphicon-cloud"></i>
		  </a>
		</div>
		
		<div class="text-center" style="position:absolute; display: block; width: 100%;">
			<div id="logo"><i class="glyphicon glyphicon-cloud-upload"></i> AO CLOUD</div>
		</div>
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="#signin" aria-controls="signin" role="tab" data-toggle="tab">Sign Up</a></li>
		  </ul>
	</nav>
	
	<div class="container">
		<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
			<div>

			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs nav-justified" id="tab" role="tablist">
					<li role="presentation" class="active"><a href="#signin" aria-controls="signin" role="tab" data-toggle="tab">Sign In</a></li>			
					<li role="presentation"><a href="#signup" aria-controls="signup" role="tab" data-toggle="tab">Sign Up</a></li>
				</ul>
				<br>
				<?php 
				showMessage();
				?>
			  <!-- Tab panes -->
			  <div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="signin">
		
					<h2 class="page-header">Sign In</h2>
					<form action="signin.php" method="POST">
					  <div class="form-group">
						  <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
					  </div>
					  <div class="form-group">
						  <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
					  </div>
					  <!--<div class="form-group">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="rememberme"> Remember me
								</label>
							</div>
					  </div>-->
					  <div class="form-group">
						  <button type="submit" class="btn btn-primary">Sign In</button>
					  </div>
					</form>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="signup">
		
					<h2 class="page-header">Sign Up</h2>
					<form action="signup.php" method="POST">
					  <div class="form-group">
						  <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
					  </div>
					  <div class="form-group">
						  <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama Lengkap">
					  </div>
					  <div class="form-group">
						  <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
					  </div>
					  <div class="form-group">
						  <input type="password" name="re_password" class="form-control" id="inputPassword3" placeholder="Confirm Password">
					  </div>
					  <div class="form-group">
						  <button type="submit" class="btn btn-primary">Sign Up</button>
					  </div>
					</form>
				</div>
			  </div>

			</div>
			
		</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>