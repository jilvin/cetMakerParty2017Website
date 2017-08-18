<?php
if (!empty($this->session->userdata['userData']['id'])){
  $checkvalueadditional = $model_obj->returnCheckValueAdditional($this->session->userdata['userData']['id']);

  if($checkvalueadditional == '0'){
    redirect('more_details');
  }
}
?>
  <?php
  if(!empty($authUrlf) && !empty($authUrlg))
  {
    // echo '<div id="loginrow" class="row">
    // <div class="col-md-6">
    // <a href="'.$authUrlf.'" class="resumeHenosis">
    // <img id="flogin" class="img-responsive" src="'.base_url().'assets/images/flogin.png" alt=""/>
    // </a>
    // </div>
    // <div class="col-md-6">
    // <a href="'.$authUrlg.'" class="resumeHenosis">
    // <img id="glogin" class="img-responsive" src="'.base_url().'assets/images/glogin.png" alt=""/>
    // </a>
    // </div>
    // </div>';
    echo '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/css/sub/user_authentication.css.php">
    <div id="loginSection">
    <div id="loginSectionRow" class="row">
    <div id="loginSectionHeaderRow">
      <h3 id="headingText"><a href="'.base_url().'" style="text-decoration: none;">Maker Party</a></h3>
    </div>
      <h3 id="loginSectionLineText">Sign in to manage your art.</h3>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a id="facebookButton" href="'.$authUrlf.'" class="btn btn-lg btn-primary btn-block">Facebook</a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a id="googleButton" href="'.$authUrlg.'" class="btn btn-lg btn-info btn-block">Google</a>
        </div>
      </div>
          </div>
        <script src="'.base_url().'assets/js/sub/user_authentication.js" defer></script>';

      // echo '<div class="login-or">
      //   <hr class="hr-or">
      //   <span class="span-or">or</span>
      // </div>
      //
      // <form role="form">
      //   <div class="form-group">
      //     <label for="inputUsernameEmail">Username or email</label>
      //     <input type="text" class="form-control" id="inputUsernameEmail">
      //   </div>
      //   <div class="form-group">
      //     <a class="pull-right" href="#">Forgot password?</a>
      //     <label for="inputPassword">Password</label>
      //     <input type="password" class="form-control" id="inputPassword">
      //   </div>
      //   <div class="checkbox pull-right">
      //     <label>
      //       <input type="checkbox">
      //       Remember me </label>
      //   </div>
      //   <button type="submit" class="btn btn btn-primary">
      //     Log In
      //   </button>
      // </form>';

    // echo '</div>';
  }
  else if(empty($authUrlf))
  {

    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12 wrapper">
          <h1>Profile Details </h1>
          <?php
          echo '<div class="welcome_txt"><p>Welcome <b>'.$userData['first_name'].'</b></p></div>';
          echo '<div class="fb_box" style="margin-top:30px;">';
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
          echo '<p><a href="'.base_url().'user_authentication/works/mine">My Works</a></p>';
          echo '<p><a href="'.base_url().'user_authentication/experiences/mine">My Experiences</a></p>';
          echo '<p><a href="'.base_url().'user_authentication/logout">Logout</a></p>';
          echo '</div>';
          ?>
        </div>
      </div>
    </div>
    <?php }
    else if(empty($authUrlg))
    {
      echo '<div class="container">';
      echo '<div class="row">';
      echo '<div class="col-md-12 wrapper">' ;
      echo '<h1>Profile Details </h1>';
      echo '<div class="welcome_txt">Welcome <b>'.$userData['first_name'].'</b></div>';
      echo '<div class="google_box" style="margin-top:30px;">';
      //echo '<p><b>Google ID : </b>' . $userData['oauth_uid'].'</p>';
      echo '<p><b>Name : </b>' . $userData['first_name'].' '.$userData['last_name'].'</p>';
      echo '<p><b>Email : </b>' . $userData['email'].'</p>';
      // echo '<p><b>Mobile number : </b>'.$mobilenumber.'</p>';
      // echo '<p><b>College name : </b>'.$collegename.'</p>';
      // echo '<p><b>Current level : </b>'.$level.'</p>';
      //}
      //if(!empty($userData['levelcheckintime'])){
      // echo '<p><b>Current level check in time : </b>'.$levelcheckintime.'</p>';
      //echo '<p><b>Google+ Link : </b>' . $userData['profile_url'].'</p>';
      // echo '<p><b>Your account is linked with : </b>Google</p>';
      echo '<br>';
      echo '<p><a href="'.base_url().'user_authentication/works/mine">My Works</a></p>';
      echo '<p><a href="'.base_url().'user_authentication/experiences/mine">My Experiences</a></p>';
      echo '<p><a href="'.base_url().'user_authentication/logout">Logout</a></p>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
    }?>
