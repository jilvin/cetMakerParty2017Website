<?php
if(!empty($experience['status']))
{
  switch($experience['status'])
  {
    case 'w': $experience['status'] = "Practicing.";
    break;
  }
}
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/sub/displayWork.css.php">
<div id="artDisplayImageRow" class="row" style="width: 100vw; height: 18.75vw; background-image: url('<?php echo base_url(); ?>uploads/images/art/approved/<?php echo $experience['type2imagefilename']; ?>');">
  <!-- 16:3 ratio -->
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12 wrapper">
      <h1><?php echo $experience['artname']; ?></h1>
      <?php
      echo '<div><p>'.$experience['artshortdescription'].'</p></div>';
      echo '<div class="work_content_box" style="margin-top:30px;">';
      echo '<p>'. $experience['artlongdescription'].'</p>';
      echo '<div id="workDetails" style="margin-top:30px;">';
      echo '<p><b>Current Status : </b>' .$experience['status'].'</p>';
      if(!empty($patronClubName))
      {
        echo '<p><b>Patron Club : </b>' .$patronClubName.'</p>';
      }
      echo '<p><b>Party ID : </b>' .$experience['partyID'].'</p>';
      echo '</div>'
      ?>
    </div>
    <?php if($artists != NULL) { ?>
      <?php $numberOfArtists = sizeof($artists); ?>
      <div style="margin-top: 25px;">
        <?php if($numberOfArtists == 1)
        {
          echo "<span style=\"padding-bottom: 1px; display: inline-block;\"><b>Artist</b></span><br>";
        }
        else
        {
          echo "<span style=\"padding-bottom: 1px; display: inline-block;\"><b>Artists</b></span><br>";
        }
        foreach ($artists as $artist)
        {
          // echo serialize($artist[0]);
          echo "<p style=\"margin-top: 5px; margin-bottom: 5px;\">".$artist[0]->first_name." ".$artist[0]->last_name."</p>";
        } ?>
      </div>
    <?php } ?>
    <?php if($ownArt == 1)
    {
      ?>
      <div style="margin-top: 20px;">
        <a href="<?php echo base_url(); ?>experience/<?php echo $experience['id']; ?>/addArtist">Add Artist</a>
      </div>
      <?php
    }
    ?>
  </div>
</div>
</div>
