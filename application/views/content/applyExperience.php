<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/sub/apply.css.php">
<div class="row">
  <div class="col-md-4">
    <div class="form_main">
      <h3 class="heading">Apply for your experience.<span></span></h3>
      <div class="form">
        <form action="<?php echo base_url() ?>apply/complete" method="post" id="applicationForm" name="applicationForm">
          <input id="inputWorkName" type="text" required="true" placeholder="Suggested name." value="" name="experienceName">
          <input id="inputWorkName" type="text" required="true" placeholder="Short description." value="" name="experienceShortDescription">
          <textarea id="textareaWorkDescription" required="true" placeholder="Long description." name="experienceLongDescription" type="text"></textarea>
          <input type="submit" value="Apply" name="Apply">
        </form>
      </div>
    </div>
  </div>
</div>
