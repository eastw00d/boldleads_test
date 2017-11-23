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
								<a href="/home/dashboard">
									Dashboard
								</a>
							</li>
							<li>
								<a href="/home">
									Home
								</a>
							</li>
						</ul>
					</div>
					<div class="nav-menu">
						<ul class="nav-menu-inner hidden-lg hidden-xl hidden-md">
							<li>
								<a href="/home/dashboard">
									Dashboard
								</a>
							</li>
							<li>
								<a href="/home">
									Home
								</a>
							</li>
						</ul>
					</div>
	            </div>
	        </header>
	        <?php endif;?>

	        <?= $body; ?>

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