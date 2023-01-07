@extends('layouts.app')

@section('content')
    <section class="max-w-5xl mx-auto px-5 py-5 md:py-10">
        <article class="doctor-view">
            <div class="doctor-main">
                <div class="preview">
                    <img src="{{ get_field('avatar') }}" alt="{{ the_title() }} - {{ get_field('specialization') }}" />
                </div>
                <div class="caption">
                    <h1 class="name">{{ get_field('prefix', 'options') }} {{ the_title() }}</h1>
                    <h2 class="category">{{ get_field('specialization') }}</h2>
                    <p class="line-with-icon">
                        <span class="icon"><img src="@asset('svgs/map-pin.svg')" alt="location"/></span>
                        <span class="text">{{ get_field('location') }}</span>
                    </p>
                    <p class="line-with-icon">
                        <span class="icon"> <img src="@asset('svgs/building.svg')" alt="workplace"/></span>
                        <span class="text">{{ get_field('workplace') }}</span>
                    </p>
                    <p class="line-with-icon">
                        <span class="icon"><img src="@asset('svgs/language.svg')" alt="language"/></span>
                        <span class="text">{{ get_field('languages') }}</span>
                    </p>
                    <p class="line-with-icon">
                        <span class="icon"><img src="@asset('svgs/briefcase.svg')" alt="experience"/></span>
                        <span class="text">{{ get_field('experience') . ' ' . get_field('years', 'options') }}</span>
                    </p>
{{--                    <div class="meta">--}}
{{--                        <div class="meta-item">--}}
{{--                            <span><img src="@asset('svgs/message.svg')" alt="chat "/></span>--}}
{{--                            @php--}}
{{--                              $curl = curl_init();--}}
{{--                                      curl_setopt_array($curl, array(--}}
{{--                                          CURLOPT_URL => get_field('api_app', 'options') . "/doctors/". (int)get_field('app_id', $post->ID) ."/price",--}}
{{--                                          CURLOPT_RETURNTRANSFER => true,--}}
{{--                                          CURLOPT_ENCODING => "",--}}
{{--                                          CURLOPT_MAXREDIRS => 10,--}}
{{--                                          CURLOPT_TIMEOUT => 30,--}}
{{--                                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,--}}
{{--                                          CURLOPT_CUSTOMREQUEST => "GET",--}}
{{--                                          CURLOPT_HTTPHEADER => array(--}}
{{--                                              "cache-control: max-age=604800",--}}
{{--                                              "content-type: application/json",--}}
{{--                                          ),--}}
{{--                                      ));--}}

{{--                                      $prices = json_decode(curl_exec($curl));--}}
{{--                            @endphp--}}
{{--                            <span>{{ $prices->chat . ' ' . get_field('currency', 'options')}}</span>--}}
{{--                        </div>--}}
{{--                        <div class="meta-item">--}}
{{--                            <span><img src="@asset('svgs/video.svg')" alt="video"/></span>--}}
{{--                            <span>{{ $prices->meet . ' ' . get_field('currency', 'options')}}</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <a rel="nofollow" href="https://app.doctorchat.md/registration-flow/select-doctor?doctor_id={{ get_field('app_id') }}&locale={{ get_field('app_locale', 'options') }}">
                      <button class="action">{{ get_field('book_now', 'options') }}</button>
                    </a>
                </div>
            </div>
            <div class="doctor-view-section doctor-about">
                <h3 class="doctor-view-section-title">{{ get_field('about', 'options') }}</h3>
                <p>{{ get_field('about') }}</p>
              @if(get_field('has_video'))
                <div class="mt-4 aspect-w-16 aspect-h-9">
                  <iframe src="{!! get_field('video_url') !!}" title="{{ get_field('prefix', 'options') }} {{ the_title() }} {{ get_field('specialization') }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              @endif
            </div>
            @if(get_the_terms( $post->ID, 'symptoms' ))
            <div class="doctor-view-section doctor-symptoms">
                <h3 class="doctor-view-section-title">{{ get_field('symptoms', 'options') }}</h3>
                <div class="symptoms">
                    @foreach(get_the_terms( $post->ID, 'symptoms' ) as $symptom)
                        <div class="symptom">
                            <span class="icon"><img src="{{ get_field('image', $symptom) }}" alt="{{ $symptom->name }}"/></span>
                            <span class="text">{{ $symptom->name }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif

            @if(count(get_reviews()))
            <div class="doctor-view-section doctor-review">
                <h3 class="doctor-view-section-title">{{ get_field('reviews', 'options') }}</h3>
                <div class="relative">
                    <div id="doctor-view-testimonials" class="swiper testimonials-slider">
                        <div class="swiper-wrapper">
                            @foreach (get_reviews() as $review)
                                <div class="swiper-slide">
                                    <div class="testimonials-slide">
                                        <h4 class="title">{{ get_field('author', $review->ID) }}</h4>
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
                <h3 class="doctor-view-section-title">{{ get_field('published_articles', 'options') }} ({{ count(get_articles()) }})</h3>
                <div class="actual-blogs-list">
                    @foreach (get_articles() as $article)
                      <a class="actual-blog" href="{{ get_permalink($article->ID) }}">
                        <article>
                          <div class="actual-blog-preview">
                            <img src="{{ get_the_post_thumbnail_url($article->ID) }}" alt="{{ $article->post_title }}" />
                          </div>
                          <div class="actual-blog-caption">
                            <h4 class="actual-blog-title">
                              {{ $article->post_title }}
                            </h4>
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
