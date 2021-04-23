<footer class="app-container pt-16 text-sm leading-6 text-gray-500 flex items-stretch sm:justify-between sm:space-x-2 flex-col sm:flex-row">
    <div class="text-left">
      <div> <?= safeContact( $pages->find('a-propos')->Email() ) ?> </div>
      <div class="mt-2 sm:mt-0">
        <?= safeContact( $pages->find('a-propos')->Phone(), "tel" ) ?>
        <?php
          $links =  $pages->find('a-propos')->social()->toStructure();
          if ($links->isNotEmpty()):
        ?>
          <ul class="mt-2 sm:mt-0 flex space-x-1 items-center text-gray-600">
            <?php foreach ( $links as $link ): ?>
              <li>
                <a href="<?= $link->url() ?>" target="_blank" aria-label="Tjikko on <?php $link->platform() ?>" class="block box-content h-5 w-5 p-1.5 md:p-1">
                  <?= svg('assets/images/'.$link->platform().'.svg') ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
    <div class="text:left sm:text-right mt-6 sm:mt-0">
      <div class="mt-6 sm:mt-0"> <?= $pages->find('a-propos')->footerR()->kb()->kt()->inline() ?> </div>
      <div id="wcb" class="carbonbadge mt-2 sm:mt-0"></div>
    </div>
  </footer>
  
  <!-- 
    Script de monitoring par Cabin
    Service: https://withcabin.com
   -->
  <script async defer src="https://scripts.withcabin.com/hello.js"></script>

  
  <!-- 
    CO2 Monitoring
   -->
  <script src="https://unpkg.com/website-carbon-badges@1.1.1/b.min.js" defer></script>
  <!-- 
    Script de base de navigation mobile
  -->
  <script type="text/javascript">
    document.getElementById("hamburger").onclick = function toggleMenu() {
      const navToggle = document.querySelectorAll("#sitenav .toggle");
      for (let i = 0; i < navToggle.length; i++) {
        navToggle.item(i).classList.toggle("hidden");
      }
    };
  </script>
</body>
</html>