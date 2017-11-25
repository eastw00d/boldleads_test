<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	// this controls which class to load / black white header 
	$header = ($header_black) ? 'header1' : 'header';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8"/>
	    <meta name="apple-mobile-web-app-capable" content="yes"/>
	    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
	    <title>Test</title>
	    <link href="/css/style.css?v=1" rel="stylesheet" type="text/css" />
	    <link href="/css/bootstrap.css?v=1" rel="stylesheet" type="text/css" />
	    <link href="/css/font-awesome.css?v=1" rel="stylesheet" type="text/css" />
	    <link href="/css/ionicons.css?v=1" rel="stylesheet" type="text/css" />
	    <link href="/css/plugin/sidebar-menu.css?v=1" rel="stylesheet" type="text/css" />
	    <link href="/css/plugin/animate.css?v=1" rel="stylesheet" type="text/css" />
	    <link href="/css/jquery-ui.css?v=1" rel="stylesheet" type="text/css" />
		<link href="/css/plugin/smoothproducts.css" type="text/css" rel="stylesheet" />
		<link href="/css/modals.css" type="text/css" rel="stylesheet" />
        <?=$css;?>
  	</head>
  	<body>
	    <div class="wrapper">
			<?php  if ($header_allowed == TRUE) :?>
	        <header id="header" class="<?=$header;?>">
	            <div class="container">
	                <div class="nav-mobile nav-bar-icon">
	                    <span></span>
	                </div>
					<div class="nav-menu">
						<ul class="nav-menu-inner hidden-xs hidden-sm">
							<li>
								<a href="/home">
									Home
								</a>
							</li>
							<?php if (isset($_SESSION['user']['user_id']) && $_SESSION['user']['user_id'] > 0) : ?>
							<li>
								<a href="/home/dashboard">
									Dashboard
								</a>
							</li>
							<?php endif; ?>
							<li>
								<?php if (isset($_SESSION['user']['user_id']) && $_SESSION['user']['user_id'] == 0) : ?>
									<a id='login' href="javascript:void(0);">
										Login
									</a>
								<?php else: ?>
									<a id='logout' href="javascript:void(0);">
										Logout
									</a>
								<?php endif; ?>
							</li>

							
						</ul>
					</div>
					<div class="nav-menu">
						<ul class="nav-menu-inner hidden-lg hidden-xl hidden-md">
							<li>
								<a href="/home">
									Home
								</a>
							</li>
							<?php if (isset($_SESSION['user']['user_id']) && $_SESSION['user']['user_id'] > 0) : ?>
							<li>
								<a href="/home/dashboard">
									Dashboard
								</a>
							</li>
							<?php endif; ?>
							<li>
								<?php if (isset($_SESSION['user']['user_id']) && $_SESSION['user']['user_id'] == 0) : ?>
									<a id='login' href="javascript:void(0);">
										Login
									</a>
								<?php else: ?>
									<a id='logout' href="javascript:void(0);">
										Logout
									</a>
								<?php endif; ?>
								</li>
							</li>
						</ul>
					</div>
	            </div>
	        </header>
	        <?php endif;?>

	        <?= $body; ?>

			<!-- LOGIN MODAL -->
			<div id="login_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="Login Form">
				<div class="modal-dialog">
			    	<div class="modal-content">
			      		<div class="row">
			        		<div class="col-xs-12">      			
			          			<div class="pull-right"><a href="#" class="close-btn" data-dismiss="modal" aria-label="Close"><i class="fa fa-times fa-close"></i></a></div>
			          			<h1>Please Log in</h1>
			          			<form id="login_form" action="" method="post">
			            			<div class="form-group">
			              				<label for="login_user_name">Nick Name:</label>
			              				<input type="text" name="login_user_name" class="form-control" id="login_user_name">
			            			</div>
			            			<div class="form-group">
			              				<label for="login_password">Password:</label>
			              				<input type="password" name="login_password" class="form-control" id="login_password">
			            			</div>
			            			<div class="form-group text-center">
			              				<button type="button" id="login_button" class="btn btn-lg btn-lblue btn-block">Log in</button>
			            			</div>
			            			<div class="form-group text-center">
			              				Don't have an account? <button type="button" class="btn btn-lblue" id="sign_up">Sign up</button>
			            			</div>
			          			</form>
			        		</div>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- END OF LOGIN MODAL -->
			<!-- REGISTRATION MODAL -->
			<div id="registration_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="Registration Form">
				<div class="modal-dialog">
			    	<div class="modal-content">
			      		<div class="row">
			        		<div class="col-xs-12">      			
			          			<div class="pull-right"><a href="#" class="close-btn" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></a></div>
			          			<h1></i>Registration</h1>
			          			<form id="registration_form" action="" method="post">
			            			<div class="form-group">
			              				<label for="client_name">Nick Name:</label>
			              				<input type="text" name="user_name" class="form-control" id="user_name">
			            			</div>
			            			<div class="form-group">
			              				<label for="password">Password:</label>
			              				<input type="password" name="password" class="form-control" id="password">
			            			</div>
			            			<div class="form-group text-center">
			              				<button type="button" id="registration_button" class="btn btn-lg btn-lblue btn-block">Sign Up</button>
			            			</div>
			            			<div class="form-group text-center">
			              				Have an account? <button type="button" class="btn btn-lblue" id="log_in">Log in</button>
			            			</div>
			          			</form>
			        		</div>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- END OF REGISTER MODAL -->
	       	<footer class="footer pt-60">
				<section class="copyright pb-60">
					<div class="container">
						<p class="footer">
							&copy; <?=date("Y");?>&nbsp; <a><b>Test</b></a>
							<br />
						</p>
					</div>
					<div class="spacer-30"></div>
				</section>
			</footer>
	        <a class="scroll-top">
	            <i class="fa fa-angle-double-up"></i>
	        </a>
	    </div>
		<script type="text/javascript">
			var base_url = 'http://localhost:7888/';
		</script>
		<script src="/js/jquery.min.js?v=1" type="text/javascript"></script>
		<script src="/js/jquery.validate.min.js?v=1" type="text/javascript"></script>
		<script src="/js/additional-methods.min.js?v=1" type="text/javascript"></script>
		<script src="/js/all.js?v=1" type="text/javascript"></script>
	    <script src="/js/plugin/jquery.easing.js?v=1" type="text/javascript"></script>
	    <script src="/js/jquery-ui.min.js?v=1" type="text/javascript"></script>
	    <script src="/js/bootstrap.min.js?v=1" type="text/javascript"></script>
	    <script src="/js/plugin/jquery.fitvids.js?v=1" type="text/javascript"></script>
	    <script src="/js/plugin/jquery.viewportchecker.js?v=1" type="text/javascript"></script>
	    <script src="/js/plugin/jquery.stellar.min.js?v=1" type="text/javascript"></script>
	    <script src="/js/plugin/wow.min.js?v=1" type="text/javascript"></script>
	    <script src="/js/plugin/jquery.colorbox-min.js?v=1" type="text/javascript"></script>
	    <script src="/js/plugin/owl.carousel.min.js?v=1" type="text/javascript"></script>
	    <script src="/js/plugin/isotope.pkgd.min.js?v=1" type="text/javascript"></script>
	    <script src="/js/plugin/masonry.pkgd.min.js?v=1" type="text/javascript"></script>
	    <script src="/js/plugin/imagesloaded.pkgd.min.js?v=1" type="text/javascript"></script>
	    <script src="/js/plugin/jquery.fs.tipper.min.js?v=1" type="text/javascript"></script>
	    <script src="/js/plugin/mediaelement-and-player.min.js?v=1"></script>
	    <script src="/js/theme.js?v=1" type="text/javascript"></script>
	    <script src="/js/plugin/sidebar-menu.js?v=1" type="text/javascript"></script>
	    <script src="/js/navigation.js?v=1" type="text/javascript"></script>
	    <script src="/js/plugin/jquery.singlePageNav.js?v=1" type="text/javascript"></script>
	    <?= $js; ?>
	</body>
</html>