{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')
  <!-- Hero Section Start -->
  <section
    class="relative h-screen bg-cover bg-center bg-no-repeat pt-[10vh]"
    style="background-image: url({{ asset('images/hero-section.jpg') }})"
  >
    <div class="pointer-events-none absolute top-0 left-0 h-full w-full bg-black/30"></div  >
    <div class="dc-container relative z-10 h-full w-full">
      <div class="flex h-full w-full flex-col justify-center">
        <header class="mb-7 lg:mb-12">
          <h1 class="mb-3 text-6xl font-bold uppercase text-white lg:text-8xl">
            {{ get_field('h1_intro') }}
          </h1>
          <h3 class="text-4xl font-bold text-doctorchat-mint lg:text-6xl">
            {{ get_field('sub_header_text') }}
          </h3>
        </header>
        <main>
          <div class="max-w-4xl pl-5 lg:pl-8">
            <ul class="list-disc space-y-1 text-lg font-normal text-white lg:text-4xl">
              @foreach (get_field('strong_points') as $item)
                <li>{{ $item }}</li>
              @endforeach
            </ul>
          </div>
        </main>
        <footer class="mt-14 flex justify-center lg:mt-16 lg:justify-start">
          <a href="{{ get_field('cta_button_url') }}">
            <button class="btn btn-default">{{ get_field('cta_button') }}</button>
          </a>
        </footer>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->

  <!-- Highlights Section Start -->
  <section class="py-1 lg:py-5">
    <div class="dc-container">
      <div
        class="flex flex-col items-center space-x-0 space-y-5 lg:flex-row lg:items-stretch lg:space-y-0 lg:space-x-8 xl:space-x-11"
      >
        <div class="highlights-block">
          <img class="icon" src="@asset('svgs/check.svg')" alt="Doctori verificați" />
          <h3 class="title">{{ get_field('highlights_1')['heading'] }}</h3>
          <p class="description">{{ get_field('highlights_1')['content'] }}</p>
        </div>
        <div class="highlights-block">
          <img class="icon" src="@asset('svgs/24h.svg')" alt="Rapid și ușor" />
          <h3 class="title">{{ get_field('highlights_2')['heading'] }}</h3>
          <p class="description">{{ get_field('highlights_2')['content'] }}</p>
        </div>
        <div class="highlights-block">
          <img class="icon" src="@asset('svgs/avatar.svg')" alt="Confidențial și anonim" />
          <h3 class="title">{{ get_field('highlights_3')['heading'] }}</h3>
          <p class="description">{{ get_field('highlights_3')['content'] }}</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Highlights Section End -->

  <!-- Separator Start -->
  <div class="flex items-center justify-center px-2 py-14 md:py-28">
    <picture>
      <source media="(min-width: 768px)" srcset="@asset('svgs/section-separator.svg')" />
      <img src="@asset('svgs/section-separator-mobile.svg')" alt="DoctorChat Logo" />
    </picture>
  </div>
  <!-- Separator End -->

  <!-- How it works Section Start -->
  <section class="pb-14 pt-1 lg:pb-36 lg:pt-5">
    <div class="dc-container">
      <header>
        <h2 class="section-title mb-12 md:mb-24 lg:mb-40">{{ get_field('heading') }}</h2>
      </header>
      <main class="how-works-section">
        <div class="how-works-block">
          <div class="caption">
            <h4 class="title">{{ get_field('register')['heading'] }}</h4>
            <p class="description">{!! get_field('register')['content'] !!}</p>
          </div>
          <div class="preview">
            <img src="@asset('images/how-works-1.png')" alt="{{ get_field('register')['heading'] }}" />
          </div>
        </div>
        <div class="how-works-block">
          <div class="caption">
            <h4 class="title">{{ get_field('select_doctor')['heading'] }}</h4>
            <p class="description">{!! get_field('select_doctor')['content'] !!}</p>
          </div>
          <div class="preview">
            <img src="@asset('images/how-works-2.png')" alt="{{ get_field('select_doctor')['heading'] }}" />
          </div>
        </div>
        <div class="how-works-block">
          <div class="caption">
            <h4 class="title">{{ get_field('describe_problem')['heading'] }}</h4>
            <p class="description">{!! get_field('describe_problem')['content'] !!}</p>
          </div>
          <div class="preview">
            <img src=@asset('images/how-works-3.png')" alt="{{ get_field('describe_problem')['heading'] }}" />
          </div>
        </div>
        <div class="how-works-block">
          <div class="caption">
            <h4 class="title">{{ get_field('complete_investigation')['heading'] }}</h4>
            <p class="description">{!! get_field('complete_investigation')['content'] !!}</p>
          </div>
          <div class="preview">
            <img src="@asset('images/how-works-1.png')" alt="{{ get_field('complete_investigation')['heading'] }}" />
          </div>
        </div>
        <div class="how-works-block">
          <div class="caption">
            <h4 class="title">{{ get_field('pay')['heading'] }}</h4>
            <p class="description">{{ get_field('pay')['content'] }}</p>
          </div>
          <div class="preview">
            <img src="@asset('images/how-works-5.png')" alt="{{ get_field('pay')['heading'] }}" />
          </div>
        </div>
      </main>
      <footer class="mt-12 flex justify-center lg:mt-36">
        <a href="{{ get_field('find_you_doctor')['button_url'] }}">
          <button class="btn btn-default">{{ get_field('find_you_doctor')['button_content'] }}</button>
        </a>
      </footer>
    </div>
  </section>
  <!-- How it works Section End -->

  <!-- Banner Start -->
  <section
    class="banner relative bg-cover bg-center bg-no-repeat"
    style="background-image: url('{{ asset('images/banner.jpg') }}')">
    <div class="pointer-events-none absolute top-0 left-0 h-full w-full bg-gradient-to-r from-black/60"></div>
    <div class="dc-container h-full">
      <div class="relative z-10 flex h-full flex-col items-start justify-center py-28 px-4">
        <header>
          <h2 class="mb-4 text-2xl font-bold text-white md:mb-8 md:text-4xl">{{ get_field('be_healthy_heading') }}</h2>
        </header>
        <main>
          <p class="max-w-[610px] text-lg text-white md:text-2xl">
            {{ get_field('be_healthy_content') }}
          </p>
        </main>
      </div>
    </div>
  </section>
  <!-- Banner End -->

  <!-- Testiomians Start -->
  <section class="py-14 pb-24 lg:py-36">
    <div class="dc-container">
      <header>
        <h2 class="section-title mb-10 lg:mb-16">{{ get_field('reviews_heading') }}</h2>
      </header>
      <main>
        <div class="relative">
          <div id="testimonials" class="swiper testimonials-slider">
            <div class="swiper-wrapper">
              @foreach(get_field('reviews') as $review)
                <div class="swiper-slide">
                  <div class="testimonials-slide">
                    <h3 class="title">{{ get_field('author', $review->ID) }}</h3>
                    <p class="description">{{ get_field('review', $review->ID) }}</p>
                  </div>
                </div>
              @endforeach
            </div>

            <div class="swiper-button-prev">
              <img src="@asset('svgs/arrow-left.svg')" alt="Previous Slide" />
            </div>
            <div class="swiper-button-next">
              <img src="@asset('svgs/arrow-right.svg')" alt="Next Slide" />
            </div>
          </div>
        </div>
      </main>
    </div>
  </section>
  <!-- Testiomians End -->

  <!-- Banner Start -->
  <section class="banner banner-with-bg relative bg-[#92D4D2]/50 bg-cover bg-center bg-no-repeat">
    <div class="dc-container h-full">
      <div
        class="flex h-full flex-col items-start justify-center py-28 px-4 md:items-center md:text-center"
      >
        <header>
          <h2 class="mb-9 text-4xl font-bold text-doctorchat-red md:mb-8 md:text-7xl">
            {{ get_field('informed_heading') }}
          </h2>
        </header>
        <main>
          <p class="mx-auto max-w-3xl text-doctorchat-gray md:text-2xl">
            {{ get_field('informed_content') }}
          </p>
        </main>
      </div>
    </div>
  </section>
  <!-- Banner End -->

  <!-- Blogs Start -->
  <section>
    <div class="blogs-list">

      @foreach(get_field('blog_posts') as $blog)
        <article class="blog">
          <div class="caption">
            <a href="{{ get_the_permalink($blog['post']->ID) }}">
              <h3 class="title">{{ get_the_title($blog['post']->ID) }}</h3>
            </a>
            <p class="description">{{ $blog['short_description'] }}</p>
            <button class="btn btn-small">{{__('Read more')}}</button>
          </div>
          <div class="preview">
            <img src="{{ $blog['image'] }}" alt="{{ get_the_title($blog['post']->ID) }}" />
          </div>
        </article>
      @endforeach
    </div>
  </section>
  <!-- Blogs End -->

  <!-- Separator Start -->
  <div class="flex items-center justify-center px-2 py-14 md:py-28">
    <picture>
      <source media="(min-width: 768px)" srcset="@asset('svgs/section-separator.svg')" />
      <img src="@asset('svgs/section-separator-mobile.svg')" alt="DoctorChat Logo" />
    </picture>
  </div>
  <!-- Separator End -->
@endsection
