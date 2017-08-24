<div id="container2" class="container-fluid" style="visibility: hidden;">
  <div id="menuRow" class="row">
    <div id="menuLeftColumn" class="col-sm-4 text-center">
      <ul id="menuLeftColumnUL">
        <?php if($worksCount == 0 && $experiencesCount == 0) { ?>
          <li>Start working on your Magnum Opus.</li>
          <?php } else { ?>
        <?php if($worksCount != 0) { ?>
        <li><?php echo $worksCount; ?>+ Works</li>
        <?php } ?>
        <?php if($experiencesCount != 0) { ?>
        <li><?php echo $experiencesCount; ?>+ Experiences</li>
        <?php }} ?>
      </ul>
    </div>
    <div id="menuCenterColumn" class="col-sm-4 text-center">
      <ul id="menuCenterColumnUL">
        <li><a href="<?php echo base_url();?>" class="resumeHenosis">Home</a></li>
        <li><a href="<?php echo base_url();?>works" class="resumeHenosis">Works</a></li>
        <li><a href="<?php echo base_url();?>experiences" class="resumeHenosis">Experiences</a></li>
        <!-- <li><a href="<?php echo base_url();?>past" class="resumeHenosis">Past</a></li> -->
        <!-- <li><a href="<?php echo base_url();?>team" class="resumeHenosis">Team</a></li> -->
        <span id="menuUserSection">
          <li><a href="<?php echo base_url();?>user_authentication" class="resumeHenosis">Login</a></li>
        </span>
        <span id="socialMediaBrandingSection">
          <span id="spanFbBranding"><a target="_blank" title="Follow us on Facebook" href="https://www.facebook.com/cetmakerparty"><i class="fa fa-facebook-official" id="fbBranding"></i></a></span>
          <span id="spanTwitterBranding"><a target="_blank" title="Follow us on Twitter" href="https://www.twitter.com"><i class="fa fa-twitter" id="twitterBranding"></i></a></span>
        </span>
      </ul>
    </div>
    <div id="menuRightColumn" class="col-sm-4 text-center">
      <ul id="menuRightColumnUL">
        <li><?php echo $currentPartyDate; ?></li>
      </ul>
    </div>
  </div>
</div>
