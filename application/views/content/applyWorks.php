<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/sub/apply.css.php">
<div class="row">
  <div class="col-md-4">
    <div class="form_main">
      <h3 class="heading">Apply for your work.<span></span></h3>
      <div class="form">
        <form action="contact_send_mail.php" method="post" id="applicationForm" name="applicationForm">
          <input id="inputWorkName" type="text" required="" placeholder="Name of your work." value="" name="workName">
          <!-- <input type="text" required="" placeholder="Please input your mobile No" value="" name="mob" class="txt"> -->
          <!-- <input type="text" required="" placeholder="Please input your Email" value="" name="email" class="txt"> -->
          <textarea id="textareaWorkDescription" placeholder="Describe your work." name="workDescription" type="text"></textarea>
          <input type="submit" value="Apply" name="Apply">
        </form>
      </div>
    </div>
    </div
  </div>
