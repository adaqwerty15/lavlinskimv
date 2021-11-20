<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
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
					<div class="nav-menu__elem-box">
						<a href="<?php echo get_site_url(); ?>/journal" class="n-m-elem-box__text">УЧЕНИКАМ</a>
					</div>
					<div class="nav-menu__elem-box">
						<a href="<?php echo get_site_url(); ?>/hronika" class="n-m-elem-box__text">РОДИТЕЛЯМ</a>
					</div>
					<div class="nav-menu__elem-box">
						<a href="<?php echo get_site_url(); ?>/houses" class="n-m-elem-box__text">УЧИТЕЛЯМ</a>
					</div>
					<div class="nav-menu__elem-box">
						<a href="<?php echo get_site_url(); ?>/about" class="n-m-elem-box__text">ПОРТФОЛИО</a>
					</div>
					<!-- <div id="drop-down-menu" class="nav-menu__elem-box with-drop-down-menu" onclick="this.classList.toggle('open');">
						<div class="n-m-elem-box__text">МЕНЮ</div>
						<div class="drop-down-menu" onclick="event.stopPropagation();">
							<a href="<?php echo get_site_url(); ?>/day" class="drop-down-menu__elem" onclick="document.getElementById('drop-down-menu').click()">
								<div class="drop-down-menu__elem-text">ДЕНЬ В ИСТОРИИ БОЛЬШОЙ УЛИЦЫ</div>
							</a>
							<a href="<?php echo get_site_url(); ?>/monuments" class="drop-down-menu__elem" onclick="document.getElementById('drop-down-menu').click()">
								<div class="drop-down-menu__elem-text">ПАМЯТНИКИ И МЕМОРИАЛЬНЫЕ ДОСКИ</div>
							</a>
							<a href="<?php echo get_site_url(); ?>/organizations" class="drop-down-menu__elem" onclick="document.getElementById('drop-down-menu').click()">
								<div class="drop-down-menu__elem-text">ОРГАНИЗАЦИИ</div>
							</a>
							<a href="<?php echo get_site_url(); ?>/videogallery" class="drop-down-menu__elem" onclick="document.getElementById('drop-down-menu').click()">
								<div class="drop-down-menu__elem-text">ВИДЕОГАЛЕРЕЯ</div>
							</a>
						</div>
					</div> -->
				</div>

				<div class="nav-menu mobile">
					<div class="n-m-elem-box__text"></div>
					<div id="drop-down-menu-mobile" class="nav-menu__elem-box with-drop-down-menu" onclick="this.classList.toggle('open');">
						<div class="n-m-elem-box__text"><div class="nav-menu-icon--mobile"></div></div>
						<div class="drop-down-menu" onclick="event.stopPropagation();">
							<a href="<?php echo get_site_url();?>/houses" class="drop-down-menu__elem" onclick="document.getElementById('drop-down-menu-mobile').click()">
								<div class="drop-down-menu__elem-text">ПРОГУЛКА</div>
							</a>
							<a href="<?php echo get_site_url(); ?>/hronika" class="drop-down-menu__elem" onclick="document.getElementById('drop-down-menu-mobile').click()">
								<div class="drop-down-menu__elem-text">ХРОНИКА</div>
							</a>
							<a href="<?php echo get_site_url(); ?>/day" class="drop-down-menu__elem" onclick="document.getElementById('drop-down-menu-mobile').click()">
								<div class="drop-down-menu__elem-text">ДЕНЬ В ИСТОРИИ УЛИЦЫ БОЛЬШОЙ</div>
							</a>
							<a href="<?php echo get_site_url(); ?>/journal" class="drop-down-menu__elem" onclick="document.getElementById('drop-down-menu-mobile').click()">
								<div class="drop-down-menu__elem-text">ЖУРНАЛ</div>
							</a>
							<a href="<?php echo get_site_url(); ?>/team" class="drop-down-menu__elem" onclick="document.getElementById('drop-down-menu-mobile').click()">
								<div class="drop-down-menu__elem-text">КОМАНДА</div>
							</a>
							<a href="<?php echo get_site_url(); ?>/about" class="drop-down-menu__elem" onclick="document.getElementById('drop-down-menu-mobile').click()">
								<div class="drop-down-menu__elem-text">О ПРОЕКТЕ</div>
							</a>
							<a href="<?php echo get_site_url(); ?>/contacts" class="drop-down-menu__elem" onclick="document.getElementById('drop-down-menu-mobile').click()">
								<div class="drop-down-menu__elem-text">ОБРАТНАЯ СВЯЗЬ</div>
							</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
