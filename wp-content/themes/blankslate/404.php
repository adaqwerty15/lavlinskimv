<?php get_header(); ?>
<main id="content_main" role="main">
<article id="post-0" class="post not-found">
<div class="container">	
	<header class="header">
	<h1 class="entry-title" itemprop="name"><?php esc_html_e( 'Ошибка 404. Страница не найдена.', 'blankslate' ); ?></h1>
	</header>
	<div class="entry-content" itemprop="mainContentOfPage">
		<p>Для того чтобы найти нужную Вам информацию Вы можете воспользоваться формой поиска или перейти на страницу <a href="<?php echo get_site_url()?>/cart">Навигации</a>.</p>
	</div>

	<div class="sb-example-1 s404">
		<form  class="search" id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	    	<input type="text" class="search-field searchTerm" name="s" placeholder="Поиск" value="<?php echo get_search_query(); ?>">
	    	<button type="submit" class="searchButton">
	    		<span class="ui-icon material-icons">search</span>
	    	</button>
		</form>
	</div>

</div>


</article>
</main>
<?php get_footer(); ?>