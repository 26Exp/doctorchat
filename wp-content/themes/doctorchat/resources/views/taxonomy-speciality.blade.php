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
              <x-specialities-list-component />
                <div class="doctors-grid">
                    @if (!have_posts())
                        <div class="alert alert-warning">
                            {{ __('Sorry, no results were found.', 'sage') }}
                        </div>
                    @endif

                    @while (have_posts()) @php the_post() @endphp
                        <x-doctor-card-component :post="get_post()" />
                    @endwhile
                </div>
            </div>
        </div>
    </section>
    <x-specialities-list-mobile-component />
@endsection
