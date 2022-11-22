<button id="mobile-categories-trigger" class="mobile-categories-trigger lg:hidden">
  <span>
    <img src="@asset('svgs/filters.svg')" />
  </span>
  <span>{{ $title }}</span>
</button>

<div class="categories hidden lg:block">
  <header>
    <h4 class="categories-title">Specialitati</h4>
  </header>
  <nav class="categories-nav">
    @foreach ($specialities as $speciality)
    <a class="categories-link {{ $speciality['is_active'] }}" href="{{ $speciality['permalink'] }}">{{ $speciality['name'] }}</a>
    @endforeach
  </nav>
</div>