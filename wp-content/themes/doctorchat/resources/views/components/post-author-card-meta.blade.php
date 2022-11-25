<div class="entry-meta">
  <figure class="relative flex flex-col-reverse not-prose bg-slate-50 p-6 rounded-lg">
    <blockquote class="mt-4 text-doctorchat-gray">
      <p class="text-base font-normal">{{ $about }}</p>
      <a href="{{ $url }}" rel="author"
         class="mt-4 inline-flex items-center text-sm text-doctorchat-gray py-2 px-10 bg-gray-200 transition-colors hover:bg-gray-300">
        <span>{{ get_field('doctor_profile', 'options') }}</span>
        <span class="ml-2">
          <img class="w-5" src="@asset('svgs/chevron-right.svg')" alt="arrow right" />
        </span>
      </a>
    </blockquote>
    <figcaption class="flex items-center space-x-4">
      <img src="{{ $avatar }}" alt="{{ $name }}"
           class="flex-none w-14 h-14 rounded-full object-cover" loading="lazy" decoding="async">
      <div class="flex-auto">

        <div class="text-base text-doctorchat-gray font-semibold">
          <a href="{{ $url }}" tabindex="0" rel="author">
            {{ $name }}
          </a>
        </div>
        <div class="mt-0.5 text-doctorchat-gray text-sm">{{ $specialization }}</div>
      </div>
    </figcaption>
  </figure>
</div>
