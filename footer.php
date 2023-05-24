<footer id="footer">
    <h1>Footer</h1>
</footer>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        stagePadding: 65,
        responsive:{
           0:{
               items:1
           },
           600:{
               items:2
           },
           1000:{
               items:3
           },
           1200:{
               items:4
           }
        }
      });
    });
  </script>
</body>
</html>
