<header class="doctorchat-header top-0 left-0 z-20 w-full bg-doctorchat-turquoise">
  <div class="dc-container">
    <div class="doctorchat-header-content flex items-center justify-between py-7 md:py-8">
      <a class="-translate-y-1.5" href="{{ home_url('/') }}">
        <img class="w-36 xl:w-60" src="@asset('svgs/logo.svg')" alt="Doctorchat Logo" />
      </a>
      @if (has_nav_menu('primary_navigation'))
      <nav class="hidden xl:block" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navigation', 'echo' => false]) !!}
      </nav>
      @endif

      @if (get_current_blog_id() <> 5)
        <div class="hidden items-center space-x-6 xl:flex">
          <a class="navigation-link" href="/">Ro</a>
          <a class="navigation-link" href="/ru">Ru</a>
        </div>
        @endif
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

<a href="https://app.doctorchat.md/registration-flow/select-doctor?doctor_id={{ get_field('app_id') }}@if(get_current_blog_id() == 2)&locale=ru @endif" rel="nofollow">
  <button id="request-consultation" class="fixed left-1/2 bottom-8 -translate-x-1/2 text-base whitespace-nowrap rounded-full py-4 px-8 bg-doctorchat-red text-white flex items-center justify-center z-20 shadow-lg sm:-translate-x-0 sm:left-auto sm:right-8 md:bottom-10 md:right-12 md:text-lg">
    <span class="flex items-center justify-center pr-3">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
      </svg>
    </span>
    <span class="font-bold">
      {{ get_field('request_consultation', 'options') }}
    </span>
  </button>
</a>
