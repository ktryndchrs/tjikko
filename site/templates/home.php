<?php snippet('header') ?>
  
  <header class="app-container h-40 flex items-center">
    <div class="box-border">
      <h1 class="text-2xl xxs:text-3xl xs:font-light sm:text-5xl">
        <?= $page->headline() ?>
      </h1>
      <h2 class="text-base font-normal xxs:text-xl xs:font-light mt-2 leading-normal">
        <?= $page->subtitle() ?>
      </h2>      
    </div>
  </header>

  <main>
    <div class="app-container">
      <?= $page->text()->toBlocks() ?>
    </div>

    <div class="app-container grid xs:grid-cols-2 sm:grid-cols-4 gap-4 xs:gap-8 sm:gap-6 lg:gap-4 xl:gap-2">
      <?php
        $users =  $page->team()->toUsers();
        foreach ( $users as $user ){
      ?>
        <div class="
          flex flex-row space-x-4 items-center
          xs:flex-col xs:space-x-0 xs:items-start
          lg:flex-row lg:space-x-2 lg:items-center">
          <?php if ($user->avatar()): ?>
          <img src="<?= $user->avatar()->url() ?>" loading="lazy"
              alt="<?= $user->firstname() ." ". $user->lasttname(); ?>"
              class="h-16 w-16
                      xs:h-20 xs:w-20 
                      sm:h-18 sm:w-18 rounded-full"/>
          <?php endif; ?>
          <div class="flex-grow flex flex-col">
            <div class="xs:mt-2 text-sm flex-grow">
              <?= $user->firstname(); ?>
              <br  class="hidden xs:hidden sm:block lg:block xl:hidden" />
              <?= $user->lastname(); ?>
            </div>
            <ul class="flex space-x-1 -m-2  items-center mt-2 text-gray-600">
                <?php if ($user->linkedin()->isNotEmpty()): ?>
                  <li>
                    <a href="<?= $user->linkedin() ?>" target="_blank" aria-label="Linkedin" class="block box-content h-5 w-5 p-1.5 md:p-1">
                      <?= svg('assets/images/linkedin.svg') ?>
                    </a>
                  </li>
                <?php endif; ?>
                <?php if ($user->twitter()->isNotEmpty()): ?>
                  <li>
                    <a href="<?= $user->twitter() ?>" target="_blank" aria-label="Twitter" class="block box-content h-5 w-5 p-1.5 md:p-1">
                      <?= svg('assets/images/twitter.svg') ?>
                    </a>
                  </li>
                <?php endif; ?>
                <?php if ($user->angelist()->isNotEmpty()): ?>
                  <li>
                    <a href="<?= $user->angelist() ?>" target="_blank" aria-label="Angel List" class="block box-content h-5 w-5 p-1.5 md:p-1">
                      <?= svg('assets/images/angel.svg') ?>
                    </a
                  </li>
                <?php endif; ?>
            </ul>
          </div>
        </div>

      <?php } ?>
    </div>
  </main>

<?php snippet('footer') ?>