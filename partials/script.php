<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();

  $('#banner-slider').slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2000,
  });

  $('#banner-slider-2').slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2000,
    // dots: true,
    fade: true,
  });

  $('#booking-date-picker').slick({
    infinite: false,
    slidesToShow: 5,
    slidesToScroll: 5
  });
</script>