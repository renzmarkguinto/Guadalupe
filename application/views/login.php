<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Dashboard">
		<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

		<title><?php echo $title; ?></title>

		<!-- Bootstrap core CSS -->
		<link href="<?=base_url()?>public/assets/css/bootstrap.css" rel="stylesheet">
		<!--external css-->
		<link href="<?=base_url()?>public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

		<!-- Custom styles for this template -->
		<link href="<?=base_url()?>public/assets/css/style.css" rel="stylesheet">
		<link href="<?=base_url()?>public/assets/css/style-responsive.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<!-- **********************************************************************************************************************************************************
		MAIN CONTENT
		*********************************************************************************************************************************************************** -->
		<div class="login-content">
			<div id="login-header">
				<img src="https://assets1.jw.org/images/siteMarkApps_web.png"> <span class="siteName">Jehovah's Witnesses</span>
			</div>
			<div class="login-line"></div>
			<div id="login-page">
				<div class="container">
					<?php $attributes = array('class' => 'form-login', 'id' => 'login'); echo form_open('login', $attributes);?>
						<h2 class="form-login-heading">Log in - Guadalupe Cong.</h2>
						<div class="login-wrap">
							<input type="text" name="username" class="form-control" placeholder="Username" autofocus>
							<br>
							<input type="password" name="password" class="form-control" placeholder="Password"><br>
							<div class="alert alert-danger" <?php if(validation_errors() == "") { echo "style=\"display:none\""; } ?>>
								<?php echo validation_errors(); ?>
							</div>
							<div class="alert alert-danger" <?php if(!$error) { echo "style=\"display:none\""; } ?>>
								User does not exist!
							</div>
							<label class="checkbox">
								<span class="pull-right">
									<a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
								</span>
							</label>
							<button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> LOG IN</button>
							<hr>
							<div class="registration">
								Don't have an account yet?<br/>
								<a class="" href="#">Create an account</a>
							</div>
						</div>
						
						<!-- Modal -->
						<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title">Forgot Password ?</h4>
									</div>
									<div class="modal-body">
										<p>Enter your e-mail address below to reset your password.</p>
										<input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
									</div>
									<div class="modal-footer">
										<button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
										<button class="btn btn-theme" type="button">Submit</button>
									</div>
								</div>
							</div>
						</div>
						<!-- modal -->
					</form>
				</div>
			</div>
		</div>
		<!-- js placed at the end of the document so the pages load faster -->
		<script src="<?=base_url()?>public/assets/js/jquery.js"></script>
		<script src="<?=base_url()?>public/assets/js/bootstrap.min.js"></script>

		<!--BACKSTRETCH-->
		<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
		<script type="text/javascript" src="<?=base_url()?>public/assets/js/jquery.backstretch.min.js"></script>
		<script>
			$.backstretch("<?=base_url()?>public/assets/img/login-bg.jpg", {speed: 500});
		</script>
	</body>
</html>
