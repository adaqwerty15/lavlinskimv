<?php get_header(); ?>
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
<?php if ( have_posts() ) : ?>
<header class="header">
<h1 class="entry-title" itemprop="name"><?php printf( esc_html__( 'Результаты поиска для: "%s"', 'blankslate' ), get_search_query() ); ?></h1>
</header>
<?php while ( have_posts() ) : the_post(); ?>
<header>
	<h3 class="entry-title search">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
	</h3>	
</header>	
<div class="search_ex"><?php the_excerpt(); ?></div>
<?php endwhile; ?>
<?php else : ?>
<article id="post-0" class="post no-results not-found">
<header class="header">
<h1 class="entry-title" itemprop="name"><?php esc_html_e( 'Ничего не найдено', 'blankslate' ); ?></h1>
</header>
<div class="entry-content" itemprop="mainContentOfPage">
<p><?php esc_html_e( 'Извините, по Вашему запросу ничего не найдено.', 'blankslate' ); ?></p>
</div>
</article>
<?php endif; ?>
</div>
</main>
<?php get_footer(); ?>