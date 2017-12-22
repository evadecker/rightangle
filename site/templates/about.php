<?php snippet('nav') ?>

<div class="wrapper">
  <div class="page-title">
    <h1><?php echo $page->title()->html() ?></h1>
  </div>

  <div class="page-content">
    <?php echo $page->background()->kirbytext() ?>
  </div>

  <?php snippet('map') ?>

  <div class="page-content">
    <?php echo $page->beliefs()->kirbytext() ?>
  </div>

  <div class="call-to-action">
    <a href="<?= page('contact')->url() ?>" class="button">Get in touch</a>
    <span class="or">or</span>
    <a href="<?= page('process')->url() ?>" class="button">Learn about my process</a>
  </div>
</div>

<?php snippet('footer') ?>