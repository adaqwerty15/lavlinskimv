<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/blankslate/fonts/iconfont/material-icons.css" >
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php 
	$items = wp_get_nav_menu_items( 'main', [
		// 'output_key'  => 'menu_order',
	] );

	// echo("<script>console.log('PHP: " . json_encode($items) . "');</script>");
?>
<div class="section header">
			<div class="section-content ">
				<a class="logo-box" href="<?php echo get_site_url(); ?>">
					<div class="logo-text">
						<div class="logo-text--1">Лавлинский</div>
						<div class="logo-text--2">Максим</div>						
						<div class="logo-text--3">Викторович</div>						
					</div>
				</a>
				<div class="nav-menu">

					<?php 
					    $i = 0;
						foreach ($items as $item) {
					?>		
							
							<?php 	
							if ($item->menu_item_parent) {
							?>	
								<a href="<?php echo $item->url; ?>" class="drop-down-menu__elem" onclick="document.getElementById('drop-down-menu').click()">
								<div class="drop-down-menu__elem-text"><?php echo $item->title;?></div>
								</a>
							<?php 	
							}
							else {
								if ($i > 0) {
							?>	
								</div>
								</div>
							<?php 	
								}
							?>		
								<div class="nav-menu__elem-box with-drop-down-menu">
									<a class="n-m-elem-box__text"><?php echo $item->title;?></a>
									<div class="drop-down-menu" onclick="event.stopPropagation();">
							<?php 	
							}
							?>
							
							
					<?php
					    $i++;		
						}	
					?>
					</div>
					</div>	
				</div>	


				
				<div class="icons-menu">
					<a href="<?php echo get_site_url()?>/callback" aria-label="Обратная связь" class="ui-fab" title="Обратная связь">
						<div class="ui-fab__icon">
							<span class="ui-icon material-icons">contact_mail</span>
						</div>
						 <span class="ui-fab__focus-ring"></span> 
						 <div class="ui-ripple-ink"></div> 
					</a>  
					<a href="<?php echo get_site_url()?>/contacts" aria-label="Контакты" class="ui-fab" title="Контакты">
						<div class="ui-fab__icon">
							<span class="ui-icon material-icons">call</span>
						</div>
						 <span class="ui-fab__focus-ring"></span> 
						 <div class="ui-ripple-ink"></div> 
					</a> 
				</div>

				<div class="nav-menu mobile">
					<div class="n-m-elem-box__text"></div>
					<div id="drop-down-menu-mobile" class="nav-menu__elem-box with-drop-down-mobile" onclick="this.classList.toggle('open');">
						<div class="n-m-elem-box__text"><div class="nav-menu-icon--mobile"></div></div>
						<div class="drop-down-menu-mobile" onclick="event.stopPropagation();">
							<?php 
								foreach ($items as $item) {

									if ($item->menu_item_parent) {
							?>	
							<a href="<?php echo $item->url; ?>" class="drop-down-menu__elem padd" onclick="document.getElementById('drop-down-menu-mobile').click()">
								<div class="drop-down-menu__elem-text"><?php echo $item->title;?></div>
							</a>
							<?php 
									}
									else {
							?>		
							<a href="<?php echo $item->url; ?>" class="drop-down-menu__elem" onclick="document.getElementById('drop-down-menu-mobile').click()">
								<div class="drop-down-menu__elem-text"><?php echo $item->title;?></div>
							</a>		
							<?php
									}
								}
							?>	
							
						</div>
					</div>
				</div>
				
			</div>
		</div>


<div id="wrapper">

