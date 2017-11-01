<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">

  <title>CET Maker Party Inauguration</title>
  <meta name="description" content="Official website of Maker Party - College of Engineering Trivandrum, a joint venture by all the clubs of the college.">
  <meta name="author" content="Webmaster, CET Maker Party">

  <meta property="og:title" content="CET Maker Party" />
  <meta property="og:description" content="Official website of CET Maker Party." />
  <meta property="og:image" content="<?php echo base_url();?>favicon.png" />

  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="<?php echo base_url();?>favicon.ico" type="image/x-icon">

  <!-- Latest compiled and minified CSS - Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/dependencies/launch/reveal.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

  <style>
  section >.parent {

  }

  section > .digital-clock
  {

  }
  </style>
</head>
<body>

  <div class="reveal">
    <div class="slides">
      <section style="padding: 0px;">
        <div id="digitalClockParent" class="parent" style=" display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100vw;">
        <!-- https://codepen.io/iiSeptum/pen/cwHeL -->
        <div class="digital-clock" style="font-family: 'Raleway', sans-serif;
        font-size: 36px;">00:00:00</div>
      </div>
    </section>

    <section style="padding: 0px; height: 100vh;">
      <div style="font-family: 'Pacifico', cursive;
      font-size: 18px;
      position: absolute;
      top: 35px;
      left: 35px;
      ">Maker Party</div>

      <div style="font-family: 'Open Sans', sans-serif;
      font-size: 12px;
      position: absolute;
      top: 65px;
      left: 35px;
      ">College of Engineering Trivandrum</div>

      <div style="font-family: 'Raleway', sans-serif;
      font-size: 18px;
      position: absolute;
      top: 55px;
      right: 35px;
      ">November 2 2017</div>
      <!-- <div>Welcome Speech</div>
      <div>Sebin Francis</div>
      <div>Position</div> -->
      <span class="fragment fade-in">
        <span class="fragment fade-out">
          <div style="font-family: 'Raleway', sans-serif;
          font-size: 28px;
          position: absolute;
          top: 195px;
          left: 35px;
          ">Welcome Speech</div>

          <div style="font-family: 'Raleway', sans-serif;
          font-size: 48px;
          position: absolute;
          top: 285px;
          left: 35px;
          ">Sebin Francis</div>

          <div style="font-family: 'Raleway', sans-serif;
          font-size: 18px;
          position: absolute;
          top: 355px;
          left: 35px;
          ">Maker Party Coordinator</div>

          <!-- <div style="position: absolute;
          width: 360px;
          height: 360px;
          top: 265px;
          right: 35px;">
          <img style="width: 360px;
          height: 360px;"
          src="<?php // echo base_url();?>assets/images/launch/1/amal_narayanan.jpg"></img>
        </div> -->
      </span>
    </span>

    <span class="fragment fade-in">
      <span class="fragment fade-out">
        <div style="font-family: 'Raleway', sans-serif;
        font-size: 28px;
        position: absolute;
        top: 195px;
        left: 35px;
        ">Keynote Address</div>

        <div style="font-family: 'Raleway', sans-serif;
        font-size: 48px;
        position: absolute;
        top: 285px;
        left: 35px;
        ">Amal Narayanan</div>

        <div style="font-family: 'Raleway', sans-serif;
        font-size: 18px;
        position: absolute;
        top: 355px;
        left: 35px;
        ">College Union Chairman</div>

        <div style="position: absolute;
        width: 360px;
        height: 360px;
        top: 265px;
        right: 35px;">
        <img style="width: 360px;
        height: 360px;"
        src="<?php echo base_url();?>assets/images/launch/1/amal_narayanan.jpg"></img>
      </div>
    </span>
  </span>

  <span id="nextIsInaugurationSlide" class="fragment fade-in">
    <div style="font-family: 'Raleway', sans-serif;
    font-size: 28px;
    position: absolute;
    top: 195px;
    left: 35px;
    ">Inauguration Address and E-Inauguration</div>

    <div style="font-family: 'Raleway', sans-serif;
    font-size: 48px;
    position: absolute;
    top: 285px;
    left: 35px;
    ">Prof​. Neena​ Thomas</div>

    <div style="font-family: 'Raleway', sans-serif;
    font-size: 18px;
    position: absolute;
    top: 355px;
    left: 35px;
    ">Dean UG Studies, CET</div>

    <!-- <div style="position: absolute;
    width: 360px;
    height: 360px;
    top: 265px;
    right: 35px;">
    <img style="width: 360px;
    height: 360px;"
    src="<?php // echo base_url();?>assets/images/launch/1/amal_narayanan.jpg"></img>
  </div> -->
