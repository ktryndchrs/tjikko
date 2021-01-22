<article class="">
  <a href="<?= $article->url() ?>">
    <header>
      <figure class="w-full overflow-hidden">
        <img 
          class="object-cover w-full" loading="lazy"
          src=<?= ($cover = $article->cover()->toFile()) ? $cover->url() : null ?>>
      </figure>
      <h2 class="text-2xl mt-2"><?= $article->title() ?></h2>
    </header>
    <?php if (($excerpt ?? true) !== false): ?>
    <h3 class="mt-0 leading-loose text-base font-light">
      <?= ($exerp = $article->exerp())->isNotEmpty() ? $exerp : $article->text()->toBlocks()->excerpt(140) ?>
    </h3>
    <time class="text-sm uppercase tracking-wide font-medium text-gray-500" datetime="<?= $page->date('c') ?>"><?= $article->date()->toDate('j F Y') ?></time>
    <?php endif ?>
  </a>
</article>
