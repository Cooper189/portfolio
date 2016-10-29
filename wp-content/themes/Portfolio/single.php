<?php get_header( ); ?>
		<div id="conteiner">
			<div id="content">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>					
					<div class="block-content-single">
					<h2><?php the_title( ); ?></h2>
					<?php the_content( ); ?>
					</div>
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>
			</div>
		</div>
<?php get_footer(); ?>