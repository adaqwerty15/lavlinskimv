<?php get_header(); 

$my_posts = new WP_Query;

$arr_two = array(
	'category_name' => 'news',
	'posts_per_page'=> 15,
	'orderby' => array('date' => 'DESC'),
);

$myposts = $my_posts->query($arr_two);

?>
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
		<img width="350" height="470" src="<?php echo get_site_url(); ?>/wp-content/themes/blankslate/pic/bann_2.png"/>
	</div>	
	
</div>
<main id="content" role="main">
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

	<div class="news_top">
		<div class="name">Новости</div>
		<a href="<?php echo get_site_url()?>/news">Смотреть все</a>
	</div>
		
	<div class="news">
		<?php 
			foreach($myposts as $pst){
				$image = wp_get_attachment_image_src(get_post_thumbnail_id($pst->ID), 'medium' )[0];
				$count = $pst->comment_count;

				$str = "Нет комментариев";

				if ($count > 0) {
					$nc = $count % 10;
					if ($nc == 1) {
						$str = $count." комментарий";
					}
					elseif ($nc % 10 == 2 or $nc % 10 == 3 or $nc % 10 == 4) {
						$str = $count." комментария";
					}
					else {
						$str = $count." комментариев";
					}
				}
				$date = get_the_date("d.m.Y H:i", $pst->ID);
				$value = get_field("custom_date", $pst->ID);
				if ($value) {
					$date = $value;
				}
		?>
		<a class="new" href="<?php echo get_permalink($pst->ID) ?>">
			<div class="news_img">
				<img src=<?php echo $image; ?>>
			</div>
			<div class="head"><?php echo $pst->post_title ?></div>
			<div class="info">
				<div><?php echo $str;?></div>
				<div><?php echo $date;?></div>
			</div>
		</a>
		<?php 
			}
		?>
		
	</div>

	<div id="numbers">
		<div class="cont_name" >
			<div class="name">Я в цифрах</div>
		</div>

		<p>Успеваемость — 100%</p>

		<div class="progress-bar">
	  	<span class="bar">
	    	<span class="progress p"></span>
	  	</span>
		</div>

		<p>Качество обучения — 98%</p>

		<div class="progress-bar">
	  	<span class="bar">
	    	<span class="progress p2"></span>
	  	</span>
		</div>

		<p>Средняя отметка — 4,8</p>

		<div class="progress-bar">
	  	<span class="bar">
	    	<span class="progress p3"></span>
	  	</span>
		</div>

		<p>Средний балл ЕГЭ по информатике — 80</p>

		<div class="progress-bar">
	  	<span class="bar">
	    	<span class="progress p4"></span>
	  	</span>
		</div>

	    <p><span class="cifra" id="c19">19</span> результативных участий в конкурсах профессионального мастерства</p>
		<p><span class="cifra" id="c11_1">11</span> курсов повышения квалификации</p>
		<p><span class="cifra" id="c5">5</span> победителей муниципального этапа ВсОШ</p>
	    <p><span class="cifra" id="c11_2">11</span> призёров муниципального этапа ВсОШ</p>
	    <p><span class="cifra" id="c1">1</span> победитель регионального этапа ВсОШ</p>
	    <p><span class="cifra" id="c2">2</span> призёра регионального этапа ВсОШ</p>
	    <p>Педагогический стаж: <span class="cifra" id="c11_3">11</span> лет</p>
	    <p><span class="cifra" id="c23">23</span> публикации в сборниках научных трудов и журналах</p>
    </div>

	<div class="cont_name">
		<div class="name">Полезные ссылки</div>
	</div>

	<p>Эмулятор станции КЕГЭ, который позволяет проводить тренировку экзамена по Информатике и ИКТ в компьютерной форме</p>
	<a class="useful" href="https://kompege.ru/" rel="nofollow">https://kompege.ru</a>

	<p>Преподавание, наука и жизнь: сайт Константина Полякова</p>
	<a class="useful" href="https://kpolyakov.spb.ru/index.htm" rel="nofollow">https://kpolyakov.spb.ru</a>

	<p>ТРИК — кибернетический конструктор</p>
	<a class="useful" href="https://trikset.com/" rel="nofollow">https://trikset.com</a>

	<p>Современный урок</p>
	<a class="useful" href="https://www.1urok.ru/" rel="nofollow">https://www.1urok.ru</a>

	<p>ИМЦРО</p>
	<a class="useful" href="https://mc.eduirk.ru/" rel="nofollow">https://mc.eduirk.ru</a>

	<p>Институт развития образования Иркутской области</p>
	<a class="useful" href="https://iro38.ru/" rel="nofollow">https://iro38.ru</a>

	<p>СОРЕВНОВАНИЯ FIRST в РОССИИ</p>
	<a class="useful" href="https://future-engineers.ru/" rel="nofollow">https://future-engineers.ru</a>

</main>
<?php get_footer(); ?>