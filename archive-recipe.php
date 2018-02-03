<?php get_header(); ?>
<!-- *************************** loading index  *************************** -->

<div class="background_home">
	
<div class="col-md-2">
	<?php get_sidebar(); ?>
</div>
<div class="col-md-8">
	<div class="">
		<div class="row">
			<h1>My All recipes Here</h1>
			<?php

			#custom query made by arafat start here

			$query			    = new WP_Query(array(

				'post_type'     => 'recipe',
				'posts_per_page' => 3,
				'orderby'      => 'rand'

			));



			#custom query made by arafat start end here now use $query obj

				if( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						
						?>
						
				
						<div class="col-md-12">
							
							<h5>
								
										
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										
																
							</h5>
						
						</div>

						<?php

						wp_reset_postdata(); // Must reset when use custom query
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
