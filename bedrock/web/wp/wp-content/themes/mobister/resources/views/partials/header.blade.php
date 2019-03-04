<div class="menu-fixo">
  <div class="container">
    <div class="row">
        <div class="col-md-3">
          <a class="logo" href="#">
          </a>
        </div>
        <div class="col-md-9">
          <nav class="nav-primary">
            @if (has_nav_menu('primary_navigation'))
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
          </nav>
        </div>
    </div>
  </div>
</div>

<header class="banner">
  <div class="container">
    <div class="row">
        <div class="col-md-3">
          <a class="logo" href="#">
          </a>
        </div>
        <div class="col-md-9">
          <nav class="nav-primary">
            @if (has_nav_menu('primary_navigation'))
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
          </nav>
        </div>
        <div class="clear"></div>
        <div class="col-md-8">
          <h1 class="top-title"><?php the_field('titulo') ?></h1>
        </div>
    </div>
  </div>
</header>