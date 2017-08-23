<?php
if(empty($artName))
{
  $artName="";
}
if(empty($artShortDescription))
{
  $artShortDescription="";
}
if(empty($artLongDescription))
{
  $artLongDescription="";
}
if(empty($patronClub))
{
  $patronClub="";
}
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/sub/apply.css.php">
<div class="row">
  <div class="col-md-4">
    <div class="form_main">
      <h3 class="heading">Apply for your experience.<span></span></h3>
      <div class="form">
        <form action="<?php echo base_url() ?>apply/complete" method="post" id="applicationForm" name="applicationForm" enctype="multipart/form-data" accept-charset="utf-8">
          <input id="inputWorkName" type="text" required="true" placeholder="Suggested name." value="<?php echo $artName; ?>" name="experienceName">
          <input id="inputWorkName" type="text" required="true" placeholder="Short description." value="<?php echo $artShortDescription; ?>" name="experienceShortDescription">
          <textarea id="textareaWorkDescription" required="true" placeholder="Long description." name="experienceLongDescription" type="text"><?php echo $artLongDescription; ?></textarea>
          <?php if(!empty($clubs)) {?>
          <p style="margin-top: 20px;">Select your patron club (if any)</p>
            <select name="patronClub">
              <option value="">None</option>
              <?php foreach($clubs as $club)
              {
                ?>
                <option value="<?php echo $club['id']; ?>"><?php echo $club['clubname']; ?></option>
                <?php
              }
              ?>
            </select>
            <?php } ?>
            <p style="margin-top: 20px;">Upload an image with ratio: 38:35. Upload high quality image if possible.</p>
            <span style="color:red;"><?php echo $error1;?></span>
            <input type="file" name="userfile1" required="true" size="20" />
            <p style="margin-top: 30px;">Upload an image with ratio: 16:3. Upload high quality image if possible.</p>
            <span style="color:red;"><?php echo $error2;?></span>
            <input type="file" name="userfile2" required="true" size="20" />
            <input type="submit" value="Apply" name="Apply" style="margin-top: 30px;">
          </form>
        </div>
      </div>
    </div>
  </div>
