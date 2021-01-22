<ul class="grid gap-4 md:grid-cols-2 md:gap-8">
  <?php foreach ($articles as $article): ?>
    <li class="inline-block">
      <?php snippet('article', ['article' => $article]) ?>
    </li>
  <?php endforeach ?>
</ul>