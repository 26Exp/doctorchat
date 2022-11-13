<header class="absolute top-0 left-0 z-20 w-full">
  <a class="brand" href="{{ home_url('/') }}">
    {!! $siteName !!}
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif

  <div class="dc-container">
    <div class="flex items-center justify-between py-8 md:py-16">
      <a href="{{ home_url('/') }}">
        <img class="w-36 xl:w-60" src="@asset('svgs/logo.svg')" alt="Doctorchat Logo" />
      </a>
      @if (has_nav_menu('primary_navigation'))
        <nav class="hidden space-x-12 xl:block" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navigation-link', 'echo' => false]) !!}
        </nav>
      @endif
      <div class="hidden items-center space-x-6 xl:flex">
        <a class="navigation-link" href="#ro">Ro</a>
        <a class="navigation-link" href="#ru">Ru</a>
      </div>
      <button id="mobile-menu-tirgger" class="xl:hidden">
        <img class="w-8" src="@asset('svgs/bars.svg')" alt="Menu" />
      </button>
    </div>
  </div>
</header>

<div id="mobile-menu" class="block xl:hidden">
  <div class="mobile-navigation">
    <nav>
      <div class="mb-9 flex items-end justify-end space-x-3">
        <a class="mobile-navigation-link" href="#ro">Ro</a>
        <a class="mobile-navigation-link !font-normal" href="#ru">Ru</a>
      </div>
      <a class="mobile-navigation-link with-separator" href="#how-it-works">Cum functioneaza</a>
      <a class="mobile-navigation-link with-separator" href="#online-doctors">Doctori Online</a>
      <a class="mobile-navigation-link with-separator" href="#for-doctors">Pentru Doctori</a>
      <a class="mobile-navigation-link with-separator" href="#blog">Blog</a>
    </nav>
  </div>
  <div class="mobile-navigation-backdrop"></div>
</div>
