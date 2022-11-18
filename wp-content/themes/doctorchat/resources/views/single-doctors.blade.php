@extends('layouts.app')

@section('content')
    <section class="max-w-5xl mx-auto px-5 py-5 md:py-10">
        <article class="doctor-view">
            <div class="doctor-main">
                <div class="preview">
                    <img
                        src="https://www.pinnaclecare.com/wp-content/uploads/2017/12/bigstock-African-young-doctor-portrait-28825394.jpg" />
                </div>
                <div class="caption">
                    <h1 class="name">Dr. Oxana Turcu</h1>
                    <h3 class="category">Pediatru</h3>
                    <p class="line-with-icon">
                        <span class="icon">
                            <img src="@asset('svgs/map-pin.svg')" />
                        </span>
                        <span class="text">Moldova, Chisinau</span>
                    </p>
                    <p class="line-with-icon">
                        <span class="icon">
                            <img src="@asset('svgs/building.svg')" />
                        </span>
                        <span class="text">MEDPARK</span>
                    </p>
                    <p class="line-with-icon">
                        <span class="icon">
                            <img src="@asset('svgs/language.svg')" />
                        </span>
                        <span class="text">Romina, rusa</span>
                    </p>
                    <p class="line-with-icon">
                        <span class="icon">
                            <img src="@asset('svgs/briefcase.svg')" />
                        </span>
                        <span class="text">8 ani</span>
                    </p>
                    <div class="meta">
                        <div class="meta-item">
                            <span>
                                <img src="@asset('svgs/message.svg')" />
                            </span>
                            <span>120 mdl</span>
                        </div>
                        <div class="meta-item">
                            <span>
                                <img src="@asset('svgs/video.svg')" />
                            </span>
                            <span>200 mdl</span>
                        </div>
                    </div>
                    <button class="action">Programează o consultație</button>
                </div>
            </div>
            <div class="doctor-view-section doctor-about">
                <h4 class="doctor-view-section-title">Despre</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="doctor-view-section doctor-symptoms">
                <h4 class="doctor-view-section-title">Simptome</h4>
                <div class="symptoms">
                    <div class="symptom">
                        <span class="icon"><img src="@asset('svgs/symptoms/example.svg')" /></span>
                        <span>Febra</span>
                    </div>
                    <div class="symptom">
                        <span class="icon"><img src="@asset('svgs/symptoms/example.svg')" /></span>
                        <span>Dureri de cap</span>
                    </div>
                    <div class="symptom">
                        <span class="icon"><img src="@asset('svgs/symptoms/example.svg')" /></span>
                        <span>Dureri in piept</span>
                    </div>
                    <div class="symptom">
                        <span class="icon"><img src="@asset('svgs/symptoms/example.svg')" /></span>
                        <span>Dureri in gat</span>
                    </div>
                </div>
            </div>
            <div class="doctor-view-section doctor-review">
                <h4 class="doctor-view-section-title">Recenzii</h4>
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
            </div>
            <div class="doctor-view-section doctor-articles">
                <h4 class="doctor-view-section-title">Articole publicate</h4>
                <div class="actual-blogs-list">
                    <a class="actual-blog @if ($i == 1) large @endif " href="{{ the_permalink() }}">
                        <article>
                            <div class="actual-blog-preview">
                                <img src="{{ get_the_post_thumbnail_url(get_the_ID(), 'full') }}"
                                    alt="{{ get_the_title() }}" />
                            </div>
                            <div class="actual-blog-caption">
                                <span class="actual-blog-category">{{ get_the_category()[0]->name }}</span>
                                <h3 class="actual-blog-title">
                                    {{ get_the_title() }}
                                </h3>
                                <div class="actual-blog-meta">
                                    <span>{{ get_the_author() }}</span>
                                    <span>{{ get_the_date('d M Y') }}</span>
                                </div>
                                <p class="actual-blog-description">
                                    @if ($i == 1)
                                        {{ wp_trim_words(get_the_content(), 25, '...') }}
                                    @else
                                        {{ wp_trim_words(get_the_content(), 20, '...') }}
                                    @endif
                                </p>
                            </div>
                        </article>
                    </a>
                    <a class="actual-blog @if ($i == 1) large @endif " href="{{ the_permalink() }}">
                        <article>
                            <div class="actual-blog-preview">
                                <img src="{{ get_the_post_thumbnail_url(get_the_ID(), 'full') }}"
                                    alt="{{ get_the_title() }}" />
                            </div>
                            <div class="actual-blog-caption">
                                <span class="actual-blog-category">{{ get_the_category()[0]->name }}</span>
                                <h3 class="actual-blog-title">
                                    {{ get_the_title() }}
                                </h3>
                                <div class="actual-blog-meta">
                                    <span>{{ get_the_author() }}</span>
                                    <span>{{ get_the_date('d M Y') }}</span>
                                </div>
                                <p class="actual-blog-description">
                                    @if ($i == 1)
                                        {{ wp_trim_words(get_the_content(), 25, '...') }}
                                    @else
                                        {{ wp_trim_words(get_the_content(), 20, '...') }}
                                    @endif
                                </p>
                            </div>
                        </article>
                    </a>
                    <a class="actual-blog @if ($i == 1) large @endif " href="{{ the_permalink() }}">
                        <article>
                            <div class="actual-blog-preview">
                                <img src="{{ get_the_post_thumbnail_url(get_the_ID(), 'full') }}"
                                    alt="{{ get_the_title() }}" />
                            </div>
                            <div class="actual-blog-caption">
                                <span class="actual-blog-category">{{ get_the_category()[0]->name }}</span>
                                <h3 class="actual-blog-title">
                                    {{ get_the_title() }}
                                </h3>
                                <div class="actual-blog-meta">
                                    <span>{{ get_the_author() }}</span>
                                    <span>{{ get_the_date('d M Y') }}</span>
                                </div>
                                <p class="actual-blog-description">
                                    @if ($i == 1)
                                        {{ wp_trim_words(get_the_content(), 25, '...') }}
                                    @else
                                        {{ wp_trim_words(get_the_content(), 20, '...') }}
                                    @endif
                                </p>
                            </div>
                        </article>
                    </a>
                </div>
            </div>
        </article>
    </section>
@endsection
