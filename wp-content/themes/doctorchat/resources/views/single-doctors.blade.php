@extends('layouts.app')

@section('content')
    <section class="max-w-5xl mx-auto px-5 py-5 md:py-10">
        <article class="doctor-view">
            <div class="doctor-main">
                <div class="preview">
                    <img src="{{ get_field('avatar') }}" alt="{{ the_title() }} - " />
                </div>
                <div class="caption">
                    <h1 class="name">{{ get_field('prefix', 'options') }} {{ the_title() }}</h1>
                    <h3 class="category">{{ get_field('specialization') }}</h3>
                    <p class="line-with-icon">
                        <span class="icon"><img src="@asset('svgs/map-pin.svg')" /></span>
                        <span class="text">{{ get_field('location') }}</span>
                    </p>
                    <p class="line-with-icon">
                        <span class="icon"> <img src="@asset('svgs/building.svg')" /></span>
                        <span class="text">{{ get_field('workplace') }}</span>
                    </p>
                    <p class="line-with-icon">
                        <span class="icon"><img src="@asset('svgs/language.svg')" /></span>
                        <span class="text">{{ get_field('languages') }}</span>
                    </p>
                    <p class="line-with-icon">
                        <span class="icon"><img src="@asset('svgs/briefcase.svg')" /></span>
                        <span class="text">{{ get_field('experience') . ' ' . get_field('years', 'options') }}</span>
                    </p>
                    <div class="meta">
                        <div class="meta-item">
                            <span><img src="@asset('svgs/message.svg')" /></span>
                            <span>{{ get_field('price_chat') . ' ' . get_field('currency', 'options')}}</span>
                        </div>
                        <div class="meta-item">
                            <span><img src="@asset('svgs/video.svg')" /></span>
                            <span>{{ get_field('price_video') . ' ' . get_field('currency', 'options')}}</span>
                        </div>
                    </div>
                    <button class="action">{{ get_field('book_now', 'options') }}</button>
                </div>
            </div>
            <div class="doctor-view-section doctor-about">
                <h4 class="doctor-view-section-title">{{ get_field('about', 'options') }}</h4>
                <p>{{ get_field('about') }}</p>
            </div>
            @if(get_the_terms( $post->ID, 'symptoms' ))
            <div class="doctor-view-section doctor-symptoms">
                <h4 class="doctor-view-section-title">{{ get_field('symptoms', 'options') }}</h4>
                <div class="symptoms">
                    @foreach(get_the_terms( $post->ID, 'symptoms' ) as $symptom)
                        <div class="symptom">
                            <span class="icon"><img src="{{ get_field('image', $symptom) }}" /></span>
                            <span class="text">{{ $symptom->name }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif


            @if(count(get_reviews()))
            <div class="doctor-view-section doctor-review">
                <h4 class="doctor-view-section-title">{{ get_field('reviews', 'options') }}</h4>
                <div class="relative">
                    <div id="testimonials" class="swiper testimonials-slider">
                        <div class="swiper-wrapper">
                            @foreach (get_reviews() as $review)
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
            </div>
            @endif

            @if(count(get_articles()))
            <div class="doctor-view-section doctor-articles">
                <h4 class="doctor-view-section-title">{{ get_field('published_articles', 'options') }} ({{ count(get_articles()) }})</h4>
                <div class="actual-blogs-list">
                    @foreach (get_articles() as $article)
                      <a class="actual-blog" href="{{ get_permalink($article->ID) }}">
                        <article>
                          <div class="actual-blog-preview">
                            <img src="{{ get_the_post_thumbnail_url($article->ID) }}" alt="{{ $article->post_title }}" />
                          </div>
                          <div class="actual-blog-caption">
                            <h3 class="actual-blog-title">
                              {{ $article->post_title }}
                            </h3>
                            <div class="actual-blog-meta">
                              <span>{{ the_title() }}</span>
                              <span>{{ get_the_date('d M Y', $article->ID)}}</span>
                            </div>
                          </div>
                        </article>
                      </a>
                    @endforeach
                </div>
            </div>
            @endif
        </article>
    </section>
@endsection
