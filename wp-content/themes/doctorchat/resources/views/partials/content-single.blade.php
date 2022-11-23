<div class="max-w-4xl mx-auto my-8">
    <article @php(post_class('prose mx-auto px-5 prose-doctorchat-mint md:px-0 md:prose-xl'))>
        <header>
            <img src="{{ get_the_post_thumbnail_url(get_the_ID(), 'full') }}" alt="{{ get_the_title() }}" />
            <h1 class="entry-title">
                {!! $title !!}
            </h1>
          <x-post-author-entry-meta />
        </header>

        <div class="entry-content">
            @php(the_content())
        </div>

        <x-post-author-card-meta />
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
