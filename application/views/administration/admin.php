<div class="container">
  <div class="row">
    <div class="col-md-12 wrapper">
      <h1>Admin Dashboard </h1>
      <?php
      echo '<div class="welcome_txt"><p>Welcome <b>'.$userData['first_name'].'</b></p></div>';
      echo '<div class="fb_box" style="margin-top: 30px;">';
      //echo '<p class="image"><img src="'.$userData['picture_url'].'" alt="" width="300" height="220"/></p>';
      //echo '<p><b>Facebook ID : </b>' . $userData['oauth_uid'].'</p>';
      echo '<p><b>Name : </b>' . $userData['first_name'].' '.$userData['last_name'].'</p>';
      echo '<p><b>Email : </b>' . $userData['email'].'</p>';
      //if(!empty($userData['level'])){
      // echo '<p><b>Mobile number : </b>'.$mobilenumber.'</p>';
      // echo '<p><b>College name : </b>'.$collegename.'</p>';
      // echo '<p><b>Current level : </b>'.$level.'</p>';
      //}
      //if(!empty($userData['levelcheckintime'])){
      // echo '<p><b>Current level check in time : </b>'.$levelcheckintime.'</p>';
      //}
      //echo '<p><b>Gender : </b>' . $userData['gender'].'</p>';
      //echo '<p><b>Locale : </b>' . $userData['locale'].'</p>';
      //echo '<p><b>FB Profile Link : </b>' . $userData['profile_url'].'</p>';
      // echo '<p><b>Your account is linked with : </b>Facebook</p>';
      echo '<br>';
      if($checkEmptyArtVerificationWaitingListTable != 1)
      {
      echo '<p><a href="'.base_url().'admin/check">Check Applied Arts</a></p>';
      }
      else
      {
        echo '<p>No art waiting for verification.</p>';
      }
      echo '</div>';
      echo '<div style="margin-top: 20px;">';
      echo '<p><a href="'.base_url().'works/mine">My Works</a></p>';
      echo '<p><a href="'.base_url().'experiences/mine">My Experiences</a></p>';
      echo '<p><a href="'.base_url().'user_authentication/logout">Logout</a></p>';
      echo '</div>';
      ?>
    </div>
  </div>
</div>
