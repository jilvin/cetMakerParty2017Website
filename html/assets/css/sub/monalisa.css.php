<?php

header("Content-type: text/css; charset: UTF-8");
require("../../../CONSTANTS.php");

?>
@import url('https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Montserrat');

#showcaseMonalisa
{
  left: 0px;
  bottom: 10px;
  position: absolute;
}

body
{
  background-image: url('<?php echo SITE_SERVER_BASE;?>assets/images/sub/showcase/art/monalisa/louvre-mona-lisa-edit1.jpg');
  background-attachment: fixed;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}

#showcaseHeading
{
  font-size: 16px;
  /*background: #cc0000;*/
  background-color: rgba(255, 0, 0, 0.7);
  padding-top: 8px;
  padding-bottom: 9px;
  padding-left: 9px;
  padding-right: 9px;
  color: #FFFFFF;
  margin-right: 0px;
  width: -moz-max-content;
  left: 0px;
  position: absolute;
  bottom: 102px;
  font-family: 'Montserrat', sans-serif;
  /*font-family: 'Raleway', sans-serif;*/
  /*font-family: 'Open Sans', sans-serif;*/
}

#showcaseSubHeading
{
  font-size: 12px;
  /*background: #cc0000;*/
  background-color: rgba(255, 0, 0, 0.7);
  padding-top: 11.3px;
  padding-bottom: 12.3px;
  padding-left: 9px;
  padding-right: 9px;
  color: #FFFFFF;
  margin-right: 0px;
  width: -moz-max-content;
  left: 0px;
  position: absolute;
  bottom: 50px;
  font-family: 'Montserrat', sans-serif;
  /*font-family: 'Raleway', sans-serif;*/
  /*font-family: 'Open Sans', sans-serif;*/
}

#aShowcaseActionButton
{
  font-size: 12px;
  /*background: #cc0000;*/
  background-color: rgba(255, 0, 0, 0.7);
  padding-top: 8px;
  padding-bottom: 9px;
  padding-left: 9px;
  padding-right: 9px;
  color: #FFFFFF;
  margin-right: 0px;
  width: -moz-max-content;
  left: 0px;
  position: absolute;
  bottom: 10px;
  font-family: 'Montserrat', sans-serif;
}

@media screen and (max-width: 320px) and (max-height: 320px)
{
  body
  {
    background-image: url('<?php echo SITE_SERVER_BASE;?>assets/images/sub/showcase/art/monalisa/louvre-mona-lisa-edit2.jpg');
    background-attachment: fixed;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
  }

  #showcaseHeading
  {
    color: #FFFFFF;
  }

  #showcaseSubHeading
  {
    color: #FFFFFF;
  }
}

@media screen and (min-width: 769px) and (min-height: 280px)
{
  body
  {
    background-image: url('<?php echo SITE_SERVER_BASE;?>assets/images/sub/showcase/art/monalisa/louvre-mona-lisa.jpg');
    background-attachment: fixed;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
  }

  #showcaseMonalisa
  {
    bottom: 50vh;
  }

  #showcaseHeading
  {
    color: #ECECEC;
    font-size: 20px;
  }

  #showcaseSubHeading
  {
    color: #ECECEC;
    font-size: 16px;
  }

  #aShowcaseActionButton
  {
    color: #ECECEC;
    font-size: 16px;
  }
}
