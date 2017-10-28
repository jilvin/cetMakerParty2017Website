<?php
if(!empty($work['status']))
{
  switch($work['status'])
  {
    case 'w': $work['status'] = "Under development.";
    break;
    case 'd': $work['status'] = "Discontinued.";
    break;
  }
}
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/sub/displayWork.css.php">
<div id="artDisplayImageRow" class="row" style="width: 100vw; height: 18.75vw; background-image: url('<?php echo base_url(); ?>uploads/images/art/approved/<?php echo $work['type2imagefilename']; ?>');">
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
      if(!empty($patronClubName))
      {
        echo '<p><b>Patron Club : </b>' .$patronClubName.'</p>';
      }
      echo '<p><b>Party ID : </b>' .$work['partyID'].'</p>';
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
        <a href="<?php echo base_url(); ?>work/<?php echo $work['id']; ?>/addArtist">Add Artist</a>
      </div>
      <?php
    }
    ?>
  </div>
</div>
</div>
