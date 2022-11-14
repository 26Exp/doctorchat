<header class="doctorchat-header top-0 left-0 z-20 w-full bg-doctorchat-mint">
  <div class="dc-container">
    <div class="flex items-center justify-between py-8 md:py-16">
      <a href="{{ home_url('/') }}">
        <img class="w-36 xl:w-60" src="@asset('svgs/logo.svg')" alt="Doctorchat Logo" />
      </a>
      @if (has_nav_menu('primary_navigation'))
        <nav class="hidden xl:block" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navigation', 'echo' => false]) !!}
        </nav>
      @endif
      <div class="hidden items-center space-x-6 xl:flex">
        <a class="navigation-link" href="/">Ro</a>
        <a class="navigation-link" href="/ru">Ru</a>
      </div>
      <button id="mobile-menu-tirgger" class="xl:hidden">
        <img class="w-8" src="@asset('svgs/bars.svg')" alt="Menu" />
      </button>
    </div>
  </div>
</header>

<div id="mobile-menu" class="block xl:hidden">
  <div class="mobile-navigation">
    @if (has_nav_menu('primary_navigation'))
      <nav aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        <div class="mb-9 flex items-end justify-end space-x-3">
          <a class="mobile-navigation-link" href="/">Ro</a>
          <a class="mobile-navigation-link !font-normal" href="/ru">Ru</a>
        </div>
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'mobile-navigation-nav', 'echo' => false]) !!}
      </nav>
    @endif
  </div>
  <div class="mobile-navigation-backdrop"></div>
</div>
