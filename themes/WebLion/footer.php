


<footer class="p-5 a-color text-center">
  <div class="container">
    <hr class="my-4 bg-warning">
     <!-- Footer Social -->
     <?php dynamic_sidebar('social-nav'); ?>
    <!-- <h1 class="display-6 text-warning">FÖLJ OSS</h1>
    <ul class="social_icon text-center">
      <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
      <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
      <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
    </ul> -->
    <div class="row text-start g-4">
      <div class="col-md">
        <!-- Footer Adress -->
       <?php dynamic_sidebar('footer-1'); ?>
        <!-- <div class="text-warning">
          <h1 class="display-6">ADRESS</h1>
          <p>ITHS <br>
          ITHS-vägen 6 <br> 
          666 66 Stockholm</p>
        </div> -->
      </div>
    <div class="col-md">
      <!-- Footer Work -->
      <?php dynamic_sidebar('footer-2'); ?>
      <!-- <div class="text-warning">
      <h1 class="display-6">JOBBA FÖR OSS</h1>
        <p>Vi rekryterar aktivt. <br> Skriv eller ring till oss!</p>
      </div> -->
    </div>
    <div class="col-md">
      <!-- Footer Weblion -->
      <?php dynamic_sidebar('footer-3'); ?>
      <!-- <div class="text-warning">
        <h1 class="display-6">WebLion</h1>
        <p>DIN WEBBLEVERANTÖR VÄNTAR PÅ DIG</p>
      </div> -->
    </div>
  </div>
  <hr class="my-4 bg-warning">
  <!-- Footer Copyright -->
  <?php dynamic_sidebar('footer-copy'); ?>
  <!-- <p class="text-warning">&copy2022 WebLion AB | All Rights Reserved</p> -->
  <a href="#" class="position-relative bottom-0 text-warning end-0 p-5"><i class="bi bi-arrow-up-circle h1"></i></a>
</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<?php wp_footer(); ?>
</body>
</html>