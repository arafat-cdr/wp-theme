<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<div class="input-group">
		<input type="text" placeholder="search" class="input-sm form-control" name="s" id="search" value="<?php the_search_query(); ?>">
		<span class="input-group-btn">
			<input type="submit" name="find" class="btn btn-sm btn-primary rippler rippler-default btn-flat with-border">
		</span>
	</div>
</form>