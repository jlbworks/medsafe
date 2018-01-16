<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="initial-scale=1.0">
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo home_url(); ?>">
		<link rel="apple-touch-icon" href="<?php echo home_url(); ?>"/>
		<title><?php wp_title(''); ?></title>
		<?php wp_head(); ?>
	<noscript>
		<style>
			.hidden_animated {
				opacity: 1;
			}
		</style>
	</noscript>
	</head>
<body <?php body_class(); ?>>
<header>
        <div class="header-bottom">
            <div class="header-left">
                <div class="logo-container">
                    <a class="logolink" href="<?php echo home_url(); ?>"><img src="<?php echo home_url(); ?>/wp-content/uploads/2018/01/medSafeLogo_FINAL-01.png" class="logo" /></a>
                </div>
            </div><!-- Header Left -->
            <div class="header-right">
							<span class="top-info">
								<a href="#">
									<span class="fa-stack fa-lg">
  									<i class="fa fa-circle-thin fa-stack-2x"></i>
  									<i class="fa fa-phone fa-stack-1x"></i>
									</span>
									<p>(615) 431-2966</p>
								</a>
								<p style="margin: 0 1vw;">//</p>
								<p>LICENSE NUMBER</p>
							</span>
							<div class="navi">
								<?php wp_nav_menu( array( 'menu' => 'menu-1') ); ?>
								<a class="btn btn-primary" href="#" role="button"> REQUEST A QUOTE </a>
							</div><!--Navi-->
						</div><!-- Header Right -->

        <!-- Button trigger modal -->
            <button type="button" data-toggle="collapse" data-target="#mobileMenu" aria-expanded="false" aria-controls="mobileMenu" class="mobile-button">
                <div class="nav-button" onclick="myFunction(this)">
                  <div class="bar1 bar"></div>
                  <div class="bar2 bar"></div>
                  <div class="bar3 bar"></div>
                </div>
                <script>
                    function myFunction(x) {
                    x.classList.toggle("change");
                    }
                </script>
            </button><!-- Button -->
            </div><!-- Header Bottom -->
            <!-- Mobile Menu -->
            <div class="collapse" id="mobileMenu">
              <div class="well">
                <?php wp_nav_menu( $args ); ?>
              </div>
            </div><!-- Collapse -->
</header>

<div class="body-container">
