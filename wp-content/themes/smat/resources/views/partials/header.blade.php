<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">
      <img src="@asset('images/Logo-smat.png')">
    </a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    <div class="menu-burger">
      <img src="@asset('images/menu-icon.svg')" alt="" onclick="burgerMenu()" id="openMenu">
      <img src="@asset('images/close-menu.svg')" alt="" onclick="burgerMenu()" id="closeMenu" class="close-menu">
      <nav class="burger-nav" id="burger">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>
  </div>
</header>
