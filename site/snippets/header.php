<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>
    <?= $site->title() ?> | <?= $page->title() ?>
  </title>
  <?php snippet('meta_information'); ?>

  <?php
    if ($page->content()->visibility()->toBool() == false):
      snippet('robots');
    else:
      print '<meta name="robots" content="noindex" />';
    endif;
  ?>
  <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.svg') ?>">
  <link rel="mask-icon" href="<?= url('favicon.svg') ?>" color="#244130">
  <?= css('assets/css/style.css') ?>
</head>
<body>


  <nav id="sitenav" class="text-primary-800 text-sm top-0 bg-secondary-50 sticky">
    <div class="app-container flex flex-wrap items-center justify-between">
      
      <div class="z-10 w-full sm:w-auto flex flex-wrap items-center justify-between">
        
        <a href="<?= $site->url() ?>" aria-label="Tjikko.studio" class="h-6 w-24 sm:h-9 sm:w-32">
          <span class="block sm:hidden">
            <?= svg('assets/images/logo_medium.svg') ?>
          </span>
          <span class="sm:block hidden">
            <?= svg('assets/images/logo.svg') ?>
          </span>
        </a>
        
        <div class="flex sm:hidden">  
          <button id="hamburger" aria-label="Menu" class="relative h-9 w-9">
            <div alt="Open Nav" class="toggle block h-full w-full">
              <?= svg('assets/images/nav_open.svg') ?>
            </div>
            <div alt="Close Nav" class="toggle hidden h-full w-full">
              <?= svg('assets/images/nav_close.svg') ?>
            </div>
          </button>
        </div>
      </div>
      
      <div class="
        flex flex-wrap items-center
        toggle hidden absolute w-screen h-screen top-0 left-0 bg-secondary-50 flex-col justify-center
        sm:flex sm:relative sm:w-auto sm:h-auto sm:bg-transparent sm: flex-row sm:justify-between">

        <div class="
        flex flex-wrap items-center justify-center
        flex-col space-y-4 flex-grow
        sm:flex-row sm:space-y-0 sm:space-x-6"> 
          <ul class="flex space-x-1 items-center text-secondary-700">
            <?php foreach ($site->children()->listed() as $item): ?>
              <li class="block sm:inline-block">
                <a 
                  class="nav-item m-0 <?php e($item->isOpen(), 'is-active') ?>"
                  href="<?= $item->url() ?>"
                  aria-label="<?= $item->title()->html() ?>" >
                  <?= $item->title()->html() ?>
                </a>
              </li>
            <?php endforeach ?>
          </ul>
          <?= safeContact( $pages->find('a-propos')->Email(), "mailto", "Nous contacter", 'class="btn btn-secondary"' ) ?>
        </div>
        
        <footer class="app-container text-sm leading-6 text-gray-500 flex flex-col items-center sm:hidden">
          <?= safeContact( $pages->find('a-propos')->Email() ) ?>
          <?= safeContact( $pages->find('a-propos')->Phone(), "tel" ) ?>
        </footer>
      </div>
    </div>
  </nav> 





