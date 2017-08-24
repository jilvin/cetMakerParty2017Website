<?php $i=1; ?>
<?php foreach($invites as $invite) { ?>
  <?php echo $i.") "; $i++; ?>
  <?php echo $invite['artname']." - ".$invite['artshortdescription']."<br>"; ?>
  <span style="display: block; margin-top:10px; margin-left:15px;">
    <form action="<?php echo base_url(); ?>artistInvites/approve" method="POST">
      <input type="hidden" name="artID" value="<?php echo $invite['id']; ?>">
        <input type="submit" value="Approve Invite" style="width: 125px; margin-top: 2px;">
    </form>
    <span style="display:inline-block; width: 15px;"></span>
    <form action="<?php echo base_url(); ?>artistInvites/reject" method="POST">
      <input type="hidden" name="artID" value="<?php echo $invite['id']; ?>">
        <input type="submit" value="Reject Invite" style="width: 125px; margin-top: -10px;">
    </form>
  </span>
  <?php echo "<br>"; ?>
  <?php } ?>
