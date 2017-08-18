<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/sub/apply.css.php">
<div class="row">
  <div class="col-md-4">
    <div class="form_main">
      <h3 class="heading">Apply for your experience.<span></span></h3>
      <div class="form">
        <form action="<?php echo base_url() ?>apply/complete" method="post" id="applicationForm" name="applicationForm">
          <input id="inputWorkName" type="text" required="" placeholder="Suggested name." value="" name="experienceName">
          <!-- <input type="text" required="" placeholder="Please input your mobile No" value="" name="mob" class="txt"> -->
          <!-- <input type="text" required="" placeholder="Please input your Email" value="" name="email" class="txt"> -->
          <textarea id="textareaWorkDescription" placeholder="Brief the experience." name="experienceDescription" type="text"></textarea>
          <input type="submit" value="Apply" name="Apply">
        </form>
      </div>
    </div>
  </div>
</div>
