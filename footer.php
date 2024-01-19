</div>
</section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container">
    <div class="copyright-wrap d-md-flex py-4">
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          <h3>NASA GAMING</h3>
          <p>All rights reserved. Designed By: Koukkai</p>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.facebook.com/kook.xks" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/_imkook_/" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>

  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="https://hotrolaptrinh.github.io/js/tech/main.js"></script>

<script>
    $('#menuHeader li a[data]').each(function (){
      console.log($(this).attr('data'));
      if ($(this).attr('data').length > 0 && $(this).attr('data').includes('<?php echo basename($_SERVER["SCRIPT_FILENAME"], '.php');?>')) {
        $(this).parent().addClass('active');
      }
      else{
        $(this).parent().removeClass('active');
      }
    });
    $(document).ready(function() {
        $('.modal select').select2();
        $('select.form-control').select2();
    });

</script>

</body>

</html>