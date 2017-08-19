<?php foreach ($artList as $artList): ?>
  <div class="row">
    <?php echo $artList->artname ?>
    <?php echo $artList->artshortdescription ?>
    <?php echo $artList->status ?>
  </div><!-- /.row -->
<?php endforeach ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/sub/works.css.php">
<div class="o-wrapper">
  <div class="c-movie-card">
    <div class="c-movie-card__img"></div>
    <div class="c-movie-card__btn-cont">
  </div>
  <div class="c-movie-card__content ">
    <h1 class="c-movie-card__title">The Martian</h1>
    <p class="c-movie-card__description">During a manned mission to Mars, Astronaut Mark Watney (Matt Damon) is presumed dead after a fierce storm and left behind by his crew.
    </p>
  </div>
  <span class="c-icons__arow">

    <svg version="1.1"
    viewBox="0 0 28.6 8">
    <style type="text/css">
    .st0{fill:#E5E5E5;}
    </style>

    <path class="st0" d="M0.4,1.5L14,7.9c0,0,0,0,0,0c0,0,0.1,0,0.1,0c0,0,0,0,0.1,0c0,0,0.1,0,0.1,0c0,0,0,0,0.1,0c0,0,0.1,0,0.1,0
    c0,0,0,0,0.1,0c0,0,0,0,0.1,0c0,0,0,0,0.1,0c0,0,0,0,0,0l13.6-6.5c0.4-0.2,0.5-0.6,0.4-1C28.4,0.2,28.2,0,27.9,0
    c-0.1,0-0.2,0-0.3,0.1L14.3,6.4L1.1,0.1C1,0,0.9,0,0.8,0C0.5,0,0.2,0.2,0.1,0.4C-0.1,0.8,0.1,1.3,0.4,1.5z"/>
  </svg>

</span>
</div>
</div>
