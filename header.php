<?php
  
  $theme_opts       =   get_option('arafat_opts');

?>

<!DOCTYPE html>
<html>
<head>
  <title><?php wp_title(); ?></title>
	<?php wp_head(); ?> 

</head>
<body>
<!-- *************************** loading menu start *************************** -->
  <nav class="navbar navbar-default color_set">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo site_url(); ?>/index.php">
        <?php 
        if($theme_opts['logo_type'] ==1) {
           bloginfo('name'); 
      } else {

        ?>

        <img src="<?php echo $theme_opts['logo_img']; ?>" alt="logo" class="img-thumbnil img-responsive">
<?php
      }

      ?>

      </a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-left">
         <?php 
         

            wp_nav_menu_no_ul();


         ?>
        </ul> 
        
        <ul class="nav navbar-nav navbar-right">
          <?php
            if(!empty($theme_opts['twitter'])) {
              ?>
              <li><a href="https://www.twitter.com/<?php echo $theme_opts['twitter']; ?>">Twitter<i class="fa fa-facebook"></i></a></li>
              <?php
            }

            if(!empty($theme_opts['facebook'])) {
              ?>
              <li><a href="https://www.facebook.com/<?php echo $theme_opts['facebook']; ?>">Facebook<i class="fa fa-facebook"></i></a></li>
              <?php
            }
            if(!empty($theme_opts['youtube'])) {
              ?>
              <li><a href="https://www.twitter.com/<?php echo $theme_opts['youtube']; ?>">Youtube<i class="fa fa-facebook"></i></a></li>
              <?php
            }



          ?>

        </ul>

      </div>
    </div>
  </nav>
<!-- *************************** loading menu end *************************** -->