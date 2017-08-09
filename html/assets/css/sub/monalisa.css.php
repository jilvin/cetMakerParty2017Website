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
  font-size: 14px;
  /*background: #cc0000;*/
  /*background-color: rgba(255, 0, 0, 0.9);*/
  color: rgba(0, 0, 0, 0.4);
  background-color: rgba(255, 255, 255, 0.9);
  padding-top: 8px;
  padding-bottom: 9px;
  padding-left: 9px;
  padding-right: 9px;
  /*color: #FFFFFF;*/
  margin-right: 0px;
  width: intrinsic;           /* Safari/WebKit uses a non-standard name */
  width: -moz-max-content;    /* Firefox/Gecko */
  width: -webkit-max-content;
  left: 0px;
  position: absolute;
  bottom: 102px;
  /*font-family: 'Montserrat', sans-serif;*/
  font-family: 'Raleway', sans-serif;
  /*font-family: 'Open Sans', sans-serif;*/
}

#showcaseSubHeading
{
  font-size: 12px;
  /*background: #cc0000;*/
  /*background-color: rgba(255, 0, 0, 0.9);*/
  color: rgba(0, 0, 0, 0.4);
  background-color: rgba(255, 255, 255, 0.9);
  padding-top: 11.3px;
  padding-bottom: 12.3px;
  padding-left: 9px;
  padding-right: 9px;
  /*color: #FFFFFF;*/
  margin-right: 0px;
  width: intrinsic;           /* Safari/WebKit uses a non-standard name */
  width: -moz-max-content;    /* Firefox/Gecko */
  width: -webkit-max-content;
  left: 0px;
  position: absolute;
  bottom: 50px;
  /*font-family: 'Montserrat', sans-serif;*/
  font-family: 'Raleway', sans-serif;
  /*font-family: 'Open Sans', sans-serif;*/
}

#aShowcaseActionButton
{
  font-size: 12px;
  /*background: #cc0000;*/
  /*background-color: rgba(255, 0, 0, 0.9);*/
  color: rgba(0, 0, 0, 0.4);
  background-color: rgba(255, 255, 255, 0.9);
  padding-top: 8px;
  padding-bottom: 9px;
  padding-left: 9px;
  padding-right: 9px;
  /*color: #FFFFFF;*/
  margin-right: 0px;
  width: intrinsic;           /* Safari/WebKit uses a non-standard name */
  width: -moz-max-content;    /* Firefox/Gecko */
  width: -webkit-max-content;
  left: 0px;
  position: absolute;
  bottom: 10px;
  /*font-family: 'Montserrat', sans-serif;*/
  font-family: 'Raleway', sans-serif;
  text-decoration: underline;
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

  #showcaseMonalisa
  {
    bottom: -10px;
  }

  #showcaseHeading
  {
    color: #FFFFFF;
    font-size: 12px;
    padding-top: 11px;
    padding-bottom: 12px;
    bottom: 43px;
    width: 100vw;
  }

  #showcaseSubHeading
  {
    color: #FFFFFF;
    font-size: 12px;
    bottom: 0px;
  }

  #aShowcaseActionButton
  {
    color: #FFFFFF;
    font-size: 12px;
    left: unset;
    right: -100vw;
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
    color: rgba(0, 0, 0, 0.4);
    font-size: 20px;
  }

  #showcaseSubHeading
  {
    color: rgba(0, 0, 0, 0.4);
    font-size: 16px;
  }

  #aShowcaseActionButton
  {
    color: rgba(0, 0, 0, 0.4);
    font-size: 16px;
  }
}

@media screen and (min-width: 1600px) and (min-height: 900px)
{
  #showcaseHeading
  {
    color: rgba(0, 0, 0, 0.4);
    font-size: 28px;
    bottom: 114px;
  }

  #showcaseSubHeading
  {
    color: rgba(0, 0, 0, 0.4);
    font-size: 20px;
    bottom: 57px;
  }

  #aShowcaseActionButton
  {
    color: rgba(0, 0, 0, 0.4);
    font-size: 20px;
  }
}

@media screen and (min-width: 3000px) and (min-height: 1800px)
{
  #showcaseHeading
  {
    color: #ECECEC;
    font-size: 36px;
    bottom: 129px;
  }

  #showcaseSubHeading
  {
    color: #ECECEC;
    font-size: 28px;
    bottom: 66px;
  }

  #aShowcaseActionButton
  {
    color: #ECECEC;
    font-size: 28px;
  }
}
