{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')
<!-- Hero Section Start -->
<div class="hero-section" id="hero-section-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <section class="relative h-screen bg-cover bg-[center_right_25%] bg-no-repeat pt-[10vh] md:bg-center" style="background-image: url({{ asset('images/hero-section.jpg') }})">
                <div class="pointer-events-none absolute top-0 left-0 h-full w-full bg-black/30"></div>
                <div class="dc-container relative z-10 h-full w-full">
                    <div class="flex h-full w-full flex-col justify-center">
                        <header class="mb-7 lg:mb-12">
                            <h1 class="mb-3 text-5xl font-bold uppercase text-white lg:text-8xl">
                                {{ get_field('h1_intro') }}
                            </h1>
                            <h2 class="text-4xl font-bold text-doctorchat-mint lg:text-6xl">
                                {{ get_field('sub_header_text') }}
                            </h2>
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
                        <footer class="mt-14 flex flex-col justify-center space-y-4 md:flex-row md:space-y-0 md:space-x-5 lg:mt-16 lg:justify-start">
                            <a href="{{ get_field('cta_button_url') }}">
                                <button class="btn btn-default">{{ get_field('cta_button') }}</button>
                            </a>
                            @if (get_field('cta_doctors'))
                            <a href="{{ get_field('cta_doctors_button_url') }}">
                                <button class="btn btn-default btn-outline">{{ get_field('cta_doctors_button') }}</button>
                            </a>
                            @endif
                        </footer>
                    </div>
                </div>
            </section>
        </div>

        @if(get_field('show_hero_2'))
          <div class="swiper-slide">
              <section class="relative h-screen bg-cover bg-[center_right_25%] bg-no-repeat pt-[10vh] md:bg-center" style="background-image: url(https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80)">
                  <div class="pointer-events-none absolute top-0 left-0 h-full w-full bg-black/30"></div>
                  <div class="dc-container relative z-10 h-full w-full">
                      <div class="flex h-full w-full flex-col justify-center">
                          <header class="mb-7 lg:mb-12">
                              <h2 class="mb-3 text-5xl font-bold uppercase text-white lg:text-8xl">
                                {{ get_field('h2_intro_2') }}
                              </h2>
                              <h3 class="text-4xl font-bold text-doctorchat-mint lg:text-6xl">
                                  {{ get_field('sub_header_text_2') }}
                              </h3>
                          </header>
                          <main>
                              <div class="max-w-4xl pl-5 lg:pl-8">
                                  <ul class="list-disc space-y-1 text-lg font-normal text-white lg:text-4xl">
                                      @foreach (get_field('strong_points_2') as $item)
                                      <li>{{ $item }}</li>
                                      @endforeach
                                  </ul>
                              </div>
                          </main>
                          <footer class="mt-14 flex flex-col justify-center space-y-4 md:flex-row md:space-y-0 md:space-x-5 lg:mt-16 lg:justify-start">
                              <a href="{{ get_field('cta_button_url_2') }}">
                                  <button class="btn btn-default">{{ get_field('cta_button_2') }}</button>
                              </a>
                          </footer>
                      </div>
                  </div>
              </section>
          </div>
        @endif

        @if(get_field('show_hero_3'))
        <div class="swiper-slide">
            <section class="relative h-screen bg-cover bg-[center_right_25%] bg-no-repeat pt-[10vh] md:bg-center" style="background-image: url(https://images.unsplash.com/photo-1666214280391-8ff5bd3c0bf0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80)">
                <div class="pointer-events-none absolute top-0 left-0 h-full w-full bg-black/30"></div>
                <div class="dc-container relative z-10 h-full w-full">
                    <div class="flex h-full w-full flex-col justify-center">
                        <header class="mb-7 lg:mb-12">
                            <h2 class="mb-3 text-5xl font-bold uppercase text-white lg:text-8xl">
                              {{ get_field('h2_intro_3') }}
                            </h2>
                            <h3 class="text-4xl font-bold text-doctorchat-mint lg:text-6xl">
                                {{ get_field('sub_header_text_3') }}
                            </h3>
                        </header>
                        <main>
                            <div class="max-w-4xl pl-5 lg:pl-8">
                                <ul class="list-disc space-y-1 text-lg font-normal text-white lg:text-4xl">
                                    @foreach (get_field('strong_points_3') as $item)
                                    <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </main>
                        <footer class="mt-14 flex flex-col justify-center space-y-4 md:flex-row md:space-y-0 md:space-x-5 lg:mt-16 lg:justify-start">
                            <a href="{{ get_field('cta_button_url_3') }}">
                                <button class="btn btn-default">{{ get_field('cta_button_3') }}</button>
                            </a>
                        </footer>
                    </div>
                </div>
            </section>
        </div>
        @endif
    </div>
    <div class="swiper-pagination"></div>
</div>
<!-- Hero Section End -->


<!-- Highlights Section Start -->
<section class="pt-14 pb-1 lg:pt-36 lg:pb-5">
    <div class="dc-container">
        <div class="flex flex-col items-center space-x-0 space-y-5 lg:flex-row lg:items-stretch lg:space-y-0 lg:space-x-8 xl:space-x-11">
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
<div class="flex items-center justify-center px-5 py-14 md:px-8 md:py-28 lg:px-14 xl:px-20">
    <picture>
        <source media="(min-width: 768px)" srcset="@asset('svgs/section-separator.svg')" />
        <img src="@asset('svgs/section-separator-mobile.svg')" alt="DoctorChat Logo" />
    </picture>
</div>
<!-- Separator End -->

<!-- How it works Section Start -->
<section class="pb-14 pt-1 lg:pb-36 lg:pt-5" id="how-it-works">
    <div class="dc-container">
        <header>
            <h2 class="section-title mb-12 md:mb-24 lg:mb-40">{{ get_field('heading') }}</h2>
        </header>
        <main class="how-works-section">
            <div class="how-works-block">
                <div class="caption">
                    <h3 class="title">{{ get_field('register')['heading'] }}</h3>
                    <p class="description">{!! get_field('register')['content'] !!}</p>
                </div>
                <div class="preview">
                    <img src="{{ get_field('register')['image'] }}" alt="{{ get_field('register')['heading'] }}" />
                </div>
            </div>
            <div class="how-works-block">
                <div class="caption">
                    <h3 class="title">{{ get_field('select_doctor')['heading'] }}</h3>
                    <p class="description">{!! get_field('select_doctor')['content'] !!}</p>
                </div>
                <div class="preview">
                    <img src="{{ get_field('select_doctor')['image'] }}" alt="{{ get_field('select_doctor')['heading'] }}" />
                </div>
            </div>
            <div class="how-works-block">
                <div class="caption">
                    <h3 class="title">{{ get_field('describe_problem')['heading'] }}</h3>
                    <p class="description">{!! get_field('describe_problem')['content'] !!}</p>
                </div>
                <div class="preview">
                    <img src="{{ get_field('describe_problem')['image'] }}" alt="{{ get_field('describe_problem')['heading'] }}" />
                </div>
            </div>
            <div class="how-works-block">
                <div class="caption">
                    <h3 class="title">{{ get_field('complete_investigation')['heading'] }}</h3>
                    <p class="description">{!! get_field('complete_investigation')['content'] !!}</p>
                </div>
                <div class="preview">
                    <img src="{{ get_field('complete_investigation')['image'] }}" alt="{{ get_field('complete_investigation')['heading'] }}" />
                </div>
            </div>
            <div class="how-works-block">
                <div class="caption">
                    <h3 class="title">{{ get_field('pay')['heading'] }}</h3>
                    <p class="description">{{ get_field('pay')['content'] }}</p>
                </div>
                <div class="preview">
                    <img src="{{ get_field('pay')['image'] }}" alt="{{ get_field('pay')['heading'] }}" />
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
<section class="banner relative bg-cover bg-[center_right_25%] bg-no-repeat md:bg-center" style="background-image: url('{{ asset('images/banner.jpg') }}')">
    <div class="pointer-events-none absolute top-0 left-0 h-full w-full bg-gradient-to-r from-black/60"></div>
    <div class="dc-container h-full">
        <div class="relative z-10 flex h-full flex-col items-start justify-center py-28 px-4">
            <header>
                <h3 class="mb-4 text-2xl font-bold text-white md:mb-8 md:text-4xl">
                    {{ get_field('be_healthy_heading') }}
                </h3>
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

<!-- Testimonials Start -->
<section class="py-14 pb-24 lg:py-36">
    <div class="dc-container">
        <header>
            <h2 class="section-title mb-10 lg:mb-16">{{ get_field('reviews_heading') }}</h2>
        </header>
        <main>
            <div class="relative">
                <div id="testimonials" class="swiper testimonials-slider">
                    <div class="swiper-wrapper">
                        @foreach (get_field('reviews') as $review)
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
<!-- Testimonials End -->

<!-- Banner Start -->
<section class="banner banner-with-bg relative bg-[#92D4D2]/50 bg-cover bg-center bg-no-repeat">
    <div class="dc-container h-full">
        <div class="flex h-full flex-col items-start justify-center py-28 px-4 md:items-center md:text-center">
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
<section class="py-2 md:py-2 lg:py-8">
    <div class="dc-container max-w-7xl">
        @php
        $args = [
        'post_type' => 'post',
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        ];
        $posts = new WP_Query($args);
        @endphp
        <div class="actual-blogs-list">
            @php($i = 1)
            @while ($posts->have_posts())
            @php($posts->the_post())
            @include('partials.blog-card', ['i' => 2])
            @endwhile

        </div>
    </div>
</section>
<!-- Blogs End -->

<!-- Separator Start -->
<div class="flex items-center justify-center px-5 py-14 md:px-8 md:py-28 lg:px-14 xl:px-20">
    <picture>
        <source media="(min-width: 768px)" srcset="@asset('svgs/section-separator.svg')" />
        <img src="@asset('svgs/section-separator-mobile.svg')" alt="DoctorChat Logo" />
    </picture>
</div>
<!-- Separator End -->
@endsection
