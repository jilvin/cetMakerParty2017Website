<?php
  // switch($status)
  // {
  //   case 'w': $status = "Under development.";
  //   break;
  // }
 ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/sub/displayWork.css.php">
<div id="artDisplayImageRow" class="row" style="width: 100vw; height: 18.75vw; background-image: url('<?php echo base_url(); ?>uploads/images/art/waiting/<?php echo $type2imagefilename; ?>');">
  <!-- 16:3 ratio -->
</div>
<div class="container">
      <div class="row">
        <div class="col-md-12 wrapper">
          <h1><?php echo $artname; ?></h1>
          <?php
          echo '<div><p>'.$artshortdescription.'</p></div>';
          echo '<div class="work_content_box" style="margin-top:30px;">';
          echo '<p>'. $artlongdescription.'</p>';
          echo '<div id="workDetails" style="margin-top:30px;">';
          // echo '<p><b>Current Status : </b>' .$status.'</p>';
          echo '<p><b>Party ID : </b>' .$partyID.'</p>';
          echo '</div>'
          ?>
        </div>
      </div>
    </div>
  </div>
