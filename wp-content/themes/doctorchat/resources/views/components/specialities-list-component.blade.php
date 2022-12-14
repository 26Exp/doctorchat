<button id="mobile-categories-trigger" class="mobile-categories-trigger lg:hidden">
  <span>
    <img src="@asset('svgs/filters.svg')" alt="{{ get_field('specialities', 'options') }} filters"/>
  </span>
  <span>{{ $title }}</span>
</button>

<div class="categories hidden lg:block">
  <header>
    <h2 class="categories-title">{{ get_field('specialities', 'options') }}</h2>
  </header>
  <nav class="categories-nav">
    @foreach ($specialities as $speciality)
      <a rel="tag" class="categories-link {{ $speciality['is_active'] }}" href="{{ $speciality['permalink'] }}">{{ $speciality['name'] }}</a>
    @endforeach
  </nav>
</div>
