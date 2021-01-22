<!-- LANG NAV  -->
<ul class="flex space-x-1 items-center text-secondary-700">
<?php
  /* $i = 1;
  $langL = count($kirby->languages());
  foreach($kirby->languages() as $language):
?>
<li>
  <a 
    href="<?= $page->url($language->code()) ?>" 
    hreflang="<?php echo $language->code() ?>"
    class="px-1 py-0.5 rounded-sm hover:bg-secondary-300 hover:text-primary-600
    <?= e($kirby->language() == $language, ' bg-secondary-300 text-primary-600 is-active') ?>">
    <?= ucfirst( html($language->code()) ) ?>
  </a>
</li>
<?php 
  print ($i < $langL ? "<li>/</li>" : "" );
  $i++;
?>
<?php endforeach */ ?>
</ul>