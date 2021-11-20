<?php get_header(); ?>
<div id="banner">
	<div class="intro">
		<div class="label">Учитель информатики, математики и технологии</div>
		<div class="label-right">
			<div>Секрет успешного воспитания лежит в уважении к ученику</div>
			<div>Р. У. Эмерсон</div>
		</div>
	</div>
	<div class="mail">
		<a target="_blank" href="mailto:lavlinskimv@mail.ru">lavlinskimv@mail.ru</a>
	</div>	
	<div class='img-logo'>
		<img width="350" height="470" src="<?php echo get_site_url(); ?>/wp-content/themes/blankslate/pic/bann.png"/>
	</div>	
	
</div>
<main id="content" role="main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</main>
<?php get_footer(); ?>