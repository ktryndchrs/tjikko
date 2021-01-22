<?php snippet('header') ?>
  
  <header class="app-container h-40 flex items-center -mb-20">
    <div class="box-border">
      <h1>
        <?= $page->title() ?>
      </h1>
      <div class="h-14"></div>   
    </div>
  </header>

  <main class="app-container">
    <?php snippet('articles') ?>
  </main>

<?php snippet('footer') ?>