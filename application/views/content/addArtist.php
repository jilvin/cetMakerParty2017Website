<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/sub/apply.css.php">
<div class="row">
  <div class="col-md-4">
    <div class="form_main">
      <h3 class="heading" style="margin-bottom: -10px;">Add artist for <span><?php echo $artname; ?></span></h3><br>
      <div class="form">
        <form action="<?php echo base_url() ?>invite/artist" method="post" id="applicationForm" name="applicationForm" enctype="multipart/form-data" accept-charset="utf-8">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <input id="inputWorkName" type="text" required="true" placeholder="E-mail ID of the artist." value="" name="email">
          <input type="submit" value="Invite" name="Invite" style="margin-top: 10px;">
        </form>
    </div>
  </div>
</div>
</div>
