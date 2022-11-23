<figure class="relative not-prose bg-slate-50 p-6 rounded-lg">
  <figcaption class="flex items-center space-x-4">
    <img src="{{ $avatar }}" alt="{{ $name }}" class="flex-none w-14 h-14 rounded-full object-cover" decoding="async">
    <div class="flex-auto">
      <div class="text-base text-doctorchat-gray font-semibold">
        <a href="{{ $url }}" tabindex="0">
          {{ $name }}
        </a>
        <time class="font-normal ml-1 before:content-['•'] before:pr-1" datetime="{{ get_post_time('c', true) }}">
          {{ get_the_date() }}
        </time>
      </div>
      <div class="mt-0.5 text-doctorchat-gray text-sm">{{ $specialization }}</div>
    </div>
  </figcaption>
</figure>
