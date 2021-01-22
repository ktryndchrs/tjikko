<?php
  $alt     = $block->alt();
  $caption = $block->caption();
  $crop    = $block->crop()->isTrue();
  $link    = $block->link();
  $ratio   = $block->ratio()->or('auto');
  $src     = null;

  if ($block->location() == 'web') {
      $src = $block->src();
  } elseif ($image = $block->image()->toFile()) {
      $alt = $alt ?? $image->alt();
      $src = $image->url();
  }
?>

<?php if ($src): ?>
<figure<?= attr(['data-ratio' => $ratio, 'data-crop' => $crop], ' ') ?>>
  <?php if ($link->isNotEmpty()): ?>
  <a class="block overflow-hidden" href="<?= $link->toUrl() ?>">
    <img class="object-cover w-full" src="<?= $src ?>" alt="<?= $alt ?>">
  </a>
  <?php else: ?>
  <div class="overflow-hidden">
    <img class="object-cover w-full" src="<?= $src ?>" alt="<?= $alt ?>">
  </div>
  <?php endif ?>

  <?php if ($caption->isNotEmpty()): ?>
  <figcaption class="inner-container text-sm mt-2 text-gray-500 font-normal">
    <?= $caption ?>
  </figcaption>
  <?php endif ?>
</figure>
<?php endif ?>
