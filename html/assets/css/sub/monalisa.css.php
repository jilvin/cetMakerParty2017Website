<?php

header("Content-type: text/css; charset: UTF-8");
require("../../../CONSTANTS.php");

?>
body
{
  background-image: url('<?php echo SITE_SERVER_BASE;?>assets/images/sub/showcase/art/monalisa/louvre-mona-lisa-edit1.jpg');
  background-attachment: fixed;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
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
}