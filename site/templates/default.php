<?php snippet('header') ?>

<article>
  <h1 class="h1"><?= $page->title()->html() ?></h1>
  <div class="text">
    <?= $page->text()->kt() ?>
  </div>
</article>

<?php snippet('footer') ?>