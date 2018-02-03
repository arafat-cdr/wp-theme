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
							<p class="btn btn-danger"><?php the_time('g : i a'); ?></p>
							<p class="btn"><?php the_category(','); ?></p>
							<p class="btn btn-primary">
								<a href="?php the_author_link(); ?>">By <?php the_author(); ?></a>
							</p>
							<p>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>">Read More</a>
							</p>
						</div>

						<?php
					}
				}

			?>
		</div>

		<nav class="text-center">
			<ul class="pagination">
				<li>
					<?php previous_posts_link("<i class='glyphicon glyphicon-chevron-left'></i>"); ?>
				</li>

				<li>
					<?php next_posts_link("<i class='glyphicon glyphicon-chevron-right'></i>"); ?>
				</li>

			</ul>
		</nav>
	</div>
</div>
<div class="col-md-2">
	The Right Widert
</div>

</div>

<?php get_footer(); ?>
