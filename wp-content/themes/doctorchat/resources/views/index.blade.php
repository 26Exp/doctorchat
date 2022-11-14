@extends('layouts.app')

@section('content')
  <section class="page-header">
    <div class="dc-container">
      <div class="page-header-content">
        <h1>{{ __('Blog') }}</h1>
      </div>
    </div>
  </section>

  <section class="py-5 md:py-10 lg:py-14">
    <div class="dc-container max-w-7xl">
      <form class="mb-6" action="{{ home_url() }}" method="GET">
        <label for="default-search" class="sr-only mb-2 text-sm font-medium text-gray-900">
          {{ __('Search') }}
        </label>
        <div class="relative">
          <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
            <svg
              aria-hidden="true"
              class="h-5 w-5 text-gray-500"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
              ></path>
            </svg>
          </div>
          <input
            type="search"
            id="default-search"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-4 pl-10 text-sm text-gray-900 focus:border-doctorchat-red focus:outline-none focus:ring-2 focus:ring-doctorchat-red/20"
            placeholder="{{ __('Search') }}"
            name="s"
            required
          />
          <button
            type="submit"
            class="absolute right-2.5 bottom-2.5 rounded-lg bg-doctorchat-red px-4 py-2 text-sm font-medium text-white hover:bg-doctorchat-red/80 focus:outline-none focus:ring-4 focus:ring-blue-300"
          >
            {{ __('Search') }}
          </button>
        </div>
      </form>
      @if (! have_posts())
        <x-alert type="warning">
          {!! __('Sorry, no results were found.', 'sage') !!}
        </x-alert>

        {!! get_search_form(false) !!}
      @endif
      <div class="actual-blogs-list">
        @php($i = 1)
        @while(have_posts()) @php(the_post())
        @include('partials.blog-card', ['i' => $i++])
        @endwhile
      </div>

      <div class="mt-10">
        {!! get_the_posts_navigation() !!}
      </div>
    </div>
  </section>

@endsection
