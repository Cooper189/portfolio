<?php get_header( ); ?>
		
					<?php if ( have_posts() ) : ?> 
						<div id="conteiner">
			             <div id="content">
						<ul class="portfolio-list">
					<?php while ( have_posts() ) : the_post(); ?>
					<li class="mose-over">
					<img src="<?php the_post_thumbnail_url(); ?>">
					<div class="block-content">
					<h2><?php the_title( ); ?></h2>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>"><div class="button-box">&#8658;</div></a>
					
						</div>
				     </li>
					<?php endwhile; ?>
						</ul>
						</div>
						</div>
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>		
<?php get_footer(); ?>