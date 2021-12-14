<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
$post = get_post();
$anc =  get_post_ancestors($post->ID);
$anc = array_reverse($anc);

$stati_children = new WP_Query(array(
  'post_type' => 'page',
  'post_parent' => $post->ID
  )
);

// echo("<script>console.log('PHP: " . json_encode($stati_children) . "');</script>");
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
	<header class="header">
	<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1>
	</header>

	<div class="bread">
		<a href="<?php echo get_site_url()?>">Главная</a> 

		<?php
		foreach($anc as $pst) {
		?>	
		/ <a href="<?php echo get_permalink($pst) ?>"><?php echo get_the_title($pst)?></a>
		<?php
		}
		?>
	</div>

	<?php 
		if ($stati_children->have_posts()) {
	?>	

	<p>Все разделы в "<?php the_title(); ?>":</p>
	<div class="list">
		<?php 
			while ($stati_children->have_posts()) {
				$stati_children->the_post();
		?>
			<div><a href="<?php echo get_the_permalink();?>"><?php echo get_the_title();?></a></div>
		<?php		
			}
			wp_reset_postdata();
		?>
	</div>
	<?php
		}
	?>
	<?php the_content();?>
</div>	
<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>