</span>
</section>

<?php foreach ($artList as $artList): ?>
  <section>
    <div style="font-family: 'Raleway', sans-serif;
    font-size: 36px;
    padding-bottom: 30px;"><?php echo $artList->artname ?></div>
    <div class="fragment" data-autoslide="1500"><?php echo $artList->artshortdescription ?></div>
  </section>
<?php endforeach ?>

</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript - Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="<?php echo base_url();?>assets/js/dependencies/launch/reveal.js"></script>

<script>

// var stageFlag = 0;

//for keyboard listening before initializing reveal -- start
// document.addEventListener('keypress', function (e) {
//   var key = e.which || e.keyCode;
//   if (key === 13 && stageFlag === 0) { // 13 is enter
//     // code for enter
//     // alert("Enter pressed");
//
//     // mark change to keyboard based slideshow in stage flag
//     stageFlag = 1;
//   }
// });
//for keyboard listening before initializing reveal -- end

$(document).ready(function() {
  clockUpdate();
  setInterval(clockUpdate, 1000);
})

function clockUpdate() {
  var date = new Date();
  function addZero(x) {
    if (x < 10) {
      return x = '0' + x;
    } else {
      return x;
    }
  }

  function twelveHour(x) {
    if (x > 12) {
      return x = x - 12;
    } else if (x == 0) {
      return x = 12;
    } else {
      return x;
    }
  }

  var monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];

var dateObject = new Date();

var dateGetHours = dateObject.getHours();

var h = addZero(twelveHour(dateGetHours));
var m = addZero(dateObject.getMinutes());
var s = addZero(dateObject.getSeconds());
var day = dateObject.getDate();
var mm = dateObject.getMonth();
var year = dateObject.getFullYear();

var ampm;
if(dateGetHours>=12)
{
  ampm = "PM";
}
else
{
  ampm  = "AM";
}

$('.digital-clock').text(year + ' ' + monthNames[mm] + " " + day + " " + h + ':' + m + ':' + s + ' ' + ampm)
}

// initialize Reveal JS
Reveal.initialize({
  width: "100%",
  height: "100%",
  margin: 0,
  minScale: 1,
  maxScale: 1,
  // Transition style
  transition: 'zoom', // none/fade/slide/convex/concave/zoom
  controls: false
});

function stageZero()
{
  Reveal.configure({
    keyboard: {
      13: 'next', // go to the next slide when the ENTER key is pressed
      27: null,
      32: null,
      39: null, // right arrow
      66: null,
      72: null, // h
      75: null, // k
      76: null, // l
      79: null, // o
      190: null
    },
    center: false,
    autoSlideStoppable: false
  });
}

Reveal.addEventListener( 'slidechanged', function( event ) {
  // event.previousSlide, event.currentSlide, event.indexh, event.indexv
  // alert("gets here"+event.indexh+event.indexv);
  if(event.indexh == 0)
  {
    Reveal.configure({
      keyboard: {
        13: 'next', // go to the next slide when the ENTER key is pressed
        27: null,
        32: null,
        39: null, // right arrow
        66: null,
        72: null, // h
        75: null, // k
        76: null, // l
        79: null, // o
        190: null
      }
    });
  }
  else if(event.indexh == 1)
  {
    // alert("gets here");
    Reveal.configure({
      keyboard: {
        13: null, // go to the next slide when the ENTER key is pressed
        27: null,
        32: null,
        39: 'next', // right arrow
        66: null,
        72: null, // h
        75: null, // k
        76: null, // l
        79: null, // o
        190: null
      },
      autoSlide: 0
    });
  }
  else if(event.indexh == 2)
  {
    Reveal.configure({ autoSlide: 5000 });
  }
} );

Reveal.addEventListener( 'fragmentshown', function( event ) {
  // event.fragment = the fragment DOM element
  // alert(event.fragment.id);
  if(event.fragment.id === "nextIsInaugurationSlide")
  {
    Reveal.configure({
      keyboard: {
        13: 'next', // go to the next slide when the ENTER key is pressed
        27: null,
        32: null,
        39: null, // right arrow
        66: null,
        72: null, // h
        75: null, // k
        76: null, // l
        79: null, // o
        190: null
      },
      center: true
    });
  }
} );

stageZero();

</script>

</body>
</html>
