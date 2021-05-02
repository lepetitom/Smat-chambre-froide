<footer class="content-info">
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
  <script>
    console.log('prout')
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
</footer>
