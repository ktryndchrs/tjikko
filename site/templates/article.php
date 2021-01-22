<?php snippet('header') ?>
  
  <header class="article article-header mt-8 xxs:mt-5 xs:mt-4 sm:mt-0">
    <div class="app-container">
      <div class="inner-container">
        <h1> <?= $page->title() ?> </h1>
        <p class="my-1"> 
          <?= ($exerp = $page->exerp())->isNotEmpty() ? $exerp : $page->text()->toBlocks()->excerpt(140) ?>
        </p>
        <time class="text-sm uppercase tracking-wide font-medium  text-gray-500" datetime="<?= $page->date('c') ?>"><?= $page->date()->toDate('j F Y') ?></time>
      </div>
    </div>
    <div class="outside-container overflow-hidden w-full">
      <img 
        class="object-cover w-full h-1/3vh sm:h-1/2vh" loading="lazy"
        src=<?= ($cover = $page->cover()->toFile()) ? $cover->url() : null ?>>
    </div>
  </header>

  <main class="sm:flex sm:items-center article article-body">
    <div class="app-container">
      <?= $page->text()->toBlocks() ?>
    </div>
  </main>

<?php snippet('footer') ?>