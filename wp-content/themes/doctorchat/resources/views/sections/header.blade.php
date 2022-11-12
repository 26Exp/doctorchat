<header>
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
          <a href="/">
            <img class="w-36 xl:w-60" src="@asset('svgs/logo.svg')" alt="Doctorchat Logo" />
          </a>
          <nav class="hidden space-x-12 xl:block">
            <a class="navigation-link" href="#how-it-works">Cum functioneaza</a>
            <a class="navigation-link" href="#online-doctors">Doctori Online</a>
            <a class="navigation-link" href="#for-doctors">Pentru Doctori</a>
            <a class="navigation-link" href="#blog">Blog</a>
          </nav>
          <div class="hidden items-center space-x-6 xl:flex">
            <a class="navigation-link" href="#ro">Ro</a>
            <a class="navigation-link" href="#ru">Ru</a>
          </div>
          <button class="xl:hidden">
            <img class="w-8" src="@asset('svgs/bars.svg')" alt="Menu" />
          </button>
        </div>
      </div>
</header>
