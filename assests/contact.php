<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <?php require_once('assests/css.php'); ?>
</head>
<body>
<!-- *************************** loading menu start *************************** -->
  <?php require_once('assests/menu.php'); ?>
<!-- *************************** loading menu end *************************** -->
<div class="background_contact">
  <div class="big_margin_top">
      <div class="col-md-6" style="float: left;">    
        <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="list-group-item  list-group-item-action active">
            Contact Address
          </div>
        </div>
          <div class="panel-body list-group-item list-group-item-action"">
        <strong>Flight In Nigeria</strong>
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
        </div>
      </div>
      <div class="col-md-6" style="float: left;">
         <div>
           <h3>Contact Us</h3>
          </div>
    
          <div>
            <form method="post" action="" role="form" >
              <div class="form-group">
                <label for="contactname">Name</label>
                <input type="text" name="name" class="form-control" id="contactname" placeholder="Enter Name">

              </div>
              <div class="form-group">
                <label for="contactemail">Email</label>
                <input type="email" name="email" class="form-control" id="contactemail" placeholder="Enter Email">
              </div>
             
              <div class="form-group">
                <label for="contactmessage">Message</label>
                <textarea class="form-control" name="message" id="contactmessage" rows="6"></textarea>
              </div>
              <button type="submit" class="btn btn-default"> Submit </button>
          </form> 
      </div>
    </div>
  </div>

</div>
  <!-- *************************** loading menu start *************************** -->
      <?php require_once('assests/footer.php'); ?>
  <!-- *************************** loading menu end *************************** -->  

<!-- ******************************** loading javscript *************************************** -->
  <?php require_once('assests/js.php'); ?>
<!-- ******************************** loading javscript *************************************** -->

</body>
</html>