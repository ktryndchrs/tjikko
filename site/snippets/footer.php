<footer class="app-container pt-16 text-sm leading-6 text-gray-500 flex items-stretch sm:justify-between sm:space-x-2 flex-col sm:flex-row sm:items-end ">
    <div class="text-left">
      <div> <?= safeContact( $pages->find('a-propos')->Email() ) ?> </div>
      <div class="mt-2 sm:mt-0">
        <?= safeContact( $pages->find('a-propos')->Phone(), "tel" ) ?>
      </div>
      <div class="mt-6 sm:mt-0"> <?= $pages->find('a-propos')->footerL()->kb()->kt()->inline() ?> </div>
    </div>
    <div class="text:left sm:text-right mt-6 sm:mt-0">
      <?= $pages->find('a-propos')->footerR()->kb()->kt()->inline() ?>
      <div id="wcb" class="carbonbadge"></div>
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