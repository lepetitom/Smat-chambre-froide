<footer class="content-info">

  <div class="sidebar">
    <div class="container">
      <h2>Container</h2>
    </div>
  </div>
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
  <script>
    function burgerMenu() {
      var x = document.getElementById("burger");
      var y = document.getElementById("closeMenu");
      var z = document.getElementById("openMenu");
      if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "block";
        z.style.display = "none";
      } else {
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "block";
      }
    }
  </script>

  <script>
    // Slick slider

    $('.slider-line').slick({
      speed: 30000,
      autoplay: true,
      autoplaySpeed: 0,
      cssEase: 'linear',
      slidesToShow: 1,
      slidesToScroll: 1,
      variableWidth: true,
      arrows: false,
    });
    $('.slider-line-2').slick({
      speed: 30000,
      autoplay: true,
      autoplaySpeed: 0,
      cssEase: 'linear',
      slidesToShow: 1,
      slidesToScroll: 1,
      variableWidth: true,
      rtl: true,
      arrows: false,
    });

    $(document).on('mousemove', function(e){
      $('#box').css({
        left:  e.pageX -16,
        top:   e.pageY - 16
      });
    });

  </script>
</footer>
