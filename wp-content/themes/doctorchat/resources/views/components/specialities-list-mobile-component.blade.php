<div id="mobile-categories" class="block lg:hidden">
  <div class="mobile-categories">
    <nav class="mobile-categories-nav">
      @foreach ($specialities as $speciality)
        <a rel="tag" class="mobile-categories-link {{ $speciality['is_active'] }}" href="{{ $speciality['permalink'] }}">{{ $speciality['name'] }}</a>
      @endforeach
    </nav>
  </div>
  <div class="mobile-categories-backdrop"></div>
</div>
