<div class="max-w-4xl mx-auto my-8">
    <article @php(post_class('prose mx-auto px-5 prose-doctorchat-mint md:px-0 md:prose-xl'))>
        <header>
            <img src="{{ get_the_post_thumbnail_url(get_the_ID(), 'full') }}" alt="{{ get_the_title() }}" />
            <h1 class="entry-title">
                {!! $title !!}
            </h1>

            @include('partials.entry-meta')
        </header>

        <div class="entry-content">
            @php(the_content())
        </div>

        <div class="entry-meta">
            <figure class="relative flex flex-col-reverse not-prose">
                <blockquote class="mt-4 text-doctorchat-gray ">
                    <p class="text-base font-normal">Diagnosticul, tratamentul și prevenirea bolilor de rinichi.
                        Infectii urinare: pielonefrite, uretrite, cistite.
                        Litiaza renală (formare de calculi renali ce se pot localiza în rinichi, uretere, vezică).
                        Nefropatie gutoasa, nefropatie hipertensiva, nefropatie diabetica.
                        Boala cronica de rinichi, boli chistice ale rinichiului, glomerulonefrite.</p>
                </blockquote>
                <figcaption class="flex items-center space-x-4">
                    <img src="https://tailwindcss.com/_next/static/media/ryan-florence.3af9c9d9.jpg" alt=""
                        class="flex-none w-14 h-14 rounded-full object-cover" loading="lazy" decoding="async">
                    <div class="flex-auto">
                        <div class="text-base text-doctorchat-gray font-semibold">
                            <a href="https://twitter.com/ryanflorence/status/1187951799442886656" tabindex="0">
                                {{ __('About', 'sage') }} <span class="absolute inset-0"></span>{{ get_the_author() }}
                            </a>
                        </div>
                    </div>
                </figcaption>
            </figure>
        </div>

        <footer>
            {!! wp_link_pages([
                'echo' => 0,
                'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'),
                'after' => '</p></nav>',
            ]) !!}
        </footer>

        @php(comments_template())
    </article>
</div>
