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
	    <link href="<?=GLOBAL_DIRECTORY;?>public/css/style.css?v=1" rel="stylesheet" type="text/css" />
	    <link href="<?=GLOBAL_DIRECTORY;?>public/css/bootstrap.css?v=1" rel="stylesheet" type="text/css" />
	    <link href="<?=GLOBAL_DIRECTORY;?>public/css/font-awesome.css?v=1" rel="stylesheet" type="text/css" />
	    <link href="<?=GLOBAL_DIRECTORY;?>public/css/ionicons.css?v=1" rel="stylesheet" type="text/css" />
	    <link href="<?=GLOBAL_DIRECTORY;?>public/css/plugin/sidebar-menu.css?v=1" rel="stylesheet" type="text/css" />
	    <link href="<?=GLOBAL_DIRECTORY;?>public/css/plugin/animate.css?v=1" rel="stylesheet" type="text/css" />
	    <link href="<?=GLOBAL_DIRECTORY;?>public/css/jquery-ui.css?v=1" rel="stylesheet" type="text/css" />
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
								<a href="<?=GLOBAL_DIRECTORY;?>public/index.php/home/dashboard">
									Dashboard
								</a>
							</li>
						</ul>
					</div>
					<div class="nav-menu">
						<ul class="nav-menu-inner hidden-lg hidden-xl hidden-md">
							<li>
								<a href="<?=GLOBAL_DIRECTORY;?>public/index.php/home/dashboard">
									Dashboard
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
	    	var base_url = "<?=SITEURL;?>/";
			var global_directory = "<?=GLOBAL_DIRECTORY;?>";
		</script>
		<script src="<?=GLOBAL_DIRECTORY;?>public/js/jquery.min.js?v=1" type="text/javascript"></script>
		<script src="<?=GLOBAL_DIRECTORY;?>public/js/jquery.validate.min.js?v=1" type="text/javascript"></script>
		<script src="<?=GLOBAL_DIRECTORY;?>public/js/additional-methods.min.js?v=1" type="text/javascript"></script>
		<script src="<?=GLOBAL_DIRECTORY;?>public/js/all.js?v=1" type="text/javascript"></script>
	    <script src="<?=GLOBAL_DIRECTORY;?>public/js/plugin/jquery.easing.js?v=1" type="text/javascript"></script>
	    <script src="<?=GLOBAL_DIRECTORY;?>public/js/jquery-ui.min.js?v=1" type="text/javascript"></script>
	    <script src="<?=GLOBAL_DIRECTORY;?>public/js/bootstrap.min.js?v=1" type="text/javascript"></script>
	    <script src="<?=GLOBAL_DIRECTORY;?>public/js/plugin/jquery.fitvids.js?v=1" type="text/javascript"></script>
	    <script src="<?=GLOBAL_DIRECTORY;?>public/js/plugin/jquery.viewportchecker.js?v=1" type="text/javascript"></script>
	    <script src="<?=GLOBAL_DIRECTORY;?>public/js/plugin/jquery.stellar.min.js?v=1" type="text/javascript"></script>
	    <script src="<?=GLOBAL_DIRECTORY;?>public/js/plugin/wow.min.js?v=1" type="text/javascript"></script>
	    <script src="<?=GLOBAL_DIRECTORY;?>public/js/plugin/jquery.colorbox-min.js?v=1" type="text/javascript"></script>
	    <script src="<?=GLOBAL_DIRECTORY;?>public/js/plugin/owl.carousel.min.js?v=1" type="text/javascript"></script>
	    <script src="<?=GLOBAL_DIRECTORY;?>public/js/plugin/isotope.pkgd.min.js?v=1" type="text/javascript"></script>
	    <script src="<?=GLOBAL_DIRECTORY;?>public/js/plugin/masonry.pkgd.min.js?v=1" type="text/javascript"></script>
	    <script src="<?=GLOBAL_DIRECTORY;?>public/js/plugin/imagesloaded.pkgd.min.js?v=1" type="text/javascript"></script>
	    <script src="<?=GLOBAL_DIRECTORY;?>public/js/plugin/jquery.fs.tipper.min.js?v=1" type="text/javascript"></script>
	    <script src="<?=GLOBAL_DIRECTORY;?>public/js/plugin/mediaelement-and-player.min.js?v=1"></script>
	    <script src="<?=GLOBAL_DIRECTORY;?>public/js/theme.js?v=1" type="text/javascript"></script>
	    <script src="<?=GLOBAL_DIRECTORY;?>public/js/plugin/sidebar-menu.js?v=1" type="text/javascript"></script>
	    <script src="<?=GLOBAL_DIRECTORY;?>public/js/navigation.js?v=1" type="text/javascript"></script>
	    <script src="<?=GLOBAL_DIRECTORY;?>public/js/plugin/jquery.singlePageNav.js?v=1" type="text/javascript"></script>
	    <?= $js; ?>
	</body>
</html>