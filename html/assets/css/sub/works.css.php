<?php

header("Content-type: text/css; charset: UTF-8");
require("../../../CONSTANTS.php");

?>
.o-wrapper {
  position: relative;
  max-width:380px;
  margin-left: auto;
  margin-right: auto;
  margin-top: 50px;
  margin-bottom: 50px;
}

@media screen and (min-width: 1000px)
{
  .o-wrapper
  {
    float: left;
    position: relative;
    max-width:380px;
    margin-left: 50px;
    margin-right: 50px;
    margin-top: 50px;
    margin-bottom: 50px;
  }
}

.c-movie-card {
  position: relative;
  box-shadow: 0 10px 50px rgba(0,0,0,0.19), 0 6px 50px rgba(0,0,0,0.23);
  border-radius:4px;
  padding-bottom:20px;
  background:white;
  /* black angled overlay*/
  &:before {
    content:'';
    position: absolute;
    width: 100%;
    height:120px;
    background: rgba(0,0,0,.42);
    transform:skewY(9deg);
    top:260px;
    z-index: 0;
  }
  &:after {
    content:'';
    position: absolute;
    width: 100%;
    height:80px;
    background: linear-gradient(to bottom, rgba(0,16,31,.3) 40%,rgba(0,0,0,.1) 100%);
    transform:skewY(9deg);
    top:180px;
    z-index: 0;
  }
}

.c-movie-card__btn-cont {
  position: absolute;
  top:40%;
  left:30%;
  z-index:0;
}
.btn--lrg{
  position:absolute;
  background-color: #00101f;
  display:inline-block;
  width: 100px;
  height: 100px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.25), 0 6px 30px rgba(0,0,0,0.29);
  transition:all .4s ease;
  left:-1em;
  &:hover {
    box-shadow: 0 20px 35px rgba(0,0,0,0.29), 0 12px 35px rgba(0,0,0,0.33);
    svg.shopping {
      border:1px solid rgba(255,255,255,.7);
    }
  }
}

svg.shopping {
  width: 35%;
  position: relative;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  padding:20px;
  border:1px solid rgba(255,255,255,.0);
  transition:all .5s ease;
}

.c-movie-card__rating {
  position:absolute;
  background:white;
  font-family: $font-family--primary;
  font-weight: 300;
  font-size: 1.2rem;
  display:inline-block;
  padding:32px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.25), 0 6px 30px rgba(0,0,0,0.29);
  right:-8.25em;
  top:1.75em;
}

.c-movie-card__img {
  position: relative;
  height:350px;
  background-size:280%;
  background-position:75% 20%;
  border-radius:4px 4px 0 0;
  background-image: url("http://s3.foxfilm.com/foxmovies/production/films/104/images/gallery/martian-gallery3-gallery-image.jpg");
  &:after{
    content:'';
    display:block;
    width: 100%;
    height: 20%;
    transform: skewY(-8deg);
    background:white;
    position: absolute;
    z-index:0;
    bottom:-40px;
  }
}

.c-movie-card__content {
  padding-top:2rem;
  position: relative;
  color:#222222;
  background:white;
  z-index: 0;
}
.c-movie-card__title {
  font-family: $font-family--primary;
  font-weight: 400;
  text-align: center;
  margin-bottom: .5rem;
}

.c-movie-card__description {
  width: 85%;
  font-family: $font-family--primary;
  font-weight: 300;
  text-align: center;
  margin:0 auto;
}

.c-icons__arow {
  display:block;
  width: 15%;
  margin:0 auto;
  margin-top: 3rem;
}
