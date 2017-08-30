<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div id="adminButtonsSection" style="margin-top: 20px;">
        <span style="display: inline-block; padding-bottom: 10px;"><b>Admin Action Panel</b></span>
        <form action="<?php echo base_url(); ?>admin/approve" method="POST">
          <input type="hidden" name="artID" value="<?php echo $artID; ?>">
          <input type="submit" value="Approve" style="width: 125px; margin-top: 2px;">
        </form>
        <span style="display:inline-block; width: 15px;"></span>
        <form action="<?php echo base_url(); ?>admin/reject" method="POST">
          <input type="hidden" name="artID" value="<?php echo $artID; ?>">
          <input type="submit" value="Reject" style="width: 125px; margin-top: -10px;">
        </form>
      </div>
    </div>
  </div>
</div>
