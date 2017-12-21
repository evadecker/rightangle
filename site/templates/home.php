<?php snippet('header') ?>

<main>
  <div class="intro">
    <?php echo $page->intro()->html() ?>
  </div>

  <div class="photoswipe gallery" itemscope itemtype="http://schema.org/ImageGallery">
    <?php foreach (page('projects')->children()->files()->filterBy('type', 'image') as $image): ?>
      <?php $pic = $image->resize(1000, null, 90); ?>
      <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <a href="<?= $pic->url(); ?>" itemprop="contentUrl" data-size="<?= $pic->width(); ?>x<?= $pic->height(); ?>"
          title="<?= $image->text()->value(); ?>">
          <img src="<?= $image->crop(400, 300)->url(); ?>" itemprop="thumbnail" alt="<?= $page->title()->value() ?> <?= $image->text()->value(); ?>" class="img-responsive"/>
        </a>
        <figcaption itemprop="caption description"><?= $image->text()->kirbytext() ?></figcaption>
      </figure>

    <?php endforeach; ?>
  </div>

</main>

<?php snippet('footer') ?>
