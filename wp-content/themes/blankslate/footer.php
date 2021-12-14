<?php 
	$items = wp_get_nav_menu_items( 'main', [
		// 'output_key'  => 'menu_order',
	] );

	// echo("<script>console.log('PHP: " . json_encode($items) . "');</script>");
?>
</div>
<footer id="footer" role="contentinfo">
	<div class="footer_container">
		<div class="menu">
			<?php 
				$i = 0;
				foreach ($items as $item) {
				
				if ($item->menu_item_parent) {
			?>	
				<a href="<?php echo $item->url; ?>"><?php echo $item->title;?></a>
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
				<div class="col">
				<div class="col-head"><?php echo $item->title;?></div>
				<div class="col-items">	
			<?php 	
				}
			?>
							
			<?php
				$i++;		
			}	
			?>
					</div>
					</div>
		
		<div class="col">
			    <div class="col-head">ЕЩЁ</div>
				<div class="col-items">					
					<a href="<?php echo get_site_url()?>/contacts">Контакты</a>
					<a href="<?php echo get_site_url()?>/callback">Обратная связь</a>
					<a href="<?php echo get_site_url()?>/cart">Карта сайта</a>
				</div>
		</div>	
		</div>
		<div class="social-links">	
			<a href="https://vk.com/lavlinskimv" target="_blank" class="social-links__elem vk"></a>	
			<a href="https://www.facebook.com/lavlinskimv" target="_blank" class="social-links__elem facebook"></a>	
			<a href="https://www.youtube.com/channel/UC9w97eEmMLjUJf4jbinYxhg" target="_blank" class="social-links__elem youtube"></a>
			<a href="https://wa.me/79247158635" target="_blank" class="social-links__elem whatsapp"></a>
		</div>
		<div class="copy">
			&copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
		</div>
	</div>

	<a href="#" title="Наверх" class="back_to_top">&uarr;</a>
 
</footer>
<script type="text/javascript">
		(function() {
		  'use strict';

		  let goTopBtn = document.querySelector('.back_to_top');

		  function trackScroll() {
		    var scrolled = window.pageYOffset;
		    // var coords = document.documentElement.clientHeight;
		    var coords = window.innerHeight;

		    if (scrolled > 100) {
		      goTopBtn.classList.add('back_to_top-show');
		    }
		    if (scrolled < 100) {
		      goTopBtn.classList.remove('back_to_top-show');
		    }
		  }

		  function backToTop() {
		    if (window.pageYOffset > 0) {
		      window.scrollBy(0, -80);
		      setTimeout(backToTop, 0);
		    }
		  }

		  function numberScroll() {
		  	let n = document.getElementById("numbers");
		    let hT = n.offsetTop,
		        hH = n.offsetHeight,
		        wH = window.innerHeight,
		        wS = window.pageYOffset
		    if (wS > (hT-wH)){
		       console.log('H1 on the view!');
		       if (!n.classList.contains('start')) {
		       	animateValue('c19', 0, 19, 3000);
		       	animateValue('c11_1', 0, 11, 2700);
		       	animateValue('c11_2', 0, 11, 2700);
		       	animateValue('c11_3', 0, 11, 2700);
		       	animateValue('c5', 0, 5, 2500);
		       	animateValue('c2', 0, 2, 2500);
		       	animateValue('c1', 0, 1, 2000);
		       	animateValue('c23', 0, 23, 4000);
		       }
		       	
		       n.classList.add('start');

		    }
		  }  

		  window.addEventListener('scroll', trackScroll);
		  window.addEventListener('scroll', numberScroll);
		  goTopBtn.addEventListener('click', backToTop);

		  function animateValue(id, start, end, duration) {
			    // assumes integer values for start and end
			    
			    var obj = document.getElementById(id);

			    var range = end - start;
			    // no timer shorter than 50ms (not really visible any way)
			    var minTimer = 50;
			    // calc step time to show all interediate values
			    var stepTime = Math.abs(Math.floor(duration / range));
			    
			    // never go below minTimer
			    stepTime = Math.max(stepTime, minTimer);
			    
			    // get current time and calculate desired end time
			    var startTime = new Date().getTime();
			    var endTime = startTime + duration;
			    var timer;
			  
			    function run() {
			        var now = new Date().getTime();
			        var remaining = Math.max((endTime - now) / duration, 0);
			        var value = Math.round(end - (remaining * range));
			        obj.innerHTML = value;
			        if (value == end) {
			            clearInterval(timer);
			        }
			    }
			    
			    timer = setInterval(run, stepTime);
			    run();
			}

		})();
</script>
</div>
<?php wp_footer(); ?>
</body>
</html>