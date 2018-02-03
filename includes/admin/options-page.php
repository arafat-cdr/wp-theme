<?php

function arafat_theme_opts_page() {

	$theme_opts 			=	get_option('arafat_opts');

	?>
	<div class="wrap">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title"><?php _e('Arafat Theme setting', 'arafat'); ?></h3>
			</div>
			<div class="panel-body">
				
				<?php 

				if( isset($_GET['status']) && $_GET['status'] == 1 ) {
					?>
						
						<div class="alert alert-success">Success</div>
					
					<?php
				}
				?>
				<form method="post" action="admin-post.php">

					<input type="hidden" name="action" value="arafat_save_options">

					<?php wp_nonce_field('arafat_options_verify'); ?>

					<h4><?php _e( 'Social Icons', 'arafat' );?></h4>
					<div class="form-group">
						<label><?php _e( 'Twitter', 'arafat' );?></label>
						<input type="text" class="form-control" name="arafat_inputTwitter" value="<?php echo $theme_opts['twitter']; ?>">
					</div>

					<div class="form-group">
						<label><?php _e( 'Facebook', 'arafat' );?></label>
						<input type="text" class="form-control" name="arafat_inputFacebook" value="<?php echo $theme_opts['facebook']; ?>">
					</div>

					<div class="form-group">
						<label><?php _e( 'Youtube', 'arafat' );?></label>
						<input type="text" class="form-control" name="arafat_inputYoutube" value="<?php echo $theme_opts['youtube']; ?>">
					</div>

					<h4><?php _e( 'Logo', 'arafat' ); ?></h4>

					<div class="form-group">
						<label><?php _e( 'Logo Type', 'arafat' );?></label>

						<select class="form-control" name="arafat_inputLogoType">
							<option value="1"><?php _e('Site name', 'arafat'); ?></option> 

							<option value="2" <?php echo $theme_opts['logo_type'] == 2 ? 'selected' : $theme_opts['logo_type']; ?> ><?php _e('Image', 'arafat'); ?></option> 
						</select>

					</div>

					<div class="input-group">
						<input type="text" class="form-control" placeholder="Logo Image" name="arafat_inputLogoImg" value="<?php echo $theme_opts['logo_img']; ?>">

						<span class="input-group-btn">
							<button class="btn btn-primary" type="button" id="arafat_uploadLogoImgBtn"><?php _e('Upload', 'arafat'); ?></button>
						</span>

					</div>

					<h4><?php _e( 'Footer', 'arafat'); ?></h4>
					
					<div class="form-group">
						<label><?php _e( 'Footer Text (Html is Allowed)', 'arafat' );?></label>
						<textarea class="form-control" name="arafat_inputFooter"><?php echo stripslashes_deep($theme_opts['footer']); ?></textarea>
					</div>
					<div class="form-group">
						
						<!-- <input type="submit" value="Save" class="button button-primary button-large"> -->
						<?php submit_button(); ?>
					</div>

				</form>
			</div>
		</div>
	</div>

	<?php
}
