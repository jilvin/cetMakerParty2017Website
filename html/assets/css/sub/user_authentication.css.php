<?php

header("Content-type: text/css; charset: UTF-8");
require("../../../CONSTANTS.php");

?>
<!-- @import url('https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Montserrat'); -->

#loginSection
{
  max-width: 320px;
  margin: 0 auto;
  position: absolute;
  font-family: Raleway;
}

#loginSection .login-or {
  position: relative;
  font-size: 18px;
  color: #aaa;
  margin-top: 10px;
  margin-bottom: 10px;
  padding-top: 10px;
  padding-bottom: 10px;
}

#loginSection .span-or {
  display: block;
  position: absolute;
  left: 50%;
  top: -2px;
  margin-left: -25px;
  background-color: #fff;
  width: 50px;
  text-align: center;
}

#loginSection .hr-or {
  background-color: #cdcdcd;
  height: 1px;
  margin-top: 0px !important;
  margin-bottom: 0px !important;
}

#loginSection h3 {
  text-align: center;
  /*line-height: 300%;
  font-size: 18px;*/
}

#facebookButton
{
  background-color: #3B5998;
  border-color: #3B5998;
  font-size: 16px;
}

#googleButton
{
  background-color: #EA4335;
  border-color: #EA4335;
  font-size: 16px;
}

#loginSectionHeaderRow
{
  text-align: center;
}

#loginSection h3#headingText
{
  margin-top: 0px;
}

#loginSection h3#loginSectionLineText
{
  margin-top: 27px;
  margin-bottom: 30px;
}

@media screen and (max-width: 300px)
{
  #loginSection h3#loginSectionLineText {
    font-size: 18px;
  }

  #facebookButton
  {
    padding: 4px 6px;
    font-size: 14px;
  }

  #googleButton
  {
    padding: 4px 6px;
    font-size: 14px;
  }
}
