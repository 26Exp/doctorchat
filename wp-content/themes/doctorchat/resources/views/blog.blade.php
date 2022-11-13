{{--
  Template Name: Blog Template
--}}

@extends('layouts.app')

@section('content')
  <section class="page-header">
    <div class="dc-container">
      <div class="page-header-content">
        <h1>Blog</h1>
      </div>
    </div>
  </section>

  <section class="py-5 md:py-10 lg:py-14">
    <div class="dc-container max-w-7xl">
      <form class="mb-6">
        <label for="default-search" class="sr-only mb-2 text-sm font-medium text-gray-900">
          Search
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
            placeholder="Caută Categorii, Doctori..."
            required
          />
          <button
            type="submit"
            class="absolute right-2.5 bottom-2.5 rounded-lg bg-doctorchat-red px-4 py-2 text-sm font-medium text-white hover:bg-doctorchat-red/80 focus:outline-none focus:ring-4 focus:ring-blue-300"
          >
            Caută
          </button>
        </div>
      </form>
      <div class="actual-blogs-list">
        <a class="actual-blog large" href="#">
          <article>
            <div class="actual-blog-preview">
              <img src="@asset('images/blog-1.png')" alt="Actual Blog Name" />
            </div>
            <div class="actual-blog-caption">
              <span class="atual-blog-cateogry">Category</span>
              <h3 class="actual-blog-title">
                Cinci sfaturi pentru a vă menține sănătatea pe timp de toamnă.
              </h3>
              <div class="actual-blog-meta">
                <span>Ana Ciornii</span>
                <span>6 oct 2022</span>
              </div>
              <p class="actual-blog-description">
                Afară e toamnă. Este momentul propice pentru răspândirea virușilor și răcelilor.
                Iată 5 sfaturi cum poate fi menținută sănătatea toamna.
              </p>
            </div>
          </article>
        </a>
        <a class="actual-blog" href="#">
          <article>
            <div class="actual-blog-preview">
              <img src="@asset('images/blog-2.png')" alt="Actual Blog Name" />
            </div>
            <div class="actual-blog-caption">
              <span class="atual-blog-cateogry">Category</span>
              <h3 class="actual-blog-title">
                Cinci sfaturi pentru a vă menține sănătatea pe timp de toamnă.
              </h3>
              <div class="actual-blog-meta">
                <span>Ana Ciornii</span>
                <span>6 oct 2022</span>
              </div>
              <p class="actual-blog-description">
                Afară e toamnă. Este momentul propice pentru răspândirea virușilor și răcelilor.
                Iată 5 sfaturi cum poate fi menținută sănătatea toamna.
              </p>
            </div>
          </article>
        </a>
        <a class="actual-blog" href="#">
          <article>
            <div class="actual-blog-preview">
              <img src="@asset('images/blog-3.png')" alt="Actual Blog Name" />
            </div>
            <div class="actual-blog-caption">
              <span class="atual-blog-cateogry">Category</span>
              <h3 class="actual-blog-title">
                Cinci sfaturi pentru a vă menține sănătatea pe timp de toamnă.
              </h3>
              <div class="actual-blog-meta">
                <span>Ana Ciornii</span>
                <span>6 oct 2022</span>
              </div>
              <p class="actual-blog-description">
                Afară e toamnă. Este momentul propice pentru răspândirea virușilor și răcelilor.
                Iată 5 sfaturi cum poate fi menținută sănătatea toamna.
              </p>
            </div>
          </article>
        </a>
        <a class="actual-blog" href="#">
          <article>
            <div class="actual-blog-preview">
              <img src="@asset('images/blog-1.png')" alt="Actual Blog Name" />
            </div>
            <div class="actual-blog-caption">
              <span class="atual-blog-cateogry">Category</span>
              <h3 class="actual-blog-title">
                Cinci sfaturi pentru a vă menține sănătatea pe timp de toamnă.
              </h3>
              <div class="actual-blog-meta">
                <span>Ana Ciornii</span>
                <span>6 oct 2022</span>
              </div>
              <p class="actual-blog-description">
                Afară e toamnă. Este momentul propice pentru răspândirea virușilor și răcelilor.
                Iată 5 sfaturi cum poate fi menținută sănătatea toamna.
              </p>
            </div>
          </article>
        </a>
        <a class="actual-blog" href="#">
          <article>
            <div class="actual-blog-preview">
              <img src="@asset('images/blog-2.png')" alt="Actual Blog Name" />
            </div>
            <div class="actual-blog-caption">
              <span class="atual-blog-cateogry">Category</span>
              <h3 class="actual-blog-title">
                Cinci sfaturi pentru a vă menține sănătatea pe timp de toamnă.
              </h3>
              <div class="actual-blog-meta">
                <span>Ana Ciornii</span>
                <span>6 oct 2022</span>
              </div>
              <p class="actual-blog-description">
                Afară e toamnă. Este momentul propice pentru răspândirea virușilor și răcelilor.
                Iată 5 sfaturi cum poate fi menținută sănătatea toamna.
              </p>
            </div>
          </article>
        </a>
        <a class="actual-blog" href="#">
          <article>
            <div class="actual-blog-preview">
              <img src="@asset('images/blog-3.png')" alt="Actual Blog Name" />
            </div>
            <div class="actual-blog-caption">
              <span class="atual-blog-cateogry">Category</span>
              <h3 class="actual-blog-title">
                Cinci sfaturi pentru a vă menține sănătatea pe timp de toamnă.
              </h3>
              <div class="actual-blog-meta">
                <span>Ana Ciornii</span>
                <span>6 oct 2022</span>
              </div>
              <p class="actual-blog-description">
                Afară e toamnă. Este momentul propice pentru răspândirea virușilor și răcelilor.
                Iată 5 sfaturi cum poate fi menținută sănătatea toamna.
              </p>
            </div>
          </article>
        </a>
      </div>
    </div>
  </section>
@endsection
