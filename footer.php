<?php
	
	$theme_opts	=	get_option('arafat_opts');

?>
<div class="footer_bg">
	<div class="col-md-12 col-sm-12">

		<div class="col-md-6 col-sm-12 footer_area_1">
		
			  <address>
			    22B, Adeshina street,<br/> 
			    Off Obafemi Awolowo way, <br/> 
			    Ikeja, Lagos<br/>
			    <span class="glyphicon glyphicon-phone-alt">
			    	08033490154 
			    </span> <br/>
			     
			    <span class="glyphicon glyphicon-envelope">
			    	info@travelcentra.com.ng<br/>
			    </span> 
			  </address>

		</div>
		<div class="col-md-3 col-sm-12 footer_area_2"></div>
		<div class="col-md-3 col-sm-12 footer_area_3">
			<ul>
				<li>Home</li>
				<li>About us</li>
				<li>Contact us</li>
			</ul>
		</div>

	</div>
	
	<div class="col-md-12 col-sm-12" style="float: left; text-align: center;">
		<span>
			&copy <?php echo date('Y'); ?> all Right reserved Programmer<br/>
			<strong>
				<?php echo $theme_opts['footer']; ?>
			</strong>
		</span>
	</div>

</div>
<?php wp_footer(); ?>
</body>
</html>