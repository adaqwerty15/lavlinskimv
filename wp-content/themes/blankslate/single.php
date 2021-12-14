<?php get_header(); 
if ( have_posts() ) : while ( have_posts() ) : the_post();
$post = get_post();
$date = get_the_date("d.m.Y H:i", $post->ID);
$value = get_field("custom_date", $post->ID);
if ($value) {
	$date = $value;
}
?>
<main id="content_main" role="main">
	<div class="sb-example-1">
		<a class="cart" href="<?php echo get_site_url()?>/cart">КАРТА САЙТА</a>
		<form  class="search" id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	    	<input type="text" class="search-field searchTerm" name="s" placeholder="Поиск" value="<?php echo get_search_query(); ?>">
	    	<button type="submit" class="searchButton">
	    		<span class="ui-icon material-icons">search</span>
	    	</button>
		</form>
		<div class="vs">
		        <?php echo do_shortcode( '[bvi]' ); ?>
		</div>
	</div>

	<div class="container">
	<?php setup_postdata($post);?>

	<div class="section_head">
	<h1 class="single">
		<?php the_title(); ?>
	</h1>
	</div>

	<div class="bread">
		<a href="<?php echo get_site_url()?>">Главная</a> / <a href="<?php echo get_site_url()?>/news">Новости</a>
	</div>

	<div class="date"><?php echo $date;?></div>

	<?php
	the_content();
	?>
	<div class="end">
	<div class="end-left"><?php echo next_post_link('%link', '← %title', true);?></div>	
	<div><?php echo previous_post_link('%link', '%title  →', true);?></div>	
	<?php
	?>
	</div>
	<?php
	wp_reset_postdata();
	?>
	

	<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
</div>
</main>
<?php get_footer(); ?>