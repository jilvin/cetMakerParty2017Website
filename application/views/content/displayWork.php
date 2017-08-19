<?php
  switch($status)
  {
    case 'w': $status = "Under development.";
    break;
  }
 ?>
<div class="container">
      <div class="row">
        <div class="col-md-12 wrapper">
          <h1><?php echo $artname; ?></h1>
          <?php
          echo '<div><p>'.$artshortdescription.'</p></div>';
          echo '<div class="work_content_box" style="margin-top:30px;">';
          echo '<p>'. $artlongdescription.'</p>';
          echo '<div id="workDetails" style="margin-top:30px;">';
          echo '<p><b>Current Status : </b>' .$status.'</p>';
          echo '<p><b>Party ID : </b>' .$partyID.'</p>';
          echo '</div>'
          ?>
        </div>
      </div>
    </div>
  </div>
