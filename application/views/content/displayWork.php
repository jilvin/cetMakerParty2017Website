<?php
switch($work['status'])
{
  case 'w': $work['status'] = "Under development.";
  break;
}
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/sub/displayWork.css.php">
<div id="artDisplayImageRow" class="row" style="width: 100vw; height: 18.75vw; background-image: url('http://idesktopwallpaper.com/wp-content/uploads/2016/03/artwork_hd_wallpapers.jpg');">
  <!-- 16:3 ratio -->
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12 wrapper">
      <h1><?php echo $work['artname']; ?></h1>
      <?php
      echo '<div><p>'.$work['artshortdescription'].'</p></div>';
      echo '<div class="work_content_box" style="margin-top:30px;">';
      echo '<p>'. $work['artlongdescription'].'</p>';
      echo '<div id="workDetails" style="margin-top:30px;">';
      echo '<p><b>Current Status : </b>' .$work['status'].'</p>';
      echo '<p><b>Party ID : </b>' .$work['partyID'].'</p>';
      echo '</div>'
      ?>
    </div>
    <?php if($ownArt == 1)
    {
      ?>
      <a href="<?php echo base_url(); ?>work/<?php echo $work['id']; ?>/addArtist">Add Artist</a>
      <?php
    }
    ?>
  </div>
</div>
</div>
