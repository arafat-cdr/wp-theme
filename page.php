<?php get_header(); ?>
<!-- *************************** loading index  *************************** -->

<div class="background_home">
	
<div class="col-md-2">
	<?php get_sidebar(); ?>
</div>
<div class="col-md-8">
	<div class="">
		<div class="row">
			<?php

				if( have_posts() ) {
					while ( have_posts() ) {
						the_post();

						?>
						
						<div class="col-md-12">
							<?php

							if( has_post_thumbnail() ) {
								
								the_post_thumbnail('full', array('class' => 'img-responsive'));
							}

							?>
						</div>

						<div class="col-md-12">
							<p class="text-warning" style="margin-top: 20px;"><strong><?php the_time('d M'); ?></strong></p>
							<h3>
								
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								
							</h3>
							
						</div>

					
						<?php comments_template(); ?>

						<?php
					}
				}

			?>
		</div>
	</div>
</div>
<div class="col-md-2">
	The Right Widert
</div>

</div>

<?php get_footer(); ?>
