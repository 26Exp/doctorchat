@extends('layouts.app')

@section('content')
    <section class="page-header">
        <div class="dc-container">
            <div class="page-header-content">
                <h1 class="!text-4xl md:!text-5xl">{{ single_term_title() }}</h1>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="dc-container">
            <div class="doctors-page">
                <button id="mobile-categories-trigger" class="mobile-categories-trigger lg:hidden">
                    <span>
                        <img src="@asset('svgs/filters.svg')" />
                    </span>
                    <span>Specialitate</span>
                </button>
                <div class="categories hidden lg:block">
                    <nav class="categories-nav">
                        <a class="categories-link" href="#">Pediatrie</a>
                        <a class="categories-link" href="#">Nefrologie</a>
                        <a class="categories-link active" href="#">Psihoterapie</a>
                        <a class="categories-link" href="#">Boli infecțioase</a>
                        <a class="categories-link" href="#">Ginecologie</a>
                        <a class="categories-link" href="#">Farmacologie</a>
                    </nav>
                </div>
                <div class="doctors-grid">
                    <a href="#">
                        <article class="doctor-card">
                            <div class="doctor-card-preview">
                                <img src="https://hips.hearstapps.com/hmg-prod/images/portrait-of-a-happy-young-doctor-in-his-clinic-royalty-free-image-1661432441.jpg?crop=0.66698xw:1xh;center,top&resize=640:*"
                                    alt="Doctor Name" />
                            </div>
                            <div class="doctor-caption">
                                <h3 class="doctor-name">Dr. Oxana Turcu</h3>
                                <h6 class="doctor-category">Pediatru</h6>
                                <div class="doctor-meta">
                                    <div class="doctor-meta-item">
                                        <span>
                                            <img src="@asset('svgs/message.svg')" />
                                        </span>
                                        <span>200 mdl</span>
                                    </div>
                                    <div class="doctor-meta-item">
                                        <span>
                                            <img src="@asset('svgs/video.svg')" />
                                        </span>
                                        <span>320 mdl</span>
                                    </div>
                                </div>
                                <button class="doctor-details-btn">
                                    Află mai multe
                                </button>
                        </article>
                    </a>
                    <a href="#">
                        <article class="doctor-card">
                            <div class="doctor-card-preview">
                                <img src="https://hips.hearstapps.com/hmg-prod/images/portrait-of-a-happy-young-doctor-in-his-clinic-royalty-free-image-1661432441.jpg?crop=0.66698xw:1xh;center,top&resize=640:*"
                                    alt="Doctor Name" />
                            </div>
                            <div class="doctor-caption">
                                <h3 class="doctor-name">Dr. Oxana Turcu</h3>
                                <h6 class="doctor-category">Pediatru</h6>
                                <div class="doctor-meta">
                                    <div class="doctor-meta-item">
                                        <span>
                                            <img src="@asset('svgs/message.svg')" />
                                        </span>
                                        <span>200 mdl</span>
                                    </div>
                                    <div class="doctor-meta-item">
                                        <span>
                                            <img src="@asset('svgs/video.svg')" />
                                        </span>
                                        <span>320 mdl</span>
                                    </div>
                                </div>
                                <button class="doctor-details-btn">
                                    Află mai multe
                                </button>
                        </article>
                    </a>
                    <a href="#">
                        <article class="doctor-card">
                            <div class="doctor-card-preview">
                                <img src="https://hips.hearstapps.com/hmg-prod/images/portrait-of-a-happy-young-doctor-in-his-clinic-royalty-free-image-1661432441.jpg?crop=0.66698xw:1xh;center,top&resize=640:*"
                                    alt="Doctor Name" />
                            </div>
                            <div class="doctor-caption">
                                <h3 class="doctor-name">Dr. Oxana Turcu</h3>
                                <h6 class="doctor-category">Pediatru</h6>
                                <div class="doctor-meta">
                                    <div class="doctor-meta-item">
                                        <span>
                                            <img src="@asset('svgs/message.svg')" />
                                        </span>
                                        <span>200 mdl</span>
                                    </div>
                                    <div class="doctor-meta-item">
                                        <span>
                                            <img src="@asset('svgs/video.svg')" />
                                        </span>
                                        <span>320 mdl</span>
                                    </div>
                                </div>
                                <button class="doctor-details-btn">
                                    Află mai multe
                                </button>
                        </article>
                    </a>
                    <a href="#">
                        <article class="doctor-card">
                            <div class="doctor-card-preview">
                                <img src="https://hips.hearstapps.com/hmg-prod/images/portrait-of-a-happy-young-doctor-in-his-clinic-royalty-free-image-1661432441.jpg?crop=0.66698xw:1xh;center,top&resize=640:*"
                                    alt="Doctor Name" />
                            </div>
                            <div class="doctor-caption">
                                <h3 class="doctor-name">Dr. Oxana Turcu</h3>
                                <h6 class="doctor-category">Pediatru</h6>
                                <div class="doctor-meta">
                                    <div class="doctor-meta-item">
                                        <span>
                                            <img src="@asset('svgs/message.svg')" />
                                        </span>
                                        <span>200 mdl</span>
                                    </div>
                                    <div class="doctor-meta-item">
                                        <span>
                                            <img src="@asset('svgs/video.svg')" />
                                        </span>
                                        <span>320 mdl</span>
                                    </div>
                                </div>
                                <button class="doctor-details-btn">
                                    Află mai multe
                                </button>
                        </article>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div id="mobile-categories" class="block lg:hidden">
        <div class="mobile-categories">
            <nav class="mobile-categories-nav">
                <a class="mobile-categories-link" href="#">Pediatrie</a>
                <a class="mobile-categories-link" href="#">Nefrologie</a>
                <a class="mobile-categories-link active" href="#">Psihoterapie</a>
                <a class="mobile-categories-link" href="#">Boli infecțioase</a>
                <a class="mobile-categories-link" href="#">Ginecologie</a>
                <a class="mobile-categories-link" href="#">Farmacologie</a>
            </nav>
        </div>
        <div class="mobile-categories-backdrop"></div>
    </div>
@endsection
