<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta content="width=decive-width, initial-scale=1.0" name="viewport"/>
        <title><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
        
        <?php wp_head(); ?>
        
		<?php wp_deregister_script('jquery'); ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		
		<script type="text/javascript">
			jQuery(function () {
				$(".button").click(function() {
					$('#menu').fadeToggle();
				});
			});
		</script>
   
    </head>
    <body>
        <header>
			<h1 id="head-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
			<div class="header-text">
				<div class="header-text-inner">
					<?php bloginfo('description'); ?>
				</div>
			</div>
			<div id="menu">
				<?php wp_nav_menu(); ?>
			</div>
			<div class="hammenu">
				<img src="<?php echo get_template_directory_uri(); ?>/img/hammenu.png" alt="ハンバーガーメニュー" class="button">
			</div>   
        </header>